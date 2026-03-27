@extends('layouts.app')

@section('title', 'Terms of Service - Assignment Help USA')
@section('description', 'Read the Terms of Service for Assignment Help USA. Understand your rights and responsibilities when using our academic assistance services.')

@section('content')
<div class="bg-gray-50 min-h-screen py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-black text-gray-900 mb-4">Terms of Service</h1>
            <p class="text-gray-500 text-sm">Last updated: March 2026</p>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 md:p-12 space-y-10 text-gray-700 leading-relaxed">

            <!-- Intro -->
            <section>
                <p class="text-lg">
                    These Terms of Service ("Terms") govern your use of the Assignment Help USA website and services operated by Assignment Help USA ("we", "our", "us"). By placing an order or using our website, you agree to these Terms. If you do not agree, please do not use our services.
                </p>
                <p class="mt-4">
                    Questions? Contact us at <a href="mailto:support@assignmenthelpusa.com" class="text-blue-600 hover:underline">support@assignmenthelpusa.com</a>.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 1 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">1. Description of Service</h2>
                <p class="mb-4">
                    Assignment Help USA provides academic assistance services including essay writing, research paper support, homework help, dissertation guidance, and programming assistance. All work produced by our experts is intended to be used as a <strong>reference and learning aid only</strong>.
                </p>
                <p>
                    Our services are designed to help students understand their assignments, improve their writing skills, and learn from expert examples. We do not endorse or encourage academic dishonesty of any kind.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 2 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">2. User Responsibilities</h2>
                <ul class="space-y-3 list-none">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span>You must be at least 18 years old, or have parental/guardian consent, to use our services.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span>You are responsible for ensuring your use of our work complies with your institution's academic integrity policies. Submitting our work as your own in violation of your institution's rules is your responsibility, not ours.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span>You agree to provide accurate information when placing an order, including assignment requirements, deadlines, and any relevant files or guidelines.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span>You agree not to use our services for any unlawful purpose or in violation of these Terms.</span>
                    </li>
                </ul>
            </section>

            <hr class="border-gray-100">

            <!-- Section 3 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">3. Payment &amp; Refunds</h2>
                <ul class="space-y-3 list-none">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Payment:</strong> Payment is due at the time of placing your order. We accept major credit and debit cards via our secure third-party payment processor.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Revisions:</strong> We offer unlimited free revisions within 21 days of delivery, provided your revision request is consistent with the original order requirements.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Refunds:</strong> If we are unable to deliver your completed order, or if the delivered work materially fails to meet the agreed requirements after reasonable revisions, you may be eligible for a partial or full refund. Refund requests must be submitted within 14 days of delivery. We do not offer refunds where the work meets the original requirements and revisions have been completed.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Disputes:</strong> To initiate a refund or dispute, contact us at <a href="mailto:support@assignmenthelpusa.com" class="text-blue-600 hover:underline">support@assignmenthelpusa.com</a>. We will respond within 2 business days.</span>
                    </li>
                </ul>
            </section>

            <hr class="border-gray-100">

            <!-- Section 4 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">4. Intellectual Property</h2>
                <p class="mb-4">
                    Upon full payment, you receive a non-exclusive licence to use the work delivered for personal educational and reference purposes. We retain the underlying copyright in all work produced. You may not resell, redistribute, or publish our work as your own in any commercial context.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 5 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">5. Confidentiality</h2>
                <p>
                    We treat all order details and personal information with strict confidentiality. We will not share your details with your academic institution, employer, or any third party not required to fulfil your order. Please see our <a href="{{ route('privacy-policy') }}" class="text-blue-600 hover:underline">Privacy Policy</a> for full details.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 6 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">6. Limitation of Liability</h2>
                <p class="mb-4">
                    Our services are provided on an "as is" basis. To the fullest extent permitted by law, Assignment Help USA shall not be liable for any indirect, incidental, or consequential damages arising from your use of our services, including but not limited to academic penalties, loss of grades, or institutional sanctions resulting from your use of our work.
                </p>
                <p>
                    Our total liability to you for any claim arising from your use of our services shall not exceed the amount you paid for the specific order giving rise to that claim.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 7 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">7. Governing Law</h2>
                <p>
                    These Terms are governed by and construed in accordance with the laws of the United States. Any disputes arising under these Terms shall be subject to the exclusive jurisdiction of the courts of the United States.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 8 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">8. Changes to These Terms</h2>
                <p>
                    We may update these Terms from time to time. When we do, we will update the "Last updated" date at the top of this page. Continued use of our service after changes are posted constitutes your acceptance of the updated Terms.
                </p>
            </section>

            <!-- Contact -->
            <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                <h3 class="font-black text-gray-900 mb-2">Questions about these Terms?</h3>
                <p class="text-sm text-gray-600">
                    Email us at <a href="mailto:support@assignmenthelpusa.com" class="text-blue-600 hover:underline font-semibold">support@assignmenthelpusa.com</a> and we'll respond within 24 hours.
                </p>
            </div>

        </div>

        <!-- Back link -->
        <div class="text-center mt-8">
            <a href="{{ url()->previous() }}" class="text-sm text-gray-400 hover:text-gray-600 transition-colors">← Go back</a>
        </div>

    </div>
</div>
@endsection
