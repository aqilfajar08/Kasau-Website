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
        @include('components.kasau.header')

        <!-- Enhanced Hero Section -->
        <section id="home" class="scroll-mt-28 relative min-h-screen bg-cover bg-fixed bg-center"
            style="background-image: url('{{ asset('img/kasau/hompageBg/homepage.png') }}');">
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/50"></div>
            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 lg:pt-40">
                <div class="fade-in space-y-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-7xl font-bold text-white leading-tight">
                        Material Supplier Partner<br class="hidden sm:block" />
                        <span class="text-orange-400">and Ship Service</span><br class="hidden sm:block" />
                        Provider
                    </h1>
                    <p class="mt-4 text-sm md:text-base max-w-xl text-white">
                        The Best Leading Shipping Service Company and Supplier in Indonesia,
                        Headquartered in Balikpapan City, East Kalimantan
                    </p>
                </div>
            </div>
        </section>

        <!-- Enhanced Achievement Cards -->
        <a href="{{ route('kasau-partner') }}">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 relative z-20">
                <div
                    class="bg-white shadow-2xl transition-all duration-200 rounded-2xl p-8 
                        transform hover:shadow-orange-200/20">
                    <h2 class="text-2xl md:text-3xl font-bold text-center mb-6">Our Achievement</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                        @foreach ([['count' => '30+', 'label' => 'Partner', 'icon' => 'icon1.svg'], ['count' => '15+', 'label' => 'Route', 'icon' => 'icon2.svg'], ['count' => '7', 'label' => 'Armada', 'icon' => 'icon3.svg']] as $stat)
                            <div class="hover-scale p-6 text-center">
                                <div class="flex items-center justify-center space-x-4">
                                    <img src="{{ asset('img/kasau/icon/' . $stat['icon']) }}" alt="{{ $stat['label'] }}"
                                        class="w-14 h-14 object-contain">
                                    <div>
                                        <div
                                            class="text-4xl font-bold bg-gradient-to-r from-orange-400 to-orange-600 
                                              bg-clip-text text-transparent">
                                            {{ $stat['count'] }}
                                        </div>
                                        <p class="mt-2 text-gray-600 font-medium">{{ $stat['label'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <p class="text-start text-xs mt-2 font-semibold">*Update Data 2025</p>
                    </div>
                </div>
            </div>
        </a>

        <!-- History Section -->
        <section id="about" class="scroll-mt-40 max-w-7xl mx-auto my-32 px-8">
            <div class="bg-cover bg-center rounded-3xl overflow-hidden flex flex-col md:flex-row items-center relative h-[400px]"
                style="background-image: url('{{ asset('img/kasau/about/about.png') }}');">
                <div class="relative z-10 p-8 md:p-12 md:w-2/3 md:ml-auto">
                    <h2
                        class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-4 text-left fade-in mt-4 block max-w-xl ml-auto">
                        Check Out Our History
                    </h2>
                    <p class="text-sm md:text-base text-white/80 mb-6 text-left slide-up max-w-xl ml-auto">
                        Cerita Sejarah Panjang Mengenai Perusahaan Kasau Group. Berkembang Dengan Pesat Dengan Strategi Yang
                        Matang.
                        <a href="{{ route('kasau-about') }}">
                            <button
                                class="border-2 border-solid backdrop-blur border-white text-white text-sm px-8 py-3 rounded-lg font-semibold
                hover:bg-white hover:text-black transition-all duration-300 hover:scale-105 mt-4 block">
                                Start Today
                            </button>
                        </a>
                    </p>
                </div>
            </div>

        </section>

        <!-- Sub Company -->
        <section id="company" class="text-center px-6 max-w-6xl mx-auto py-20 " data-aos="fade-up"
            data-aos-duration="1000">
            <h1 class="text-[40px] font-bold mb-4 relative inline-block">
                Our Sub Company
                <span class="absolute bottom-0 left-0 w-full"></span>
            </h1>
            <p class="text-sm text-gray-600 max-w-xl mx-auto mb-12">
                Seiring pesatnya perkembangan Kasaugroup, kami kini hadir melalui tiga anak perusahaan unggulan yang
                bergerak di
                berbagai bidang, Kami siap memberikan solusi terbaik dan terintegrasi untuk memenuhi setiap kebutuhan Anda
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ([
            [
                'image' => 'subComp3.svg',
                'title' => 'Kasau Sinar Multi Jasa',
                'description' => 'Jasa alih bongkar muat Ship to Ship, dan transportasi material dengan efisien.',
                'delay' => '400',
                'url' => '/kasau-sinar-multi-jasa',
            ],
            [
                'image' => 'subComp1.svg',
                'title' => 'Kasau Sinar Sejahtera Abadi',
                'description' => 'Pengadaan Material Logistik Berkualitas Dengan Armada Sendiri & Harga Terbaik',
                'delay' => '200',
                'url' => '/kasau-sinar-sejahtera-abadi',
            ],
            [
                'image' => 'subComp2.svg',
                'title' => 'Kasau Sinar Samudera',
                'description' => 'Jasa Angkutan Laut dan Sewa Kapal Untuk Transportasi Material',
                'delay' => '0',
                'url' => '/kasau-sinar-samudera',
            ],
        ] as $company)
                    <div class="card-hover-effect" data-aos="fade-up" data-aos-delay="{{ $company['delay'] }};">
                        <div class="bg-white rounded-3xl p-8 h-full">
                            <div class="bg-gradient-to-br rounded-xl p-8 h-full flex flex-col">
                                <div class="mb-6" style="animation: floatAnimation 3s infinite ease-in-out">
                                    <img src="{{ asset('img/kasau/subCompany/' . $company['image']) }}"
                                        class="h-28 mb-4 mx-auto transform transition-transform duration-500 hover:scale-110"
                                        alt="{{ $company['title'] }}">
                                </div>
                                <h3 class="font-bold text-xl mb-4 text-gray-800">{{ $company['title'] }}</h3>
                                <p class="text-sm text-gray-600 flex-grow mb-8">{{ $company['description'] }}</p>
                                <a href="{{ $company['url'] }}"
                                    class="button-hover-effect bg-gradient-to-r from-gray-900 to-black text-white px-8 py-3 rounded-lg text-sm font-medium transform transition-all duration-300 hover:scale-105 hover:shadow-xl text-center">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Breaking News Section -->
        <section class="py-16 px-6 max-w-7xl mx-auto">
            <h2 class="text-center text-3xl font-bold mb-6">Breaking News</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 g justify-center">
                @foreach ($latestNews as $news)
                    <a href="{{ route('kasau-news.show', $news->id) }}"
                        class="group block max-w-[300px] mx-auto bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                        <div class="relative h-52 overflow-hidden rounded-t-2xl">
                            <img src="{{ asset('storage/news/' . $news->image) }}" alt="{{ $news->title }}"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                            <span
                                class="absolute top-3 left-3 bg-white/90 text-xs text-gray-800 font-bold px-4 py-2 rounded-full shadow-sm backdrop-blur">
                                {{ $news->category->name ?? 'Uncategorized' }}
                            </span>
                        </div>
                        <div class="px-10 py-6 h-[250px]">
                            <h3
                                class="text-xl font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors">
                                {{ $news->title }}
                            </h3>
                            <p class="mt-3 text-sm text-gray-600 leading-relaxed line-clamp-3">
                                {{ Str::limit($news->description) }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>




            <div class="text-center mt-8">
                <a href="{{ route('kasau-news.index') }}"
                    class="bg-yellow-400 text-black font-semibold px-6 py-2 rounded-full hover:bg-yellow-300 transition">
                    View all News →
                </a>
            </div>
        </section>
        @include('components.kasau.footer')
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection
