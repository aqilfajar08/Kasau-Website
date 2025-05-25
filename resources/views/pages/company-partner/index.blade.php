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
                <h1>Company Partner</h1>
                <div class="section-header-button">
                    <a href="{{ route('company_partner.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">All Users</div>
                </div>
            </div>
            @include('layouts.alert')
            <div class="section-body">
                <h2 class="section-title">Company Partner</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Company Partner</h4>
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
                                        <th>Name</th>
                                        <th>Image</th>
                                    </tr>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <td> {{ $company->name }}
                                                <div class="table-links">
                                                    <a href="{{ route('company_partner.edit', $company->id) }}">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" class="text-danger"
                                                        onclick="event.preventDefault();
                                                        if (confirm('Are you sure want to delete this Company?')) 
                                                        {
                                                            document.getElementById('delete-form-{{ $company->id }}').submit();
                                                        }"
                                                        >Trash</a>
                                                        <form action="{{ route('company_partner.destroy', $company->id) }}" method="POST" id="delete-form-{{ $company->id }}" style="display:none;"> 
                                                            @csrf @method('DELETE')
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width: 100px">
                                                    <img src="{{ url('storage/companies', $company->image) }}"
                                                        alt="image" class="w-100">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="float-right">
                                <nav>
                                    {{ $companies->links() }}
                                </nav>
                            </div>
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
