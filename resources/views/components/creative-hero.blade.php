@props([
    'service' => null,
    'title' => null,
    'subtitle' => null,
    'serviceType' => null,
    'defaultSubject' => null,
    'stats' => null,
    'features' => null,
    'breadcrumbs' => null,
])

@php
    $orderPageSubjects = [];
    $subjectsPath = base_path('subjects.json');

    if (file_exists($subjectsPath)) {
        $subjectsList = json_decode(file_get_contents($subjectsPath), true);

        if (is_array($subjectsList)) {
            asort($subjectsList);
            $orderPageSubjects = array_values(array_unique($subjectsList));
        }
    }

    $writingSubjects = $orderPageSubjects ?: ['Essay Writing','Research Paper','Dissertation / Thesis','Case Study','Coursework','Literature Review','Book Report','Nursing','Law','MBA','History','Psychology','Sociology','English','Philosophy','Other'];
    $technicalSubjects = $orderPageSubjects ?: ['Python','Java','C / C++','JavaScript / TypeScript','Data Science','Machine Learning','Database / SQL','Mathematics','Statistics','Electrical Engineering','Mechanical Engineering','Civil Engineering','Physics','Chemistry','Accounting / Finance','Other'];
    $onlineClassSubjects = ['Business / MBA','Computer Science','Nursing / Healthcare','Mathematics','English / Writing','History / Social Sciences','Psychology','Law','Accounting','Engineering','Science','Other'];

    // Determine the service object type (Array or Object)
    $serviceIsObj = is_object($service);
    $serviceIsArray = is_array($service);

    // Extract name/title
    if (!$title) {
        if ($serviceIsObj) {
            $title = $service->details->hero_title ?? $service->name;
        } elseif ($serviceIsArray) {
            $title = $service['name'] ?? 'Assignment Help USA for Students by Expert Academic Writers';
        } else {
            $title = 'Assignment Help USA for Students by Expert Academic Writers';
        }
    }

    // Extract description/subtitle
    if (!$subtitle) {
        if ($serviceIsObj) {
            $subtitle = $service->details->hero_description ?? $service->short_description;
        } elseif ($serviceIsArray) {
            $subtitle = $service['description'] ?? 'Fast, Confidential, and High-Quality <span class="text-[#f16700] font-bold">Assignment Writing Service</span>';
        } else {
            $subtitle = 'Fast, Confidential, and High-Quality <span class="text-[#f16700] font-bold">Assignment Writing Service</span>';
        }
    }

    // Extract rating, orders, turnaround stats
    if (!$stats) {
        $rating = '4.9';
        $orders = '50K+';
        $delivery = '3-72 Hours';

        if ($serviceIsObj) {
            $rating = $service->rating ?? '4.9';
            $orders = ($service->orders_completed ?? 500) . '+';
            $delivery = $service->turnaround ?? '3-72 Hours';
        } elseif ($serviceIsArray) {
            $rating = $service['rating'] ?? '4.9';
            $orders = ($service['orders_completed'] ?? 500) . '+';
            $delivery = $service['turnaround'] ?? '3-72 Hours';
        }

        $stats = [
            [$orders, 'Orders Completed'],
            [$rating, 'Average Rating'],
            [$delivery, 'Delivery Speed']
        ];
    }

    // Determine default service type tab (Writing or Technical)
    if (!$serviceType) {
        if ($serviceIsArray) {
            // All programming-services are technical
            $serviceType = 'Technical';
        } else {
            // Assignment services are Writing by default
            $serviceType = 'Writing';
        }
    }

    // Preselect subject based on service name if not specified
    if (!$defaultSubject) {
        if ($serviceIsObj) {
            $defaultSubject = $service->name;
        } elseif ($serviceIsArray) {
            $defaultSubject = $service['name'] ?? null;
        }
    }

    // Build breadcrumbs if not provided and service is set
    if (!$breadcrumbs && $service) {
        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('home')],
        ];
        if ($serviceIsObj) {
            $breadcrumbs[] = ['label' => $service->name, 'url' => ''];
        } elseif ($serviceIsArray) {
            $breadcrumbs[] = ['label' => 'Programming Help', 'url' => route('services.programming.index')];
            $breadcrumbs[] = ['label' => $service['name'] ?? 'Service Details', 'url' => ''];
        }
    }

    if (!$features) {
        if ($serviceIsObj && !empty($service->features)) {
            $features = is_string($service->features) ? json_decode($service->features, true) : $service->features;
        } elseif ($serviceIsArray && !empty($service['features'])) {
            $features = is_string($service['features']) ? json_decode($service['features'], true) : $service['features'];
        }
        
        // Fallback if still empty or not array
        if (empty($features) || !is_array($features)) {
            $features = ['Guaranteed Grade or Refund','100% AI-Free Content','24/7 Live Support','Free Turnitin Report','On-Time Delivery Promise'];
        }
    }

    // Check if default subject is in the predefined lists
    $isInWriting = $defaultSubject && in_array($defaultSubject, $writingSubjects);
    $isInTechnical = $defaultSubject && in_array($defaultSubject, $technicalSubjects);
    $isInOnlineClass = $defaultSubject && in_array($defaultSubject, $onlineClassSubjects);
@endphp

