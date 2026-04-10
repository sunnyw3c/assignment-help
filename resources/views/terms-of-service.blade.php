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
                <h2 class="text-xl font-black text-gray-900 mb-4">7. Prohibited Uses</h2>
                <p class="mb-4">You agree not to use our services for any of the following purposes:</p>
                <ul class="space-y-3 list-none">
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 font-bold mt-0.5">✕</span>
                        <span>Submitting work delivered by us to an educational institution as your own original work in violation of that institution's academic integrity or honour code policies.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 font-bold mt-0.5">✕</span>
                        <span>Reselling, redistributing, publishing, or commercially exploiting work delivered to you under these Terms.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 font-bold mt-0.5">✕</span>
                        <span>Using our services for any fraudulent, deceptive, or unlawful purpose.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 font-bold mt-0.5">✕</span>
                        <span>Sharing your account credentials or allowing third parties to use your account.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-red-500 font-bold mt-0.5">✕</span>
                        <span>Attempting to reverse-engineer, scrape, or otherwise misuse our platform, content, or proprietary materials.</span>
                    </li>
                </ul>
                <p class="mt-4">Violation of these prohibited uses may result in immediate termination of your account and forfeiture of any refund rights.</p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 8 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">8. Indemnification</h2>
                <p>
                    You agree to indemnify, defend, and hold harmless Assignment Help USA, its officers, employees, contractors, and agents from and against any claims, liabilities, damages, losses, and expenses (including reasonable legal fees) arising out of or in any way connected with: (a) your use of our services in violation of these Terms; (b) your violation of any applicable law or regulation; (c) your infringement of any third-party right; or (d) any academic or institutional penalties arising from your misuse of work delivered by us. This indemnification obligation will survive termination of these Terms.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 9 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">9. Disclaimer of Warranties</h2>
                <p class="mb-4 uppercase text-sm font-semibold text-gray-500 tracking-wide">Read carefully</p>
                <p class="mb-4">
                    TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, ASSIGNMENT HELP USA PROVIDES ITS SERVICES ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, OR NON-INFRINGEMENT.
                </p>
                <p class="mb-4">
                    We do not warrant that: (a) our services will meet your specific academic requirements; (b) use of our work will result in any particular grade, academic outcome, or pass/fail result; (c) work delivered will be accepted, approved, or graded favourably by any instructor, institution, or examination body; or (d) our services are error-free, uninterrupted, or free from inaccuracies.
                </p>
                <p>
                    No advice or information, whether oral or written, obtained from Assignment Help USA shall create any warranty not expressly stated in these Terms. Some jurisdictions do not allow the exclusion of implied warranties, so the above exclusions may not fully apply to you.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 10 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">10. Geographic Use &amp; Legal Compliance</h2>
                <p class="mb-4">
                    Our services are provided solely as educational reference and tutoring materials. Certain U.S. states and international jurisdictions have enacted laws that may restrict or regulate the provision or use of academic writing assistance services. Examples include, but are not limited to, statutes in states such as New York, Virginia, Massachusetts, and others that prohibit the sale of term papers or essays with knowledge that they will be submitted for academic credit.
                </p>
                <p class="mb-4">
                    <strong>By using our services, you expressly represent and warrant that:</strong>
                </p>
                <ul class="space-y-3 list-none mb-4">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span>Your use of our services is lawful in the jurisdiction in which you reside and access our platform.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span>You will use all work delivered solely as a reference, study guide, or learning aid and will not submit it as your own original academic work.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span>You have independently verified that your intended use complies with all applicable local, state, federal, and institutional rules and policies.</span>
                    </li>
                </ul>
                <p>
                    Assignment Help USA makes no representation that its services are appropriate, lawful, or available in all locations. If you access our services from a jurisdiction where such use is restricted or prohibited, you do so at your own risk and are solely responsible for compliance with applicable law. We reserve the right to decline or cancel orders from jurisdictions where we determine compliance cannot be ensured.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 11 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">11. Dispute Resolution &amp; Binding Arbitration</h2>
                <p class="mb-4 font-semibold text-gray-800">Please read this section carefully. It affects your legal rights.</p>

                <p class="mb-4">
                    <strong>Informal Resolution First.</strong> Before initiating formal proceedings, you agree to contact us at <a href="mailto:support@assignmenthelpusa.com" class="text-blue-600 hover:underline">support@assignmenthelpusa.com</a> and give us 30 days to resolve the dispute informally. Most issues can be resolved this way.
                </p>

                <p class="mb-4">
                    <strong>Binding Arbitration.</strong> If informal resolution fails, any dispute, claim, or controversy arising out of or relating to these Terms or your use of our services — including questions about the validity or enforceability of these Terms — shall be resolved exclusively by final and binding arbitration administered by the American Arbitration Association (AAA) under its Consumer Arbitration Rules, rather than in court. The arbitration shall be conducted in the State of Delaware. The arbitrator's decision shall be final and binding and may be entered as a judgment in any court of competent jurisdiction.
                </p>

                <p class="mb-4">
                    <strong>Class Action Waiver.</strong> YOU AND ASSIGNMENT HELP USA AGREE THAT EACH MAY BRING CLAIMS AGAINST THE OTHER ONLY IN AN INDIVIDUAL CAPACITY AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS, COLLECTIVE, CONSOLIDATED, OR REPRESENTATIVE ACTION OR PROCEEDING. The arbitrator may not consolidate more than one person's claims and may not preside over any form of class or representative proceeding.
                </p>

                <p class="mb-4">
                    <strong>Jury Trial Waiver.</strong> TO THE EXTENT PERMITTED BY APPLICABLE LAW, YOU WAIVE ANY RIGHT TO A JURY TRIAL IN ANY ACTION ARISING FROM OR RELATED TO THESE TERMS OR OUR SERVICES.
                </p>

                <p>
                    <strong>Exceptions.</strong> Notwithstanding the foregoing, either party may seek injunctive or other equitable relief in a court of competent jurisdiction to prevent actual or threatened infringement, misappropriation, or violation of intellectual property rights. You also retain the right to bring individual claims in small claims court for disputes within that court's jurisdictional limits.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 12 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">12. Force Majeure</h2>
                <p>
                    Assignment Help USA shall not be liable for any delay or failure to perform its obligations under these Terms where such delay or failure results from circumstances beyond our reasonable control, including but not limited to acts of God, natural disasters, pandemic or epidemic, government actions, network or infrastructure outages, cyberattacks, or other technical failures not attributable to our negligence. In such circumstances, we will notify you promptly and use commercially reasonable efforts to complete your order as soon as practicable. If delivery is delayed by more than 72 hours beyond the agreed deadline due to force majeure, you may request a full refund.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 13 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">13. General Provisions</h2>
                <ul class="space-y-4 list-none">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Severability:</strong> If any provision of these Terms is found invalid, illegal, or unenforceable by a court or arbitrator of competent jurisdiction, that provision shall be modified to the minimum extent necessary to make it enforceable, and the remaining provisions shall continue in full force and effect.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Entire Agreement:</strong> These Terms, together with our <a href="{{ route('privacy-policy') }}" class="text-blue-600 hover:underline">Privacy Policy</a>, constitute the entire agreement between you and Assignment Help USA regarding your use of our services and supersede all prior or contemporaneous agreements, representations, or understandings, whether written or oral.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>No Waiver:</strong> Our failure to enforce any right or provision of these Terms shall not constitute a waiver of that right or provision in future instances.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Assignment:</strong> You may not assign or transfer your rights or obligations under these Terms without our prior written consent. We may assign our rights freely.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-500 font-bold mt-0.5">→</span>
                        <span><strong>Notices:</strong> We may provide notices to you via the email address associated with your account or by posting prominently on our website. You may contact us at <a href="mailto:support@assignmenthelpusa.com" class="text-blue-600 hover:underline">support@assignmenthelpusa.com</a>.</span>
                    </li>
                </ul>
            </section>

            <hr class="border-gray-100">

            <!-- Section 14 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">14. Governing Law</h2>
                <p>
                    These Terms are governed by and construed in accordance with the laws of the State of Delaware, United States, without regard to its conflict of law principles. Subject to the arbitration agreement in Section 11, any disputes not subject to arbitration shall be subject to the exclusive jurisdiction of the state and federal courts located in the State of Delaware, and you consent to personal jurisdiction in those courts.
                </p>
            </section>

            <hr class="border-gray-100">

            <!-- Section 15 -->
            <section>
                <h2 class="text-xl font-black text-gray-900 mb-4">15. Changes to These Terms</h2>
                <p>
                    We may update these Terms from time to time. When we do, we will update the "Last updated" date at the top of this page. For material changes, we will make reasonable efforts to notify users via email or a prominent notice on our website at least 14 days before the change takes effect. Continued use of our service after changes are posted constitutes your acceptance of the updated Terms.
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
