<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            [
                'name' => 'Web Development Projects',
                'slug' => 'web-development',
                'icon' => '🌐',
                'description' => 'Complete web development solutions using modern frameworks and technologies.',
                'features' => ['Frontend & Backend', 'Responsive Design', 'Database Integration', 'Deployment Help'],
                'price_from' => '$35',
                'turnaround' => '3-72 hours',
                'rating' => 4.8,
                'orders_completed' => 950
            ],
            [
                'name' => 'Mobile App Development',
                'slug' => 'mobile-app',
                'icon' => '📱',
                'description' => 'Native and cross-platform mobile application development services.',
                'features' => ['iOS & Android', 'React Native', 'Flutter', 'App Store Deployment'],
                'price_from' => '$50',
                'turnaround' => '5-7 days',
                'rating' => 4.9,
                'orders_completed' => 420
            ],
            [
                'name' => 'Algorithm & Data Structures',
                'slug' => 'algorithms',
                'icon' => '🔢',
                'description' => 'Advanced algorithm implementation and data structure programming assistance.',
                'features' => ['Complex Algorithms', 'Optimization', 'Time Complexity Analysis', 'Visual Explanations'],
                'price_from' => '$25',
                'turnaround' => '2-24 hours',
                'rating' => 4.9,
                'orders_completed' => 1200
            ],
            [
                'name' => 'Database Programming',
                'slug' => 'database',
                'icon' => '🗄️',
                'description' => 'Database design, SQL programming, and database management solutions.',
                'features' => ['SQL Optimization', 'Database Design', 'NoSQL Solutions', 'Data Migration'],
                'price_from' => '$30',
                'turnaround' => '3-48 hours',
                'rating' => 4.7,
                'orders_completed' => 800
            ],
            [
                'name' => 'Machine Learning Projects',
                'slug' => 'machine-learning',
                'icon' => '🤖',
                'description' => 'AI and machine learning project development with modern frameworks.',
                'features' => ['TensorFlow & PyTorch', 'Model Training', 'Data Analysis', 'Deployment'],
                'price_from' => '$45',
                'turnaround' => '4-7 days',
                'rating' => 4.8,
                'orders_completed' => 350
            ],
            [
                'name' => 'Code Review & Debugging',
                'slug' => 'debugging',
                'icon' => '🔧',
                'description' => 'Professional code review, debugging, and optimization services.',
                'features' => ['Bug Fixing', 'Performance Optimization', 'Code Refactoring', 'Best Practices'],
                'price_from' => '$15',
                'turnaround' => '1-12 hours',
                'rating' => 4.8,
                'orders_completed' => 2200
            ],
            [
                'name' => 'API Development',
                'slug' => 'api-development',
                'icon' => '🔗',
                'description' => 'RESTful API and GraphQL development with comprehensive documentation.',
                'features' => ['REST & GraphQL', 'Authentication', 'Documentation', 'Testing'],
                'price_from' => '$40',
                'turnaround' => '3-5 days',
                'rating' => 4.9,
                'orders_completed' => 600
            ],
            [
                'name' => 'DevOps & Deployment',
                'slug' => 'devops',
                'icon' => '⚙️',
                'description' => 'CI/CD setup, cloud deployment, and infrastructure management.',
                'features' => ['Docker & Kubernetes', 'AWS/Azure/GCP', 'CI/CD Pipelines', 'Monitoring'],
                'price_from' => '$35',
                'turnaround' => '2-5 days',
                'rating' => 4.7,
                'orders_completed' => 450
            ],
            [
                'name' => 'Game Development',
                'slug' => 'game-development',
                'icon' => '🎮',
                'description' => '2D and 3D game development using Unity, Unreal Engine, and custom engines.',
                'features' => ['Unity & Unreal', '2D/3D Games', 'Physics Implementation', 'Multi-platform'],
                'price_from' => '$60',
                'turnaround' => '7-14 days',
                'rating' => 4.8,
                'orders_completed' => 280
            ],
            [
                'name' => 'Cybersecurity Projects',
                'slug' => 'cybersecurity',
                'icon' => '🛡️',
                'description' => 'Security analysis, penetration testing, and secure application development.',
                'features' => ['Security Audits', 'Encryption', 'Secure Coding', 'Vulnerability Assessment'],
                'price_from' => '$50',
                'turnaround' => '3-7 days',
                'rating' => 4.9,
                'orders_completed' => 320
            ],
            [
                'name' => 'Desktop Application',
                'slug' => 'desktop-app',
                'icon' => '🖥️',
                'description' => 'Cross-platform desktop application development using modern frameworks.',
                'features' => ['Electron & .NET', 'Cross-platform', 'GUI Design', 'System Integration'],
                'price_from' => '$40',
                'turnaround' => '4-7 days',
                'rating' => 4.7,
                'orders_completed' => 380
            ],
            [
                'name' => 'Cloud Computing Solutions',
                'slug' => 'cloud-computing',
                'icon' => '☁️',
                'description' => 'Scalable cloud-based applications and serverless architecture development.',
                'features' => ['AWS/Azure/GCP', 'Serverless Functions', 'Cloud Storage', 'Auto-scaling'],
                'price_from' => '$45',
                'turnaround' => '3-7 days',
                'rating' => 4.8,
                'orders_completed' => 520
            ]
        ];

        return view('services.index', compact('services'));
    }
}