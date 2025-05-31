@extends('layouts.app')

@section('title', 'Posts')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>News Management - {{ $category->name }}</h1>
                <div class="section-header-button">
                    <a href="{{ route('new.create', $category->id) }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('news-category.index') }}">News Data</a></div>
                    <div class="breadcrumb-item">All {{ $category->name }} News</div>
                </div>
            </div>
            @include('layouts.alert')
            <div class="section-body">
                <h2 class="section-title">News of {{ $category->name }}</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All News of {{ $category->name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <form>
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                    </tr>
                                    @foreach ($category->news as $new)
                                        <tr>
                                            <td> {{ $new->title }}
                                                <div class="table-links">
                                                    <a href="{{ route('new.edit', [$category->id, $new->id]) }}">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" class="text-danger"
                                                        onclick="event.preventDefault();
                                                        if (confirm('Are you sure want to delete this news?')) 
                                                        {
                                                            document.getElementById('delete-form-{{ $new->id }}').submit();
                                                        }">
                                                        Trash
                                                    </a>
                                                    <form action="{{ route('new.destroy', [$category->id, $new->id]) }}"
                                                        method="POST" id="delete-form-{{ $new->id }}"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width: 100px" class="flex justify-center">
                                                    <img src="{{ url('storage/news', $new->image) }}" alt="image"
                                                        class="h-20 w-20 object-cover rounded-lg flex justify-center">
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">
                                                {{ $new->description }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            {{-- <div class="float-right">
                                <nav>
                                    {{ $news->links() }}
                                </nav>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
