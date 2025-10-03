<x-app-layout>
    <div class="bg-white min-h-screen text-black">

        <!-- Hero Section with CTA -->
        <div class="relative text-center py-24 px-6">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-6xl font-extrabold mb-6 leading-tight">Take Control of Your Home</h1>
                <p class="text-2xl text-gray-700 mb-10 leading-relaxed">
                    Get a <span class="font-bold">personalized home maintenance plan</span> that saves you money,
                    prevents costly surprises, and boosts your property value.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('register') }}"
                       class="bg-black text-white font-semibold px-8 py-4 rounded-lg shadow hover:bg-gray-800 transition">
                        Get My Free Plan
                    </a>
                    <a href="#how-it-works"
                       class="border border-black text-black font-semibold px-8 py-4 rounded-lg shadow hover:bg-gray-100 transition">
                        See How It Works
                    </a>
                </div>
            </div>
        </div>

        <!-- Value Proposition Section -->
        <div id="how-it-works" class="max-w-7xl mx-auto px-6 py-20 text-center">
            <h2 class="text-4xl font-bold mb-12">Why HomeWise?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="rounded-xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition">
                    <h3 class="text-2xl font-semibold mb-4">💰 Save Money</h3>
                    <p class="text-lg text-gray-600">Catch small repairs early and avoid costly surprises.</p>
                </div>
                <div class="rounded-xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition">
                    <h3 class="text-2xl font-semibold mb-4">🛠️ Peace of Mind</h3>
                    <p class="text-lg text-gray-600">A clear plan means you’ll never forget an important task again.</p>
                </div>
                <div class="rounded-xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition">
                    <h3 class="text-2xl font-semibold mb-4">🏡 Boost Value</h3>
                    <p class="text-lg text-gray-600">Well-maintained homes sell faster and for more money.</p>
                </div>
            </div>
        </div>

        <!-- Photo Grid (Projects/Ideas) -->
        <div class="max-w-7xl mx-auto px-6 py-16">
            <h2 class="text-3xl font-bold mb-8">See the Possibilities</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?q=80&w=876&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="w-full h-56 object-cover" alt="Project 1">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Smart Kitchen Upgrades</h3>
                    </div>
                </div>

                <div class="rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/flagged/photo-1566838803980-56bfa5300e8c?q=80&w=871&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="w-full h-56 object-cover" alt="Project 2">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Energy-Saving Remodel</h3>
                    </div>
                </div>

                <div class="rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition">
                    <img src="https://images.unsplash.com/photo-1628625251833-04eeafb7a2db?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                         class="w-full h-56 object-cover" alt="Project 3">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold">Low-Maintenance Landscaping</h3>
                    </div>
                </div>

            </div>
        </div>

        <!-- Final CTA -->
        <div class="py-20 text-center bg-gray-50">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold mb-6">Ready to Future-Proof Your Home?</h2>
                <p class="text-lg text-gray-700 mb-10">Join hundreds of homeowners saving money and stress with HomeWise.</p>
                <a href="{{ route('register') }}"
                   class="bg-black text-white font-bold px-12 py-5 rounded-lg shadow hover:bg-gray-800 transition">
                    Create My Free Plan Now
                </a>
            </div>
        </div>

    </div>
</x-app-layout>
