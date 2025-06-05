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
                    Kasau Group memiliki rute pelayaran di lebih dari 20 kota di Indonesia, dengan tiga pusat operasional
                    utama, yaitu Balikpapan (Kalimantan Timur), Makassar (Sulawesi Selatan), dan Palu (Sulawesi Tengah).
                    Infrastruktur ini dirancang untuk meningkatkan daya jangkau layanan kami serta mendukung pertumbuhan
                    industri di berbagai wilayah.
                </p>
            </div>

            <!-- Indonesia Map -->
            <div class="p-6 mb-20">
                <img src="{{ asset('img/kasau/route/Route.jpg') }}" alt="Indonesia Map with Route Points"
                    class="w-full h-auto max-w-4xl mx-auto rounded-3xl"
                    style="filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));">
            </div>

            <!-- Business Partners -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-yellow-500 mb-12">Our Business Partner</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
                    @forelse ($companies ?? [] as $partner)
                        <div class="card-hover-effect flex items-center justify-center">
                            <img src="{{ Storage::url('companies/' . $partner->image) }}" alt="{{ $partner->name }}"
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
        </section>
        @include('components.kasau.footer')
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
