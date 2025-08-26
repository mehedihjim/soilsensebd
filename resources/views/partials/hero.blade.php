<section id="home" class="relative h-screen flex items-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 w-full h-full">
        <img src="{{ asset('images/hero-bg.jpg') }}" class="w-full h-full object-cover" alt="Farm Background">
        <div class="absolute inset-0 bg-black opacity-60"></div>
    </div>

    <div class="container mx-auto relative z-10 flex flex-col md:flex-row items-center px-4 sm:px-6 pb-16 md:pb-24 lg:pb-30 pt-40 md:pt-32 lg:pt-40">
        <!-- Left: Text -->
        <div class="md:w-1/2 text-white text-center md:text-left space-y-3 sm:space-y-4">
            <h1 class="text-3xl xs:text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                Know Your Soil. 
                <span class="text-green-300 block md:inline">Grow Better.</span>
            </h1>
            <h2 class="text-lg sm:text-xl md:text-2xl font-semibold mt-2 sm:mt-3 max-w-lg mx-auto md:mx-0">
                Real-time Soil Health Monitoring with Smart App Control
            </h2>
            <p class="text-base sm:text-lg md:text-xl font-medium mt-2 flex flex-wrap justify-center md:justify-start gap-2">
                <span class="bg-green-600 bg-opacity-50 px-2 py-1 rounded">pH</span>
                <span class="bg-green-600 bg-opacity-50 px-2 py-1 rounded">NPK</span>
                <span class="bg-green-600 bg-opacity-50 px-2 py-1 rounded">Moisture</span>
                <span class="bg-green-600 bg-opacity-50 px-2 py-1 rounded">Weather</span>
                <span class="bg-green-600 bg-opacity-50 px-2 py-1 rounded">EC</span>
            </p>
            <div class="mt-5 sm:mt-6">
                <a href="#join" class="inline-flex items-center bg-white text-green-600 px-4 py-2 sm:px-5 sm:py-3 border border-white hover:bg-transparent hover:text-white rounded shadow transition duration-300 group text-sm sm:text-base font-medium">
                    Get Started
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ml-2 w-4 h-4 sm:w-5 sm:h-5 transition-transform duration-300 group-hover:translate-x-1">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Right: Mobile Mockup -->
        <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
            <img src="{{ asset('images/mobile-mockup.png') }}" class="w-48 xs:w-56 sm:w-64 md:w-72 lg:w-80 xl:w-96 gentle-bounce" alt="Mobile Mockup">
        </div>
    </div>

    <!-- Wavy Divider -->
    <div class="absolute bottom-0 w-full overflow-hidden leading-none">
        <svg class="w-full h-16 sm:h-20 md:h-24 lg:h-32 xl:h-40" viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,64 C360,160 1080,0 1440,96 L1440,320 L0,320 Z"></path>
        </svg>
    </div>
</section>