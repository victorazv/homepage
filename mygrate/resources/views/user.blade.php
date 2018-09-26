@extends('layout.app')

@section('header')
    @include('layout.header')
@endsection

@push('header-scripts')

@endpush

@section('content')
    <main class="mb-3">
        <section class="user-welcome">
            <div class="container-fluid m-0 p-0">
                <div class="d-flex justify-content-around">
                    <div class="d-flex flex-column p-2">
                        <div>
                            <img src="https://via.placeholder.com/80" alt="" class="img-thumbnail img-responsive">
                        </div>
                        <div class="">
                            <h5>Hello, Abhishek Mohan Kaushal</h5>
                        </div>
                    </div>
                    <div class="p-2 align-self-end">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active border-styled" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View your Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Edit Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('footer-scripts')
    <script>

    </script>
@endpush

@section('footer')
    @include('layout.footer')
@endsection