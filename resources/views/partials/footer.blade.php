<footer class="bg-black/90 text-white pt-16 pb-8">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- Column 1: Logo & Description -->
        <div>
            <div class="flex items-center mb-4">
                <img src="{{ asset('logos/uss_logo_1.png') }}" alt="USS Logo" class="w-12 h-12 mr-2">
                <span class="text-2xl font-bold">United<span class="text-blue-400"> Software Solutions</span></span>
            </div>
            <p class="text-gray-300">United Software Solutions: Innovating smart farming solutions for Bangladeshi farmers.</p>
        </div>

        <!-- Column 2: Quick Links -->
        <div>
            <h4 class="font-semibold mb-4">Quick Links</h4>
            <ul class="space-y-2">
                <li><a href="/" class="hover:text-green-400 transition">Home</a></li>
                <li><a href="#how-it-works" class="hover:text-green-400 transition">How It Works</a></li>
                <li><a href="#features" class="hover:text-green-400 transition">Features</a></li>
                <li><a href="#preview" class="hover:text-green-400 transition">Preview</a></li>
                <li><a href="#join" class="hover:text-green-400 transition">Join</a></li>
            </ul>
        </div>

        <!-- Column 3: Contact Info -->
        <div>
            <h4 class="font-semibold mb-4">Contact Info</h4>
            <ul class="space-y-2 text-gray-300">
                <li>Email: <a href="mailto:info@soilsensebd.com" class="hover:text-green-400 transition">info@soilsensebd.com</a></li>
                <li>Hotline: <a href="tel:+880123456789" class="hover:text-green-400 transition">+880 123 456 789</a></li>
                <li>Office: 123 Farm Street, Dhaka, Bangladesh</li>
            </ul>
        </div>

        <!-- Column 4: App Download -->
        <div>
            <h4 class="font-semibold mb-4">Get Started</h4>
            <p class="text-gray-300 mb-4">Download the mobile app and start smart farming today.</p>
            <div class="flex gap-1">
                <a href="/" class="inline-block">
                    <img src="{{ asset('images/google-play.png') }}" alt="Google Play" class="h-12">
                </a>
                <a href="/" class="inline-block">
                    <img src="{{ asset('images/app-store.png') }}" alt="App Store" class="h-12">
                </a>
            </div>
        </div>

    </div>

    <!-- Footer Bottom -->
    <div class="mt-12 text-center text-gray-400 text-sm">
        &copy; {{ date('Y') }} SoilSenseBD. All rights reserved.
    </div>
</footer>
