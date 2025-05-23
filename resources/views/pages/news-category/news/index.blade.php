{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Management - {{ $category->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">News of {{ $category->name }}</h1>
                <a href="{{ route('new.create', $category->id) }}" 
                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition duration-200">
                    + Create New
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($category->news as $new)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $new->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ url('storage/news', $new->image) }}" 
                                     alt="image" 
                                     class="h-20 w-20 object-cover rounded-lg">
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">{{ $new->description }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <div class="flex space-x-2">
                                    <a href="{{ route('new.edit', [$category->id, $new->id]) }}" 
                                       class="text-indigo-600 hover:text-indigo-900 bg-indigo-100 px-3 py-1 rounded-md">
                                        Edit
                                    </a>
                                    <form action="{{ route('new.destroy', [$category->id, $new->id]) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="text-red-600 hover:text-red-900 bg-red-100 px-3 py-1 rounded-md"
                                                onclick="return confirm('Are you sure you want to delete this item?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                <div class="flex flex-col items-center py-8">
                                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                    </svg>
                                    <span class="mt-2">No Data Available</span>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html> --}}


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
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">All Users</div>
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
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($category->news as $new)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> {{ $new->title }}
                                            </td>
                                            <td>
                                                <div style="width: 100px" class="flex justify-center">
                                                    <img src="{{ url('storage/news', $new->image) }}" alt="image"
                                                        class="h-20 w-20 object-cover rounded-lg flex justify-center">
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">{{ $new->description}}</td>
                                            <td class="flex items-center space-x-2 justify-center">
                                                <form class="" action="{{ route('new.destroy', [$category->id, $new->id]) }}"
                                                    method="POST" enctype="multipart/form-data" class="d-inline"
                                                    onsubmit="return confirm('Are you sure want to delete this news?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i> Delete</button>
                                                </form>
                                                <form action="{{ route('new.edit', [$category->id, $new->id]) }}"
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
