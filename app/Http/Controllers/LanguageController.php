<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    private function languages(): array
    {
        return [
            [
                'name' => 'Python',
                'slug' => 'python',
                'icon' => '🐍',
                'description' => 'High-level programming language perfect for data science, web development, and automation.',
                'difficulty' => 'Beginner Friendly',
                'use_cases' => ['Data Science', 'Web Development', 'Machine Learning', 'Automation'],
                'popularity' => 95
            ],
            [
                'name' => 'JavaScript',
                'slug' => 'javascript',
                'icon' => '🟨',
                'description' => 'Essential language for web development, both frontend and backend applications.',
                'difficulty' => 'Beginner Friendly',
                'use_cases' => ['Web Development', 'Mobile Apps', 'Server-side', 'Game Development'],
                'popularity' => 98
            ],
            [
                'name' => 'Java',
                'slug' => 'java',
                'icon' => '☕',
                'description' => 'Object-oriented language widely used for enterprise applications and Android development.',
                'difficulty' => 'Intermediate',
                'use_cases' => ['Enterprise Apps', 'Android Development', 'Web Services', 'Desktop Apps'],
                'popularity' => 92
            ],
            [
                'name' => 'C++',
                'slug' => 'cpp',
                'icon' => '⚡',
                'description' => 'Powerful systems programming language used for high-performance applications.',
                'difficulty' => 'Advanced',
                'use_cases' => ['System Programming', 'Game Development', 'Embedded Systems', 'Desktop Apps'],
                'popularity' => 85
            ],
            [
                'name' => 'C#',
                'slug' => 'csharp',
                'icon' => '🟦',
                'description' => 'Microsoft\'s object-oriented language for .NET framework and Windows applications.',
                'difficulty' => 'Intermediate',
                'use_cases' => ['Windows Apps', 'Web Development', 'Game Development', 'Enterprise Software'],
                'popularity' => 88
            ],
            [
                'name' => 'PHP',
                'slug' => 'php',
                'icon' => '🟣',
                'description' => 'Server-side scripting language powering most of the web\'s dynamic websites.',
                'difficulty' => 'Beginner Friendly',
                'use_cases' => ['Web Development', 'Server-side Scripting', 'Content Management', 'E-commerce'],
                'popularity' => 78
            ],
            [
                'name' => 'Go',
                'slug' => 'go',
                'icon' => '🐹',
                'description' => 'Modern language developed by Google for scalable and efficient backend systems.',
                'difficulty' => 'Intermediate',
                'use_cases' => ['Backend Services', 'Cloud Computing', 'DevOps Tools', 'Microservices'],
                'popularity' => 82
            ],
            [
                'name' => 'Rust',
                'slug' => 'rust',
                'icon' => '🦀',
                'description' => 'Systems programming language focused on safety, speed, and concurrency.',
                'difficulty' => 'Advanced',
                'use_cases' => ['System Programming', 'Web Assembly', 'Blockchain', 'Operating Systems'],
                'popularity' => 79
            ],
            [
                'name' => 'Swift',
                'slug' => 'swift',
                'icon' => '🍎',
                'description' => 'Apple\'s modern programming language for iOS, macOS, and Apple ecosystem development.',
                'difficulty' => 'Intermediate',
                'use_cases' => ['iOS Development', 'macOS Apps', 'watchOS', 'tvOS'],
                'popularity' => 75
            ],
            [
                'name' => 'Kotlin',
                'slug' => 'kotlin',
                'icon' => '🎯',
                'description' => 'Modern language that runs on JVM, fully interoperable with Java for Android development.',
                'difficulty' => 'Intermediate',
                'use_cases' => ['Android Development', 'Server-side', 'Web Development', 'Desktop Apps'],
                'popularity' => 81
            ]
        ];

        return view('languages.index', compact('languages'));
    }

    public function index()
    {
        $languages = $this->languages();
        return view('languages.index', compact('languages'));
    }

    public function show($slug)
    {
        $languages = $this->languages();
        $language  = collect($languages)->firstWhere('slug', $slug);

        if (! $language) {
            abort(404);
        }

        return view('languages.show', compact('language', 'languages'));
    }
}