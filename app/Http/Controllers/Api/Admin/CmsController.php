<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use App\Models\CmsPageMeta;
use App\Models\CmsRevision;
use App\Models\CmsSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CmsController extends Controller
{
    /**
     * The section types the admin panel can add to a page.
     *
     * The panel renders this map directly into its "add section" menu and has
     * a matching editor partial for each key, so a type added here without a
     * partial in resources/views/cms/partials/editors will render as an
     * unknown block. Keys must stay in step with those filenames.
     */
    private const SECTION_TYPES = [
        'hero'          => ['label' => 'Hero',          'description' => 'Headline, subtitle and call to action'],
        'steps'         => ['label' => 'Steps',         'description' => 'Numbered process steps'],
        'features'      => ['label' => 'Features',      'description' => 'Feature grid with icons'],
        'stats'         => ['label' => 'Stats',         'description' => 'Headline numbers'],
        'faq'           => ['label' => 'FAQ',           'description' => 'Question and answer list'],
        'pricing'       => ['label' => 'Pricing',       'description' => 'Pricing tiers'],
        'testimonials'  => ['label' => 'Testimonials',  'description' => 'Customer quotes'],
        'text_block'    => ['label' => 'Text Block',    'description' => 'Free rich text'],
        'service_list'  => ['label' => 'Service List',  'description' => 'Linked list of services'],
        'language_list' => ['label' => 'Language List', 'description' => 'Programming or spoken languages'],
    ];

    // ─── Section types ────────────────────────────────────────────────────────

    public function sectionTypes()
    {
        return response()->json(self::SECTION_TYPES);
    }

    // ─── Sections ─────────────────────────────────────────────────────────────

    public function sections(string $page)
    {
        return response()->json([
            'sections' => CmsSection::where('page', $page)
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get()
                ->map(fn (CmsSection $s) => $this->sectionPayload($s)),
        ]);
    }

    public function addSection(Request $request, string $page)
    {
        $validated = $request->validate([
            'type'  => ['required', 'string', 'max:64'],
            'label' => ['nullable', 'string', 'max:255'],
            'data'  => ['nullable', 'array'],
        ]);

        $section = CmsSection::create([
            'page'       => $page,
            'type'       => $validated['type'],
            'label'      => $validated['label'] ?? (self::SECTION_TYPES[$validated['type']]['label'] ?? Str::headline($validated['type'])),
            'data'       => $validated['data'] ?? [],
            'is_active'  => true,
            // Append rather than insert, so adding a section never renumbers
            // the ones already on the page.
            'sort_order' => (int) CmsSection::where('page', $page)->max('sort_order') + 1,
        ]);

        $this->recordRevision($request, $page, 'section.created', "Added {$section->label} section", null, $this->sectionPayload($section));

        return response()->json(['ok' => true, 'section' => $this->sectionPayload($section)], 201);
    }

    public function updateSection(Request $request, int $id)
    {
        $section = CmsSection::findOrFail($id);

        $validated = $request->validate([
            'data'  => ['nullable', 'array'],
            'label' => ['nullable', 'string', 'max:255'],
        ]);

        $before = $this->sectionPayload($section);

        $section->update([
            'data'  => $validated['data'] ?? [],
            'label' => $validated['label'] ?? $section->label,
        ]);

        $this->recordRevision($request, $section->page, 'section.updated', "Updated {$section->label} section", $before, $this->sectionPayload($section->fresh()));

        return response()->json(['ok' => true, 'section' => $this->sectionPayload($section->fresh())]);
    }

    public function toggleSection(Request $request, int $id)
    {
        $section = CmsSection::findOrFail($id);
        $section->update(['is_active' => ! $section->is_active]);

        $state = $section->is_active ? 'Showed' : 'Hid';
        $this->recordRevision($request, $section->page, 'section.toggled', "{$state} {$section->label} section", null, $this->sectionPayload($section));

        return response()->json(['ok' => true, 'is_active' => $section->is_active]);
    }

    public function deleteSection(Request $request, int $id)
    {
        $section = CmsSection::findOrFail($id);
        $before  = $this->sectionPayload($section);
        $page    = $section->page;
        $label   = $section->label;

        $section->delete();

        $this->recordRevision($request, $page, 'section.deleted', "Deleted {$label} section", $before, null);

        return response()->json(['ok' => true]);
    }

    public function reorderSections(Request $request, string $page)
    {
        $validated = $request->validate([
            'ids'   => ['required', 'array'],
            'ids.*' => ['integer'],
        ]);

        // One transaction: a half-applied order would leave the page in an
        // arrangement the editor never asked for.
        DB::transaction(function () use ($validated, $page) {
            foreach ($validated['ids'] as $position => $id) {
                CmsSection::where('page', $page)->where('id', $id)->update(['sort_order' => $position + 1]);
            }
        });

        $this->recordRevision($request, $page, 'sections.reordered', 'Reordered sections', null, ['ids' => $validated['ids']]);

        return response()->json(['ok' => true]);
    }

    // ─── SEO meta ─────────────────────────────────────────────────────────────

    public function meta(string $page)
    {
        $meta = CmsPageMeta::where('page', $page)->first();

        return response()->json([
            'meta' => $meta ? $meta->only([
                'meta_title', 'meta_description', 'keywords', 'canonical_url',
                'og_title', 'og_description', 'og_image', 'robots',
            ]) : (object) [],
        ]);
    }

    public function updateMeta(Request $request, string $page)
    {
        $validated = $request->validate([
            'meta_title'       => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string'],
            'keywords'         => ['nullable', 'string', 'max:255'],
            'canonical_url'    => ['nullable', 'string', 'max:255'],
            'og_title'         => ['nullable', 'string', 'max:255'],
            'og_description'   => ['nullable', 'string'],
            'og_image'         => ['nullable', 'string', 'max:255'],
            'robots'           => ['nullable', 'string', 'max:255'],
        ]);

        $meta = CmsPageMeta::updateOrCreate(['page' => $page], $validated);

        $this->recordRevision($request, $page, 'meta.updated', 'Updated SEO metadata', null, $validated);

        return response()->json(['ok' => true, 'meta' => $meta]);
    }

    // ─── Revisions ────────────────────────────────────────────────────────────

    public function revisions(string $page)
    {
        return response()->json([
            'revisions' => CmsRevision::where('page', $page)
                ->latest('id')
                ->limit(50)
                ->get(['action', 'summary', 'user_name', 'old_data', 'new_data', 'created_at']),
        ]);
    }

    // ─── Dynamic pages ────────────────────────────────────────────────────────

    public function pages()
    {
        return response()->json([
            'pages' => CmsPage::orderBy('name')->get(['slug', 'name', 'is_active']),
        ]);
    }

    public function createPage(Request $request)
    {
        $validated = $request->validate([
            'slug' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
        ]);

        $slug = Str::slug($validated['slug']) ?: Str::slug($validated['name']);

        if (CmsPage::where('slug', $slug)->exists()) {
            return response()->json(['message' => "A page with the slug \"{$slug}\" already exists."], 422);
        }

        $page = CmsPage::create(['slug' => $slug, 'name' => $validated['name'], 'is_active' => true]);

        $this->recordRevision($request, $slug, 'page.created', "Created page {$page->name}", null, $page->only(['slug', 'name', 'is_active']));

        return response()->json(['ok' => true, 'page' => $page->only(['slug', 'name', 'is_active'])], 201);
    }

    public function updatePage(Request $request, string $slug)
    {
        $page = CmsPage::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'name'      => ['nullable', 'string', 'max:255'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $before = $page->only(['slug', 'name', 'is_active']);

        $page->update(array_filter([
            'name'      => $validated['name'] ?? null,
            'is_active' => $validated['is_active'] ?? null,
        ], fn ($v) => $v !== null));

        $this->recordRevision($request, $slug, 'page.updated', "Updated page {$page->name}", $before, $page->only(['slug', 'name', 'is_active']));

        return response()->json(['ok' => true, 'page' => $page->only(['slug', 'name', 'is_active'])]);
    }

    public function deletePage(Request $request, string $slug)
    {
        $page = CmsPage::where('slug', $slug)->firstOrFail();
        $before = $page->only(['slug', 'name', 'is_active']);

        // The page's sections are keyed by slug, not by a foreign key, so
        // they have to go explicitly or they would outlive the page.
        DB::transaction(function () use ($page, $slug) {
            CmsSection::where('page', $slug)->delete();
            CmsPageMeta::where('page', $slug)->delete();
            $page->delete();
        });

        $this->recordRevision($request, $slug, 'page.deleted', "Deleted page {$before['name']}", $before, null);

        return response()->json(['ok' => true]);
    }

    // ─── Helpers ──────────────────────────────────────────────────────────────

    /**
     * The exact shape resources/views/cms/edit.blade.php reads: it indexes
     * id, type, label, data and is_active directly.
     */
    private function sectionPayload(CmsSection $section): array
    {
        return [
            'id'         => $section->id,
            'type'       => $section->type,
            'label'      => $section->label,
            'data'       => $section->data ?? [],
            'is_active'  => (bool) $section->is_active,
            'sort_order' => (int) $section->sort_order,
        ];
    }

    private function recordRevision(Request $request, string $page, string $action, string $summary, ?array $old, ?array $new): void
    {
        $user = $request->user();

        CmsRevision::create([
            'page'      => $page,
            'action'    => $action,
            'summary'   => $summary,
            'user_id'   => $user?->id,
            'user_name' => $user?->name,
            'old_data'  => $old,
            'new_data'  => $new,
        ]);
    }
}
