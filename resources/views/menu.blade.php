<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Menu Hero Section -->
    <div class="relative py-20 bg-stone-950">
        <div class="absolute inset-0 bg-[url('/coffee-beans-bg.jpg')] bg-cover bg-fixed opacity-10"></div>
        <div class="container mx-auto px-4 relative">
            <div class="text-center mb-20">
                <h1 class="text-5xl font-light text-white tracking-wider mb-6">Our Collection</h1>
                <div class="flex items-center justify-center gap-4">
                    <div class="h-[1px] w-16 bg-gradient-to-r from-transparent via-amber-700 to-transparent"></div>
                    <span class="text-amber-700 font-serif italic text-xl">Artisanal Coffee Selection</span>
                    <div class="h-[1px] w-16 bg-gradient-to-r from-transparent via-amber-700 to-transparent"></div>
                </div>
            </div>

            <!-- Menu Categories -->
            <div class="flex justify-center gap-8 mb-16">
                <button
                    class="text-amber-700 hover:text-amber-500 font-light tracking-wider transition-colors duration-300">Signature
                    Blends</button>
                <button
                    class="text-gray-400 hover:text-amber-500 font-light tracking-wider transition-colors duration-300">Single
                    Origin</button>
                <button
                    class="text-gray-400 hover:text-amber-500 font-light tracking-wider transition-colors duration-300">Seasonal
                    Special</button>
            </div>

            <!-- Coffee Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="group relative overflow-hidden">
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <div class="relative h-64 mb-6 overflow-hidden rounded-lg">
                            <img src="/espresso-classic.jpg" alt="Classic Espresso"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <h3 class="text-2xl font-light text-white mb-3">Classic Espresso</h3>
                        <p class="text-gray-400 font-light mb-4">Rich, bold, and perfectly balanced with a golden crema
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 text-lg">$4.50</span>
                            <button
                                class="text-white text-sm font-light tracking-wider hover:text-amber-500 transition-colors duration-300">Order
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="group relative overflow-hidden">
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <div class="relative h-64 mb-6 overflow-hidden rounded-lg">
                            <img src="/cappuccino.jpg" alt="Artisan Cappuccino"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <h3 class="text-2xl font-light text-white mb-3">Artisan Cappuccino</h3>
                        <p class="text-gray-400 font-light mb-4">Velvety steamed milk with double shot espresso</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 text-lg">$5.50</span>
                            <button
                                class="text-white text-sm font-light tracking-wider hover:text-amber-500 transition-colors duration-300">Order
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="group relative overflow-hidden">
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <div class="relative h-64 mb-6 overflow-hidden rounded-lg">
                            <img src="/pour-over.jpg" alt="Pour Over Special"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <h3 class="text-2xl font-light text-white mb-3">Pour Over Special</h3>
                        <p class="text-gray-400 font-light mb-4">Ethiopian Yirgacheffe with subtle floral notes</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 text-lg">$6.50</span>
                            <button
                                class="text-white text-sm font-light tracking-wider hover:text-amber-500 transition-colors duration-300">Order
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 4 -->
                <div class="group relative overflow-hidden">
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <div class="relative h-64 mb-6 overflow-hidden rounded-lg">
                            <img src="/cold-brew.jpg" alt="Cold Brew"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <h3 class="text-2xl font-light text-white mb-3">Signature Cold Brew</h3>
                        <p class="text-gray-400 font-light mb-4">24-hour steeped with hints of chocolate and caramel</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 text-lg">$5.00</span>
                            <button
                                class="text-white text-sm font-light tracking-wider hover:text-amber-500 transition-colors duration-300">Order
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 5 -->
                <div class="group relative overflow-hidden">
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <div class="relative h-64 mb-6 overflow-hidden rounded-lg">
                            <img src="/latte-art.jpg" alt="Vanilla Bean Latte"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <h3 class="text-2xl font-light text-white mb-3">Vanilla Bean Latte</h3>
                        <p class="text-gray-400 font-light mb-4">Madagascar vanilla with artisanal latte art</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 text-lg">$6.00</span>
                            <button
                                class="text-white text-sm font-light tracking-wider hover:text-amber-500 transition-colors duration-300">Order
                                Now</button>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 6 -->
                <div class="group relative overflow-hidden">
                    <div
                        class="bg-stone-900/80 backdrop-blur-sm p-8 rounded-lg border border-stone-800 hover:border-amber-700/50 transition-colors duration-300">
                        <div class="relative h-64 mb-6 overflow-hidden rounded-lg">
                            <img src="/mocha.jpg" alt="Belgian Mocha"
                                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <h3 class="text-2xl font-light text-white mb-3">Belgian Mocha</h3>
                        <p class="text-gray-400 font-light mb-4">Premium chocolate with double espresso shot</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 text-lg">$6.50</span>
                            <button
                                class="text-white text-sm font-light tracking-wider hover:text-amber-500 transition-colors duration-300">Order
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Options Section -->
            <div class="mt-16 text-center">
                <h2 class="text-2xl font-light text-white mb-8">Customize Your Drink</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-3xl mx-auto">
                    <div class="bg-stone-900/50 p-6 rounded-lg backdrop-blur-sm">
                        <h3 class="text-amber-700 mb-4 font-light">Extra Shot</h3>
                        <p class="text-gray-400 font-light">Add intensity to any drink</p>
                        <span class="block mt-2 text-white">+$1.00</span>
                    </div>
                    <div class="bg-stone-900/50 p-6 rounded-lg backdrop-blur-sm">
                        <h3 class="text-amber-700 mb-4 font-light">Alternative Milk</h3>
                        <p class="text-gray-400 font-light">Oat, Almond, Soy</p>
                        <span class="block mt-2 text-white">+$0.75</span>
                    </div>
                    <div class="bg-stone-900/50 p-6 rounded-lg backdrop-blur-sm">
                        <h3 class="text-amber-700 mb-4 font-light">Flavor Syrup</h3>
                        <p class="text-gray-400 font-light">Vanilla, Caramel, Hazelnut</p>
                        <span class="block mt-2 text-white">+$0.50</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
