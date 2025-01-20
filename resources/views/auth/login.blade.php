<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --}}

        <div class="max-w-md w-full space-y-8 bg-white rounded-2xl shadow-xl p-8 relative overflow-hidden">
            <!-- Coffee bean decoration -->
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-amber-900/10 rounded-full"></div>
            <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-amber-900/10 rounded-full"></div>

            <!-- Header -->
            <div class="text-center relative">
                <i class="fas fa-mug-hot text-4xl text-amber-800 mb-2"></i>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Welcome Back</h2>
                <p class="text-gray-600">Sign in to your coffee account</p>
            </div>

            <!-- Login Form -->
            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="relative">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-amber-800"></i>
                        </div>
                        <input id="email" name="email" type="email" required
                            class="block w-full pl-10 pr-3 py-2.5 border border-amber-200 rounded-xl 
                                      focus:ring-2 focus:ring-amber-500 focus:border-amber-500 
                                      bg-white/80 backdrop-blur-sm transition duration-200"
                            placeholder="your@email.com">
                    </div>
                </div>

                <!-- Password -->
                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-amber-800"></i>
                        </div>
                        <input id="password" name="password" type="password" required
                            class="block w-full pl-10 pr-3 py-2.5 border border-amber-200 rounded-xl 
                                      focus:ring-2 focus:ring-amber-500 focus:border-amber-500 
                                      bg-white/80 backdrop-blur-sm transition duration-200"
                            placeholder="Password..">
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox"
                            class="h-4 w-4 rounded border-amber-300 text-amber-800 
                                      focus:ring-amber-500 transition duration-200">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                            Remember me
                        </label>
                    </div>
                    <a href="{{ route('password.request') }}"
                        class="text-sm font-medium text-amber-800 hover:text-amber-700 
                              transition duration-200">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full flex justify-center py-3 px-4 rounded-xl 
                               bg-amber-800 hover:bg-amber-900 
                               text-white font-medium transition duration-200 
                               focus:outline-none focus:ring-2 focus:ring-offset-2 
                               focus:ring-amber-500">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Sign in
                </button>
            </form>

            <!-- Sign up link -->
            <p class="mt-4 text-center text-sm text-gray-600">
                Don't have an account?
                <a href="/register" class="font-medium text-amber-800 hover:text-amber-700 transition duration-200">
                    Sign up now
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
