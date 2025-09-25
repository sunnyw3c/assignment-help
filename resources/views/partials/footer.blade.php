<footer class="bg-gray-100 mt-12">
    <div class="container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div>
            <h4 class="text-lg font-semibold mb-2">AllAssignmentHelp</h4>
            <p class="text-sm">Affordable academic help from top experts worldwide.</p>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
            <ul class="text-sm space-y-1">
                <li><a href="{{ url('/faq') }}" class="hover:underline">FAQs</a></li>
                <li><a href="{{ url('/privacy') }}" class="hover:underline">Privacy Policy</a></li>
                <li><a href="{{ url('/terms') }}" class="hover:underline">Terms of Service</a></li>
            </ul>
        </div>
        <div>
            <h4 class="text-lg font-semibold mb-2">Contact Us</h4>
            <p class="text-sm">Email: support@assignmenthelp.com</p>
            <p class="text-sm">Phone: +1-234-567-890</p>
        </div>
    </div>
    <div class="bg-gray-200 text-center text-sm py-4">
        &copy; {{ date('Y') }} AllAssignmentHelp. All rights reserved.
    </div>
</footer>
