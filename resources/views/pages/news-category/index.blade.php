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
                <h1>New Categories</h1>
                <div class="section-header-button">
                    <a href="{{ route('news-category.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Form</a></div>
                    <div class="breadcrumb-item">User Forms</div>
                </div>
            </div>
            @include('layouts.alert')
            <div class="section-body">
                <h2 class="section-title">Social Media Categories</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Forms</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <select class="form-control selectric">
                                    <option>Action For Selected</option>
                                    <option>Move to Draft</option>
                                    <option>Move to Pending</option>
                                    <option>Delete Pemanently</option>
                                </select>
                            </div>
                            <div class="float-right">
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
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <a href="{{ route('new.index', $category->id) }}">{{ $category->name }}</a>
                                            </td>
                                            <td class="flex items-center space-x-3">
                                                <form class=""
                                                    action="{{ route('news-category.destroy', $category->id) }}"
                                                    method="POST" enctype="multipart/form-data" class="d-inline"
                                                    onsubmit="return confirm('Are you sure want to delete this news?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i> Delete</button>
                                                </form>
                                                <form action="{{ route('news-category.edit', $category->id) }}"
                                                    method="GET" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning"><i
                                                            class="fa fa-edit"></i> Edit</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            {{-- <div class="float-right">
                                <nav>
                                    {{ $forms->links() }}
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
