@extends('layouts.app')

@section('title', 'Cloud Computing Solutions - Expert Help Available')
@section('description', 'Get professional help with cloud computing projects. Expert cloud engineers available 24/7 for AWS, Azure, GCP, serverless architecture, and scalable cloud solutions.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section 1 -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-10 sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Scale to the Cloud</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Professional Cloud Computing Solutions That Scale
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Get expert help from certified cloud engineers who've architected production systems on AWS, Azure, and GCP that handle millions of requests daily.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="space-y-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">Ever watched your AWS bill spiral to $500 because you left an EC2 instance running? Or stared at Lambda timeout errors you can't debug?</strong> Cloud computing isn't just "putting stuff on the internet" – you're managing auto-scaling groups, load balancers, VPCs with proper subnets, IAM policies that don't accidentally grant admin access to everyone, serverless functions with cold start optimization, and CloudWatch alerts that actually tell you what's broken before users complain. When your EC2 instances randomly terminate, your S3 buckets are misconfigured and leaking data, or your Lambda functions hit memory limits after 30 seconds, panic sets in fast. That's when you need certified cloud architects who've designed systems handling real production traffic.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">Picture submitting a cloud architecture that makes your professor say "This could run in production."</strong> Your AWS deployment features properly configured VPC with public and private subnets, EC2 instances behind Application Load Balancers with health checks, auto-scaling groups that actually scale based on CloudWatch metrics, RDS with automated backups and read replicas, S3 with proper lifecycle policies and versioning, CloudFront CDN for static assets, and comprehensive CloudWatch dashboards with custom metrics. Or your serverless application uses Lambda with proper event sources, API Gateway with request validation, DynamoDB with efficient key design, Step Functions for complex workflows, and SQS queues for decoupled processing. Everything follows Well-Architected Framework principles: cost optimization, security, reliability, performance, and operational excellence. That's the difference between code that runs locally and infrastructure that scales to thousands of concurrent users.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">We don't just deploy to the cloud – we architect scalable, cost-effective solutions.</strong> Need an AWS solution? You'll get Infrastructure as Code with Terraform or CloudFormation, properly structured VPCs with security groups following least privilege, managed services like RDS and ElastiCache instead of self-managed databases, Lambda functions with optimal memory settings and concurrent execution limits, S3 bucket policies that prevent accidental public exposure, IAM roles with minimal permissions, CloudWatch alarms for critical metrics, and cost allocation tags for tracking spend. Building on Azure? Expect Resource Groups organized logically, App Services with auto-scaling, Azure Functions with proper triggers, Cosmos DB or SQL Database with geo-replication, Virtual Networks with NSGs, and Azure Monitor for comprehensive observability. Working with GCP? We deliver Compute Engine with managed instance groups, Cloud Functions optimized for cold starts, Cloud SQL with high availability, proper VPC design, and Stackdriver monitoring.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">Here's a real cloud crisis:</strong> Your cloud application is due in 3 days. EC2 instances keep crashing with no logs. The database connection pool is exhausted. Auto-scaling never triggers. Your AWS bill is $200 and climbing. Security groups are wide open to the internet. You have no idea how to set up CI/CD for deployment. Complete panic. You reach out. Within hours, a certified cloud architect analyzes your infrastructure, fixes the EC2 user data scripts, properly configures RDS connection pooling, sets up CloudWatch alarms that trigger scaling, restricts security groups to necessary ports only, implements blue-green deployment with CodePipeline, and provides Infrastructure as Code so you can recreate everything. We don't just fix immediate issues – we teach you cloud design patterns, cost optimization strategies, security best practices, and monitoring approaches that prevent these problems from recurring.
                            </p>
                        </div>

                        <!-- Feature Highlights -->
                        <div class="grid sm:grid-cols-3 gap-5 mt-8">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-xl dark:bg-blue-950/40 mb-3">⚡</div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1">Serverless Architecture</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">Lambda, Functions, auto-scaling that actually works</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl dark:bg-indigo-950/40 mb-3">🏗️</div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1">Infrastructure as Code</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">Terraform, CloudFormation, reproducible deployments</p>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-xl dark:bg-emerald-950/40 mb-3">💰</div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1">Cost Optimization</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">Right-sizing, reserved instances, budget alerts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Content Section 2 -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-10 sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Trusted by 520+ Cloud Students</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Why Cloud Engineers Choose Our Services
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Real cloud architecture experience, production-proven designs, and cost optimization that keeps your AWS bill from shocking you.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="space-y-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">Imagine your professor reviewing your cloud architecture diagram and being genuinely impressed.</strong> That happens when you work with AWS Certified Solutions Architects, Azure Administrators, and Google Cloud Engineers who've designed systems that process millions of events daily. We know the difference between EC2 and ECS, when to use Lambda versus Fargate, how to properly configure VPC peering versus Transit Gateway, why Aurora is better than RDS MySQL for certain workloads, and how to set up multi-region failover that actually works. We've built e-commerce platforms on AWS handling Black Friday traffic spikes, designed Azure microservices architectures for healthcare providers, and optimized GCP costs for startups burning through VC money. This real-world experience means we deliver cloud solutions that scale, perform well, cost less, and survive actual production incidents.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">What you actually receive is a complete cloud solution package.</strong> Open your delivery to find Infrastructure as Code (Terraform or CloudFormation) with modular, reusable components, network architecture diagrams showing VPCs, subnets, route tables, and security groups, CI/CD pipeline configurations for automated deployment, comprehensive documentation explaining every architectural decision, CloudWatch or equivalent monitoring dashboards with critical alerts, security configurations following CIS benchmarks and Well-Architected Framework, cost analysis breaking down expenses by service with optimization recommendations, and deployment guides so detailed you could hand them to another engineer. Every Lambda function includes proper error handling, logging, and X-Ray tracing. Every database has backup strategies and disaster recovery plans. Every load balancer has SSL certificates and proper health checks. This isn't just passing homework – it's production-ready infrastructure.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">Speed without cloud disasters:</strong> It's midnight. Your cloud project is due in 8 hours. Your EC2 instances are in a public subnet with SSH open to 0.0.0.0/0. Lambda functions time out after 3 seconds. You can't figure out why API Gateway returns 502 errors. The RDS database has no backups configured. Your AWS bill shows $150 for NAT Gateway data transfer you don't understand. Panic mode activated. You contact us. Within 30 minutes, a cloud architect responds with a rescue plan. Within hours, you're deploying fixed infrastructure where EC2 moves to private subnets with bastion hosts, Lambda memory is optimized for actual workload, API Gateway has proper integration responses, RDS is configured with automated backups and read replicas, and NAT Gateway is replaced with VPC endpoints for AWS services. We explain each fix and why it matters for security, reliability, and cost. Understanding cloud architecture patterns makes you valuable in ways frontend developers never are.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">Cloud computing requires thinking in distributed systems.</strong> We teach you why cloud-native applications need different designs – why you use managed services instead of managing servers, how to design for failure with circuit breakers and retry logic, when to use SQS versus SNS versus EventBridge, how to optimize Lambda cold starts, why connection pooling matters for RDS, how to use CloudFront CDN effectively, and how to set up monitoring that actually helps debug issues. You'll understand cost implications of different architectures, security best practices like least privilege IAM and encryption at rest, and operational excellence through automation and observability. This cloud-native mindset is essential for modern software engineering.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900 dark:text-white">The real value is mastering cloud platforms that run the modern internet.</strong> AWS, Azure, and GCP power Netflix, Spotify, Airbnb, and virtually every modern application. Our documentation doesn't just show configurations – it explains the "why" behind architectural decisions, cost trade-offs, performance implications, and security considerations. Students return for more projects because they appreciate learning from engineers who've migrated on-premise systems to the cloud, architected multi-region deployments, optimized cloud costs by 60%, and been on-call when things break at 3 AM. With 520+ cloud applications deployed and 4.8/5 rating, we've proven that expert cloud guidance accelerates your journey from local development to scalable cloud infrastructure that handles real-world traffic.
                            </p>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-5 mt-8">
                            <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-950">
                                <div class="text-2xl font-bold text-emerald-600 dark:text-emerald-400 mb-1">4.8/5</div>
                                <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Cloud Rating</div>
                            </div>
                            <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-950">
                                <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-1">40min</div>
                                <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Avg Response</div>
                            </div>
                            <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-950">
                                <div class="text-2xl font-bold text-sky-600 dark:text-sky-400 mb-1">520+</div>
                                <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Apps Deployed</div>
                            </div>
                            <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-950">
                                <div class="text-2xl font-bold text-cyan-600 dark:text-cyan-400 mb-1">3</div>
                                <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Cloud Platforms</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Cloud Technologies We Master</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Our expert cloud engineers work with AWS, Azure, GCP,
                        and modern cloud technologies to build scalable, reliable solutions.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <!-- Cloud Providers -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Cloud Providers</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">☁️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">AWS</h4>
                            </div>
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">🌩️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Azure</h4>
                            </div>
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">🔵</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Google Cloud</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Serverless & Functions -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Serverless & Functions</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">⚡</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Lambda</h4>
                            </div>
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">🔧</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Azure Functions</h4>
                            </div>
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">🚀</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Cloud Functions</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Containers & Orchestration -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Containers & Orchestration</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">🐳</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Docker</h4>
                            </div>
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">☸️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Kubernetes</h4>
                            </div>
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">📦</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">ECS/EKS</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure as Code -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Infrastructure as Code</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">🏗️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Terraform</h4>
                            </div>
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">📋</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">CloudFormation</h4>
                            </div>
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">⚙️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Pulumi</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Transparent Pricing</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Fair, transparent pricing based on cloud
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Basic Cloud App</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $50</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Serverless functions
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Basic cloud deployment
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    3-24 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Documentation included
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border-2 border-blue-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md relative dark:bg-slate-900">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-blue-600 px-3 py-1 text-[11px] font-semibold text-white">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Scalable Cloud</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $120</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Docker containerization
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Auto-scaling setup
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    24-72 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Load balancing
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    CI/CD pipeline
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Enterprise Cloud</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $250</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Kubernetes orchestration
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Multi-region deployment
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    3-7 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Infrastructure as Code
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Monitoring & logging
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Our Cloud Development Process</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Proven methodology for delivering scalable and
                        reliable cloud solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">1</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Architecture Planning</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">We analyze your requirements and design the optimal cloud architecture for
                            scalability and reliability.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">2</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Infrastructure Setup</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Configure cloud resources, set up containers, and establish infrastructure
                            as code.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">3</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Deployment & Testing</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Deploy applications, implement CI/CD pipelines, and conduct comprehensive
                            testing.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">4</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Monitoring & Delivery</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Set up monitoring, optimize costs, provide documentation, and deliver your
                            cloud solution.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">What Our Clients Say</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Real feedback from students who got help with their
                        cloud computing projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Incredible AWS deployment for my web app! The expert set up Lambda
                            functions, S3 storage, and CloudFront CDN. Everything scales perfectly and the costs are minimal.
                            Outstanding work!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-purple-600 rounded-full flex items-center justify-center text-white text-sm font-bold">M</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Michael R.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Cloud Computing Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Perfect Kubernetes setup for my microservices project! The developer
                            configured auto-scaling, load balancing, and CI/CD pipelines. Deployment is now effortless. Highly
                            recommend!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-blue-600 rounded-full flex items-center justify-center text-white text-sm font-bold">A</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Alex T.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">DevOps Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Excellent Azure serverless architecture! The Functions and Cosmos DB
                            setup handles thousands of requests seamlessly. Great documentation and Infrastructure as Code.
                            Amazing!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-emerald-600 rounded-full flex items-center justify-center text-white text-sm font-bold">E</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Emily C.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Computer Science Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Frequently Asked Questions</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Everything you need to know about our cloud
                        computing service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Which cloud platforms do you support?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">We work with all major cloud providers including AWS, Microsoft Azure,
                            Google Cloud Platform, and DigitalOcean. We can help you choose the best platform for your
                            project requirements and budget.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Can you help with serverless architecture?
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Absolutely! We specialize in serverless solutions using AWS Lambda, Azure
                            Functions, Google Cloud Functions, and more. We can build cost-effective, auto-scaling applications
                            without server management.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Do you provide containerization with Docker and
                            Kubernetes?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Yes! We provide complete containerization services including Docker image
                            creation, Kubernetes cluster setup, orchestration, auto-scaling, and deployment strategies following
                            cloud-native best practices.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Can you help with Infrastructure as Code?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Yes, we use tools like Terraform, CloudFormation, and Pulumi to define your
                            infrastructure as code. This ensures reproducible deployments, version control, and automated
                            infrastructure management.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">What's included in the cloud delivery?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">You'll receive complete deployment scripts, infrastructure code, architecture
                            diagrams, CI/CD pipeline configuration, and detailed documentation. For advanced projects, we also
                            include monitoring setup and cost optimization recommendations.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-14 sm:py-16 bg-slate-900 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl mb-3">Ready to Deploy Your Cloud App?</h2>
                <p class="text-sm text-slate-400 mb-6 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    deployed their cloud projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                    Start Your Cloud Project Today
                </a>
            </div>
        </section>
    </div>
@endsection
