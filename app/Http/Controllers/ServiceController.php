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

    public function show($slug)
    {
        // Get all services data
        $services = $this->getAllServices();

        // Find the specific service by slug
        $service = collect($services)->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        // Map slug to specific blade file
        $viewMap = [
            'web-development' => 'services.web-development',
            'mobile-app' => 'services.mobile-app',
            'algorithms' => 'services.algorithms',
            'database' => 'services.database',
            'machine-learning' => 'services.machine-learning',
            'debugging' => 'services.debugging',
            'api-development' => 'services.api-development',
            'devops' => 'services.devops',
            'game-development' => 'services.game-development',
            'cybersecurity' => 'services.cybersecurity',
            'desktop-app' => 'services.desktop-app',
            'cloud-computing' => 'services.cloud-computing',
        ];

        // Check if we have a specific view for this service
        if (isset($viewMap[$slug])) {
            return view($viewMap[$slug], compact('service'));
        }

        // Fallback to generic service view for other services
        $serviceDetails = $this->getServiceDetails($slug);
        return view('services.show', compact('service', 'serviceDetails'));
    }

    private function getAllServices()
    {
        return [
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
    }

    private function getServiceDetails($slug)
    {
        $details = [
            'web-development' => [
                'hero' => [
                    'title' => 'Professional Web Development Services',
                    'subtitle' => 'Transform your ideas into stunning, functional websites',
                    'description' => 'Get expert help with your web development projects from experienced developers who understand modern frameworks, best practices, and industry standards.',
                    'image' => '💻'
                ],
                'technologies' => [
                    'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'Vue.js', 'Angular', 'TypeScript'],
                    'Backend' => ['Node.js', 'Python', 'PHP', 'Java', 'C#', 'Ruby'],
                    'Frameworks' => ['Express.js', 'Laravel', 'Django', 'Spring Boot', 'ASP.NET'],
                    'Databases' => ['MySQL', 'PostgreSQL', 'MongoDB', 'Firebase', 'SQLite']
                ],
                'pricing' => [
                    'basic' => [
                        'name' => 'Basic Website',
                        'price' => '$35',
                        'timeframe' => '24-48 hours',
                        'features' => [
                            'Single page application',
                            'Responsive design',
                            'Basic functionality',
                            'HTML/CSS/JavaScript',
                            'Source code included'
                        ]
                    ],
                    'standard' => [
                        'name' => 'Multi-Page Website',
                        'price' => '$75',
                        'timeframe' => '2-3 days',
                        'features' => [
                            'Multiple pages/components',
                            'Advanced functionality',
                            'Database integration',
                            'Framework implementation',
                            'Responsive design',
                            'Testing included'
                        ]
                    ],
                    'premium' => [
                        'name' => 'Full-Stack Application',
                        'price' => '$150',
                        'timeframe' => '5-7 days',
                        'features' => [
                            'Complete web application',
                            'Frontend + Backend',
                            'Database design',
                            'User authentication',
                            'API development',
                            'Deployment assistance',
                            'Documentation'
                        ]
                    ]
                ],
                'process' => [
                    [
                        'step' => 1,
                        'title' => 'Requirements Analysis',
                        'description' => 'We analyze your project requirements and choose the best technology stack.',
                        'icon' => '📋'
                    ],
                    [
                        'step' => 2,
                        'title' => 'Development',
                        'description' => 'Our expert developers build your project using best practices and clean code.',
                        'icon' => '⚡'
                    ],
                    [
                        'step' => 3,
                        'title' => 'Testing & Review',
                        'description' => 'Thorough testing and code review to ensure quality and functionality.',
                        'icon' => '🔍'
                    ],
                    [
                        'step' => 4,
                        'title' => 'Delivery & Support',
                        'description' => 'Project delivery with documentation and ongoing support.',
                        'icon' => '🚀'
                    ]
                ],
                'testimonials' => [
                    [
                        'name' => 'Jake Martinez',
                        'role' => 'Computer Science Student',
                        'university' => 'UCLA',
                        'rating' => 5,
                        'review' => 'These guys built my e-commerce website for my final project and it turned out amazing! The code was super clean and they even helped me deploy it to Heroku. My professor was impressed with the React/Node.js implementation.',
                        'project' => 'E-commerce Website'
                    ],
                    [
                        'name' => 'Emma Thompson',
                        'role' => 'Web Development Bootcamp',
                        'university' => 'General Assembly',
                        'rating' => 5,
                        'review' => 'I was struggling with my portfolio project - couldn\'t get the backend API to work properly. The developer fixed everything in just one day and taught me so much about Express.js. Totally worth it!',
                        'project' => 'Portfolio Website'
                    ],
                    [
                        'name' => 'Ryan Chen',
                        'role' => 'Software Engineering Student',
                        'university' => 'Stanford',
                        'rating' => 5,
                        'review' => 'Needed help with my React app that had to integrate with a REST API. They not only fixed my bugs but also refactored my code to be way more efficient. Learned a ton about hooks and state management!',
                        'project' => 'React Dashboard'
                    ]
                ],
                'faq' => [
                    [
                        'question' => 'What web technologies do you work with?',
                        'answer' => 'We work with all modern web technologies including React, Vue.js, Angular, Node.js, Laravel, Django, and many more. Our experts choose the best stack for your specific project needs.'
                    ],
                    [
                        'question' => 'Can you help with both frontend and backend?',
                        'answer' => 'Absolutely! We provide full-stack development services. Whether you need just frontend work, backend APIs, or complete web applications, our team has you covered.'
                    ],
                    [
                        'question' => 'Do you provide hosting and deployment help?',
                        'answer' => 'Yes, we can help you deploy your website to various platforms like Heroku, Netlify, Vercel, or traditional hosting providers. We\'ll also provide deployment documentation.'
                    ],
                    [
                        'question' => 'What if I need revisions or have bugs after delivery?',
                        'answer' => 'We provide free revisions and bug fixes for 7 days after delivery. We also offer ongoing support packages if you need longer-term assistance.'
                    ]
                ]
            ],
            'mobile-app' => [
                'hero' => [
                    'title' => 'Professional Mobile App Development',
                    'subtitle' => 'Build powerful mobile apps for iOS and Android',
                    'description' => 'Get expert mobile app development services from experienced developers who specialize in native iOS, Android, and cross-platform solutions using React Native and Flutter.',
                    'image' => '📱'
                ],
                'technologies' => [
                    'Native iOS' => ['Swift', 'Objective-C', 'Xcode', 'UIKit', 'SwiftUI', 'Core Data', 'CloudKit'],
                    'Native Android' => ['Kotlin', 'Java', 'Android Studio', 'Jetpack Compose', 'Room Database', 'Firebase'],
                    'Cross-Platform' => ['React Native', 'Flutter', 'Xamarin', 'Ionic', 'Cordova/PhoneGap'],
                    'Backend & APIs' => ['Firebase', 'AWS Amplify', 'Node.js', 'Express', 'REST APIs', 'GraphQL']
                ],
                'pricing' => [
                    'basic' => [
                        'name' => 'Simple Mobile App',
                        'price' => '$50',
                        'timeframe' => '2-3 days',
                        'features' => [
                            'Single platform (iOS or Android)',
                            'Basic UI/UX design',
                            'Core functionality',
                            'Local data storage',
                            'Source code included'
                        ]
                    ],
                    'standard' => [
                        'name' => 'Cross-Platform App',
                        'price' => '$120',
                        'timeframe' => '5-7 days',
                        'features' => [
                            'iOS and Android compatibility',
                            'React Native or Flutter',
                            'API integration',
                            'Push notifications',
                            'Custom UI components',
                            'App store guidelines compliance'
                        ]
                    ],
                    'premium' => [
                        'name' => 'Enterprise Mobile Solution',
                        'price' => '$250',
                        'timeframe' => '1-2 weeks',
                        'features' => [
                            'Native iOS and Android apps',
                            'Backend API development',
                            'Real-time features',
                            'Advanced security',
                            'App store submission help',
                            'Performance optimization',
                            'Comprehensive testing'
                        ]
                    ]
                ],
                'process' => [
                    [
                        'step' => 1,
                        'title' => 'App Concept & Planning',
                        'description' => 'We analyze your app idea, define features, and create a development roadmap.',
                        'icon' => '💡'
                    ],
                    [
                        'step' => 2,
                        'title' => 'UI/UX Design',
                        'description' => 'Design user-friendly interfaces that follow platform-specific guidelines.',
                        'icon' => '🎨'
                    ],
                    [
                        'step' => 3,
                        'title' => 'Development & Integration',
                        'description' => 'Build your app with clean code, API integrations, and robust functionality.',
                        'icon' => '⚡'
                    ],
                    [
                        'step' => 4,
                        'title' => 'Testing & Deployment',
                        'description' => 'Thorough testing across devices and assistance with app store submission.',
                        'icon' => '🚀'
                    ]
                ],
                'testimonials' => [
                    [
                        'name' => 'Sofia Martinez',
                        'role' => 'Computer Science Student',
                        'university' => 'USC',
                        'rating' => 5,
                        'review' => 'I needed to build a fitness tracking app for my capstone project and had no clue where to start with mobile development. The developer they assigned was incredible - built a beautiful React Native app that works perfectly on both iOS and Android. Even helped me add cool features like location tracking and push notifications!',
                        'project' => 'Fitness Tracking App'
                    ],
                    [
                        'name' => 'Jordan Lee',
                        'role' => 'Mobile Development Bootcamp',
                        'university' => 'General Assembly',
                        'rating' => 5,
                        'review' => 'Flutter was giving me nightmares until I found these guys. My task management app kept crashing and the UI looked terrible. The expert completely rebuilt it with proper state management and amazing animations. Now it\'s actually something I\'m proud to show in my portfolio!',
                        'project' => 'Task Management App'
                    ],
                    [
                        'name' => 'Michael Chang',
                        'role' => 'iOS Development Student',
                        'university' => 'App Academy',
                        'rating' => 5,
                        'review' => 'Swift and Xcode were completely overwhelming me. I had this social media app assignment due and couldn\'t even get the basic navigation working properly. The iOS expert was amazing - not only fixed everything but taught me about proper MVC patterns and how to use Core Data. Definitely saved my grade!',
                        'project' => 'Social Media App'
                    ]
                ],
                'faq' => [
                    [
                        'question' => 'Do you develop for both iOS and Android?',
                        'answer' => 'Yes! We develop native iOS apps (Swift/Objective-C), native Android apps (Kotlin/Java), and cross-platform solutions using React Native or Flutter that work on both platforms.'
                    ],
                    [
                        'question' => 'Can you help with app store submission?',
                        'answer' => 'Absolutely! We provide guidance on app store guidelines, help prepare your app for submission, and can assist with the actual submission process to both Apple App Store and Google Play Store.'
                    ],
                    [
                        'question' => 'What about backend services and APIs?',
                        'answer' => 'We can develop complete backend solutions using Firebase, AWS, or custom APIs. This includes user authentication, data storage, push notifications, and real-time features.'
                    ],
                    [
                        'question' => 'How do you ensure the app works on different devices?',
                        'answer' => 'We test on multiple device sizes and operating system versions. For cross-platform apps, we ensure consistent behavior across iOS and Android. We also provide responsive design that adapts to different screen sizes.'
                    ]
                ]
            ]
        ];

        return $details[$slug] ?? null;
    }
}