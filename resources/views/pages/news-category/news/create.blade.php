@extends('layouts.app')

@section('title', 'Advanced Forms')

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
                <h1>Create a News</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Create a News</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create a News</h2>
                <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <form action="{{ route('new.store', $category->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" value="{{ old('title') }}"
                                                class="form-control @error('title') is-invalid @enderror">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group flex flex-col">
                                            <label for="description">Description</label>
                                            <div class="flex justify-between text-sm mb-1">
                                                <span>Maximum Character: <span id="char-count" class="text-gray-600">0 / 500</span></span>
                                            </div>
                                            <textarea name="description" id="description" rows="4" maxlength="500"
                                                class="p-3 rounded-lg border border-gray-200 @error('description') is-invalid @enderror"
                                                placeholder="Tulis deskripsi di sini...">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" value="{{ old('image') }}"
                                            class="@error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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

@push('scripts')
    <script>
        const textarea = document.getElementById('description');
        const charCountDisplay = document.getElementById('char-count');
        const maxChars = 245;

        textarea.addEventListener('input', function() {
            const charCount = this.value.length;
            charCountDisplay.textContent = `${charCount} / ${maxChars}`;

            if (charCount >= maxChars) {
                charCountDisplay.classList.remove('text-gray-600');
                charCountDisplay.classList.add('text-red-600', 'font-bold');
            } else {
                charCountDisplay.classList.remove('text-red-600', 'font-bold');
                charCountDisplay.classList.add('text-gray-600');
            }
        });

        textarea.dispatchEvent(new Event('input'));
    </script>
@endpush
