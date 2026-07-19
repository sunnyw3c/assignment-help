<?php

namespace App\Http\Controllers;

class PricingController extends Controller
{
    public function index()
    {
        // Three headline plans. Prices mirror the values already quoted
        // across the site (FAQ + budget calculator) so nothing conflicts.
        $plans = [
            [
                'name' => 'Basic',
                'tagline' => 'High school & introductory college work',
                'price' => 15,
                'unit' => 'per page',
                'icon' => '📄',
                'accent' => 'blue',
                'popular' => false,
                'cta' => 'Start with Basic',
                'features' => [
                    ['text' => 'High school & basic undergrad', 'included' => true],
                    ['text' => 'Standard delivery (3–5+ days)', 'included' => true],
                    ['text' => '100% original, written from scratch', 'included' => true],
                    ['text' => 'Free Turnitin plagiarism report', 'included' => true],
                    ['text' => 'Unlimited free revisions', 'included' => true],
                    ['text' => 'Direct expert chat', 'included' => false],
                ],
            ],
            [
                'name' => 'Standard',
                'tagline' => 'Our most popular choice for college & degree coursework',
                'price' => 20,
                'unit' => 'per page',
                'icon' => '⭐',
                'accent' => 'indigo',
                'popular' => true,
                'cta' => 'Choose Standard',
                'features' => [
                    ['text' => 'Everything in Basic', 'included' => true],
                    ['text' => 'Undergraduate & master\'s level', 'included' => true],
                    ['text' => 'Fast delivery (1–3 days)', 'included' => true],
                    ['text' => 'Direct chat with your expert', 'included' => true],
                    ['text' => 'Free plagiarism report & proofreading', 'included' => true],
                    ['text' => 'Priority expert matching', 'included' => true],
                ],
            ],
            [
                'name' => 'Premium',
                'tagline' => 'Top-tier PhD experts for advanced research & dissertations',
                'price' => 30,
                'unit' => 'per page',
                'icon' => '👑',
                'accent' => 'purple',
                'popular' => false,
                'cta' => 'Go Premium',
                'features' => [
                    ['text' => 'Everything in Standard', 'included' => true],
                    ['text' => 'Master\'s & PhD doctoral level', 'included' => true],
                    ['text' => 'Express delivery (24–48 hours)', 'included' => true],
                    ['text' => 'Top 1% subject-matter experts', 'included' => true],
                    ['text' => 'Dedicated PhD-level quality audit', 'included' => true],
                    ['text' => 'Priority 24/7 VIP support line', 'included' => true],
                ],
            ],
        ];

        // Per-page starting rates by academic level (mirrors budget-calculator).
        $academicLevels = [
            ['level' => 'High School', 'price' => 15, 'icon' => '🎒', 'desc' => 'Essays, homework & basic assignments'],
            ['level' => 'Undergraduate', 'price' => 20, 'icon' => '🎓', 'desc' => 'College coursework & term papers'],
            ['level' => "Master's", 'price' => 30, 'icon' => '📚', 'desc' => 'Advanced research & dissertations'],
            ['level' => 'PhD / Doctoral', 'price' => 45, 'icon' => '🔬', 'desc' => 'Complex theses & publications'],
        ];

        // Deadline pricing tiers (how urgency affects price).
        $deadlines = [
            ['label' => 'Long deadline', 'window' => '7+ days', 'modifier' => 'Best price', 'icon' => '🟢', 'note' => 'Lowest rate — plan ahead and save the most'],
            ['label' => 'Standard', 'window' => '3–5 days', 'modifier' => 'Popular', 'icon' => '🔵', 'note' => 'The sweet spot of speed and value'],
            ['label' => 'Fast', 'window' => '1–3 days', 'modifier' => 'Small surcharge', 'icon' => '🟠', 'note' => 'Quick turnaround for tighter timelines'],
            ['label' => 'Express', 'window' => '24–48 hours', 'modifier' => 'Rush rate', 'icon' => '🔴', 'note' => 'Urgent work handled fast, done right'],
        ];

        // What is always included regardless of plan.
        $includedForEveryone = [
            ['title' => '100% Plagiarism-Free', 'desc' => 'Every order is written from scratch and never resold.', 'icon' => '🛡️'],
            ['title' => 'Free Plagiarism Report', 'desc' => 'A Turnitin-style originality report with every delivery.', 'icon' => '📊'],
            ['title' => 'Unlimited Revisions', 'desc' => 'We revise until the work matches your brief — no extra charge.', 'icon' => '🔄'],
            ['title' => 'On-Time Guarantee', 'desc' => 'Delivered by your deadline, every time, or your money back.', 'icon' => '⏰'],
            ['title' => '24/7 Support', 'desc' => 'USA-based support available round the clock, under 15 min.', 'icon' => '💬'],
            ['title' => 'Money-Back Guarantee', 'desc' => 'Not satisfied? Get a refund per our refund policy.', 'icon' => '💰'],
        ];

        // Add-ons students can layer on top of any plan.
        $addons = [
            ['name' => 'In-depth research help', 'price' => '+$50', 'unit' => 'per page', 'icon' => '🔍'],
            ['name' => 'Plagiarism report & proofreading', 'price' => '+$50', 'unit' => 'per page', 'icon' => '✅'],
            ['name' => '24-hour express turnaround', 'price' => '+$100', 'unit' => 'per page', 'icon' => '⚡'],
        ];

        // Pricing-specific FAQs (subset aligned with the main FAQ page).
        $faqs = [
            [
                'question' => 'How is the final price calculated?',
                'answer' => 'Your price is based on four things: academic level, number of pages, subject complexity, and deadline. Use our live calculator for an instant, all-inclusive quote — the number you see is the number you pay.',
            ],
            [
                'question' => 'Are there any hidden fees?',
                'answer' => 'None. The quote you receive is the final price. No surprise charges, no setup fees, no per-revision costs. Plagiarism reports are always included free.',
            ],
            [
                'question' => 'Do you offer discounts?',
                'answer' => 'Yes — we automatically apply up to 40% off on every order, plus extra volume discounts for larger page counts. No promo codes needed; the discount is applied in real time.',
            ],
            [
                'question' => 'Can I get a refund?',
                'answer' => 'Absolutely. We back every order with a money-back guarantee. If the work does not meet your requirements or our quality standards, request revisions (free and unlimited) or a refund per our refund policy.',
            ],
            [
                'question' => 'What payment methods do you accept?',
                'answer' => 'All major credit and debit cards (Visa, Mastercard, Amex), PayPal, and other secure online methods. Every transaction is SSL-encrypted and processed through PCI-compliant gateways.',
            ],
            [
                'question' => 'Which plan should I choose?',
                'answer' => 'Basic suits high-school and undergraduate work on a relaxed deadline. Standard is our most popular pick for college and masters coursework. Premium is built for theses, dissertations, and urgent PhD-level projects.',
            ],
        ];

        return view('pricing', compact(
            'plans',
            'academicLevels',
            'deadlines',
            'includedForEveryone',
            'addons',
            'faqs'
        ));
    }
}
