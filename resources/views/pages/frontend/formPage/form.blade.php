@extends('layouts.kasau')

@section('title', 'Contact Us - Kasau Group')

@section('styles')
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        .slide-up {
            animation: slideUp 0.6s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
@endsection

@section('content')
    <div class="bg-[#f5efeb] text-gray-800 min-h-screen w-full">
        @include('components.kasau.customHeader')

        <div class="pt-32 pb-20 px-4  md:px-20">
            <div class="">
                <!-- Header -->
                <div class="text-center mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 fade-in"> <span class="text-[#DFAC37]">Contact</span> Us
                    </h1>
                    <p class="text-gray-600 text-lg slide-up">Ada pertanyaan atau masukan? Ketik dibawah ya!</p>
                </div>

                <!-- Contact Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start bg-white rounded-2xl shadow-lg">

                    <div class="h-full p-6 overflow-hidden">
                        <!-- Contact Information -->
                        <div class="relative bg-[#DFAC37] text-white rounded-2xl p-6 h-[600px] overflow-hidden">
                            <h3 class="text-2xl font-bold mb-6">Contact Information</h3>

                            <!-- Location -->
                            <div class="mb-8 flex items-start gap-4">
                                <div class="mt-1">
                                    <!-- Icon -->
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <p class="text-lg">
                                    PT. Kasau Sinar Samudera, Kompleks Balikpapan Baru BB, Balikpapan Selatan, Kalimantan
                                    Timur.
                                </p>
                            </div>

                            <!-- Phone -->
                            <div class="mb-6 flex items-start gap-4">
                                <div class="mt-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-lg">(0542) 891122</p>
                                    <p class="text-lg">(0542) 739677</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-6 flex items-start gap-4">
                                <div class="mt-1">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <p class="text-lg">marketing@kasausup.com</p>
                            </div>

                            <!-- Bubble -->
                            <img src="{{ asset('img/kasau/Buble.svg') }}" alt=""
                                class="absolute bottom-0 right-0 w-[300px] pointer-events-none select-none" />

                            <!-- Social Media -->
                            <div class="absolute bottom-0 left-0 flex gap-4 p-6">
                            <a href="#" class="hover:text-orange-200 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <!-- LinkedIn -->
                            <a href="#" class="hover:text-orange-200 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <!-- YouTube -->
                            <a href="#" class="hover:text-orange-200 transition-colors">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 576 512">
                                    <path
                                        d="M549.655 124.083c-6.281-23.65-24.777-42.256-48.317-48.624C457.549 64 288 64 288 64s-169.549 0-213.338 11.459c-23.54 6.368-42.036 24.974-48.317 48.624C16 168.26 16 256 16 256s0 87.74 10.345 131.917c6.281 23.65 24.777 42.256 48.317 48.624C118.451 448 288 448 288 448s169.549 0 213.338-11.459c23.54-6.368 42.036-24.974 48.317-48.624C560 343.74 560 256 560 256s0-87.74-10.345-131.917zM232 336V176l142 80-142 80z" />
                                </svg>
                            </a>
                            </div>
                        </div>
                    </div>


                    <!-- Contact Form -->
                    <div class="bg-white rounded-2xl p-6">
                        <form action="{{ route('form.store') }}" method="POST">
                            @csrf
                            <div class="space-y-6">

                                <!-- Name Fields -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-1" for="first_name">First
                                            Name</label>
                                        <input type="text" id="first_name" name="first_name"
                                            class="w-full py-2 border-b-2 border-gray-300 focus:border-black focus:outline-none bg-transparent focus:transition-colors duration-300"
                                            placeholder="First Name" required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-1" for="last_name">Last
                                            Name</label>
                                        <input type="text" id="last_name" name="last_name"
                                            class="w-full py-2 border-b-2 border-gray-300 focus:border-black focus:outline-none bg-transparent focus:transition-colors duration-300"
                                            placeholder="Last Name" required>
                                    </div>
                                </div>

                                <!-- Email & Phone -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-1" for="email">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="w-full py-2 border-b-2 border-gray-300 focus:border-black focus:outline-none bg-transparent focus:transition-colors duration-300"
                                            placeholder="Email" required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-medium mb-1" for="phone">Phone</label>
                                        <input type="tel" id="phone" name="phone"
                                            class="w-full py-2 border-b-2 border-gray-300 focus:border-black focus:outline-none bg-transparent focus:transition-colors duration-300"
                                            placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <!-- Subject Selection -->
                                <div>
                                    <label class="block text-gray-700 font-medium mb-3">Select Subject?</label>
                                    <div class="flex flex-wrap gap-4">
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="radio" name="subject" value="General Inquiry"
                                                class="form-radio h-4 w-4 text-orange-500 rounded-full border-gray-300 focus:ring-orange-500">
                                            <span class="text-sm text-gray-700">General inquiry</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="radio" name="subject" value="Partner Inquiry"
                                                class="form-radio h-4 w-4 text-orange-500 rounded-full border-gray-300 focus:ring-orange-500">
                                            <span class="text-sm text-gray-700">Partner inquiry</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="radio" name="subject" value="Service Inquiry"
                                                class="form-radio h-4 w-4 text-orange-500 rounded-full border-gray-300 focus:ring-orange-500">
                                            <span class="text-sm text-gray-700">Service inquiry</span>
                                        </label>
                                        <label class="flex items-center space-x-2 cursor-pointer">
                                            <input type="radio" name="subject" value="Other"
                                                class="form-radio h-4 w-4 text-orange-500 rounded-full border-gray-300 focus:ring-orange-500">
                                            <span class="text-sm text-gray-700">Other</span>
                                        </label>
                                    </div>
                                </div>


                                <!-- Message -->
                                <div>
                                    <label class="block text-gray-700 font-medium mb-1" for="message">Message</label>
                                    <div>
                                        <textarea id="message" name="message" rows="4"
                                            class="w-full py-2 border-b-2 border-gray-300 focus:border-black focus:outline-none bg-transparent focus:transition-colors duration-300"
                                            placeholder="Write your message..." required></textarea>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="text-right">
                                    <button type="submit"
                                        class="bg-gradient-to-r from-orange-500 to-orange-600 text-white font-medium px-6 py-2 rounded-lg
                                                hover:shadow-lg transform hover:scale-[1.02] transition-all">
                                        Send Message
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
                <div class="h-[400px] bg-white rounded-2xl mt-8 shadow-lg">

                    <!-- Google Map -->
                    <div class="mt-8 rounded-lg overflow-hidden flex items-center justify-center h-full p-5"> <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0845064003163!2d116.85976089999999!3d-1.2466667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147ef6acca875%3A0xd1cf1c5ed6031ddd!2sPT.%20Kasau%20Sinar%20Samudera!5e0!3m2!1sid!2sid!4v1684397851659!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        // Handle subject selection
        const subjects = document.querySelectorAll('[type="button"]');
        subjects.forEach(button => {
            button.addEventListener('click', () => {
                subjects.forEach(b => b.classList.remove('bg-orange-500', 'text-white'));
                button.classList.add('bg-orange-500', 'text-white');
            });
        });
    </script>
@endsection
