<nav id="navbar" class="fixed w-full top-0 z-50 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center py-3 px-4 sm:py-4 sm:px-6">
        <!-- Logo -->
        <a href="#" class="text-xl sm:text-2xl font-bold text-white flex items-center gap-1 sm:gap-2">
            <img src="{{ asset('logos/ssbd_trans.png') }}" alt="Logo" class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12">SoilSense<span class="text-green-400 -ml-1 sm:-ml-2">BD</span>
        </a>

        <!-- Desktop Links -->
        <ul class="hidden md:flex space-x-4 lg:space-x-6 text-white font-medium">
            <li><a href="#home" class="hover:text-green-300 transition duration-300 py-2 px-1 text-sm lg:text-base">Home</a></li>
            <li><a href="#how-it-works" class="hover:text-green-300 transition duration-300 py-2 px-1 text-sm lg:text-base">How It Works</a></li>
            <li><a href="#features" class="hover:text-green-300 transition duration-300 py-2 px-1 text-sm lg:text-base">Features</a></li>
            <li><a href="#preview" class="hover:text-green-300 transition duration-300 py-2 px-1 text-sm lg:text-base">Preview</a></li>
        </ul>

        <!-- CTA Button -->
        <a href="#join" class="hidden md:inline-flex items-center bg-white text-green-600 px-3 py-1 lg:px-4 lg:py-2 border border-white hover:bg-transparent hover:text-white rounded shadow transition duration-300 text-xs lg:text-sm font-medium">
            Join as Pilot Farmer
        </a>

        <!-- Mobile Hamburger -->
        <div class="md:hidden flex items-center">
            <button id="hamburger" class="focus:outline-none p-2">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-green-90/60 bg-opacity-95 backdrop-blur-sm transition-all duration-300 ease-in-out">
        <div class="container mx-auto px-4 py-4">
            <ul class="text-white font-medium space-y-3">
                <li><a href="#home" class="block py-3 px-2 hover:bg-green-800 rounded transition duration-300">Home</a></li>
                <li><a href="#how-it-works" class="block py-3 px-2 hover:bg-green-800 rounded transition duration-300">How It Works</a></li>
                <li><a href="#features" class="block py-3 px-2 hover:bg-green-800 rounded transition duration-300">Features</a></li>
                <li><a href="#preview" class="block py-3 px-2 hover:bg-green-800 rounded transition duration-300">Preview</a></li>
                <li class="pt-3 border-t border-green-700">
                    <a href="#join" class="block bg-white text-green-600 text-center py-3 rounded hover:bg-green-100 transition duration-300 font-medium">
                        Join as Pilot Farmer
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>