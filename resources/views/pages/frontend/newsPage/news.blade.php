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
        <section class="py-16 px-4 sm:px-10 lg:px-20 max-w-7xl mx-auto">
            <h2 class="text-center text-[#8F0F0E] text-3xl font-bold mb-14 mt-14">All News</h2>
            <div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 justify-center">
                @foreach ($latestNews as $news)
                    <a href="{{ route('kasau-news.show', $news->id) }}"
                        class="group block w-full max-w-xs mx-auto bg-white rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300 ease-in-out min-h-[450px] flex flex-col">
                        <div class="relative overflow-hidden h-52 rounded-t-2xl">
                            <img src="{{ asset('storage/news/' . $news->image) }}" alt="{{ $news->title }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                            <span
                                class="absolute top-3 left-3 bg-[#F3F8FF]/90 text-xs font-bold px-4 py-2 rounded-full shadow-sm backdrop-blur text-[#02033B] select-none">
                                {{ $news->category->name ?? 'Uncategorized' }}
                            </span>
                        </div>
                        <div class="flex flex-col px-6 sm:px-8 md:px-10 py-6 flex-grow min-h-[200px] md:min-h-[300px]">
                            <h3 class="text-lg md:text-xl font-bold text-[#02033B] leading-tight line-clamp-2 pb-3">
                                {{ $news->title }}
                            </h3>
                            <p class="text-sm flex-grow leading-relaxed md:line-clamp-4 line-clamp-none">
                                {{ $news->description }}
                            </p>
                            <div class="mt-4 text-xs text-gray-500 select-none">
                                {{ $news->created_at->format('F j, Y') }}
                            </div>
                        </div>
                    </a>
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
