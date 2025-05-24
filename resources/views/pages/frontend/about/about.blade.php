@extends('layouts.kasau')

@section('title', 'Kasau Group - About Page')

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
        <section class="relative w-full min-h-screen flex items-center justify-center">
            <div class="container mx-auto px-4 flex justify-center">
                <!-- Mobile Title -->
                <div class="md:hidden text-center">
                    <h1 class="text-4xl font-bold text-yellow-500 mb-4 fade-in">About Kasau Group</h1>
                    <p class="text-xl text-gray-700 slide-up">Leading Shipping Service Company</p>
                </div>

                <!-- Desktop Image Container -->
                <div class="hidden md:block m-auto">
                    <img class="w-full max-w-7xl md:max-w-2xl lg:max-w-3xl xl:max-w-4xl 
                       h-auto object-contain fade-in"
                        src="{{ asset('img/kasau/about/bismillah.png') }}" alt="Ship Crew">

                        <div
                        class="absolute m-auto 
                        top-32 sm:top-36 md:top-40 lg:top-52 xl:top-64 
                        left-0 w-full h-full flex items-center justify-center">
                        <a href="#startSec">
                            <img src="{{ asset('img/kasau/about/arrow.svg') }}" alt="Arrow"
                            class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 lg:w-32 lg:h-32">
                        </a>
                        </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section id="startSec" class="py-20 px-4 lg:px-24 scroll-mt-32">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-3">
                    <div class="w-full lg:w-1/2" data-aos="fade-right">
                        <h2 class="text-3xl lg:text-5xl font-bold text-yellow-500 mb-8">Sejarah Singkat<br>Kasau Group</h2>
                    </div>
                    <div class="w-full lg:w-1/2 space-y-6 lg:text-xl" data-aos="fade-left">
                        <p class="text-gray-700">Kasau Group berawal dari UD. Kasau Nandar, usaha dagang yang didirikan oleh
                            (Alm) H. Kasau Nandar pada 1974, bergerak di bidang perdagangan bahan bangunan dan material
                            kayu.</p>
                        <p class="text-gray-700">Pada 2000, usaha ini berkembang menjadi CV. Kasau Sinar Sejahtera Abadi di
                            bawah kepemimpinan H. Fathun Kasau. Kemudian, pada 4 April 2007 statusnya berubah menjadi PT.
                            Kasau Sinar Sejahtera Abadi, sebagaimana tercatat dalam Akta No. 02 oleh Notaris Siti Rahayu,
                            SH.</p>
                        <p class="text-gray-700">Pada 2008, perusahaan memperluas bisnis dengan mendirikan PT. Kasau Sinar
                            Multi Jasa dan PT. Kasau Sinar Samudera, yang kemudian bermung dalam Kasau Group.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Competency Section -->
        <section class="py-20 px-4 lg:px-24">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row items-start gap-12">
                    <div class="w-full lg:w-1/2" data-aos="fade-right">
                        <h2 class="text-3xl lg:text-5xl font-bold text-gray-900 mb-6">Kompetensi dan<br>Keunggulan
                            Kasau<br>Group</h2>
                        <p class="text-gray-700 lg:text-xl">Kasau Group mengadopsi strategi pertumbuhan vertikal, menangkap sektor
                            industri dari proyek, pengadaan hingga multi logistik, menjamin kualitas produk dan layanan
                            dengan tanpa pasukan uplease dan dibantrains yang efisien.</p>
                    </div>
                    <div class="w-full lg:w-1/2 grid grid-cols-3 gap-4" data-aos="fade-left">
                        <img src="{{ asset('img/kasau/about/exca.png') }}" alt="Ship 1" class="w-full rounded-lg shadow">
                        <img src="{{ asset('img/kasau/about/fadlunSide.png') }}" alt="Ship 2"
                            class="w-full rounded-lg shadow">
                        <img src="{{ asset('img/kasau/about/fadlunTop.png') }}" alt="Ship 2"
                            class="w-full rounded-lg shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Capacity Section -->
        <section class="py-20 px-4 lg:px-24">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-12">
                    <div class="w-full lg:w-1/2" data-aos="fade-right">
                        <img src="{{ asset('img/kasau/about/crew.jpg') }}" alt="Crew Members"
                            class="w-full rounded-xl shadow-xl">
                    </div>
                    <div class="w-full lg:w-1/2 space-y-6" data-aos="fade-left">
                        <h3 class="text-xl font-semibold lg:text-2xl">Kapasitas Produksi dan Infrastruktur Kasau Group memiliki armada
                            kapal sendiri, memungkinkan harga lebih kompetitif dan efisiensi biaya operasional.</h3>
                        <ul class="space-y-2 lg:text-xl">
                            <li>• Kapasitas produksi: >30.000 ton material/bulan</li>
                            <li>• Kapasitas stockpile: >4.000 ton material</li>
                        </ul>
                        <a href="https://backend-kasau.test/kasau-sinar-sejahtera-abadi" class="inline-block text-yellow-500 hover:text-yellow-600">Learn more →</a>
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
