@extends('layouts.kasau')

@section('title', 'Kasau Group - Best Leading Shipping Service Company')

@section('styles')
    <style>

        /* Partner Logo Animations */
        .card-hover-effect img {
            transition: transform 0.3s ease, filter 0.3s ease;
        }
        
        .card-hover-effect:hover img {
            transform: scale(1.1);
            filter: brightness(1.1);
        }

        /* Map Markers Animation */
        .map-marker {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.7;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 640px) {
            .grid-cols-2 {
                gap: 1rem;
            }
            
            .card-hover-effect {
                padding: 1rem;
            }
        }
    </style>
@endsection

@section('content')
<div class="bg-[#f5efeb] text-gray-800 min-h-screen scroll-smooth">
    @include('components.kasau.customHeader')
        <!-- Route & Partner Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center mt-24">
            <h1 class="text-4xl md:text-5xl font-bold">
                <span class="text-[#8F0F0E]">Route</span> & <span class="text-[#DFAC37]">Partner</span>
            </h1>
            <p class="text-gray-600 max-w-3xl mx-auto text-sm md:text-base pt-5">
                Kasau Group memiliki rute pelayaran di lebih dari 20 kota di Indonesia, dengan tiga pusat operasional utama, yaitu Balikpapan (Kalimantan Timur), Makassar (Sulawesi Selatan), dan Palu (Sulawesi Tengah). Infrastruktur ini dirancang untuk meningkatkan daya jangkau layanan kami serta mendukung pertumbuhan industri di berbagai wilayah.
            </p>
        </div>

        <!-- Indonesia Map -->
        <div class="p-6 mb-20">
            <img src="{{ asset('img/kasau/route/Route.jpg') }}" 
                 alt="Indonesia Map with Route Points" 
                 class="w-full h-auto max-w-4xl mx-auto rounded-3xl"
                 style="filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));">
        </div>

        <!-- Business Partners -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-yellow-500 mb-12">Our Business Partner</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
                @forelse ($companies ?? [] as $partner)
                    <div class="card-hover-effect flex items-center justify-center">
                        <img src="{{ Storage::url('companies/' . $partner->image) }}"
                             alt="{{ $partner->name }}"
                             class="max-h-24 w-auto object-contain filter hover:brightness-110 transition-all duration-300"
                             loading="lazy">
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500">
                        No partners found. Please add partners through the admin dashboard.
                    </div>
                @endforelse
            </div>
        </div>

        <!-- Footer with Feedback Section -->
        {{-- <div class="mt-20 bg-gray-900 text-white rounded-2xl p-8 md:p-12">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Company Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-6">Kasau Group</h3>
                    <div class="flex space-x-4 mb-6">
                        <a href="#" class="hover:text-orange-400 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-orange-400 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="hover:text-orange-400 transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" class="hover:text-orange-400 transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <nav class="grid grid-cols-2 gap-4 text-sm">
                        <a href="#" class="hover:text-orange-400 transition-colors">Home</a>
                        <a href="#" class="hover:text-orange-400 transition-colors">Beranda</a>
                        <a href="#" class="hover:text-orange-400 transition-colors">History</a>
                        <a href="#" class="hover:text-orange-400 transition-colors">SubCompany</a>
                        <a href="#" class="hover:text-orange-400 transition-colors">All News</a>
                    </nav>
                </div>

                <!-- Feedback Form -->
                <div class="bg-black/30 rounded-xl p-6">
                    <h3 class="text-xl font-bold mb-4">Session feedback</h3>
                    <div class="star-rating flex space-x-2 mb-4">
                        @for ($i = 1; $i <= 5; $i++)
                            <button class="text-2xl text-yellow-400 transition-all duration-200">★</button>
                        @endfor
                    </div>
                    <textarea class="w-full bg-black/20 rounded-lg p-4 text-white placeholder-gray-400 mb-4" 
                              placeholder="Additional feedback" rows="3"></textarea>
                    <button class="w-full bg-yellow-500 text-black font-bold py-3 rounded-lg hover:bg-yellow-400 
                                 transition-all duration-200 mb-4">
                        Submit Feedback
                    </button>
                    <div class="flex justify-between">
                        <button class="text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-home mr-2"></i> Home
                        </button>
                        <button class="text-gray-400 hover:text-white transition-colors">
                            <i class="fas fa-envelope mr-2"></i> Contact
                        </button>
                    </div>
                </div>
            </div>
            <div class="text-center text-gray-400 text-sm mt-8">
                © 2023 KasauGroup. All rights reserved.
            </div>
        </div> --}}
    </section>
    @include('components.kasau.footer')
</div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection