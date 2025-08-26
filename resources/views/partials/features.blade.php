<section id="features" class="py-20 bg-gray-50 relative overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-64 h-64 bg-gradient-to-r from-blue-400/20 to-purple-400/20 rounded-full blur-3xl pulse-glow"></div>
        <div class="absolute bottom-20 right-20 w-80 h-80 bg-gradient-to-r from-green-400/20 to-blue-400/20 rounded-full blur-3xl pulse-glow" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-purple-400/10 to-pink-400/10 rounded-full blur-3xl pulse-glow" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Key Features</h2>
        <p class="text-gray-600 mb-12">Everything you need to monitor and automate your farm</p>

        <div class="relative flex flex-col md:flex-row items-center justify-center gap-12">
            <!-- Left Features -->
            <div class="flex flex-col space-y-8 md:absolute md:left-0 md:text-right">
                <div class="feature-card group flex flex-col items-center md:items-end transform hover:scale-105 transition-all duration-300 hover:translate-x-2">
                    <div class="flex items-center md:flex-row-reverse gap-4 mb-2">
                        <div class="icon-container p-4 bg-gradient-to-br from-blue-500 to-cyan-500 text-white rounded-2xl shadow-lg transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 transition-colors duration-300">Real-Time Soil Health</h3>
                            <p class="text-gray-600 text-sm md:text-right max-w-xs">pH, Moisture, EC, NPK</p>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card group flex flex-col items-center md:items-end transform hover:scale-105 transition-all duration-300 hover:translate-x-2">
                    <div class="flex items-center md:flex-row-reverse gap-4 mb-2">
                        <div class="icon-container p-4 bg-gradient-to-br from-yellow-500 to-orange-500 text-white rounded-2xl shadow-lg transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 transition-colors duration-300">Auto Irrigation</h3>
                            <p class="text-gray-600 text-sm md:text-right max-w-xs">Moisture-based pump control</p>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card group flex flex-col items-center md:items-end transform hover:scale-105 transition-all duration-300 hover:translate-x-2">
                    <div class="flex items-center md:flex-row-reverse gap-4 mb-2">
                        <div class="icon-container p-4 bg-gradient-to-br from-indigo-500 to-purple-500 text-white rounded-2xl shadow-lg transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 transition-colors duration-300">Weather Forecast</h3>
                            <p class="text-gray-600 text-sm md:text-right max-w-xs">3-day forecast</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Center: Mobile App Mockup -->
            <div class="z-20 relative group">
                <div class="absolute inset-0 bg-gradient-to-r from-green-600 via-purple-600 to-blue-600 rounded-[3rem] blur-2xl opacity-20 group-hover:opacity-30 transition-opacity duration-500 scale-100"></div>
                <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-[3rem] p-3 shadow-2xl transform group-hover:scale-105 transition-all duration-500 float-animation">
                    <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-inner">
                        <div class="w-72 md:w-96 h-[600px] bg-gradient-to-br from-slate-50 via-white to-blue-50 relative">
                            <!-- Phone content -->
                            <div class="absolute top-6 left-6 right-6">
                                <div class="h-1 bg-gray-300 rounded-full w-16 mx-auto mb-6"></div>
                                <div class="text-center mb-8">
                                    <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center overflow-hidden">
                                        <img src="{{ asset('logos/ssbd_trans.png') }}" alt="logo">
                                    </div>
                                </div>
                                
                                <!-- Dashboard cards -->
                                <div class="space-y-4">
                                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-sm">
                                        <div class="flex justify-between items-center">
                                            <span class="text-sm text-gray-600">Soil Moisture</span>
                                            <span class="text-lg font-bold text-blue-600">78%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                            <div class="bg-blue-500 h-2 rounded-full" style="width: 78%"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-sm">
                                        <div class="flex justify-between items-center">
                                            <span class="text-sm text-gray-600">pH Level</span>
                                            <span class="text-lg font-bold text-green-600">6.8</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 68%"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-sm">
                                        <div class="flex justify-between items-center">
                                            <span class="text-sm text-gray-600">EC Level</span>
                                            <span class="text-lg font-bold text-orange-600">12.50</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                                            <div class="bg-purple-500 h-2 rounded-full" style="width: 68%"></div>
                                        </div>
                                    </div>
                                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-sm">
                                        <div class="flex justify-between items-center">
                                            <span class="text-sm text-gray-600">Temperature</span>
                                            <span class="text-lg font-bold text-orange-600">24°C</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Decorative elements -->
                            <div class="absolute top-4 right-4 w-8 h-8 bg-gradient-to-br from-green-400 to-green-500 rounded-full opacity-80"></div>
                            <div class="absolute top-16 right-8 w-4 h-4 bg-gradient-to-br from-blue-400 to-blue-500 rounded-full opacity-60"></div>
                            <div class="absolute bottom-20 left-6 w-6 h-6 bg-gradient-to-br from-purple-400 to-purple-500 rounded-full opacity-70"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Features -->
            <div class="flex flex-col space-y-8 md:absolute md:right-0 md:text-left">
                <div class="feature-card group flex flex-col items-center md:items-start transform hover:scale-105 transition-all duration-300 hover:-translate-x-2">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="icon-container p-4 bg-gradient-to-br from-red-500 to-pink-500 text-white rounded-2xl shadow-lg transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4.828 7l2.828 2.828L5.828 12l2.828 2.828L6.828 17H2v-4.828L4.828 12 2 9.172V7h2.828z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 transition-colors duration-300">Notification Alerts</h3>
                            <p class="text-gray-600 text-sm md:text-left max-w-xs">Over/Under Limit warnings</p>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card group flex flex-col items-center md:items-start transform hover:scale-105 transition-all duration-300 hover:-translate-x-2">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="icon-container p-4 bg-gradient-to-br from-green-500 to-emerald-500 text-white rounded-2xl shadow-lg transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 transition-colors duration-300">Graph Reports</h3>
                            <p class="text-gray-600 text-sm md:text-left max-w-xs">Daily, Weekly, Monthly trends</p>
                        </div>
                    </div>
                </div>
                
                <div class="feature-card group flex flex-col items-center md:items-start transform hover:scale-105 transition-all duration-300 hover:-translate-x-2">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="icon-container p-4 bg-gradient-to-br from-violet-500 to-purple-500 text-white rounded-2xl shadow-lg transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800 transition-colors duration-300">Multi-Sensor Support</h3>
                            <p class="text-gray-600 text-sm md:text-left max-w-xs">Bangla interface included</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>