@extends('layouts.kasau')
@section('title', 'Kasau Group - KSMJ')

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


        <!-- Hero Section -->
        <section class="relative w-full min-h-screen flex items-center justify-center py-12 md:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl md:text-5xl lg:text-8xl text-center font-bold font-inter">
                    Kasau <span class="text-yellow-500">Sinar</span> Multi <span class="text-yellow-500">Jasa</span>
                </h1>
                <p
                    class="mt-10 text-gray-700 text-base font-inter sm:text-base md:text-xl lg:text-2xl px-4 sm:px-8 md:px-16 lg:px-20 max-w-6xl">
                    PT. KSMJ (Kasau Sinar Multi Jasa) merupakan perusahaan yang berfokus pada jasa bongkar muat material dan
                    pengelolaan alat berat (heavy equipment). Meski saat ini belum aktif beroperasi.
                </p>
                <p
                    class="mt-5 text-gray-700 text-base font-inter sm:text-base md:text-xl lg:text-2xl px-4 sm:px-8 md:px-16 lg:px-20 max-w-6xl">
                    PT. KSMJ memiliki pengalaman dan fondasi kuat untuk kembali bangkit dengan pendekatan yang lebih modern
                    dan strategis. Perusahaan ini memiliki keahlian khusus dalam mendukung distribusi dan logistik di
                    berbagai proyek konstruksi dan industri.
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-36 px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold font-inter text-gray-900 mb-12">Our Services</h2>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-10 max-w-7xl mx-auto lg:px-40">
                <div class="bg-white shadow-lg rounded-3xl p-10 transition duration-300 hover:shadow-xl">
                    <h3 class="text-2xl font-bold text-indigo-900 mb-6 font-inter">Jasa Bongkar Muat Darat</h3>
                    <p class="text-gray-600 text-lg font-inter">PT. KSMJ berpengalaman menangani bongkar muat berbagai material konstruksi seperti batu, agregat, dan pasir, dengan fokus pada efisiensi, keselamatan, dan kelancaran proses.</p>
                </div>
                <div class="bg-white shadow-lg rounded-3xl p-10 transition duration-300 hover:shadow-xl">
                    <h3 class="text-2xl font-bold text-indigo-900 mb-6 font-inter">Pengelolaan Alat Berat</h3>
                    <p class="text-gray-600 text-lg font-inter">Menyediakan operator dan alat berat seperti excavator dan dump truck untuk keperluan penggalian, pemindahan, hingga distribusi material di area proyek maupun tambang.</p>
                </div>
            </div>
        </section>       


        <!-- Services Section -->
        <section id="services" class="my-8 px-4 sm:px-8 md:px-16 lg:px-40 relative min-h-screen py-8 md:py-20">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#050038] text-center mb-8 lg:mb-12">Our Vehicles</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 xl:gap-10">
                <!-- Service Card -->
                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/HINO-500-Series.jpg') }}" alt="Ash Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">Hino 500 Series</h3>
                    </div>
                </div>

                <!-- Repeat for other services with same enhanced structure -->
                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/ISUZU-ELF-NKR-125-PS.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">ISUZU ELF NKR 125 PS</h3>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/ISUZU Giga FVZ + Tadano TM-ZX1500 Crane Mounted Truck.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">ISUZU Giga FVZ + Tadano TM-ZX1500 Crane Mounted Truck</h3>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/UD CWA 260X.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">UD CWA 260X</h3>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/UD Nissan Diesel CW45 (C-Series), Year 1990 (Refurbished).jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">UD Nissan Diesel CW45 (C-Series), Year 1990 (Refurbished)</h3>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/UD QUESTER.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">UD QUESTER</h3>
                    </div>
                </div>

                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/Kato SS-500SP Rough Terrain Crane.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">Kato SS-500SP Rough Terrain Crane</h3>
                    </div>
                </div>


                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/Mitsubishi FD-40-KT Diesel Forklift Truck (2001).jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">Mitsubishi FD-40-KT Diesel Forklift Truck (2001)</h3>
                    </div>
                </div>


                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/Mitsubishi FD30NT Forklift.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">Mitsubishi FD30NT Forklift</h3>
                    </div>
                </div>


                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/Mitsubishi FD100N Pneumatic Tire Forklift.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">Mitsubishi FD100N Pneumatic Tire Forklift</h3>
                    </div>
                </div>


                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/CATERPILLAR DP50K Diesel Forklift.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">CATERPILLAR DP50K Diesel Forklift</h3>
                    </div>
                </div>


                <div
                    class="bg-[#303030] rounded-3xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden p-3 sm:p-4">
                    <img src="{{ asset('/img/kasau/subCompany/SANY SY215c.png') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-white font-inter mb-3 sm:mb-4">SANY SY215c</h3>
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
