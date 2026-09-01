<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // A page is addressed by its slug throughout the admin API, and the
        // built-in pages (home, faq, pricing, how-it-works, about) are not
        // rows here — they exist in the panel's own list. Sections and meta
        // therefore key off the slug string rather than a foreign key, so a
        // built-in page can hold content without first being registered.
        Schema::create('cms_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('cms_sections', function (Blueprint $table) {
            $table->id();
            $table->string('page')->index();
            $table->string('type', 64);
            $table->string('label')->nullable();
            $table->json('data')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();

            $table->index(['page', 'sort_order']);
        });

        Schema::create('cms_page_meta', function (Blueprint $table) {
            $table->id();
            $table->string('page')->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('robots')->nullable();
            $table->timestamps();
        });

        // Append-only audit of content changes. old_data/new_data are whole
        // section payloads, so a revision stays readable even after the
        // section it describes has been deleted.
        Schema::create('cms_revisions', function (Blueprint $table) {
            $table->id();
            $table->string('page')->index();
            $table->string('action', 32);
            $table->string('summary')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('user_name')->nullable();
            $table->json('old_data')->nullable();
            $table->json('new_data')->nullable();
            $table->timestamps();

            $table->index(['page', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_revisions');
        Schema::dropIfExists('cms_page_meta');
        Schema::dropIfExists('cms_sections');
        Schema::dropIfExists('cms_pages');
    }
};
