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

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        /* Star Rating Hover Effect */
        .star-rating button {
            transform-origin: center;
        }

        .star-rating button:hover {
            transform: scale(1.1);
        }

        .star-rating button:active {
            transform: scale(0.95);
        }


        @keyframes floatAnimation {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .card-hover-effect {
            transition: all 0.4s ease-in-out;
        }

        .card-hover-effect:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .button-hover-effect {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .button-hover-effect:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .button-hover-effect:hover:before {
            left: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="bg-[#f5efeb] text-gray-800 min-h-screen scroll-smooth">
        @include('components.kasau.customHeader')
        <!-- News Section -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <h2 class="text-center text-3xl font-bold mb-6">All Breaking News</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($latestNews as $news)
                    <div class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
                        <img src="{{ asset('storage/news/' . $news->image) }}" alt="{{ $news->title }}"
                            class="w-full h-48 object-cover">
                        <div class="p-4">
                            <span class="text-sm text-blue-500">{{ $news->category->name ?? 'Uncategorized' }}</span>
                            <h3 class="text-lg font-semibold mt-2">{{ $news->title }}</h3>
                            <p class="text-sm text-gray-600 mt-1 line-clamp-3">{{ Str::limit($news->description, 100) }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="mt-6">
                {{ $allNews->links() }}
            </div>
        </section>

        @include('components.kasau.footer')
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
