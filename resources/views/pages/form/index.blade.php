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
                <h1>Users Form</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Form</a></div>
                    <div class="breadcrumb-item">User Forms</div>
                </div>
            </div>
            @include('layouts.alert')
            <div class="section-body">
                <h2 class="section-title">Forms</h2>
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
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($forms as $form)
                                        <tr>
                                            <td>{{ $form->first_name }} {{ $form->last_name }}</td>
                                            <td>{{ $form->email }}</td>
                                            <td>{{ $form->subject }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate">{{ $form->message }}</td>   
                                            <td>
                                                <a href="{{ route('form.show', $form->id) }}">Detail</a>
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
