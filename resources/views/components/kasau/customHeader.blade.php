@section('styles')
    <style>
        section[id] {
            scroll-margin-top: 100px;
        }

        /* Core Animations */
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

        /* Interactive Elements */
        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        /* Mobile Menu Animations */
        .mobile-menu-enter {
            animation: mobileMenuIn 0.3s ease-out;
        }

        .mobile-menu-exit {
            animation: mobileMenuOut 0.2s ease-in;
        }

        @keyframes mobileMenuIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes mobileMenuOut {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(-10px);
            }
        }
    </style>
@endsection

        <header x-data="{ isScrolled: false, mobileMenuOpen: false }" @scroll.window="isScrolled = (window.pageYOffset > 20)"
            class="fixed bg-black/80 backdrop-blur-md top-0 left-0 w-full z-50 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex items-center justify-between">

                    <!-- Logo -->
                    <a href="https://backend-kasau.test/kasau-home" class="cursor-pointer">
                        <img src="{{ asset('img/kasau/logo/logo.svg') }}" alt="Logo"
                            class="scale-150 h-8 md:h-10 transition-all">
                    </a>

                    <!-- Mobile Menu Button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="md:hidden relative z-50 w-10 h-10 flex items-center justify-center
                               text-white focus:outline-none">
                        <span class="sr-only">Toggle Menu</span>
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-8">
                        <ul class="flex items-center space-x-8">
                            <li
                                class="text-white hover:text-orange-400 transition-colors text-sm font-medium
                                  relative after:absolute after:bottom-0 after:left-0 after:w-0 
                                  after:h-0.5 after:bg-orange-400 after:transition-all hover:after:w-full">
                                <a href="https://backend-kasau.test/kasau-home">Home</a>
                            </li>
                            <li
                                class="text-white hover:text-orange-400 transition-colors text-sm font-medium
                                  relative after:absolute after:bottom-0 after:left-0 after:w-0 
                                  after:h-0.5 after:bg-orange-400 after:transition-all hover:after:w-full">
                                <a href="https://backend-kasau.test/kasau-home#about">About</a>
                            </li>
                            <li
                                class="text-white hover:text-orange-400 transition-colors text-sm font-medium
                                  relative after:absolute after:bottom-0 after:left-0 after:w-0
                                  after:h-0.5 after:bg-orange-400 after:transition-all hover:after:w-full">
                                <a href="https://backend-kasau.test/kasau-home#company">Company</a>
                            </li>
                            <li
                                class="text-white hover:text-orange-400 transition-colors text-sm font-medium
                                  relative after:absolute after:bottom-0 after:left-0 after:w-0 
                                  after:h-0.5 after:bg-orange-400 after:transition-all hover:after:w-full">
                                <a href="https://backend-kasau.test/kasau-partner">Partner</a>
                            </li>
                        </ul>
                        <a href="https://backend-kasau.test/kasau-form">
                            <button
                                class="bg-gradient-to-r from-orange-400 to-orange-500 text-white 
                                         px-6 py-2 rounded-full font-medium hover:shadow-lg 
                                        transform hover:scale-105 transition-all">
                                Contact
                            </button>
                        </a>
                    </nav>
                </div>

                <!-- Mobile Navigation -->
                <nav x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-4"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-4" @click.away="mobileMenuOpen = false"
                    class="md:hidden fixed top-[60px] left-0 w-full bg-black/80 backdrop-blur-md py-4 px-4">
                    <div class="space-y-2">
                        <ul class="space-y-2">
                            <li>
                                <a href="https://backend-kasau.test/kasau-home" @click="mobileMenuOpen = false"
                                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg 
                                   transition-all duration-200 relative overflow-hidden group">
                                    <span class="relative z-10 flex items-center justify-between">
                                        <span class="text-sm font-medium">Home</span>
                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="https://backend-kasau.test/kasau-home#about" @click="mobileMenuOpen = false"
                                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg 
                                   transition-all duration-200 relative overflow-hidden group">
                                    <span class="relative z-10 flex items-center justify-between">
                                        <span class="text-sm font-medium">About</span>
                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="https://backend-kasau.test/kasau-home#company" @click="mobileMenuOpen = false"
                                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg 
                                   transition-all duration-200 relative overflow-hidden group">
                                    <span class="relative z-10 flex items-center justify-between">
                                        <span class="text-sm font-medium">Company</span>
                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="https://backend-kasau.test/kasau-partner" @click="mobileMenuOpen = false"
                                    class="block py-3 px-4 text-white hover:bg-white/10 rounded-lg 
                                   transition-all duration-200 relative overflow-hidden group">
                                    <span class="relative z-10 flex items-center justify-between">
                                        <span class="text-sm font-medium">Partner</span>
                                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </span>
                                </a>
                            </li>

                            <!-- Mobile Contact Button -->
                            <div class="pt-4 pb-2">
                                <a href="https://backend-kasau.test/kasau-partner">
                                    <button
                                        class="w-full bg-gradient-to-r from-orange-400 to-orange-500 
                                         text-white px-6 py-3 rounded-lg font-medium 
                                         hover:shadow-lg hover:shadow-orange-500/25
                                         active:scale-95 transform transition-all duration-200">
                                        Contact Us
                                    </button>
                                </a>
                            </div>
                    </div>
                </nav>
            </div>
        </header>

@section('scripts')
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection