<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowItWorksController extends Controller
{
    public function index()
    {
        $steps = [
            [
                'step' => 1,
                'title' => 'Submit Your Requirements',
                'description' => 'Tell us about your programming project, including language, deadline, and specific requirements.',
                'icon' => '📝',
                'details' => [
                    'Upload your assignment details or project brief',
                    'Specify programming language and frameworks',
                    'Set your deadline and budget preferences',
                    'Add any special instructions or requirements'
                ],
                'estimated_time' => '2-5 minutes'
            ],
            [
                'step' => 2,
                'title' => 'Expert Assignment & Quote',
                'description' => 'We match you with the best developer for your project and provide a detailed quote.',
                'icon' => '👨‍💻',
                'details' => [
                    'Automatic matching with qualified experts',
                    'Review of project scope and complexity',
                    'Transparent pricing with no hidden fees',
                    'Timeline confirmation and milestone planning'
                ],
                'estimated_time' => '15-30 minutes'
            ],
            [
                'step' => 3,
                'title' => 'Development & Progress Updates',
                'description' => 'Your dedicated developer works on your project with regular progress updates.',
                'icon' => '⚡',
                'details' => [
                    'Real-time development progress tracking',
                    'Regular updates and milestone deliveries',
                    'Direct communication with your developer',
                    'Quality checks at each development stage'
                ],
                'estimated_time' => 'Based on project scope'
            ],
            [
                'step' => 4,
                'title' => 'Review & Final Delivery',
                'description' => 'Get your completed project with documentation, testing, and free revisions.',
                'icon' => '✅',
                'details' => [
                    'Complete source code with documentation',
                    'Detailed explanation of implementation',
                    'Testing reports and quality assurance',
                    'Free revisions until you\'re satisfied'
                ],
                'estimated_time' => '1-2 hours for review'
            ]
        ];

        $features = [
            [
                'title' => '24/7 Expert Support',
                'description' => 'Round-the-clock assistance from certified programming professionals.',
                'icon' => '🕒',
                'color' => 'blue'
            ],
            [
                'title' => 'Money-Back Guarantee',
                'description' => '100% refund if we can\'t deliver your project as promised.',
                'icon' => '💰',
                'color' => 'green'
            ],
            [
                'title' => 'Plagiarism-Free Code',
                'description' => 'All code is written from scratch and checked for originality.',
                'icon' => '🛡️',
                'color' => 'purple'
            ],
            [
                'title' => 'Free Revisions',
                'description' => 'Unlimited revisions until your project meets all requirements.',
                'icon' => '🔄',
                'color' => 'orange'
            ]
        ];

        $stats = [
            ['number' => '2500+', 'label' => 'Projects Completed', 'icon' => '🎯'],
            ['number' => '98.5%', 'label' => 'Client Satisfaction', 'icon' => '⭐'],
            ['number' => '24/7', 'label' => 'Expert Support', 'icon' => '🚀'],
            ['number' => '150+', 'label' => 'Programming Languages', 'icon' => '💻']
        ];

        $reviews = [
            [
                'name' => 'Sarah Chen',
                'role' => 'Computer Science Student',
                'university' => 'MIT',
                'avatar' => '👩‍💻',
                'rating' => 5,
                'review' => 'Honestly, I was freaking out about my algorithms assignment - the deadline was in 8 hours and I couldn\'t figure out the binary tree implementation. Found these guys through a friend and wow, they saved my grade! The developer not only fixed my code but explained everything so I actually understood what was happening. Worth every penny!',
                'project' => 'Data Structures & Algorithms',
                'completion_time' => '6 hours',
                'verified' => true
            ],
            [
                'name' => 'Marcus Johnson',
                'role' => 'Software Engineering Student',
                'university' => 'Stanford University',
                'avatar' => '👨‍💻',
                'rating' => 5,
                'review' => 'Dude, I\'ve been stuck on this React project for 3 weeks and my professor was getting annoyed with me asking for extensions. These guys paired me with someone who actually knew what they were doing. He walked me through the whole thing step by step and now I feel way more confident with web dev. Definitely using them again!',
                'project' => 'Full-Stack Web Application',
                'completion_time' => '2 days',
                'verified' => true
            ],
            [
                'name' => 'Elena Rodriguez',
                'role' => 'Data Science Student',
                'university' => 'UC Berkeley',
                'avatar' => '👩‍🔬',
                'rating' => 5,
                'review' => 'Machine learning is no joke... I thought I understood it from lectures but when it came to implementing the classification model, I was completely lost. The expert they assigned was a lifesaver - she helped me debug my Python code and even improved my model\'s accuracy by 15%. My professor was impressed!',
                'project' => 'Machine Learning Classification',
                'completion_time' => '3 days',
                'verified' => true
            ],
            [
                'name' => 'David Kim',
                'role' => 'Mobile App Development Student',
                'university' => 'Georgia Tech',
                'avatar' => '👨‍💼',
                'rating' => 4,
                'review' => 'Had to build a mobile app for my capstone project and I was way in over my head. The guy who helped me was super patient - even when I asked the same questions multiple times lol. App works perfectly and looks way better than I could have made it myself. Only complaint is I wish it was a bit cheaper for students.',
                'project' => 'React Native Mobile App',
                'completion_time' => '4 days',
                'verified' => true
            ],
            [
                'name' => 'Priya Patel',
                'role' => 'Cybersecurity Student',
                'university' => 'Carnegie Mellon',
                'avatar' => '👩‍🛡️',
                'rating' => 5,
                'review' => 'Cybersecurity assignments are brutal and this encryption project was killing me. I found these guys on Reddit (shoutout to r/programming) and they totally saved me. The developer actually taught me about different encryption methods while fixing my code. Learned more in 2 days than I did in 2 weeks of lectures!',
                'project' => 'Encryption & Security Analysis',
                'completion_time' => '5 days',
                'verified' => true
            ],
            [
                'name' => 'Alex Thompson',
                'role' => 'Game Development Student',
                'university' => 'University of Washington',
                'avatar' => '👨‍🎮',
                'rating' => 5,
                'review' => 'Making games is harder than playing them 😅 My Unity project was a mess - buggy physics, terrible UI, you name it. The developer they matched me with was amazing - turned my janky prototype into something that actually looked professional. Even added some cool particle effects I didn\'t know were possible. My friends keep asking if I\'ll publish it!',
                'project' => '3D Unity Game Development',
                'completion_time' => '1 week',
                'verified' => true
            ]
        ];

        $faqs = [
            [
                'question' => 'How long does it take to get a quote?',
                'answer' => 'You will typically receive a detailed quote within 15-30 minutes of submitting your project requirements. Our team reviews the scope and complexity to provide an accurate and transparent price.'
            ],
            [
                'question' => 'Can I communicate with my assigned expert?',
                'answer' => 'Yes! Once an expert is assigned, you can communicate with them directly to discuss project details, ask questions, and receive progress updates. Clear communication is key to a successful project.'
            ],
            [
                'question' => 'What if I am not satisfied with the final delivery?',
                'answer' => 'Your satisfaction is our priority. We offer free revisions until the project meets all your requirements. If you are still not satisfied, we have a money-back guarantee.'
            ],
            [
                'question' => 'Is the service confidential?',
                'answer' => 'Absolutely. We prioritize your privacy and use secure platforms for all communications and file transfers. Your personal information and project details are never shared with third parties.'
            ]
        ];

        return view('how-it-works', compact('steps', 'features', 'stats', 'reviews', 'faqs'));
    }
}
