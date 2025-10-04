<x-app-layout>
    <!-- Maintenance Page -->
    <section class="bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-24">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">
                    Home Maintenance Plan
                </h1>
                <p class="mt-3 text-lg text-gray-600 dark:text-gray-300">
                    Personalized for <span class="font-semibold text-indigo-700 dark:text-indigo-400">Crozet, VA 22932</span>
                </p>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Climate Zone: 7a (Humid Subtropical) — Avg High: 86°F, Avg Low: 24°F</p>
            </div>

            <!-- Monthly Maintenance Tasks -->
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">October Maintenance Checklist</h2>

                <!-- Task List -->
                <div class="space-y-6">
                    <!-- Task Item -->
                    <div class="flex items-start justify-between border-b border-gray-100 dark:border-gray-700 pb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Clean Gutters & Downspouts</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                Remove leaves and debris before winter rains to prevent roof and foundation damage.
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Est. Cost: $0–$50 (DIY) | Recommended: Handyman</p>
                        </div>
                        <span class="inline-flex items-center text-xs font-medium bg-teal-100 dark:bg-teal-900/40 text-teal-700 dark:text-teal-300 px-3 py-1 rounded-full">
            Preventative
          </span>
                    </div>

                    <div class="flex items-start justify-between border-b border-gray-100 dark:border-gray-700 pb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Inspect Roof & Flashing</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                Check for cracked shingles and loose flashing before cold weather sets in.
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Est. Cost: $0 (DIY) | Recommended: Roofer if damage found</p>
                        </div>
                        <span class="inline-flex items-center text-xs font-medium bg-indigo-100 dark:bg-indigo-900/40 text-indigo-700 dark:text-indigo-300 px-3 py-1 rounded-full">
            Exterior
          </span>
                    </div>

                    <div class="flex items-start justify-between border-b border-gray-100 dark:border-gray-700 pb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Service HVAC System</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                Schedule a fall tune-up to improve heating efficiency before winter.
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Est. Cost: $100–$250 | Recommended: HVAC Technician</p>
                        </div>
                        <span class="inline-flex items-center text-xs font-medium bg-yellow-100 dark:bg-yellow-900/40 text-yellow-700 dark:text-yellow-300 px-3 py-1 rounded-full">
            Seasonal
          </span>
                    </div>

                    <div class="flex items-start justify-between border-b border-gray-100 dark:border-gray-700 pb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Drain Outdoor Faucets & Hoses</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                Prevent burst pipes by draining water from hoses and outdoor spigots before first freeze.
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Est. Cost: $0 (DIY)</p>
                        </div>
                        <span class="inline-flex items-center text-xs font-medium bg-red-100 dark:bg-red-900/40 text-red-700 dark:text-red-300 px-3 py-1 rounded-full">
            Winter Prep
          </span>
                    </div>

                    <div class="flex items-start justify-between border-b border-gray-100 dark:border-gray-700 pb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Test Smoke & CO Detectors</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                Replace batteries and test all alarms before fireplace and heating season begins.
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Est. Cost: $5–$20 | Recommended: DIY</p>
                        </div>
                        <span class="inline-flex items-center text-xs font-medium bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-300 px-3 py-1 rounded-full">
            Safety
          </span>
                    </div>

                    <div class="flex items-start justify-between border-b border-gray-100 dark:border-gray-700 pb-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Inspect Fireplace & Chimney</h3>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mt-1">
                                Have your fireplace cleaned and chimney inspected for blockages before using.
                            </p>
                            <p class="text-xs text-gray-500 mt-1">Est. Cost: $150–$300 | Recommended: Chimney Sweep</p>
                        </div>
                        <span class="inline-flex items-center text-xs font-medium bg-orange-100 dark:bg-orange-900/40 text-orange-700 dark:text-orange-300 px-3 py-1 rounded-full">
            Interior
          </span>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="mt-12 text-center">
                <p class="text-gray-600 dark:text-gray-300 mb-6">
                    Ready to get your personalized maintenance plan?
                    HomeWise builds a checklist like this for your exact address — updated monthly.
                </p>
                <a href="/register"
                   class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-white font-semibold shadow-sm hover:bg-indigo-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2 dark:focus-visible:ring-offset-gray-900 transition">
                    Get My Free Plan
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l5 5a1 1 0 010 1.415l-5 5a1 1 0 11-1.414-1.415L13.586 10H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

</x-app-layout>
