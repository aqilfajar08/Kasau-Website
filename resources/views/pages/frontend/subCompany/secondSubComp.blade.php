@extends('layouts.kasau')
@section('title', 'Kasau Group - Best Leading Shipping Service Company')

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

        <section class="relative w-full min-h-screen flex items-center justify-center flex-col px-4 lg:px-20">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-7xl text-center font-bold">
                Kasau <span class="text-yellow-500">Sinar</span> Sejahtera <span class="text-yellow-500">Abadi</span>
            </h1>
            <p class="mt-4 text-gray-700 text-center text-sm sm:text-base md:text-xl lg:text-2xl max-w-6xl">
                Kasau Sinar Sejahtera Abadi adalah salah satu anak perusahaan dari Kasau Group yang bergerak di bidang jasa
                pengadaan material logistik. Dengan memiliki armada sendiri, kami dapat menawarkan harga yang lebih
                kompetitif, serta memastikan distribusi yang efisien dan tepat waktu.
            </p>
            <p class="mt-4 text-gray-700 text-center text-sm sm:text-base md:text-xl lg:text-2xl max-w-6xl">
                Dengan kapasitas produksi lebih dari 30 ribu ton material dan stockpile berkapasitas lebih dari 50 ribu ton,
                kami mampu menekan biaya operasional dan menjaga stabilitas harga, terutama di wilayah Balikpapan.
                Perusahaan kami berkomitmen untuk terus memperluas wilayah operasional guna menjadi pusat industri bisnis
                dan pemimpin dalam pengadaan material Batu Palu Madu.
            </p>
        </section>

        <!-- Services Section -->
        <section id="services" class="my-10 px-4 sm:px-8 md:px-16 lg:px-40 relative min-h-screen py-8 md:py-20">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-[#050038] text-center mb-6">Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8">
                <!-- Service Card -->
                <div class="bg-[#303030] rounded-3xl shadow-md overflow-hidden p-3 md:p-4">
                    <img src="{{ asset('img/kasau/subCompany/house_big.jpg') }}" alt="Ash Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold text-white mb-4">Ash Stone / Batu Abu</h3>
                        <p class="text-white mb-2">Kegunaan:</p>
                        <p class="text-[#9EBAFF]">Paving Block, Batako Press</p>
                    </div>
                </div>

                <!-- Repeat for other services -->
                <div class="bg-[#303030] rounded-3xl shadow-md overflow-hidden p-3 md:p-4">
                    <img src="{{ asset('img/kasau/subCompany/house_big-1.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold text-white mb-4">Split Stone / Batu Pecah</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-3">
                            <div>
                                <p class="text-white mb-2">Kegunaan:</p>
                                <p class="text-[#9EBAFF]">Material Tambahan Pemberat Pipa Laut</p>
                            </div>
                            <div>
                                <p class="text-white mb-2">Size:</p>
                                <p class="text-[#9EBAFF]">30-55MM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-[#303030] rounded-3xl shadow-md overflow-hidden p-3 md:p-4">
                    <img src="{{ asset('img/kasau/subCompany/house_big-2.jpg') }}" alt="Split Stone"
                        class="w-full h-48 sm:h-56 lg:h-64 object-cover rounded-2xl">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold text-white mb-4">Split Stone / Batu Pecah</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-3">
                            <div>
                                <p class="text-white mb-2">Kegunaan:</p>
                                <p class="text-[#9EBAFF] pr-4">Material Struktur Jalan atau Beton</p>
                            </div>
                            <div>
                                <p class="text-white mb-2">Size:</p>
                                <p class="text-[#9EBAFF]">30-55MM</p>
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
