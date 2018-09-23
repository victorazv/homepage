@extends('layout.app')

@section('header')
    @include('layout.header')
@endsection

@push('header-scripts')
    <style>
        .profile-image {
            width: 100%;
            height: 100%;
        }

        .profile-box {
            background: #f0f0f0;
            padding: 10px 15px;
        }

        .profile-section-header {
            background: #f0f0f0;
            padding: 5px;
        }
    </style>
@endpush

@section('content')
    <main class="mb-3">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="https://via.placeholder.com/300x300" alt="" class="img-thumbnail img-responsive profile-image">
                </div>
                <div class="col-6">
                    <h4>Abishek Mouran Kauhsla</h4>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            a
                        </div>
                        <div class="col-10">
                            kasjs
                        </div>
                        <div class="col-2">
                            a
                        </div>
                        <div class="col-10">
                            kasjs
                        </div>
                        <br>
                        aaa
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-1">
                    !
                </div>
                <div class="col">
                    <p> <b>Abishek</b> is willing to pay for a consultation </p>
                </div>
            </div>
            <!-- Header Buttons -->
            <div class="row">
                <div class="col m-0">
                    <div class="profile-box">
                        <div class="row">
                            <div class="col-2">
                                img
                            </div>
                            <div class="col-10">
                                text
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="profile-box">
                        <div class="row">
                            <div class="col-2">
                                img
                            </div>
                            <div class="col-10">
                                text
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Section Header -->
            <div class="row mt-5 align-items-center">
                <div class="col-10 profile-section-header">
                    <h4>Teste</h4>
                </div>
                <div class="col-12">
                    <p class="mb-0">Age</p>
                    <p>29</p>
                </div>
                <div class="col-12">
                    <p class="mb-0">Age</p>
                    <p>29</p>
                </div>
                <div class="col-12">
                    <p class="mb-0">Age</p>
                    <p>29</p>
                </div>
                <div class="col-12">
                    <p class="mb-0">Age</p>
                    <p>29</p>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('footer-scripts')
    <script>

    </script>
@endpush

@section('footer')
    @include('layout.footer')
@endsection