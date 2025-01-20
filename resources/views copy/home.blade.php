<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section with Parallax -->
    <div class="relative h-screen overflow-hidden">
        <!-- Parallax Background -->
        <div class="absolute inset-0 transform scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/40 backdrop-blur-sm"></div>
            {{-- <div
                class="h-full w-full bg-[url('{{ Storage::url('kean.jpg') }}')] bg-cover bg-center transform hover:scale-105 transition-transform duration-700">
            </div> --}}
            <img src="{{ Storage::url('kean3.jpg') }}" alt=""
                class="w-full h-full object-cover bg-cover bg-center transform hover:scale-105 transition-transform duration-700 opacity-60">
        </div>

        <!-- Hero Content -->
        <div class="relative flex items-center justify-center h-full px-4">
            <div class="max-w-4xl text-center">
                <h1 class="text-5xl md:text-7xl font-light text-white mb-8 tracking-wider">
                    <span class="block transform hover:scale-105 transition-transform duration-300">ARTISANAL</span>
                    <span
                        class="block font-serif italic mt-4 transform hover:scale-105 transition-transform duration-300">Coffee
                        Experience</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-12 font-light tracking-wide">Crafting moments of pure
                    delight, one cup at a time</p>
                <div class="flex justify-center gap-6">
                    <button class="group relative px-8 py-4 bg-transparent overflow-hidden">
                        <div
                            class="absolute inset-0 w-0 bg-amber-700 transition-all duration-[350ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-white text-lg font-light tracking-wider">Explore Menu</span>
                    </button>
                    <button class="group relative px-8 py-4 bg-transparent overflow-hidden border border-white">
                        <div
                            class="absolute inset-0 w-0 bg-white transition-all duration-[350ms] ease-out group-hover:w-full">
                        </div>
                        <span
                            class="relative text-white group-hover:text-stone-900 text-lg font-light tracking-wider">Reserve
                            Table</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-[1px] h-16 bg-gradient-to-b from-transparent via-white to-transparent"></div>
        </div>
    </div>

    <!-- Featured Collection -->
    <section class="py-24 bg-stone-950">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-light text-center mb-16 text-white tracking-widest">SIGNATURE COLLECTION</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Coffee Card 1 -->
                <div class="group relative overflow-hidden">
                    <div class="h-[28rem] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
                        <div
                            class="h-full w-full bg-[url('/coffee-blend-1.jpg')] bg-cover bg-center group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 z-20 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-2xl font-light text-white mb-4">Ethiopian Gold</h3>
                            <p
                                class="text-gray-300 font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                Notes of jasmine, bergamot, and wild honey with a silky smooth finish</p>
                            <span class="block mt-4 text-amber-500 font-light">$24.99</span>
                        </div>
                    </div>
                </div>

                <!-- Coffee Card 2 -->
                <div class="group relative overflow-hidden">
                    <div class="h-[28rem] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
                        <div
                            class="h-full w-full bg-[url('/coffee-blend-2.jpg')] bg-cover bg-center group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 z-20 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-2xl font-light text-white mb-4">Colombian Reserve</h3>
                            <p
                                class="text-gray-300 font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                Rich caramel sweetness with hints of dark chocolate and toasted nuts</p>
                            <span class="block mt-4 text-amber-500 font-light">$22.99</span>
                        </div>
                    </div>
                </div>

                <!-- Coffee Card 3 -->
                <div class="group relative overflow-hidden">
                    <div class="h-[28rem] relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent z-10"></div>
                        <div
                            class="h-full w-full bg-[url('/coffee-blend-3.jpg')] bg-cover bg-center group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 z-20 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-2xl font-light text-white mb-4">Japanese Drip</h3>
                            <p
                                class="text-gray-300 font-light opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                Delicate floral aroma with a clean, crisp finish and subtle umami notes</p>
                            <span class="block mt-4 text-amber-500 font-light">$26.99</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="relative py-32 bg-[url('/cafe-interior.jpg')] bg-fixed bg-cover bg-center">
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
        <div class="container mx-auto px-4 relative">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-4xl font-light text-white mb-8 tracking-widest">THE EXPERIENCE</h2>
                <p class="text-xl text-gray-300 font-light leading-relaxed mb-12">Immerse yourself in our carefully
                    curated atmosphere where every detail has been considered. From the gentle aroma of freshly ground
                    beans to the sophisticated ambiance, we create an unforgettable coffee experience.</p>
                <button class="group relative px-12 py-4 bg-transparent border border-amber-700 overflow-hidden">
                    <div
                        class="absolute inset-0 w-0 bg-amber-700 transition-all duration-[350ms] ease-out group-hover:w-full">
                    </div>
                    <span class="relative text-amber-700 group-hover:text-white text-lg font-light tracking-wider">Book
                        Your Visit</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-24 bg-stone-950">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-light text-white mb-8 tracking-widest">JOIN THE CONNOISSEURS</h2>
                <p class="text-gray-300 mb-12 font-light">Be the first to experience our newest blends and receive
                    exclusive invitations to tasting events.</p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
                    <input type="email" placeholder="Your email address"
                        class="flex-1 px-6 py-4 bg-transparent border border-gray-800 text-white placeholder-gray-500 focus:outline-none focus:border-amber-700 transition-colors duration-300">
                    <button
                        class="px-8 py-4 bg-amber-700 text-white font-light tracking-wider hover:bg-amber-600 transition-colors duration-300">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <h3 class="text-white font-light tracking-wider mb-6">LOCATION</h3>
                    <p class="font-light">123 Artisan Avenue</p>
                    <p class="font-light">Luxury District, LD 12345</p>
                </div>
                <div>
                    <h3 class="text-white font-light tracking-wider mb-6">HOURS</h3>
                    <p class="font-light">Monday - Friday: 7am - 10pm</p>
                    <p class="font-light">Weekend: 8am - 11pm</p>
                </div>
                <div>
                    <h3 class="text-white font-light tracking-wider mb-6">CONTACT</h3>
                    <p class="font-light">Tel: +1 (555) 123-4567</p>
                    <p class="font-light">Email: concierge@luxurycoffee.com</p>
                </div>
                <div>
                    <h3 class="text-white font-light tracking-wider mb-6">SOCIAL</h3>
                    <div class="flex space-x-6">
                        <a href="#"
                            class="text-gray-400 hover:text-amber-700 transition-colors duration-300">Instagram</a>
                        <a href="#"
                            class="text-gray-400 hover:text-amber-700 transition-colors duration-300">Facebook</a>
                        <a href="#"
                            class="text-gray-400 hover:text-amber-700 transition-colors duration-300">Twitter</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-900 mt-16 pt-8 text-center">
                <p class="font-light">&copy; 2024 Luxury Coffee House. All rights reserved.</p>
            </div>
        </div>
    </footer>
</x-layout>
