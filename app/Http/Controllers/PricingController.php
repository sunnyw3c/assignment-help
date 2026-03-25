<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricingPlans = [
            [
                'name' => 'Basic',
                'price' => '25',
                'period' => 'per page',
                'description' => 'Perfect for simple assignments and homework help',
                'features' => [
                    'Standard delivery (3-5 days)',
                    'Basic formatting',
                    'Email support',
                    'Unlimited revisions',
                    'Plagiarism report',
                    'Quality guarantee',
                ],
                'color' => 'blue',
                'recommended' => false,
            ],
            [
                'name' => 'Standard',
                'price' => '35',
                'period' => 'per page',
                'description' => 'Best value for most students',
                'features' => [
                    'Fast delivery (1-3 days)',
                    'Advanced formatting',
                    'Priority support',
                    'Unlimited revisions',
                    'Plagiarism report',
                    'Quality guarantee',
                    'Expert tutor assigned',
                ],
                'color' => 'purple',
                'recommended' => true,
            ],
            [
                'name' => 'Premium',
                'price' => '50',
                'period' => 'per page',
                'description' => 'For complex projects and urgent deadlines',
                'features' => [
                    'Express delivery (24-48 hours)',
                    'Premium formatting',
                    '24/7 priority support',
                    'Unlimited revisions',
                    'Plagiarism report',
                    'Quality guarantee',
                    'Top-tier expert assigned',
                    'Direct communication with tutor',
                ],
                'color' => 'orange',
                'recommended' => false,
            ],
        ];

        $faqs = [
            [
                'question' => 'How is pricing calculated?',
                'answer' => 'Pricing is based on the number of pages, complexity of the topic, academic level, and deadline. Our pricing calculator gives you an instant quote.',
            ],
            [
                'question' => 'Are there any hidden fees?',
                'answer' => 'No, we believe in transparent pricing. The price you see in the quote is the final price you pay. No hidden charges or surprise fees.',
            ],
            [
                'question' => 'Do you offer discounts?',
                'answer' => 'Yes! We automatically apply up to 40% off on every order, plus volume discounts for larger orders. No promo codes needed — discounts are calculated in real time in the price calculator.',
            ],
            [
                'question' => 'What payment methods do you accept?',
                'answer' => 'We accept all major credit cards, debit cards, PayPal, and other secure payment methods. All transactions are encrypted and secure.',
            ],
            [
                'question' => 'Can I get a refund?',
                'answer' => 'Yes, we have a money-back guarantee. If you\'re not satisfied with the work, you can request revisions or a refund according to our refund policy.',
            ],
            [
                'question' => 'How do revisions work?',
                'answer' => 'All plans include unlimited free revisions. Simply send your feedback and your assigned expert will revise the work until it fully meets your original requirements.',
            ],
        ];

        return view('pricing', compact('pricingPlans', 'faqs'));
    }
}
