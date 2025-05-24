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
                <h1 class="text-4xl md:text-5xl lg:text-7xl text-center font-bold">
                    Kasau <span class="text-yellow-500">Sinar</span> Multi <span class="text-yellow-500">Jasa</span>
                </h1>
                <p class="mt-4 text-gray-700 text-center text-base sm:text-lg md:text-xl lg:text-2xl">
                    Kasau Sinar Multi Jasa adalah perusahaan yang bergerak di bidang jasa bongkar muat material, baik di
                    darat maupun melalui sistem Ship to Ship (STS). Kami hadir sebagai solusi bagi industri yang membutuhkan
                    layanan logistik yang efisien, aman, dan terpercaya.
                </p>
                <p class="mt-4 text-gray-700 text-center text-base sm:text-lg md:text-xl lg:text-2xl">
                    Sebagai bagian dari Kasau Group, kami memiliki pengalaman bertahun-tahun dalam industri logistik dan
                    distribusi material. Dengan armada yang memadai serta tim profesional, kami memastikan bahwa setiap
                    proses bongkar muat berjalan tepat waktu, terkoordinasi, dan sesuai standar keselamatan kerja.
                </p>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-36 px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-12">Our Services</h2>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-10 max-w-7xl mx-auto">
                <div class="bg-white shadow-lg rounded-3xl p-10 transition duration-300 hover:shadow-xl">
                    <h3 class="text-2xl font-bold text-indigo-900 mb-4">Jasa Bongkar Muat Darat</h3>
                    <p class="text-gray-600 text-lg">Proses pemindahan material dari transportasi darat ke lokasi tujuan
                        dengan efisiensi tinggi.</p>
                </div>
                <div class="bg-white shadow-lg rounded-3xl p-10 transition duration-300 hover:shadow-xl">
                    <h3 class="text-2xl font-bold text-indigo-900 mb-4">Ship to Ship (STS)</h3>
                    <p class="text-gray-600 text-lg">Layanan pemindahan kargo antar kapal di perairan yang dilakukan dengan
                        standar keselamatan internasional.</p>
                </div>
                <div class="bg-white shadow-lg rounded-3xl p-10 transition duration-300 hover:shadow-xl">
                    <h3 class="text-2xl font-bold text-indigo-900 mb-4">Manajemen Logistik</h3>
                    <p class="text-gray-600 text-lg">Penyediaan solusi transportasi dan distribusi material yang
                        terintegrasi.</p>
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
