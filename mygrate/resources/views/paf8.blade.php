@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated bounceInRight">
        <form id="form" action="{{route('paf8.store')}}" method="post">
            {{csrf_field()}}
            <section id="sec_1" class="how-it-works py-3">
                <div class="container">
                    <div class="row d-sm-flex justify-content-center">
                        <div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1 sec_3">
                            <div class="col-md-12 ">
                                <p class="col-12 col-md-10 ml-md-3 pl-0 pl-md-3">
                                    <span class="card_title d-none d-md-block">Thank you Pippo,</span>
                                    <span class="card_title2 d-sm-none">Thank you Pippo,</span>
                                </p>
                                <h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
                                    You are taking the first step in your journey to Australia.
                                </h5>
                                <h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
                                    <strong class="card_title">We we wish you all the best!</strong>
                                </h5>
                                <p class="string_big">Your journey starts here></p>
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">
                            <div class="w-100 my-4 col-xs-1 flex-xs-nowrap d-none d-md-block">
                                <img src="images/icon_i.png">
                            </div>
                            <h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
                                When you will click the button below, your profile
                                will be created and all our Agents will be notified
                                that you are interested in moving to Australia
                                and will receive the information you’ve provided.
                            </h5>

                            <h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
                                When our Agents want to get in touch with you,
                                they will contact you on <strong class="sec_4_strong">Mygrate Messages</strong>
                                available in your personal dashboard.
                            </h5>

                            <p class="text_sec_4_small">
                                <strong class="sec_4_strong">What else can you do in the meantime?</strong>
                            </p>

                            <p class="text_sec_4_small">
                                - organise all your documents; a good approach is dividing them by type
                                (occupation, qualifications, English tests, etc.); <br>
                                - collect any additional documentation that could provide extra evidence
                                of your claims. Obtaining official documents can take time. Start now!
                                And remember the more evidence you provide the higher your chances! <br> <br>
                                Do you have any question? <br>
                                contact us at team@mygrate.me
                            </p>
                        </div>
                    </div>
                </div>

                <div class="question w-100 offset-md-2 col-md-8 col-xs-12">
                    <button type="submit" class="float-right mt-3 mr-4">SUBMIT AND START MY JOURNEY</button>
                </div>

                <div class="percent_bar col-12 pl-0 d-flex">
                    <div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
                        <span class="el_percentage">0%</span> Completed
                        <div class="progress progress2">
                            <div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-2 mt-2 pl-0">
                        <a href="/paf7a?return=1"><img src="images/img_previous.png"></a>
                        <button type="submit" id="btn_1" class="remove-btn-style"><img src="images/img_next.png">
                        </button>
                    </div>
                </div>
            </section>
        </form>
    </main>
@endsection

@push('footer-scripts')
    <script>
        updateProgress();
    </script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>