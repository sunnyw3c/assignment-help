<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = $this->getServices();

        return view('programming-services.index', compact('services'));
    }

    public function getServices()
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
            ],
            [
                'name' => 'Software Testing & QA',
                'slug' => 'testing-qa',
                'icon' => '🧪',
                'description' => 'Comprehensive testing and quality assurance services for reliable software.',
                'features' => ['Unit Testing', 'Integration Testing', 'E2E Testing', 'Test Automation'],
                'price_from' => '$20',
                'turnaround' => '2-24 hours',
                'rating' => 4.9,
                'orders_completed' => 1500
            ],
            [
                'name' => 'PHP Programming',
                'slug' => 'php-help',
                'icon' => '🐘',
                'description' => 'Professional PHP development services for web applications, APIs, and backend systems.',
                'features' => ['Laravel & Symfony', 'Custom PHP Solutions', 'API Development', 'Database Integration'],
                'price_from' => '$30',
                'turnaround' => '2-48 hours',
                'rating' => 4.8,
                'orders_completed' => 1100
            ],
            [
                'name' => 'Java Programming',
                'slug' => 'java-help',
                'icon' => '☕',
                'description' => 'Expert Java programming help for applications, Spring Boot projects, and enterprise solutions.',
                'features' => ['Spring Boot & Maven', 'OOP & Design Patterns', 'Android Development', 'Enterprise Applications'],
                'price_from' => '$35',
                'turnaround' => '2-48 hours',
                'rating' => 4.9,
                'orders_completed' => 1350
            ],
            [
                'name' => 'Python Programming',
                'slug' => 'python-help',
                'icon' => '🐍',
                'description' => 'Professional Python programming help for Django, Flask, data science, machine learning, and automation.',
                'features' => ['Django & Flask', 'Data Science & ML', 'Web Scraping', 'Automation Scripts'],
                'price_from' => '$30',
                'turnaround' => '2-48 hours',
                'rating' => 4.9,
                'orders_completed' => 1500
            ]
        ];
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
            'web-development' => 'programming-services.web-development',
            'mobile-app' => 'programming-services.mobile-app',
            'algorithms' => 'programming-services.algorithms',
            'database' => 'programming-services.database',
            'machine-learning' => 'programming-services.machine-learning',
            'debugging' => 'programming-services.debugging',
            'api-development' => 'programming-services.api-development',
            'devops' => 'programming-services.devops',
            'game-development' => 'programming-services.game-development',
            'cybersecurity' => 'programming-services.cybersecurity',
            'desktop-app' => 'programming-services.desktop-app',
            'cloud-computing' => 'programming-services.cloud-computing',
            'testing-qa' => 'programming-services.testing-qa',
            'php-help' => 'programming-services.php-help',
            'java-help' => 'programming-services.java-help',
            'python-help' => 'programming-services.python-help',
        ];

        // Check if we have a specific view for this service
        if (isset($viewMap[$slug])) {
            return view($viewMap[$slug], compact('service'));
        }

        // Fallback to generic service view for other services
        $serviceDetails = $this->getServiceDetails($slug);
        return view('programming-services.show', compact('service', 'serviceDetails'));
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
            ],
            [
                'name' => 'Software Testing & QA',
                'slug' => 'testing-qa',
                'icon' => '🧪',
                'description' => 'Comprehensive testing and quality assurance services for reliable software.',
                'features' => ['Unit Testing', 'Integration Testing', 'E2E Testing', 'Test Automation'],
                'price_from' => '$20',
                'turnaround' => '2-24 hours',
                'rating' => 4.9,
                'orders_completed' => 1500
            ],
            [
                'name' => 'PHP Programming',
                'slug' => 'php-help',
                'icon' => '🐘',
                'description' => 'Professional PHP development services for web applications, APIs, and backend systems.',
                'features' => ['Laravel & Symfony', 'Custom PHP Solutions', 'API Development', 'Database Integration'],
                'price_from' => '$30',
                'turnaround' => '2-48 hours',
                'rating' => 4.8,
                'orders_completed' => 1100
            ],
            [
                'name' => 'Java Programming',
                'slug' => 'java-help',
                'icon' => '☕',
                'description' => 'Expert Java programming help for applications, Spring Boot projects, and enterprise solutions.',
                'features' => ['Spring Boot & Maven', 'OOP & Design Patterns', 'Android Development', 'Enterprise Applications'],
                'price_from' => '$35',
                'turnaround' => '2-48 hours',
                'rating' => 4.9,
                'orders_completed' => 1350
            ],
            [
                'name' => 'Python Programming',
                'slug' => 'python-help',
                'icon' => '🐍',
                'description' => 'Professional Python programming help for Django, Flask, data science, machine learning, and automation.',
                'features' => ['Django & Flask', 'Data Science & ML', 'Web Scraping', 'Automation Scripts'],
                'price_from' => '$30',
                'turnaround' => '2-48 hours',
                'rating' => 4.9,
                'orders_completed' => 1500
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
            ],
            'php-help' => [
                'hero' => [
                    'title' => 'Expert PHP Programming Services',
                    'subtitle' => 'Build powerful PHP applications with modern frameworks',
                    'description' => 'Get professional PHP development help from experienced developers who specialize in Laravel, Symfony, WordPress, and custom PHP solutions for web applications.',
                    'image' => '🐘'
                ],
                'technologies' => [
                    'Frameworks' => ['Laravel', 'Symfony', 'CodeIgniter', 'Yii', 'CakePHP', 'Slim Framework'],
                    'CMS Platforms' => ['WordPress', 'Drupal', 'Joomla', 'Magento', 'PrestaShop'],
                    'Core PHP' => ['PHP 8.x', 'OOP', 'MVC Pattern', 'Composer', 'PSR Standards', 'Namespaces'],
                    'Databases' => ['MySQL', 'PostgreSQL', 'MariaDB', 'MongoDB', 'Redis', 'SQLite']
                ],
                'pricing' => [
                    'basic' => [
                        'name' => 'Simple PHP Script',
                        'price' => '$30',
                        'timeframe' => '12-24 hours',
                        'features' => [
                            'Basic PHP functionality',
                            'Form processing',
                            'Database CRUD operations',
                            'Simple authentication',
                            'Clean, commented code'
                        ]
                    ],
                    'standard' => [
                        'name' => 'PHP Web Application',
                        'price' => '$80',
                        'timeframe' => '2-3 days',
                        'features' => [
                            'Laravel or Symfony framework',
                            'MVC architecture',
                            'RESTful API development',
                            'Database design & migrations',
                            'User authentication & authorization',
                            'Unit testing'
                        ]
                    ],
                    'premium' => [
                        'name' => 'Enterprise PHP Solution',
                        'price' => '$180',
                        'timeframe' => '5-7 days',
                        'features' => [
                            'Full-featured PHP application',
                            'Advanced Laravel features',
                            'Payment gateway integration',
                            'Admin dashboard',
                            'Email notifications',
                            'Deployment setup',
                            'Complete documentation'
                        ]
                    ]
                ],
                'process' => [
                    [
                        'step' => 1,
                        'title' => 'Requirements & Planning',
                        'description' => 'Analyze your PHP project requirements and select the best approach and framework.',
                        'icon' => '📋'
                    ],
                    [
                        'step' => 2,
                        'title' => 'Development',
                        'description' => 'Build your PHP application using modern practices, PSR standards, and clean code.',
                        'icon' => '💻'
                    ],
                    [
                        'step' => 3,
                        'title' => 'Testing & Debug',
                        'description' => 'Comprehensive testing to ensure reliability, security, and optimal performance.',
                        'icon' => '🔍'
                    ],
                    [
                        'step' => 4,
                        'title' => 'Delivery & Documentation',
                        'description' => 'Project delivery with setup instructions and code documentation.',
                        'icon' => '📦'
                    ]
                ],
                'testimonials' => [
                    [
                        'name' => 'Alex Johnson',
                        'role' => 'Web Development Student',
                        'university' => 'NYU',
                        'rating' => 5,
                        'review' => 'I was completely lost with Laravel for my web development course. The developer helped me build a complete blog system with authentication, CRUD operations, and file uploads. They explained everything step by step and now I actually understand how Laravel works!',
                        'project' => 'Laravel Blog System'
                    ],
                    [
                        'name' => 'Priya Patel',
                        'role' => 'Computer Science Major',
                        'university' => 'UC Berkeley',
                        'rating' => 5,
                        'review' => 'My e-commerce project was due in 3 days and I had barely started. They built an amazing PHP shopping cart with payment integration, admin panel, and order management. The code quality was excellent and well-documented. Saved my semester!',
                        'project' => 'PHP E-commerce Platform'
                    ],
                    [
                        'name' => 'Marcus Williams',
                        'role' => 'Full Stack Development Student',
                        'university' => 'MIT',
                        'rating' => 5,
                        'review' => 'Needed help building a REST API in PHP for my mobile app backend. The developer created a robust API using Slim Framework with JWT authentication, proper error handling, and comprehensive documentation. Exactly what I needed!',
                        'project' => 'RESTful API Development'
                    ]
                ],
                'faq' => [
                    [
                        'question' => 'Which PHP frameworks do you work with?',
                        'answer' => 'We specialize in Laravel and Symfony but also work with CodeIgniter, Yii, CakePHP, Slim, and pure PHP. We choose the best framework based on your project requirements and learning goals.'
                    ],
                    [
                        'question' => 'Can you help with WordPress development?',
                        'answer' => 'Yes! We provide WordPress theme development, plugin creation, custom functionality, WooCommerce customization, and WordPress API integration services.'
                    ],
                    [
                        'question' => 'Do you follow modern PHP best practices?',
                        'answer' => 'Absolutely! We use PHP 8.x features, follow PSR standards, implement OOP principles, use Composer for dependency management, and write clean, well-documented code with proper error handling.'
                    ],
                    [
                        'question' => 'Can you integrate payment gateways and APIs?',
                        'answer' => 'Yes, we can integrate popular payment gateways like Stripe, PayPal, and Razorpay, as well as third-party APIs including social media, email services, SMS, and more.'
                    ]
                ]
            ],
            'java-help' => [
                'hero' => [
                    'title' => 'Expert Java Programming Services',
                    'subtitle' => 'Build powerful Java applications with modern frameworks',
                    'description' => 'Get professional Java programming help from experienced developers who specialize in Spring Boot, Android, enterprise applications, and core Java development.',
                    'image' => '☕'
                ],
                'technologies' => [
                    'Core Java' => ['Java 17+', 'OOP Principles', 'Collections Framework', 'Multithreading', 'Lambda Expressions', 'Stream API'],
                    'Frameworks' => ['Spring Boot', 'Spring MVC', 'Spring Data JPA', 'Hibernate', 'JSF', 'Struts'],
                    'Build Tools' => ['Maven', 'Gradle', 'Ant', 'JUnit', 'TestNG', 'Mockito'],
                    'Mobile & Desktop' => ['Android SDK', 'JavaFX', 'Swing', 'AWT', 'Apache NetBeans']
                ],
                'pricing' => [
                    'basic' => [
                        'name' => 'Simple Java Program',
                        'price' => '$35',
                        'timeframe' => '12-24 hours',
                        'features' => [
                            'Core Java functionality',
                            'Object-oriented design',
                            'Exception handling',
                            'File I/O operations',
                            'Well-documented code'
                        ]
                    ],
                    'standard' => [
                        'name' => 'Java Application',
                        'price' => '$90',
                        'timeframe' => '2-3 days',
                        'features' => [
                            'Spring Boot framework',
                            'RESTful API development',
                            'Database integration (JPA/Hibernate)',
                            'Maven/Gradle build setup',
                            'Unit testing with JUnit',
                            'Professional architecture'
                        ]
                    ],
                    'premium' => [
                        'name' => 'Enterprise Java Solution',
                        'price' => '$200',
                        'timeframe' => '5-7 days',
                        'features' => [
                            'Complete enterprise application',
                            'Microservices architecture',
                            'Spring Cloud integration',
                            'Security implementation',
                            'Performance optimization',
                            'Docker deployment',
                            'Comprehensive documentation'
                        ]
                    ]
                ],
                'process' => [
                    [
                        'step' => 1,
                        'title' => 'Requirements Analysis',
                        'description' => 'Analyze your Java project requirements and design the optimal architecture.',
                        'icon' => '📋'
                    ],
                    [
                        'step' => 2,
                        'title' => 'Development',
                        'description' => 'Build your Java application using best practices, design patterns, and clean code.',
                        'icon' => '💻'
                    ],
                    [
                        'step' => 3,
                        'title' => 'Testing & Quality',
                        'description' => 'Rigorous testing with JUnit, integration tests, and code quality checks.',
                        'icon' => '🔍'
                    ],
                    [
                        'step' => 4,
                        'title' => 'Delivery & Support',
                        'description' => 'Complete project delivery with documentation and deployment guidance.',
                        'icon' => '📦'
                    ]
                ],
                'testimonials' => [
                    [
                        'name' => 'David Kim',
                        'role' => 'Computer Science Student',
                        'university' => 'Carnegie Mellon',
                        'rating' => 5,
                        'review' => 'I was struggling with my Spring Boot project for weeks. The developer built an amazing REST API with JWT authentication, MySQL database integration, and proper error handling. The code was clean and well-organized. Finally understood how Spring works!',
                        'project' => 'Spring Boot REST API'
                    ],
                    [
                        'name' => 'Sarah Chen',
                        'role' => 'Software Engineering Major',
                        'university' => 'Georgia Tech',
                        'rating' => 5,
                        'review' => 'My Android app project was due in 2 days and I couldn\'t get the backend communication working. They created a perfect Java backend with proper API endpoints, helped me integrate it with my Android app, and even added Firebase push notifications. Lifesaver!',
                        'project' => 'Android App Backend'
                    ],
                    [
                        'name' => 'James Rodriguez',
                        'role' => 'Java Development Bootcamp',
                        'university' => 'Coding Dojo',
                        'rating' => 5,
                        'review' => 'Needed help with a complex multithreading assignment using ExecutorService and CompletableFuture. The expert not only solved the problem but also taught me about proper thread synchronization and concurrent programming patterns. Best investment ever!',
                        'project' => 'Multithreading Application'
                    ]
                ],
                'faq' => [
                    [
                        'question' => 'What Java versions do you support?',
                        'answer' => 'We work with all modern Java versions from Java 8 to the latest Java 21+. We leverage modern features like lambda expressions, streams, modules, records, and pattern matching based on your project requirements.'
                    ],
                    [
                        'question' => 'Can you help with Spring Boot and Spring Framework?',
                        'answer' => 'Yes! We specialize in Spring Boot, Spring MVC, Spring Data JPA, Spring Security, and Spring Cloud. We can build complete microservices architectures and enterprise applications.'
                    ],
                    [
                        'question' => 'Do you provide Android development help?',
                        'answer' => 'Absolutely! We offer Android app development using Java, including activities, fragments, RecyclerView, networking, database (Room, SQLite), Firebase integration, and Material Design.'
                    ],
                    [
                        'question' => 'What about testing and build tools?',
                        'answer' => 'We include comprehensive unit testing with JUnit 5, integration testing, and use Maven or Gradle for build automation. We also set up CI/CD pipelines when needed.'
                    ]
                ]
            ]
        ];

        return $details[$slug] ?? null;
    }
}