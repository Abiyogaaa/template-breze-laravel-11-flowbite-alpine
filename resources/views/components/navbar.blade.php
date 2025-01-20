<nav class="relative bg-white" x-data="{ mobileMenuOpen: false, userDropdownOpen: false }">
    <!-- Main navigation container -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-self-center">
            <!-- Logo and nav links -->
            <div class="flex items-center">
                <!-- Enhanced Logo -->
                <a href="#" class="flex items-center group relative">
                    <div class="relative h-10 w-10">
                        <!-- Background layers with enhanced animation -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-amber-700 to-gray-950 rounded-xl rotate-6 transform transition-all duration-300 group-hover:rotate-12 group-hover:scale-110">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-amber-950 to-gray-50 rounded-xl rotate-2 transform transition-all duration-300 group-hover:rotate-6 group-hover:scale-105">
                        </div>
                        <div
                            class="relative bg-gradient-to-r from-amber-700 to-amber-950 h-full w-full rounded-xl flex items-center justify-center transform transition-transform duration-300 group-hover:scale-95">
                            <span class="text-xl font-bold text-gray-50">☕</span>
                        </div>
                    </div>
                    <span
                        class="ml-3 text-4xl font-bold bg-gradient-to-r from-amber-700 via-amber-950 to-gray-950 bg-clip-text text-transparent transition-all duration-300">
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

                    @auth
                        <div class="relative flex items-center" x-data="{ open: false }" @click.away="open = false">
                            <!-- User Avatar Button -->
                            <button @click="open = !open" class="relative flex items-center group focus:outline-none"
                                aria-expanded="false" aria-haspopup="true">
                                <img src="{{ Auth::user()->profile_photo_url ?? asset('path/to/default-avatar.png') }}"
                                    alt="{{ Auth::user()->name }}"
                                    class="w-10 h-10 rounded-full object-cover transition duration-150 ease-in-out ring-2 ring-transparent group-hover:ring-[#FF2D20]">
                                <!-- Small Dropdown Indicator -->
                                <svg class="ml-2 h-4 w-4 text-gray-400 group-hover:text-gray-600 transition-colors duration-150 ease-in-out"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute left top-full mt-2 w-30 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                style="display: none;">

                                <!-- User Info Section -->
                                <div class="px-4 py-2 border-b border-gray-100">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                        {{ Str::limit(Auth::user()->name, 14) }}</p>
                                    <p class="text-sm text-gray-500 truncate">{{ Str::limit(Auth::user()->email, 14) }}</p>
                                </div>

                                <!-- Navigation Links -->
                                <a href="{{ url('/dashboard') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition duration-150 ease-in-out"
                                    role="menuitem">
                                    <div class="flex items-center">
                                        <svg class="mr-3 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                        Dashboard
                                    </div>
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition duration-150 ease-in-out group"
                                        role="menuitem">
                                        <div class="flex items-center">
                                            <svg class="mr-3 h-4 w-4 text-gray-400 " xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <span class=" transition-colors duration-150">Logout</span>
                                        </div>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <x-nav-link href="{{ route('login') }}" :active="request()->is('login')"
                            class="rounded-md px-4 py-2 text-gray-800 transition duration-150 ease-in-out
               hover:bg-gray-100
               dark:text-white dark:hover:bg-gray-800">
                            <span class="flex items-center">
                                <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                </svg>
                                Login
                            </span>
                        </x-nav-link>
                    @endauth
                    <style>
                        /* Smooth dropdown backdrop animation */
                        .backdrop-blur-dropdown {
                            backdrop-filter: blur(8px);
                            -webkit-backdrop-filter: blur(8px);
                        }

                        /* Optional: Add these to your existing CSS for enhanced animations */
                        @keyframes dropdownIn {
                            from {
                                opacity: 0;
                                transform: translateY(-8px);
                            }

                            to {
                                opacity: 1;
                                transform: translateY(0);
                            }
                        }

                        @keyframes dropdownOut {
                            from {
                                opacity: 1;
                                transform: translateY(0);
                            }

                            to {
                                opacity: 0;
                                transform: translateY(-8px);
                            }
                        }
                    </style>
                </div>
            </div>

            <!-- Right section -->
            <div class="flex items-center space-x-6">
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
                        class="h-6 w-6 transform transition-transform duration-300 group-hover:scale-110"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
            <x-nav-link href="{{ route('login') }}" :active="request()->is('login')">
                Login
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
