{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create News Category</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <div class="block pl-2 font-semibold text-xl text-gray-700">
                            <h2 class="leading-relaxed">Create News Category</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Enter the details for new category</p>
                        </div>
                    </div>

                    <form class="divide-y divide-gray-200" action="{{ route('news-category.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="flex flex-col">
                                <label for="name" class="leading-loose text-gray-600">Category Name</label>
                                <input type="text" name="name" id="name" 
                                    class="px-4 py-2 border focus:ring-blue-500 focus:border-blue-500 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none"
                                    placeholder="Enter category name">
                                @error('name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="pt-4 flex items-center space-x-4">
                            <a href="{{ route('news-category.index') }}" 
                                class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none hover:bg-gray-100 transition-colors duration-200">
                                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg> Cancel
                            </a>
                            <button type="submit" 
                                class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none hover:bg-blue-600 transition-colors duration-200">
                                Create Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}



@extends('layouts.app')

@section('title', 'Create News')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create News</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Create News</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create News</h2>
                <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <form action="{{ route('news-category.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf @method('POST')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" required
                                                class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        
                                        <!-- button submit -->
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush