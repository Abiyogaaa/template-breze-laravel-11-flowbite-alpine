<nav class="relative bg-white" x-data="{ mobileMenuOpen: false, userDropdownOpen: false }">
    <!-- Main navigation container -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <!-- Logo and nav links -->
            <div class="flex items-center">
                <!-- Enhanced Logo -->
                <a href="#" class="flex items-center group relative">
                    <div class="relative h-10 w-10">
                        <!-- Background layers with enhanced animation -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl rotate-6 transform transition-all duration-300 group-hover:rotate-12 group-hover:scale-110">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl rotate-2 transform transition-all duration-300 group-hover:rotate-6 group-hover:scale-105">
                        </div>
                        <div
                            class="relative bg-gradient-to-r from-indigo-600 to-purple-600 h-full w-full rounded-xl flex items-center justify-center transform transition-transform duration-300 group-hover:scale-95">
                            <span class="text-xl font-bold text-gray-50">KC</span>
                        </div>
                    </div>
                    <span
                        class="ml-3 text-4xl font-bold bg-gradient-to-r from-indigo-500 via-indigo-500 to-pink-500 bg-clip-text text-transparent hover:from-amber-600 hover:via-amber-400 hover:to-amber-200 transition-all duration-300">
                        KEAN COFFEE
                    </span>
                    <!-- Logo hover glow effect -->
                    <div
                        class="absolute -inset-2 rounded-2xl bg-white/10 blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </a>

                <!-- Desktop Navigation with enhanced hover effects -->
                <div class="hidden md:ml-12 md:flex md:items-center md:space-x-8">
                    <x-nav-link href="/" :active="request()->is('/')">
                        Home
                    </x-nav-link>
                    <x-nav-link href="/coffee" :active="request()->is('coffee')">
                        Coffee
                    </x-nav-link>
                    <x-nav-link href="/menu" :active="request()->is('menu')">
                        Menu
                    </x-nav-link>
                    <x-nav-link href="/posts" :active="request()->is('posts')">
                        Blog
                    </x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">
                        Contact
                    </x-nav-link>
                </div>
            </div>

            <!-- Right section -->
            <div class="flex items-center space-x-6">
                <!-- Enhanced Search Bar -->
                {{-- <div class="hidden md:block">
                    <div class="relative group">
                        <input type="text"
                            class="w-64 px-4 py-2 pl-10 text-sm bg-gray-800/50 rounded-full text-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all duration-300 backdrop-blur-sm border border-gray-700/50 group-hover:border-indigo-500/50"
                            placeholder="Search...">
                        <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400 transition-colors duration-300 group-hover:text-indigo-400"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <!-- Search bar hover glow -->
                        <div
                            class="absolute inset-0 rounded-full bg-indigo-500/20 opacity-0 group-hover:opacity-100 blur-md transition-opacity duration-300">
                        </div>
                    </div>
                </div> --}}

                <!-- Enhanced Profile Dropdown -->
                {{-- <div class="hidden md:relative md:flex md:items-center" x-data="{ open: false }">
                    <button @click="open = !open" @click.away="open = false"
                        class="flex items-center space-x-3 focus:outline-none group relative" id="user-menu-button"
                        aria-expanded="false" aria-haspopup="true">
                        <div
                            class="relative h-10 w-10 rounded-full overflow-hidden ring-2 ring-indigo-500/50 transition-all duration-300 group-hover:ring-indigo-400 group-hover:ring-offset-2 group-hover:ring-offset-gray-800">
                            <img src="/api/placeholder/40/40" alt="Profile"
                                class="h-full w-full object-cover transform transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <span class="text-gray-300 transition-colors duration-300 group-hover:text-white">Tom
                            Cook</span>
                        <svg class="h-5 w-5 text-gray-400 transition-all duration-300"
                            :class="{ 'transform rotate-180 text-indigo-400': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <!-- Profile button hover glow -->
                        <div
                            class="absolute -inset-2 rounded-lg bg-white/5 opacity-0 group-hover:opacity-100 blur-sm transition-opacity duration-300">
                        </div>
                    </button>

                    <!-- Enhanced Dropdown Menu -->
                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 top-12 z-50 mt-2 w-48 origin-top-right rounded-md bg-white/10 backdrop-blur-lg py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <a href="#"
                            class="block px-4 py-2 text-sm text-white hover:bg-white/10 transition-colors duration-150">Your
                            Profile</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-white hover:bg-white/10 transition-colors duration-150">Settings</a>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-white hover:bg-white/10 transition-colors duration-150">Sign
                            out</a>
                    </div>
                </div> --}}

                <!-- Enhanced Mobile menu button -->
                <button type="button" @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden relative rounded-md p-2 text-gray-950 hover:text-black focus:outline-none group">
                    <span
                        class="absolute -inset-1 rounded-lg bg-white group-hover:opacity-100 transition-opacity duration-300"></span>
                    <svg x-show="!mobileMenuOpen"
                        class="h-6 w-6 transform transition-transform duration-300 group-hover:scale-110" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen"
                        class="h-6 w-6 transform transition-transform duration-300 group-hover:scale-110" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Enhanced Mobile menu -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1" class="md:hidden bg-white backdrop-blur-sm">
        <!-- Mobile navigation links -->
        <div class="flex flex-col space-y-1 px-2 pb-3 pt-2 items-center">
            <x-nav-link href="/" :active="request()->is('/')">
                Home
            </x-nav-link>
            <x-nav-link href="/coffee" :active="request()->is('coffee')">
                Coffee
            </x-nav-link>
            <x-nav-link href="/menu" :active="request()->is('menu')">
                Menu
            </x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">
                Blog
            </x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">
                Contact
            </x-nav-link>

        </div>

        <!-- Enhanced Mobile profile section -->
        {{-- <div class="border-t border-gray-700/50 pb-3 pt-4 backdrop-blur-sm">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full ring-2 ring-indigo-500/30" src="/api/placeholder/40/40"
                        alt="Profile">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-white">Tom Cook</div>
                    <div class="text-sm font-medium text-indigo-300">tom@example.com</div>
                </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/10 hover:text-white transition-all duration-150">Your
                    Profile</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/10 hover:text-white transition-all duration-150">Settings</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/10 hover:text-white transition-all duration-150">Sign
                    out</a>
            </div>
        </div> --}}
    </div>
</nav>
