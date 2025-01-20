<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    <div class="relative h-screen">
        <div class="absolute inset-0 bg-[url('/coffee-farm.jpg')] bg-cover bg-center">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70"></div>
        </div>
        <div class="relative h-full flex items-center justify-center text-center px-4">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-6xl font-light text-white mb-6 tracking-wider">The Art & Science of Coffee
                </h1>
                <p class="text-xl text-gray-300 font-light">Journey through the remarkable transformation from seed to
                    cup</p>
            </div>
        </div>
    </div>

    <!-- Journey Timeline -->
    <div class="bg-stone-950 py-24">
        <div class="container mx-auto px-4">
            <!-- Cultivation Section -->
            <section class="mb-32">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="space-y-6">
                        <h2 class="text-4xl font-light text-white tracking-wider">Coffee Cultivation</h2>
                        <div class="h-1 w-24 bg-amber-700"></div>
                        <p class="text-gray-300 leading-relaxed">The journey begins in the nutrient-rich soils of
                            high-altitude regions. Coffee trees require specific conditions to thrive:</p>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex items-start gap-3">
                                <span class="text-amber-700">•</span>
                                <span>Altitude: 3,000-6,000 feet above sea level</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-amber-700">•</span>
                                <span>Temperature: 60-70°F (15-21°C)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-amber-700">•</span>
                                <span>Rainfall: 60-100 inches annually</span>
                            </li>
                        </ul>
                    </div>
                    <div class="relative group">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="/coffee-plantation.jpg" alt="Coffee Plantation"
                                class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-sm font-light">Coffee trees require 3-4 years before first harvest</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Harvesting Process -->
            <section class="mb-32">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="order-2 md:order-1 relative group">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="/coffee-harvest.jpg" alt="Coffee Harvesting"
                                class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <span class="text-sm font-light">Hand-picking ensures only ripe cherries are
                                harvested</span>
                        </div>
                    </div>
                    <div class="order-1 md:order-2 space-y-6">
                        <h2 class="text-4xl font-light text-white tracking-wider">Harvesting</h2>
                        <div class="h-1 w-24 bg-amber-700"></div>
                        <p class="text-gray-300 leading-relaxed">The art of harvesting requires precision and patience:
                        </p>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex items-start gap-3">
                                <span class="text-amber-700">•</span>
                                <span>Selective hand-picking of ripe cherries</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-amber-700">•</span>
                                <span>Multiple passes throughout harvest season</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-amber-700">•</span>
                                <span>Careful sorting and quality control</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Processing Methods -->
            <section class="mb-32">
                <h2 class="text-4xl font-light text-white tracking-wider text-center mb-16">Processing Methods</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Washed Process -->
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <h3 class="text-2xl font-light text-white mb-4">Washed Process</h3>
                        <p class="text-gray-400 mb-6">Cherries are depulped, fermented, and washed before drying.
                            Produces clean, bright flavors.</p>
                        <ul class="space-y-3 text-gray-300 text-sm">
                            <li>• Depulping within 24 hours</li>
                            <li>• 12-48 hour fermentation</li>
                            <li>• Sun-dried on raised beds</li>
                        </ul>
                    </div>

                    <!-- Natural Process -->
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <h3 class="text-2xl font-light text-white mb-4">Natural Process</h3>
                        <p class="text-gray-400 mb-6">Whole cherries are dried in the sun. Creates fruity, complex
                            flavor profiles.</p>
                        <ul class="space-y-3 text-gray-300 text-sm">
                            <li>• Careful cherry selection</li>
                            <li>• 15-20 days drying time</li>
                            <li>• Regular turning required</li>
                        </ul>
                    </div>

                    <!-- Honey Process -->
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <h3 class="text-2xl font-light text-white mb-4">Honey Process</h3>
                        <p class="text-gray-400 mb-6">Pulp is removed but mucilage remains. Balances clarity with
                            sweetness.</p>
                        <ul class="space-y-3 text-gray-300 text-sm">
                            <li>• Partial mucilage removal</li>
                            <li>• Controlled drying process</li>
                            <li>• Complex flavor development</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Roasting -->
            <section class="mb-32">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="space-y-6">
                        <h2 class="text-4xl font-light text-white tracking-wider">The Art of Roasting</h2>
                        <div class="h-1 w-24 bg-amber-700"></div>
                        <p class="text-gray-300 leading-relaxed">Roasting transforms raw beans into the aromatic coffee
                            we know:</p>
                        <div class="space-y-6 mt-8">
                            <!-- Roasting Stages Timeline -->
                            <div class="relative pl-8 border-l border-amber-700/30">
                                <div class="mb-8">
                                    <div class="absolute w-4 h-4 bg-amber-700 rounded-full -left-2 mt-1"></div>
                                    <h4 class="text-white text-lg mb-2">Drying Phase (0-5 minutes)</h4>
                                    <p class="text-gray-400">Moisture evaporates, beans turn yellow</p>
                                </div>
                                <div class="mb-8">
                                    <div class="absolute w-4 h-4 bg-amber-700 rounded-full -left-2 mt-1"></div>
                                    <h4 class="text-white text-lg mb-2">First Crack (8-10 minutes)</h4>
                                    <p class="text-gray-400">Beans expand and make a cracking sound</p>
                                </div>
                                <div>
                                    <div class="absolute w-4 h-4 bg-amber-700 rounded-full -left-2 mt-1"></div>
                                    <h4 class="text-white text-lg mb-2">Development (10-12 minutes)</h4>
                                    <p class="text-gray-400">Flavors develop and deepen</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative group">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="/coffee-roasting.jpg" alt="Coffee Roasting"
                                class="w-full h-[400px] object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Brewing Methods -->
            <section>
                <h2 class="text-4xl font-light text-white tracking-wider text-center mb-16">Brewing Excellence</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Pour Over -->
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-6 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <h3 class="text-xl font-light text-white mb-4">Pour Over</h3>
                        <ul class="space-y-2 text-gray-400 text-sm">
                            <li>• Water: 200°F (93°C)</li>
                            <li>• Grind: Medium-fine</li>
                            <li>• Ratio: 1:16 coffee to water</li>
                            <li>• Time: 2-3 minutes</li>
                        </ul>
                    </div>

                    <!-- Espresso -->
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-6 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <h3 class="text-xl font-light text-white mb-4">Espresso</h3>
                        <ul class="space-y-2 text-gray-400 text-sm">
                            <li>• Water: 200°F (93°C)</li>
                            <li>• Grind: Very fine</li>
                            <li>• Ratio: 1:2 coffee to water</li>
                            <li>• Time: 25-30 seconds</li>
                        </ul>
                    </div>

                    <!-- French Press -->
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-6 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <h3 class="text-xl font-light text-white mb-4">French Press</h3>
                        <ul class="space-y-2 text-gray-400 text-sm">
                            <li>• Water: 200°F (93°C)</li>
                            <li>• Grind: Coarse</li>
                            <li>• Ratio: 1:15 coffee to water</li>
                            <li>• Time: 4 minutes</li>
                        </ul>
                    </div>

                    <!-- Cold Brew -->
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-6 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <h3 class="text-xl font-light text-white mb-4">Cold Brew</h3>
                        <ul class="space-y-2 text-gray-400 text-sm">
                            <li>• Water: Room temperature</li>
                            <li>• Grind: Coarse</li>
                            <li>• Ratio: 1:8 coffee to water</li>
                            <li>• Time: 12-24 hours</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-layout>
