@extends('layouts.kasau')
@section('title', 'Kasau Group - KSS')

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
    <div class="bg-[#f5efeb] text-gray-800 min-h-screen">
        @include('components.kasau.customHeader')

        <section class="relative w-full min-h-screen flex items-center justify-center flex-col px-4 lg:px-20 py-12 lg:py-24">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl text-center font-bold leading-tight">
                Kasau <span class="text-yellow-500">Sinar</span> Samudera
            </h1>
            <p
                class="mt-4 text-gray-700 text-center text-sm sm:text-base md:text-xl lg:text-2xl px-4 sm:px-8 md:px-16 lg:px-32 max-w-6xl">
                Kasau Sinar Samudera adalah salah satu anak perusahaan yang bernaung dalam Kasau Group, bergerak di bidang
                jasa angkutan laut dan agen pelayaran. Berdiri sejak tahun 1999 di Balikpapan,
            </p>
            <p
                class="mt-4 text-gray-700 text-center text-sm sm:text-base md:text-xl lg:text-2xl px-4 sm:px-8 md:px-16 lg:px-32 max-w-6xl">
                perusahaan ini menyediakan layanan penyewaan kapal untuk transportasi material seperti pasir, batu, dan
                bahan lainnya melalui sistem transshipment, serta pengiriman via sungai dan pesisir pantai dari pelabuhan
                muat ke pelabuhan bongkar.
            </p>
        </section>

        <!-- Services Section -->
        <section id="services" class="my-8 px-4 sm:px-8 md:px-16 lg:px-40 relative min-h-screen py-8 md:py-20">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#050038] text-center mb-8 lg:mb-12">Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 xl:gap-10">
                <!-- Service Card -->
                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('img/kasau/subCompany/fadlun.jpg') }}" alt="Ash Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4">TB. Fadlun 99-01</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-3">
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Long Towing</p>
                                <p class="text-[#DFAC37] font-semibold">TugBoat</p>
                            </div>
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Net Tonnage</p>
                                <p class="text-[#DFAC37] font-semibold">36 NT</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Repeat for other services with same enhanced structure -->
                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('img/kasau/subCompany/Linear.png') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4">TB. Fadlun 99-07</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-3">
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Long Towing</p>
                                <p class="text-[#DFAC37] font-semibold">TugBoat</p>
                            </div>
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Net Tonnage</p>
                                <p class="text-[#DFAC37] font-semibold">48 NT</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('img/kasau/subCompany/fadlun-99.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4">TB. Fadlun 99-09</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-3">
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Supporting Rig</p>
                                <p class="text-[#DFAC37] font-semibold">TugBoat</p>
                            </div>
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Net Tonnage</p>
                                <p class="text-[#DFAC37] font-semibold">43 NT</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('img/kasau/subCompany/gambar.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4">BG. Baiduri-B</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-3">
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Barge</p>
                                <p class="text-[#DFAC37] font-semibold">180FT Jumbo</p>
                            </div>
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Net Tonnage</p>
                                <p class="text-[#DFAC37] font-semibold">267 Ton</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('img/kasau/subCompany/gambar-3.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4">BG. Fadlun 99-03</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-3">
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Barge</p>
                                <p class="text-[#DFAC37] font-semibold">180FT Jumbo</p>
                            </div>
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Net Tonnage</p>
                                <p class="text-[#DFAC37] font-semibold">226 Ton</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('img/kasau/subCompany/gambar-2.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4">BG. Fadlun 99-08</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-3">
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Barge</p>
                                <p class="text-[#DFAC37] font-semibold">230 FT</p>
                            </div>
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Net Tonnage</p>
                                <p class="text-[#DFAC37] font-semibold">405 Ton</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('img/kasau/subCompany/gambar-1.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white mb-3 sm:mb-4">BG. RVR-2</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2 sm:pt-3">
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Barge</p>
                                <p class="text-[#DFAC37] font-semibold">240 FT Jumbo</p>
                            </div>
                            <div>
                                <p class="text-white text-sm sm:text-base mb-2">Net Tonnage</p>
                                <p class="text-[#DFAC37] font-semibold">567 Ton</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('components.kasau.footer')
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
