<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section with Background -->
    <div class="relative h-64 bg-cover bg-center" style="background-image: url('/api/placeholder/1920/400')">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative h-full flex items-center justify-center">
            <h1 class="text-5xl font-serif text-white tracking-wider">Contact Us</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-16 bg-white">
        <!-- Intro Text -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <p class="text-lg text-amber-800 font-serif italic">"Every cup tells a story, every visit makes a memory"</p>
            <div class="w-24 h-1 bg-amber-800 mx-auto my-6"></div>
            <p class="text-gray-600">We'd love to hear from you. Whether you're looking to make a reservation, plan an
                event, or simply want to share your experience, we're here to help.</p>
        </div>

        <!-- Contact Content -->
        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Opening Hours -->
            <div class="bg-amber-50 p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-amber-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-amber-900 mb-4">Opening Hours</h3>
                    <div class="space-y-2 text-gray-600">
                        <p><span class="font-semibold">Mon - Fri:</span> 7:00 AM - 10:00 PM</p>
                        <p><span class="font-semibold">Saturday:</span> 8:00 AM - 11:00 PM</p>
                        <p><span class="font-semibold">Sunday:</span> 8:00 AM - 9:00 PM</p>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="bg-amber-50 p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-amber-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-amber-900 mb-4">Visit Us</h3>
                    <address class="not-italic text-gray-600">
                        123 Coffee Street<br>
                        Café District, City 12345<br>
                        <span class="block mt-2 text-amber-800">Free parking available</span>
                    </address>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="bg-amber-50 p-8 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-amber-800" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif text-amber-900 mb-4">Contact Info</h3>
                    <div class="space-y-2 text-gray-600">
                        <p>Phone: (555) 123-4567</p>
                        <p>Email: hello@caffe.com</p>
                        <p>Reservations: book@caffe.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="mt-20 max-w-3xl mx-auto">
            <div class="bg-white rounded-lg shadow-xl p-8 border border-amber-100">
                <h3 class="text-3xl font-serif text-center text-amber-900 mb-8">Send Us a Message</h3>

                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 block w-full rounded-md border-amber-200 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-200 focus:ring-opacity-50 transition-colors duration-200">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email"
                                class="mt-1 block w-full rounded-md border-amber-200 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-200 focus:ring-opacity-50 transition-colors duration-200">
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <select id="subject" name="subject"
                            class="mt-1 block w-full rounded-md border-amber-200 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-200 focus:ring-opacity-50 transition-colors duration-200">
                            <option>General Inquiry</option>
                            <option>Reservation</option>
                            <option>Private Event</option>
                            <option>Feedback</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="6"
                            class="mt-1 block w-full rounded-md border-amber-200 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-200 focus:ring-opacity-50 transition-colors duration-200"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-amber-800 text-white px-8 py-4 rounded-md hover:bg-amber-900 transform hover:-translate-y-1 transition-all duration-200 font-medium text-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Social Media Links -->
        <div class="mt-16 text-center">
            <h4 class="text-xl font-serif text-amber-900 mb-6">Follow Us</h4>
            <div class="flex justify-center space-x-6">
                <a href="#"
                    class="text-amber-800 hover:text-amber-900 transform hover:scale-110 transition-transform duration-200">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                    </svg>
                </a>
                <a href="#"
                    class="text-amber-800 hover:text-amber-900 transform hover:scale-110 transition-transform duration-200">
                    <span class="sr-only">Instagram</span>
                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" />
                    </svg>
                </a>
                <a href="#"
                    class="text-amber-800 hover:text-amber-900 transform hover:scale-110 transition-transform duration-200">
                    <span class="sr-only">Twitter</span>
                    <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Map Section -->
        <div class="mt-16">
            <div class="bg-amber-50 rounded-lg shadow-lg p-4">
                <div class="aspect-w-16 aspect-h-9">
                    <!-- Placeholder for map -->
                    <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                        <p class="text-gray-600">Interactive Map Would Be Here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
