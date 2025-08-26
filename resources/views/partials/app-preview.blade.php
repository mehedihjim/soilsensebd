<section id="preview" class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Track Your Soil Quality</h2>
        <p class="text-gray-600 mb-12">See the smart app in action</p>

        <!-- Screenshots / Gallery -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
            <div class="overflow-hidden rounded-lg shadow-lg hover:scale-105 transform transition">
                <img src="{{ asset('images/screenshot-dashboard.png') }}" alt="Dashboard" class="w-full h-64 object-cover">
            </div>
            <div class="overflow-hidden rounded-lg shadow-lg hover:scale-105 transform transition">
                <img src="{{ asset('images/screenshot-alert.png') }}" alt="Moisture Alert" class="w-full h-64 object-cover">
            </div>
            <div class="overflow-hidden rounded-lg shadow-lg hover:scale-105 transform transition">
                <img src="{{ asset('images/screenshot-graph.png') }}" alt="NPK Graph" class="w-full h-64 object-cover">
            </div>
        </div>

        <!-- Optional Demo Video -->
        <div class="max-w-3xl mx-auto">
            <video controls class="w-full rounded-lg shadow-lg">
                <source src="{{ asset('videos/demo.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>
