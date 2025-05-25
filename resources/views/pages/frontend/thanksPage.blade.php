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
    @include('components.kasau.customHeader')
    <div class="flex items-center justify-center min-h-screen bg-black">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <!-- Colorful Icon Placeholder -->
                <div class="flex justify-center">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('img/kasau/icon/check.svg') }}" class="w-40 h-40 " alt="">
                    </div>
                </div>
                
                <!-- Main Text -->
                <h1 class="text-3xl md:text-5xl font-bold mb-2 text-white">
                    Thank You
                </h1>
                <p class="max-w-md mx-auto text-base md:text-lg text-white">
                    For give us a feedback! Your input is invaluable to us and helps us improve our services.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection