<x-app-layout>
    <div class="bg-gray-50 min-h-screen">

        <!-- Hero Section -->
        <div class="relative  text-white bg-[url('https://images.unsplash.com/photo-1568605114967-8130f3a36994?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-no-repeat bg-center bg-cover h-screen">
            <div class="max-w-4xl mx-auto px-4 py-20 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Smarter home repairs.<br>No more surprises</h1>

                <!-- Address Input -->
                <form class="mt-6 flex justify-center">
                    <input type="text" placeholder="Enter your address"
                           class="w-2/3 md:w-1/2 px-4 py-3 rounded-l-lg text-gray-800 focus:outline-none">
                    <button type="submit"
                            class="bg-indigo-500 hover:bg-indigo-700 px-6 py-3 rounded-r-lg font-semibold text-white">
                        Check My Home
                    </button>
                </form>
            </div>
        </div>

        <!-- Features Section -->
        <div class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-8 text-center">
            <div>
                <div class="text-3xl">🔧</div>
                <h3 class="font-semibold text-lg mt-3">Repair Costs</h3>
                <p class="text-gray-600 mt-2">See DIY vs. Pro cost ranges before you commit.</p>
            </div>
            <div>
                <div class="text-3xl">✅</div>
                <h3 class="font-semibold text-lg mt-3">Maintenance Reminders</h3>
                <p class="text-gray-600 mt-2">Seasonal maintenance personalized to your home.</p>
            </div>
            <div>
                <div class="text-3xl">💡</div>
                <h3 class="font-semibold text-lg mt-3">Smart Upgrades</h3>
                <p class="text-gray-600 mt-2">Suggestions that save money and boost value.</p>
            </div>
        </div>

        <!-- How It Works -->
        <div class="bg-white py-16">
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

                <!-- Steps -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">How It Works</h2>
                    <ol class="space-y-6 text-gray-700">
                        <li><span class="font-bold">1. Enter Your Address</span> — We fetch GIS data (region, climate, risks).</li>
                        <li><span class="font-bold">2. Get Your Plan</span> — Repair costs + seasonal maintenance personalized to you.</li>
                        <li><span class="font-bold">3. Stay Ahead</span> — Monthly checklist + upgrade ideas.</li>
                    </ol>
                </div>

                <!-- Example Card -->
                <div class="bg-gray-50 border rounded-lg p-6 shadow">
                    <h3 class="font-semibold text-lg">1978 Norfolk, VA</h3>
                    <p class="text-gray-500 text-sm">Flood Zone X • Plant Zone 8a</p>
                    <p class="text-gray-600 mt-2">Regional costs +10%</p>

                    <ul class="mt-4 space-y-2 text-gray-700">
                        <li class="flex items-center space-x-2">
                            <input type="checkbox" checked class="text-indigo-600 rounded">
                            <span>Clean Gutters</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <input type="checkbox" class="text-indigo-600 rounded">
                            <span>Test smoke detectors</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer logos -->

    </div>
</x-app-layout>