<section class="ahusa-hero relative flex items-start overflow-hidden py-24 max-lg:py-20 max-sm:py-[72px]" data-creative-hero>
    <div class="ahusa-dot-grid absolute inset-0 z-0 pointer-events-none opacity-50"></div>
    <div class="ahusa-radial absolute inset-0 z-[1] pointer-events-none"></div>

    <div class="relative z-[2] w-full max-w-[1260px] mx-auto px-8 max-lg:px-5 max-sm:px-3.5 flex items-start gap-11 max-lg:flex-col max-lg:gap-7 max-sm:gap-[22px] min-h-[calc(100vh-96px)] max-lg:min-h-0">
        <div class="flex-1 min-w-0 flex flex-col gap-5 pt-2 max-lg:items-center max-lg:text-center max-lg:pt-0 max-lg:gap-4">
            @if (!empty($breadcrumbs))
                <nav class="mb-2 self-start max-lg:mx-auto">
                    <div class="flex items-center space-x-2 text-slate-500 dark:text-slate-400 text-[11px] font-bold uppercase tracking-wider">
                        @foreach ($breadcrumbs as $bc)
                            @if (!$loop->first)
                                <span>›</span>
                            @endif
                            @if ($bc['url'])
                                <a href="{{ $bc['url'] }}" class="hover:text-[#f16700] transition-colors">{{ $bc['label'] }}</a>
                            @else
                                <span class="text-[var(--sub-clr)] font-bold">{{ $bc['label'] }}</span>
                            @endif
                        @endforeach
                    </div>
                </nav>
            @endif

            <h1 class="text-[clamp(22px,2.8vw,40px)] font-extrabold leading-tight tracking-tight m-0 break-words text-[var(--h1-clr)] max-sm:text-[clamp(22px,7.5vw,30px)] max-sm:leading-[1.22]">
                {!! $title !!}
            </h1>

            <p class="text-[15px] leading-relaxed m-0 text-[var(--sub-clr)] max-sm:text-[13.5px]">
                {!! $subtitle !!}
            </p>

            <div class="flex items-center gap-4 flex-wrap max-lg:justify-center max-sm:gap-[10px]">
                @foreach ($stats as $index => $stat)
                    @if ($index > 0)
                        <div class="w-px h-9 shrink-0 bg-[var(--stat-div)] max-lg:hidden"></div>
                    @endif
                    <div class="flex flex-col items-center gap-px">
                        <span class="text-[20px] font-extrabold tracking-tight text-[var(--stat-num)] max-sm:text-[18px]">{{ $stat[0] }}</span>
                        <span class="text-[11px] font-medium whitespace-nowrap text-[var(--stat-lbl)]">{{ $stat[1] }}</span>
                    </div>
                @endforeach
            </div>

            <ul class="list-none m-0 p-0 flex flex-col gap-[9px] max-lg:items-start max-lg:text-left max-lg:w-full max-lg:max-w-[480px]">
                @foreach ($features as $feature)
                    <li class="flex items-center gap-[10px] text-[13.5px] font-medium text-[var(--feat-clr)]">
                        <span class="w-5 h-5 shrink-0 rounded-full bg-[#f16700] flex items-center justify-center text-white text-[11px] font-extrabold">✓</span>
                        {{ $feature }}
                    </li>
                @endforeach
            </ul>

            <div class="flex flex-col gap-2">
                <span class="text-[10.5px] font-semibold uppercase tracking-[0.06em] text-[var(--unis-lbl)]">Trusted by students at:</span>
                <div class="flex flex-wrap gap-[6px]">
                    @foreach (['Harvard','MIT','Stanford','Oxford','Yale'] as $university)
                        <span class="rounded-[6px] px-[10px] py-1 text-[11.5px] font-bold bg-[var(--uni-bg)] border border-[var(--uni-bdr)] text-[var(--uni-clr)]">{{ $university }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="w-full lg:w-[480px] lg:flex-none">
            <div class="ahusa-card-shimmer rounded-[20px] p-[22px] max-sm:p-[14px] max-sm:rounded-2xl relative overflow-visible bg-[var(--ahusa-card-bg)] border border-[var(--ahusa-card-bdr)] shadow-[var(--ahusa-card-shadow)] transition-[background,box-shadow] duration-300">
                <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-[11px] max-sm:gap-[9px]" data-hero-form>
                    @csrf
                    <input type="hidden" name="source" value="creative_hero">
                    <input type="hidden" name="service_type" value="Writing" data-service-input>
                    <input type="hidden" name="subject" data-subject-input>
                    <input type="hidden" name="title" data-title-input>
                    <input type="hidden" name="pages" value="1" data-pages-input>
                    <input type="hidden" name="word_count" value="250" data-word-count-input>
                    <input type="hidden" name="description" data-description-input>
                    <input type="hidden" name="difficulty" data-difficulty-input>

                    <div class="flex flex-col gap-2">
                        <h2 class="text-[16px] max-sm:text-[15px] font-extrabold leading-[1.35] m-0 text-center max-lg:text-left text-[var(--title-clr)] break-words">
                            Get Expert Assignment Help | Place Your Order Now
                        </h2>
                        <div class="flex items-center justify-center max-lg:justify-start gap-[10px] flex-wrap">
                            @foreach (['Guaranteed Grade or Refund','No AI','24/7 Support'] as $item)
                                <span class="flex items-center gap-[3px] text-[11px] font-semibold text-[var(--trust-clr)]">
                                    <span class="text-green-500 font-extrabold mr-0.5">✓</span>{{ $item }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center flex-wrap gap-3 max-sm:gap-2 border-t border-b border-t-[var(--svc-bdr)] border-b-[var(--svc-bdr)] py-2 max-sm:py-[7px]">
                        @foreach (['Writing','Technical','Online Class'] as $type)
                            <button type="button" class="ahusa-service-tab flex items-center gap-[6px] cursor-pointer text-[13px] max-sm:text-[12.5px] font-semibold select-none transition-colors duration-150 {{ $type === $serviceType ? 'is-active' : '' }}" data-service-tab="{{ $type }}">
                                <span class="ahusa-service-ring w-[17px] h-[17px] rounded-full shrink-0 inline-flex items-center justify-center border-2 transition-[border-color] duration-150"><span></span></span>
                                {{ $type }}
                                <span class="relative inline-flex items-center cursor-help text-slate-400" title="{{ $type === 'Writing' ? 'Essays, reports, dissertations, case studies and more.' : ($type === 'Technical' ? 'Coding, data science, math, engineering and science problems.' : 'Online courses, quizzes, discussions and assignments.') }}">
                                    <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="1.5"/><text x="10" y="14.5" text-anchor="middle" font-size="11" fill="currentColor" font-family="sans-serif" font-weight="700">i</text></svg>
                                </span>
                            </button>
                        @endforeach
                    </div>

                    <div class="{{ $serviceType === 'Writing' ? 'flex' : 'hidden' }} flex-col gap-2" data-service-panel="Writing">
                        <div class="ahusa-field-row">
                            <div class="ahusa-field-col">
                                <input type="email" name="email" required placeholder="Email" class="ahusa-input">
                            </div>
                            <div class="ahusa-field-col">
                                @include('components.creative-hero-phone')
                            </div>
                        </div>
                        <div class="ahusa-field-row items-start">
                            <div class="ahusa-field-col flex flex-col gap-2">
                                <select class="ahusa-select" data-subject-select>
                                    <option value="">Subject / Course Code</option>
                                    @if ($defaultSubject && !$isInWriting && $serviceType === 'Writing')
                                        <option selected>{{ $defaultSubject }}</option>
                                    @endif
                                    @foreach ($writingSubjects as $sub)
                                        <option {{ ($defaultSubject && $isInWriting && strtolower($defaultSubject) === strtolower($sub)) ? 'selected' : '' }}>{{ $sub }}</option>
                                    @endforeach
                                </select>
                                @include('components.creative-hero-deadline')
                                @include('components.creative-hero-pages')
                            </div>
                            <div class="ahusa-field-col flex flex-col gap-2">@include('components.creative-hero-description')</div>
                        </div>
                    </div>

                    <div class="{{ $serviceType === 'Technical' ? 'flex' : 'hidden' }} flex-col gap-2" data-service-panel="Technical">
                        <div class="ahusa-field-row">
                            <div class="ahusa-field-col">
                                <input type="email" name="email" required placeholder="Email" class="ahusa-input">
                            </div>
                            <div class="ahusa-field-col">
                                @include('components.creative-hero-phone')
                            </div>
                        </div>
                        <div class="ahusa-field-row">
                            <select class="ahusa-select" data-subject-select>
                                <option value="">Select Technology / Subject</option>
                                @if ($defaultSubject && !$isInTechnical && $serviceType === 'Technical')
                                    <option selected>{{ $defaultSubject }}</option>
                                @endif
                                @foreach ($technicalSubjects as $sub)
                                    <option {{ ($defaultSubject && $isInTechnical && strtolower($defaultSubject) === strtolower($sub)) ? 'selected' : '' }}>{{ $sub }}</option>
                                @endforeach
                            </select>
                            <select class="ahusa-select" data-difficulty-select>
                                <option value="">Difficulty Level</option>
                                <option>Beginner / Undergraduate</option>
                                <option>Intermediate / Graduate</option>
                                <option>Advanced / PhD Level</option>
                            </select>
                        </div>
                        <div class="ahusa-field-row items-start">
                            <div class="ahusa-field-col flex flex-col gap-2">
                                @include('components.creative-hero-deadline')
                                <div class="ahusa-box">
                                    <span class="ahusa-box-title">Delivery Format</span>
                                    <div class="flex flex-col gap-[5px]">
                                        @foreach (['Code Only','Code + Report','Code + Explanation'] as $format)
                                            <label class="flex items-center gap-[6px] cursor-pointer">
                                                <input type="radio" name="delivery_format_ui" value="{{ $format }}" {{ $format === 'Code Only' ? 'checked' : '' }} class="accent-[#f16700] w-[14px] h-[14px] cursor-pointer shrink-0 outline-none">
                                                <span class="text-[12.5px] text-[var(--opt-txt)] select-none">{{ $format }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="ahusa-field-col flex flex-col gap-2">@include('components.creative-hero-description')</div>
                        </div>
                    </div>

                    <div class="{{ $serviceType === 'Online Class' ? 'flex' : 'hidden' }} flex-col gap-2" data-service-panel="Online Class">
                        <div class="ahusa-field-row">
                            <div class="ahusa-field-col">
                                <input type="email" name="email" required placeholder="Email" class="ahusa-input">
                            </div>
                            <div class="ahusa-field-col">
                                @include('components.creative-hero-phone')
                            </div>
                        </div>
                        <div class="ahusa-field-row">
                            <select class="ahusa-select" data-subject-select>
                                <option value="">Course / Subject Name</option>
                                @if ($defaultSubject && !$isInOnlineClass && $serviceType === 'Online Class')
                                    <option selected>{{ $defaultSubject }}</option>
                                @endif
                                @foreach ($onlineClassSubjects as $sub)
                                    <option {{ ($defaultSubject && $isInOnlineClass && strtolower($defaultSubject) === strtolower($sub)) ? 'selected' : '' }}>{{ $sub }}</option>
                                @endforeach
                            </select>
                            <select class="ahusa-select" data-class-duration>
                                <option value="">Class Duration</option>
                                @foreach (['1 Week','2 Weeks','1 Month','2 Months','Full Semester','Full Year'] as $duration)
                                    <option>{{ $duration }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="ahusa-field-row items-start">
                            <div class="ahusa-field-col flex flex-col gap-2">
                                <input type="url" placeholder="Course Platform URL (optional)" class="ahusa-input" data-class-url>
                                @include('components.creative-hero-deadline')
                                <div class="ahusa-box">
                                    <span class="ahusa-box-title">What needs to be done?</span>
                                    <div class="flex flex-col gap-[5px]">
                                        @foreach (['Weekly Assignments','Quizzes & Tests','Discussion Posts','Final Exam','Everything'] as $task)
                                            <label class="flex items-center gap-[6px] cursor-pointer">
                                                <input type="checkbox" value="{{ $task }}" {{ $task === 'Everything' ? 'checked' : '' }} class="accent-[#f16700] w-[14px] h-[14px] cursor-pointer shrink-0 outline-none" data-class-task>
                                                <span class="text-[12.5px] text-[var(--opt-txt)] select-none">{{ $task }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="ahusa-field-col flex flex-col gap-2">@include('components.creative-hero-description')</div>
                        </div>
                    </div>

                    <input type="file" name="files[]" multiple accept=".pdf,.doc,.docx,.zip" class="hidden" data-file-input>

                    <label class="flex items-start gap-2 cursor-pointer text-[11.5px] font-medium leading-[1.45] select-none text-[var(--terms-clr)]">
                        <input type="checkbox" class="sr-only" data-terms>
                        <span class="ahusa-check w-[18px] h-[18px] rounded-[4px] shrink-0 mt-px flex items-center justify-center cursor-pointer transition-[background,border-color] duration-150 border-2"></span>
                        I accept the T&amp;C, agree to receive offers &amp; updates
                    </label>

                    <p class="hidden rounded-[10px] border border-red-400/30 bg-red-500/10 px-3 py-2 text-[12px] font-semibold text-red-500" data-form-error></p>

                    <button type="submit" disabled class="ahusa-submit w-full py-[13px] px-5 bg-gradient-to-br from-[#f16700] to-[#ff8c00] text-white text-[14px] max-sm:text-[13.5px] font-extrabold rounded-xl cursor-pointer tracking-[0.02em] border-0 transition-[transform,box-shadow,opacity] duration-200 shadow-[0_4px_20px_rgba(241,103,0,0.32)] outline-none disabled:opacity-55 disabled:cursor-not-allowed disabled:!transform-none hover:enabled:-translate-y-0.5 hover:enabled:shadow-[0_8px_26px_rgba(241,103,0,0.44)]">
                        Get Writing Help Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@once
    <style>
        .ahusa-hero {
            --ahusa-bg: linear-gradient(135deg,#f5f0e8 0%,#fdf8f0 40%,#f9f4ec 100%);
            --ahusa-dot: #d1c9bd;
            --ahusa-glow1: rgba(255,200,120,0.18);
            --ahusa-glow2: rgba(255,230,170,0.14);
            --ahusa-card-bg: #ffffff;
            --ahusa-card-bdr: rgba(0,0,0,0.05);
            --ahusa-card-shadow: 0 8px 50px rgba(0,0,0,0.11),0 2px 15px rgba(0,0,0,0.06);
            --i-bg: #f8fafc;
            --i-bdr: #e2e8f0;
            --i-clr: #1e293b;
            --i-ph: #94a3b8;
            --i-fbg: #ffffff;
            --ph-bg: #f8fafc;
            --ph-bdr: #e2e8f0;
            --ph-sep: #e2e8f0;
            --ph-clr: #1e293b;
            --dl-bg: #f8fafc;
            --dl-bdr: #e2e8f0;
            --dl-dbg: #ffffff;
            --dl-dbdr: #e2e8f0;
            --dl-hov: #fff5ed;
            --dl-lbl: #94a3b8;
            --dl-muted: #64748b;
            --pg-bg: #f8fafc;
            --pg-bdr: #e2e8f0;
            --pg-btn-bg: #ffffff;
            --pg-btn-bdr: #e2e8f0;
            --pg-btn-clr: #64748b;
            --pg-lbl: #94a3b8;
            --pg-num: #1e293b;
            --pg-wrd: #94a3b8;
            --desc-bg: #f8fafc;
            --desc-bdr: #e2e8f0;
            --desc-clr: #1e293b;
            --att-bg: #fafafa;
            --att-bdr: #f0ede8;
            --att-clr: #64748b;
            --opt-txt: #475569;
            --svc-bdr: #ede8e0;
            --badge-bg: rgba(255,255,255,0.85);
            --badge-bdr: rgba(0,0,0,0.08);
            --badge-clr: #2c2c2c;
            --h1-clr: #1a1a1a;
            --sub-clr: #555555;
            --stat-num: #1a1a1a;
            --stat-lbl: #888888;
            --stat-div: #e0d9d0;
            --feat-clr: #333333;
            --uni-bg: rgba(255,255,255,0.8);
            --uni-bdr: #e8e0d5;
            --uni-clr: #555555;
            --unis-lbl: #888888;
            --title-clr: #1a1a1a;
            --trust-clr: #555555;
            --svc-clr: #64748b;
            --terms-clr: #64748b;
            --ring-bdr: #cbd5e1;
            --chk-bdr: #cbd5e1;
            background: var(--ahusa-bg);
        }
        .dark .ahusa-hero {
            --ahusa-bg: linear-gradient(135deg,#0f172a 0%,#1a2537 50%,#0f172a 100%);
            --ahusa-dot: #1e3a5f;
            --ahusa-glow1: rgba(241,103,0,0.07);
            --ahusa-glow2: rgba(251,146,60,0.04);
            --ahusa-card-bg: #1e293b;
            --ahusa-card-bdr: rgba(255,255,255,0.07);
            --ahusa-card-shadow: 0 12px 60px rgba(0,0,0,0.55),0 2px 15px rgba(0,0,0,0.3);
            --i-bg: #0f172a;
            --i-bdr: #2d3f55;
            --i-clr: #e2e8f0;
            --i-ph: #4a5e75;
            --i-fbg: #0c1524;
            --ph-bg: #0f172a;
            --ph-bdr: #2d3f55;
            --ph-sep: #2d3f55;
            --ph-clr: #e2e8f0;
            --dl-bg: #0f172a;
            --dl-bdr: #2d3f55;
            --dl-dbg: #1a2537;
            --dl-dbdr: #2d3f55;
            --dl-hov: rgba(241,103,0,0.18);
            --dl-lbl: #4a5e75;
            --dl-muted: #94a3b8;
            --pg-bg: #0f172a;
            --pg-bdr: #2d3f55;
            --pg-btn-bg: #1e293b;
            --pg-btn-bdr: #3a4f66;
            --pg-btn-clr: #94a3b8;
            --pg-lbl: #4a5e75;
            --pg-num: #e2e8f0;
            --pg-wrd: #4a5e75;
            --desc-bg: #0f172a;
            --desc-bdr: #2d3f55;
            --desc-clr: #e2e8f0;
            --att-bg: #141f2e;
            --att-bdr: #2d3f55;
            --att-clr: #64748b;
            --opt-txt: #cbd5e1;
            --svc-bdr: #2d3f55;
            --badge-bg: rgba(14,22,38,0.85);
            --badge-bdr: rgba(255,255,255,0.1);
            --badge-clr: #e2e8f0;
            --h1-clr: #f1f5f9;
            --sub-clr: #94a3b8;
            --stat-num: #f1f5f9;
            --stat-lbl: #4a5e75;
            --stat-div: #1e3a5f;
            --feat-clr: #cbd5e1;
            --uni-bg: rgba(15,23,42,0.6);
            --uni-bdr: #2d3f55;
            --uni-clr: #94a3b8;
            --unis-lbl: #4a5e75;
            --title-clr: #f1f5f9;
            --trust-clr: #94a3b8;
            --svc-clr: #64748b;
            --terms-clr: #94a3b8;
            --ring-bdr: #3a4f66;
            --chk-bdr: #3a4f66;
        }
        .ahusa-dot-grid {
            background-image: radial-gradient(var(--ahusa-dot) 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .ahusa-radial {
            background:
                radial-gradient(ellipse 60% 50% at 8% 55%, var(--ahusa-glow1) 0%, transparent 70%),
                radial-gradient(ellipse 50% 40% at 92% 18%, var(--ahusa-glow2) 0%, transparent 70%);
        }
        .ahusa-card-shimmer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #f16700, #ff9a00, #f16700);
            background-size: 200% 100%;
            animation: ahusaShimmer 3s linear infinite;
        }
        .ahusa-input,
        .ahusa-select {
            display: block;
            width: 100%;
            min-width: 0;
            height: 41px;
            padding: 0 0.75rem;
            border: 1.5px solid var(--i-bdr);
            border-radius: 10px;
            color: var(--i-clr);
            background-color: var(--i-bg);
            font-size: 13px;
            outline: none;
            box-shadow: none;
            transition: border-color 180ms, background 180ms, box-shadow 180ms;
        }
        .ahusa-input::placeholder { color: var(--i-ph); }
        .ahusa-input:focus,
        .ahusa-select:focus {
            border-color: #f16700;
            background-color: var(--i-fbg);
            box-shadow: 0 0 0 3px rgba(241,103,0,0.13);
        }
        .ahusa-select {
            cursor: pointer;
            appearance: none;
            padding-right: 2rem;
            background-image: url("data:image/svg+xml,%3Csvg%20width%3D'10'%20height%3D'6'%20viewBox%3D'0%200%2010%206'%20fill%3D'none'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%3E%3Cpath%20d%3D'M1%201L5%205L9%201'%20stroke%3D'%2394a3b8'%20stroke-width%3D'1.5'%20stroke-linecap%3D'round'%20stroke-linejoin%3D'round'%2F%3E%3C%2Fsvg%3E");
            background-repeat: no-repeat;
            background-position: right 11px center;
        }
        .ahusa-field-row {
            display: flex;
            gap: 0.5rem;
        }
        .ahusa-field-col {
            flex: 1 1 0%;
            min-width: 0;
        }
        .ahusa-email-input {
            flex: 3;
        }
        .ahusa-box {
            border: 1.5px solid var(--pg-bdr);
            border-radius: 10px;
            background: var(--pg-bg);
            padding: 7px 0.75rem;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }
        .ahusa-box-title {
            font-size: 9.5px;
            font-weight: 700;
            color: var(--pg-lbl);
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }
        .ahusa-service-tab {
            color: var(--svc-clr);
        }
        .ahusa-service-tab .ahusa-service-ring {
            border-color: var(--ring-bdr);
        }
        .ahusa-service-tab.is-active {
            color: #f16700;
        }
        .ahusa-service-tab.is-active .ahusa-service-ring {
            border-color: #f16700;
        }
        .ahusa-service-tab.is-active .ahusa-service-ring span {
            width: 7px;
            height: 7px;
            border-radius: 9999px;
            background: #f16700;
        }
        .ahusa-check {
            background: var(--ahusa-card-bg);
            border-color: var(--chk-bdr);
        }
        .ahusa-check.is-checked {
            background: #f16700;
            border-color: #f16700;
        }
        .ahusa-check.is-checked::after {
            content: '';
            width: 10px;
            height: 6px;
            border-left: 2px solid #fff;
            border-bottom: 2px solid #fff;
            transform: rotate(-45deg) translate(1px, -1px);
        }
        .ahusa-deadline-calendar {
            position: absolute;
            top: calc(100% + 4px);
            left: 0;
            z-index: 60;
            width: min(430px, calc(100vw - 28px));
            max-width: none;
        }
        .ahusa-deadline-calendar__body {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 118px;
        }
        .ahusa-deadline-calendar__date {
            min-width: 0;
            padding: 10px 12px 12px;
        }
        .ahusa-deadline-calendar__weekdays,
        .ahusa-deadline-calendar [data-deadline-days] {
            display: grid;
            grid-template-columns: repeat(7, minmax(0, 1fr));
            gap: 4px;
        }
        .ahusa-deadline-calendar__weekdays {
            margin-bottom: 6px;
        }
        .ahusa-deadline-calendar__weekdays span {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 1.65rem;
            color: var(--dl-muted);
            font-size: 11px;
            font-weight: 800;
            line-height: 1;
            white-space: nowrap;
        }
        .ahusa-deadline-calendar [data-deadline-days] span {
            min-width: 0;
            height: 1.9rem;
        }
        .ahusa-deadline-calendar [data-deadline-days] button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-width: 0;
            height: 1.9rem;
            padding: 0;
            border: 0;
            border-radius: 8px;
            background: transparent;
            color: var(--dl-muted);
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            transition: background 150ms, color 150ms;
        }
        .ahusa-deadline-calendar [data-deadline-days] button:not(:disabled):hover,
        .ahusa-deadline-calendar [data-deadline-times] button:not(:disabled):hover {
            background: var(--dl-hov);
            color: #f16700;
        }
        .ahusa-deadline-calendar [data-deadline-days] button.is-selected,
        .ahusa-deadline-calendar [data-deadline-times] button.is-selected {
            background: #f16700;
            color: #fff;
        }
        .ahusa-deadline-calendar [data-deadline-days] button:disabled,
        .ahusa-deadline-calendar [data-deadline-times] button:disabled {
            cursor: not-allowed;
            color: var(--dl-lbl);
            opacity: 0.4;
        }
        .ahusa-deadline-calendar__time {
            min-width: 0;
            border-left: 1px solid var(--dl-dbdr);
            background: var(--dl-dbg);
        }
        .ahusa-deadline-calendar [data-deadline-times] {
            display: grid;
            grid-template-columns: 1fr;
            max-height: 224px;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #f16700 transparent;
        }
        .ahusa-deadline-calendar [data-deadline-times] button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-height: 29px;
            padding: 0 0.65rem;
            border: 0;
            background: transparent;
            color: var(--dl-muted);
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            white-space: nowrap;
            transition: background 150ms, color 150ms;
        }
        .ahusa-deadline-calendar [data-deadline-times]::-webkit-scrollbar {
            width: 7px;
        }
        .ahusa-deadline-calendar [data-deadline-times]::-webkit-scrollbar-thumb {
            background: #f16700;
            border-radius: 999px;
        }
        @media (max-width: 420px) {
            .ahusa-deadline-calendar {
                width: min(330px, calc(100vw - 28px));
            }
            .ahusa-deadline-calendar__body {
                grid-template-columns: 1fr;
            }
            .ahusa-deadline-calendar__date {
                padding: 8px 10px 10px;
            }
            .ahusa-deadline-calendar__weekdays,
            .ahusa-deadline-calendar [data-deadline-days] {
                gap: 4px;
            }
            .ahusa-deadline-calendar__time {
                border-top: 1px solid var(--dl-dbdr);
                border-left: 0;
            }
            .ahusa-deadline-calendar [data-deadline-days] span {
                height: 1.7rem;
            }
            .ahusa-deadline-calendar [data-deadline-days] button {
                height: 1.7rem;
                border-radius: 7px;
                font-size: 11.5px;
            }
            .ahusa-deadline-calendar [data-deadline-times] {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                max-height: 84px;
            }
            .ahusa-deadline-calendar [data-deadline-times] button {
                min-height: 26px;
                font-size: 11.5px;
            }
        }
        .ahusa-hero input[type="datetime-local"] {
            color-scheme: light;
        }
        .dark .ahusa-hero input[type="datetime-local"] {
            color-scheme: dark;
        }
        @media (max-width: 768px) {
            .ahusa-field-row {
                flex-direction: column;
                align-items: stretch;
            }
            .ahusa-field-col,
            .ahusa-email-input {
                flex: none;
            }
        }
        @keyframes ahusaShimmer { 0% { background-position: 0% 0%; } 100% { background-position: 200% 0%; } }
        @keyframes ahusaPulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(34,197,94,0.35); }
            50% { box-shadow: 0 0 0 5px rgba(34,197,94,0); }
        }
        .ahusa-live-dot { animation: ahusaPulse 2s infinite; }
    </style>
    @push('scripts')
        <script>
            (() => {
                const serviceLabels = {
                    Writing: 'Get Writing Help Now',
                    Technical: 'Get Technical Help Now',
                    'Online Class': 'Get Class Help Now'
                };

                const formatDeadline = value => {
                    if (!value) return 'Select deadline';
                    const date = new Date(value);
                    if (Number.isNaN(date.getTime())) return 'Select deadline';
                    return new Intl.DateTimeFormat([], {
                        weekday: 'short',
                        month: 'short',
                        day: 'numeric',
                        hour: 'numeric',
                        minute: '2-digit'
                    }).format(date);
                };

                const defaultDeadline = () => {
                    const date = new Date(Date.now() + 24 * 60 * 60 * 1000);
                    date.setHours(23, 0, 0, 0);
                    const pad = value => String(value).padStart(2, '0');
                    return `${date.getFullYear()}-${pad(date.getMonth() + 1)}-${pad(date.getDate())}T${pad(date.getHours())}:${pad(date.getMinutes())}`;
                };

                const padDate = value => String(value).padStart(2, '0');
                const toLocalDateTime = date => `${date.getFullYear()}-${padDate(date.getMonth() + 1)}-${padDate(date.getDate())}T${padDate(date.getHours())}:${padDate(date.getMinutes())}`;
                const parseLocalDateTime = value => {
                    const date = value ? new Date(value) : null;
                    return date && !Number.isNaN(date.getTime()) ? date : null;
                };
                const sameDate = (a, b) => a && b && a.getFullYear() === b.getFullYear() && a.getMonth() === b.getMonth() && a.getDate() === b.getDate();
                const startOfDay = date => new Date(date.getFullYear(), date.getMonth(), date.getDate());
                const timeLabel = (hour, minute) => {
                    const date = new Date();
                    date.setHours(hour, minute, 0, 0);
                    return date.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' });
                };
                const buildTimes = () => {
                    const times = [];
                    for (let hour = 0; hour < 24; hour += 1) {
                        for (let minute = 0; minute < 60; minute += 30) {
                            times.push({ hour, minute, label: timeLabel(hour, minute) });
                        }
                    }
                    return times;
                };
                const deadlineTimes = buildTimes();

                document.querySelectorAll('[data-creative-hero]').forEach(hero => {
                    const form = hero.querySelector('[data-hero-form]');
                    const serviceInput = form.querySelector('[data-service-input]');
                    const subjectInput = form.querySelector('[data-subject-input]');
                    const titleInput = form.querySelector('[data-title-input]');
                    const pagesInput = form.querySelector('[data-pages-input]');
                    const wordCountInput = form.querySelector('[data-word-count-input]');
                    const descriptionInput = form.querySelector('[data-description-input]');
                    const difficultyInput = form.querySelector('[data-difficulty-input]');
                    const submit = form.querySelector('.ahusa-submit');
                    const terms = form.querySelector('[data-terms]');
                    const fileInput = form.querySelector('[data-file-input]');
                    const errorBox = form.querySelector('[data-form-error]');
                    let activeService = 'Writing';
                    let pages = 1;

                    const activePanel = () => form.querySelector(`[data-service-panel="${activeService}"]`);
                    const activeSubject = () => activePanel().querySelector('[data-subject-select]');
                    const activeDeadline = () => activePanel().querySelector('[data-deadline-input]');
                    const activePhone = () => activePanel().querySelector('[data-phone]');

                    const setDeadlineValue = (wrap, date) => {
                        const input = wrap.querySelector('[data-deadline-input]');
                        input.value = toLocalDateTime(date);
                        input.dispatchEvent(new Event('input', { bubbles: true }));
                    };

                    const renderDeadlinePicker = wrap => {
                        const input = wrap.querySelector('[data-deadline-input]');
                        const days = wrap.querySelector('[data-deadline-days]');
                        const times = wrap.querySelector('[data-deadline-times]');
                        const monthLabel = wrap.querySelector('[data-deadline-month]');
                        const now = new Date();
                        const selected = parseLocalDateTime(input.value) || parseLocalDateTime(defaultDeadline());
                        const view = wrap._deadlineView || new Date(selected.getFullYear(), selected.getMonth(), 1);
                        const first = new Date(view.getFullYear(), view.getMonth(), 1);
                        const firstDay = first.getDay();
                        const daysInMonth = new Date(view.getFullYear(), view.getMonth() + 1, 0).getDate();

                        monthLabel.textContent = first.toLocaleString([], { month: 'long', year: 'numeric' });
                        days.innerHTML = '';

                        for (let index = 0; index < firstDay; index += 1) {
                            days.appendChild(document.createElement('span'));
                        }

                        for (let day = 1; day <= daysInMonth; day += 1) {
                            const button = document.createElement('button');
                            const date = new Date(view.getFullYear(), view.getMonth(), day, selected.getHours(), selected.getMinutes(), 0, 0);
                            const disabled = startOfDay(date) < startOfDay(now);
                            button.type = 'button';
                            button.textContent = String(day);
                            button.disabled = disabled;
                            button.className = sameDate(date, selected) ? 'is-selected' : '';
                            button.addEventListener('click', () => {
                                setDeadlineValue(wrap, date);
                                renderDeadlinePicker(wrap);
                                // Auto-close after date is picked (time is always pre-set)
                                wrap.querySelector('[data-deadline-picker]')?.classList.add('hidden');
                                updateDeadlineLabels();
                            });
                            days.appendChild(button);
                        }

                        times.innerHTML = '';
                        deadlineTimes.forEach(time => {
                            const button = document.createElement('button');
                            const date = new Date(selected);
                            date.setHours(time.hour, time.minute, 0, 0);
                            button.type = 'button';
                            button.textContent = time.label;
                            button.disabled = date < now;
                            button.className = selected.getHours() === time.hour && selected.getMinutes() === time.minute ? 'is-selected' : '';
                            button.addEventListener('click', () => {
                                setDeadlineValue(wrap, date);
                                renderDeadlinePicker(wrap);
                                // Auto-close after time is picked
                                wrap.querySelector('[data-deadline-picker]')?.classList.add('hidden');
                                updateDeadlineLabels();
                            });
                            times.appendChild(button);
                        });

                        times.querySelector('button.is-selected')?.scrollIntoView({ block: 'center' });
                    };

                    const setError = message => {
                        errorBox.textContent = message || '';
                        errorBox.classList.toggle('hidden', !message);
                    };

                    const syncEmails = value => {
                        form.querySelectorAll('input[type="email"]').forEach(input => input.value = value);
                    };

                    const updateSubmit = () => {
                        const subject = activeSubject()?.value || '';
                        const deadline = activeDeadline()?.value || '';
                        const phone = activePhone()?.value || '';
                        submit.disabled = !(terms.checked && activePanel().querySelector('input[type="email"]').value && phone && subject && deadline);
                        submit.textContent = serviceLabels[activeService];
                    };

                    const setService = service => {
                        activeService = service;
                        serviceInput.value = service;
                        form.querySelectorAll('[data-service-tab]').forEach(tab => tab.classList.toggle('is-active', tab.dataset.serviceTab === service));
                        form.querySelectorAll('[data-service-panel]').forEach(panel => {
                            const active = panel.dataset.servicePanel === service;
                            panel.classList.toggle('hidden', !active);
                            panel.classList.toggle('flex', active);
                            panel.querySelectorAll('input,select,textarea').forEach(input => {
                                if (input.dataset.keepDisabled === '1') return;
                                input.disabled = !active;
                            });
                        });
                        setError('');
                        updateSubmit();
                    };

                    const updateWords = () => {
                        pagesInput.value = String(pages);
                        wordCountInput.value = String(pages * 250);
                        form.querySelectorAll('[data-pages-value]').forEach(item => item.textContent = String(pages));
                        form.querySelectorAll('[data-words-value]').forEach(item => item.textContent = `${pages * 250} words`);
                    };

                    const updateDeadlineLabels = () => {
                        form.querySelectorAll('[data-deadline-input]').forEach(input => {
                            const label = input.closest('[data-deadline-wrap]').querySelector('[data-deadline-label]');
                            label.textContent = formatDeadline(input.value);
                        });
                        updateSubmit();
                    };

                    const renderFiles = () => {
                        form.querySelectorAll('[data-file-list]').forEach(list => {
                            list.innerHTML = '';
                            Array.from(fileInput.files).forEach((file, index) => {
                                const row = document.createElement('div');
                                row.className = 'flex items-center justify-between gap-2 rounded-md bg-[rgba(241,103,0,0.08)] px-2 py-1';
                                row.innerHTML = `<span class="min-w-0 truncate text-[11px] font-semibold text-[var(--att-clr)]">${file.name}</span><button type="button" class="shrink-0 rounded-full border-0 bg-transparent px-1 text-[13px] font-extrabold leading-none text-[var(--att-clr)] transition-colors hover:text-[#f16700]" aria-label="Remove ${file.name}">x</button>`;
                                row.querySelector('button').addEventListener('click', () => {
                                    const transfer = new DataTransfer();
                                    Array.from(fileInput.files).forEach((item, fileIndex) => {
                                        if (fileIndex !== index) transfer.items.add(item);
                                    });
                                    fileInput.files = transfer.files;
                                    renderFiles();
                                });
                                list.appendChild(row);
                            });
                        });
                        form.querySelectorAll('[data-file-count]').forEach(item => {
                            item.textContent = `${fileInput.files.length} file(s)`;
                            item.classList.toggle('hidden', fileInput.files.length === 0);
                        });
                    };

                    const composeDescription = () => {
                        const panel = activePanel();
                        const parts = [];
                        const base = panel.querySelector('[data-base-description]')?.value;
                        const email = panel.querySelector('input[type="email"]').value;
                        const difficulty = panel.querySelector('[data-difficulty-select]')?.value || '';
                        const delivery = form.querySelector('input[name="delivery_format_ui"]:checked')?.value;
                        const classUrl = panel.querySelector('[data-class-url]')?.value;
                        const classDuration = panel.querySelector('[data-class-duration]')?.value;
                        const tasks = Array.from(panel.querySelectorAll('[data-class-task]:checked')).map(input => input.value);

                        if (base) parts.push(base);
                        if (activeService === 'Technical' && delivery) parts.push(`Delivery Format: ${delivery}`);
                        if (classUrl) parts.push(`Course URL: ${classUrl}`);
                        if (classDuration) parts.push(`Class Duration: ${classDuration}`);
                        if (activeService === 'Online Class' && tasks.length) parts.push(`Class Tasks: ${tasks.join(', ')}`);
                        if (difficulty) parts.push(`Difficulty: ${difficulty}`);

                        difficultyInput.value = difficulty;
                        descriptionInput.value = parts.join("\n\n") || `${activeService} request from ${email}`;
                    };

                    form.querySelectorAll('[data-service-tab]').forEach(tab => tab.addEventListener('click', () => setService(tab.dataset.serviceTab)));
                    form.querySelectorAll('input[type="email"]').forEach(input => input.addEventListener('input', event => {
                        syncEmails(event.target.value);
                        updateSubmit();
                    }));
                    form.querySelectorAll('[data-phone]').forEach(input => input.addEventListener('input', updateSubmit));
                    form.querySelectorAll('[data-subject-select]').forEach(select => select.addEventListener('change', updateSubmit));
                    form.querySelectorAll('[data-deadline-wrap]').forEach(wrap => {
                        const picker = wrap.querySelector('[data-deadline-picker]');
                        const input = wrap.querySelector('[data-deadline-input]');
                        const toggle = wrap.querySelector('[data-deadline-toggle]');

                        wrap._deadlineView = new Date();

                        toggle.addEventListener('click', () => {
                            if (!input.value) input.value = defaultDeadline();
                            const selected = parseLocalDateTime(input.value);
                            wrap._deadlineView = new Date(selected.getFullYear(), selected.getMonth(), 1);
                            form.querySelectorAll('[data-deadline-picker]').forEach(item => {
                                if (item !== picker) item.classList.add('hidden');
                            });
                            picker.classList.toggle('hidden');
                            renderDeadlinePicker(wrap);
                            updateDeadlineLabels();
                        });

                        wrap.querySelector('[data-deadline-prev]').addEventListener('click', () => {
                            wrap._deadlineView = new Date(wrap._deadlineView.getFullYear(), wrap._deadlineView.getMonth() - 1, 1);
                            renderDeadlinePicker(wrap);
                        });

                        wrap.querySelector('[data-deadline-next]').addEventListener('click', () => {
                            wrap._deadlineView = new Date(wrap._deadlineView.getFullYear(), wrap._deadlineView.getMonth() + 1, 1);
                            renderDeadlinePicker(wrap);
                        });
                    });
                    form.querySelectorAll('[data-deadline-input]').forEach(input => input.addEventListener('input', updateDeadlineLabels));
                    form.querySelectorAll('[data-page-minus]').forEach(button => button.addEventListener('click', () => {
                        pages = Math.max(1, pages - 1);
                        updateWords();
                    }));
                    form.querySelectorAll('[data-page-plus]').forEach(button => button.addEventListener('click', () => {
                        pages += 1;
                        updateWords();
                    }));
                    form.querySelectorAll('[data-attach]').forEach(button => button.addEventListener('click', () => fileInput.click()));
                    fileInput.addEventListener('change', renderFiles);
                    terms.addEventListener('change', () => {
                        terms.closest('label').querySelector('.ahusa-check').classList.toggle('is-checked', terms.checked);
                        updateSubmit();
                    });
                    form.querySelectorAll('[data-class-task]').forEach(input => input.addEventListener('change', () => {
                        const panel = activePanel();
                        const everything = panel.querySelector('[data-class-task][value="Everything"]');
                        if (input.value === 'Everything' && input.checked) {
                            panel.querySelectorAll('[data-class-task]').forEach(item => item.checked = item === everything);
                        } else if (input.value !== 'Everything' && input.checked) {
                            everything.checked = false;
                        }
                    }));

                    form.addEventListener('submit', event => {
                        const subject = activeSubject()?.value || '';
                        const deadline = activeDeadline()?.value || '';
                        const phone = activePhone()?.value || '';
                        if (!terms.checked || !subject || !deadline || !phone) {
                            event.preventDefault();
                            setError(!subject ? 'Please select a subject or course.' : (!deadline ? 'Please choose a deadline.' : (!phone ? 'Please enter your phone number.' : 'Please accept the terms.')));
                            return;
                        }

                        subjectInput.value = subject;
                        titleInput.value = `${activeService} Help - ${subject}`;
                        activeDeadline().name = 'deadline';
                        composeDescription();
                    });

                    setService('{{ $serviceType }}');
                    updateWords();
                    updateDeadlineLabels();
                });
            })();
        </script>
    @endpush
@endonce
