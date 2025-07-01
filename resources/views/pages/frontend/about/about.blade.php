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
        <section id="home" class="scroll-mt-28 relative min-h-screen bg-cover bg-fixed bg-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('{{ asset('img/kasau/about/DSC_4962.jpg') }}');">
            <div class="flex items-center justify-center min-h-screen">
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="space-y-6 flex flex-col items-center justify-center text-center">
                        <h1 class="font-inter text-4xl sm:text-5xl lg:text-8xl font-bold text-white text-center">
                            Kasau Group
                        </h1>
                        <h2 class="font-inter mt-4 text-4xl md:text-6xl text-white text-center">
                            History
                        </h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section id="startSec" class="py-20 px-4 lg:px-24 scroll-mt-32">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-3">
                    <div class="w-full lg:w-1/2" data-aos="fade-right">
                        <h2 class="text-3xl font-inter lg:text-5xl font-bold text-yellow-500 mb-8">Sejarah Singkat<br>Kasau Group</h2>
                    </div>
                    <div class="w-full lg:w-1/2 space-y-6 lg:text-xl" data-aos="fade-left">
                        <p class="text-gray-700">Kasau Group berawal dari UD. Kasau Nandar, usaha dagang yang didirikan oleh (Alm) H. Kasau Nandar pada 1974, bergerak di bidang perdagangan bahan bangunan dan material kayu.</p>

                        <p class="text-gray-700">Pada tahun 2000, usaha ini berkembang menjadi CV. Kasau Sinar Sejahtera Abadi di bawah kepemimpinan Hj. Fadlun Kasau, S.H., M.H. Kemudian, pada 4 April 2007, statusnya berubah menjadi PT. Kasau Sinar Sejahtera Abadi, sebagaimana tercatat dalam Akta No. 02 oleh Notaris Siti Rahayu, SH.</p>

                        <p class="text-gray-700">Pada 2008, perusahaan memperluas bisnis dengan mendirikan PT. Kasau Sinar Multi Jasa dan PT. Kasau Sinar Samudera, yang kemudian bernaung dalam Kasau Group.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Competency Section -->
        <section class="py-20 px-4 lg:px-24">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row items-start gap-12">
                    <div class="w-full lg:w-1/2" data-aos="fade-right">
                        <h2 class="text-3xl lg:text-5xl font-inter font-bold text-gray-900 mb-6">Kompetensi dan<br>Keunggulan
                            Kasau<br>Group</h2>
                        <p class="text-gray-700 lg:text-xl font-inter">PT. Kasau Group memahami pentingnya bersaing secara vertikal dalam skala ekonomi, menjangkau sistem operasi upstream dan downstream untuk menjamin produk dan jasa berkualitas, baik di proyek pemerintah maupun swasta.</p>
                    </div>
                    <div class="w-full lg:w-1/2 grid grid-cols-3 gap-4" data-aos="fade-left">
                        <img src="{{ asset('img/kasau/about/exca.png') }}" alt="Ship 1" class="w-full rounded-lg shadow">
                        <img src="{{ asset('img/kasau/about/fadlunSide.png') }}" alt="Ship 2"
                            class="w-full rounded-lg shadow relative translate-y-6">
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
                        <h3 class="text-xl lg:text-2xl font-inter">Kapasitas Produksi dan Infrastruktur Kasau Group memiliki armada kapal sendiri, yang memungkinkan harga lebih kompetitif dan efisiensi biaya operasional.</h3>
                        <ul class="space-y-2 lg:text-xl font-inter">
                            <li>• Kapasitas produksi: >30.000 ton material/bulan</li>
                            <li>• Kapasitas stockpile: >5.000 ton material</li>
                        </ul>
                        <a href="{{ route('kasau-sinar-sejahtera-abadi') }}" class="inline-block text-yellow-500 hover:text-yellow-600">Learn more →</a>
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
