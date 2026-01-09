<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqCategories = [
            [
                'name' => 'Getting Started',
                'icon' => '🚀',
                'color' => 'blue',
                'questions' => [
                    [
                        'question' => 'How does CodeHelp work?',
                        'answer' => 'CodeHelp connects you with expert tutors who can help with your assignments. Simply submit your assignment details, get matched with a qualified tutor, receive your completed work, and request revisions if needed. It\'s that simple!',
                    ],
                    [
                        'question' => 'How do I place an order?',
                        'answer' => 'Click on "Get Help Now" or "Start Your Project" button, fill out the assignment details form including subject, deadline, pages, and upload any relevant files. You\'ll receive an instant quote and can proceed with payment.',
                    ],
                    [
                        'question' => 'How long does it take to get help?',
                        'answer' => 'Delivery time depends on your chosen plan and deadline. We offer Standard (3-5 days), Fast (1-3 days), and Express (24-48 hours) delivery options. Rush orders can be accommodated for urgent needs.',
                    ],
                    [
                        'question' => 'Is CodeHelp available 24/7?',
                        'answer' => 'Yes! Our support team and tutors are available round the clock, 7 days a week. You can submit assignments, get quotes, and receive help at any time that\'s convenient for you.',
                    ],
                ],
            ],
            [
                'name' => 'Pricing & Payment',
                'icon' => '💰',
                'color' => 'green',
                'questions' => [
                    [
                        'question' => 'How much does it cost?',
                        'answer' => 'Pricing starts at $25 per page for our Basic plan, $35 per page for Standard, and $50 per page for Premium. The final cost depends on factors like complexity, academic level, deadline, and subject area.',
                    ],
                    [
                        'question' => 'Are there any hidden fees?',
                        'answer' => 'Absolutely not! We believe in transparent pricing. The price you see in your quote is the final price you pay. No hidden charges, no surprise fees, no additional costs.',
                    ],
                    [
                        'question' => 'What payment methods do you accept?',
                        'answer' => 'We accept all major credit cards (Visa, Mastercard, American Express), debit cards, PayPal, and other secure online payment methods. All transactions are encrypted and secure.',
                    ],
                    [
                        'question' => 'Do you offer discounts or promotions?',
                        'answer' => 'Yes! We offer discounts for first-time users, bulk orders, and loyal customers. We also run seasonal promotions and special offers. Contact our support team to learn about current discounts.',
                    ],
                    [
                        'question' => 'Can I get a refund?',
                        'answer' => 'Yes, we have a money-back guarantee. If the work doesn\'t meet your requirements or our quality standards, you can request revisions (included in your plan) or request a refund according to our refund policy.',
                    ],
                ],
            ],
            [
                'name' => 'Quality & Delivery',
                'icon' => '⭐',
                'color' => 'purple',
                'questions' => [
                    [
                        'question' => 'How do you ensure quality?',
                        'answer' => 'All our tutors are qualified experts with advanced degrees in their fields. Every assignment goes through quality checks, plagiarism detection, and proofreading before delivery. We guarantee high-quality, original work.',
                    ],
                    [
                        'question' => 'Is the work plagiarism-free?',
                        'answer' => 'Absolutely! Every assignment is written from scratch by our expert tutors. We use advanced plagiarism detection software to ensure 100% originality. A plagiarism report is included with your delivery.',
                    ],
                    [
                        'question' => 'What if I need revisions?',
                        'answer' => 'Revisions are included in all our plans! Basic plan includes 1 revision, Standard includes 2 revisions, and Premium includes unlimited revisions. Simply let us know what needs to be changed within the revision period.',
                    ],
                    [
                        'question' => 'Can I communicate with my tutor?',
                        'answer' => 'Yes! Standard and Premium plans include direct communication with your assigned tutor. You can ask questions, provide additional instructions, and track progress throughout the process.',
                    ],
                    [
                        'question' => 'What format will I receive my work in?',
                        'answer' => 'We deliver work in your preferred format (Word, PDF, PowerPoint, Excel, etc.). You can specify your format requirements when placing your order, and we\'ll ensure proper formatting according to your guidelines.',
                    ],
                ],
            ],
            [
                'name' => 'Privacy & Security',
                'icon' => '🔒',
                'color' => 'orange',
                'questions' => [
                    [
                        'question' => 'Is my information kept confidential?',
                        'answer' => 'Yes! We take privacy seriously. Your personal information, assignment details, and payment data are kept strictly confidential. We never share your information with third parties or use it for any purpose other than providing our services.',
                    ],
                    [
                        'question' => 'Is payment secure?',
                        'answer' => 'Absolutely! We use industry-standard SSL encryption for all transactions. Your payment information is processed through secure, PCI-compliant payment gateways. We never store your complete credit card details.',
                    ],
                    [
                        'question' => 'Will anyone know I used your service?',
                        'answer' => 'No. Your use of our service is completely confidential. We maintain strict privacy policies and never disclose client information. All communications and transactions are secure and private.',
                    ],
                    [
                        'question' => 'How do you protect my academic integrity?',
                        'answer' => 'We provide our services as learning aids and reference materials. The work we deliver is meant to help you understand the subject better. We encourage using our work ethically and in accordance with your institution\'s academic policies.',
                    ],
                ],
            ],
            [
                'name' => 'Subjects & Expertise',
                'icon' => '📚',
                'color' => 'indigo',
                'questions' => [
                    [
                        'question' => 'What subjects do you cover?',
                        'answer' => 'We cover a wide range of subjects including Programming (Python, Java, C++, JavaScript, etc.), Mathematics, Sciences, Business, Economics, Engineering, Humanities, and more. If you don\'t see your subject listed, contact us!',
                    ],
                    [
                        'question' => 'What academic levels do you support?',
                        'answer' => 'We assist students at all academic levels: High School, Undergraduate (College/University), Graduate (Master\'s), and Doctoral (PhD) levels. Our tutors are qualified to handle assignments of varying complexity.',
                    ],
                    [
                        'question' => 'Who are your tutors?',
                        'answer' => 'Our tutors are qualified professionals with advanced degrees (Master\'s and PhD) in their respective fields. They have extensive teaching and industry experience, ensuring you receive expert guidance and high-quality work.',
                    ],
                    [
                        'question' => 'Can you help with programming assignments?',
                        'answer' => 'Yes! Programming is our specialty. We help with Python, Java, JavaScript, C++, C#, PHP, Ruby, SQL, and many other languages. From simple scripts to complex projects, our expert programmers can assist you.',
                    ],
                    [
                        'question' => 'Do you handle urgent/last-minute assignments?',
                        'answer' => 'Yes! We offer express delivery options for urgent assignments. Depending on the complexity and length, we can deliver work within 24-48 hours. Contact us immediately for rush orders, and we\'ll do our best to help.',
                    ],
                ],
            ],
            [
                'name' => 'Support & Communication',
                'icon' => '💬',
                'color' => 'pink',
                'questions' => [
                    [
                        'question' => 'How can I contact support?',
                        'answer' => 'You can reach our support team via email (support@codehelp.com), live chat on our website, or phone. We typically respond within 15 minutes and are available 24/7 to assist you.',
                    ],
                    [
                        'question' => 'What if I have questions during the process?',
                        'answer' => 'Feel free to contact us anytime! Our support team is here to help with any questions or concerns. Premium plan users also get direct access to their assigned tutor for project-specific questions.',
                    ],
                    [
                        'question' => 'How do I track my order status?',
                        'answer' => 'Once you place an order, you\'ll receive a unique order ID. You can use this to check your order status anytime through your dashboard or by contacting our support team.',
                    ],
                    [
                        'question' => 'What happens after I submit my assignment?',
                        'answer' => 'After submission, we review your requirements, match you with a qualified tutor, and begin work. You\'ll receive updates on progress, and the completed work will be delivered by your specified deadline.',
                    ],
                ],
            ],
        ];

        return view('faq', compact('faqCategories'));
    }
}
