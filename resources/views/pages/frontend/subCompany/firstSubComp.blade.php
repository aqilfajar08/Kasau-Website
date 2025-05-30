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

        @include('components.kasau.footer')
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
