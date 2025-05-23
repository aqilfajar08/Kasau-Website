{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Form - Show</h1>

    <p>Account Name : {{ $form->user->name }}</p>
    <p>First Name : {{ $form->first_name }}</p>
    <p>Last Name : {{ $form->last_name }}</p>
    <p>Email : {{ $form->email }}</p>
    <p>Phone Number : {{ $form->phone_number }}</p>
    <p>Subejct : {{ $form->subject }}</p>
    <p>Message : {{ $form->message }}</p>

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
                                <div>
                                    <tr>
                                        <th>Account Name</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $form->user->name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Full Name</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $form->first_name }} {{ $form->last_name }}</td>
                                    </tr>
                                </div>

                                    <tr>
                                        <th>Email</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $form->email }}</td>
                                    </tr>


                                    <tr>
                                        <th>Subejct</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $form->subject }}</td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th>Phone Number</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $form->phone_number }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <th>Message</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $form->message }}</td>   
                                    </tr>
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
