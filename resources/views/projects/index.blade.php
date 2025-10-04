<x-app-layout>

        <!-- Projects Page -->
        <section class="bg-gray-50 dark:bg-gray-900 min-h-screen">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-24">
                <!-- Header -->
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white">
                        Home <span class="text-indigo-700 dark:text-indigo-400">Projects</span>
                    </h1>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
                        Turn ideas into improvements. Track upgrades, remodels, or DIY plans all in one place.
                        <br class="hidden sm:block" />
                        Coming soon for <span class="font-semibold text-indigo-700 dark:text-indigo-400">HomeWise Members</span>.
                    </p>
                </div>

                <!-- Mock Project Showcase -->
                <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    <!-- Project Card Example -->
                    <div class="rounded-2xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-800 shadow-sm overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-indigo-100 via-indigo-50 to-teal-50 dark:from-indigo-900/30 dark:via-teal-900/20 flex items-center justify-center">
                            <span class="text-5xl">🛠️</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Kitchen Remodel</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                                Plan upgrades, manage estimates, and track costs as you modernize your kitchen.
                            </p>
                            <span class="mt-4 inline-block rounded-full bg-gray-200 dark:bg-gray-700 px-3 py-1 text-xs font-medium text-gray-600 dark:text-gray-300">
            Coming Soon
          </span>
                        </div>
                    </div>

                    <!-- Project Card -->
                    <div class="rounded-2xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-800 shadow-sm overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-teal-100 via-teal-50 to-indigo-50 dark:from-teal-900/30 dark:via-indigo-900/20 flex items-center justify-center">
                            <span class="text-5xl">🌿</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Outdoor Living Space</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                                Design patios, decks, and gardens with seasonal reminders and project budgets.
                            </p>
                            <span class="mt-4 inline-block rounded-full bg-gray-200 dark:bg-gray-700 px-3 py-1 text-xs font-medium text-gray-600 dark:text-gray-300">
            Coming Soon
          </span>
                        </div>
                    </div>

                    <!-- Project Card -->
                    <div class="rounded-2xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-800 shadow-sm overflow-hidden">
                        <div class="h-48 bg-gradient-to-br from-indigo-100 via-gray-50 to-teal-50 dark:from-indigo-900/30 dark:via-gray-900/20 flex items-center justify-center">
                            <span class="text-5xl">🏠</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Energy Efficiency Upgrades</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-300 text-sm">
                                Discover energy-saving projects with ROI estimates and local rebate suggestions.
                            </p>
                            <span class="mt-4 inline-block rounded-full bg-gray-200 dark:bg-gray-700 px-3 py-1 text-xs font-medium text-gray-600 dark:text-gray-300">
            Coming Soon
          </span>
                        </div>
                    </div>
                </div>

                <!-- Member CTA -->
                <div class="mt-20 text-center">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Member Access</h2>
                    <p class="mt-3 text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                        The Projects dashboard will be available to HomeWise members first.
                        You’ll be able to create, edit, and track custom projects—from small weekend fixes to full renovations.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
                        <a href="/register"
                           class="inline-flex items-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-white font-semibold shadow-sm hover:bg-indigo-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2 dark:focus-visible:ring-offset-gray-900 transition">
                            Join as a Member
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l5 5a1 1 0 010 1.415l-5 5a1 1 0 11-1.414-1.415L13.586 10H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </a>

                        <a href="/login"
                           class="inline-flex items-center gap-2 rounded-xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 px-6 py-3 text-gray-800 dark:text-gray-100 font-semibold shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                            Member Login
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 10a7 7 0 1114 0A7 7 0 013 10zm8-3a1 1 0 10-2 0v2H7a1 1 0 000 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

</x-app-layout>
