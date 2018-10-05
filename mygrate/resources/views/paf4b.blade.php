@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated bounceInRight">
        <form action="{{route('paf5')}}" method="get">
            <section id="sec_1" class="how-it-works py-3">

                <div class="container">
                    <div class="row d-sm-flex justify-content-center">
                        <div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
                            <div class="sec_3 col-md-12 ">
                                <div class="mt-4 ml-2">
                                    <img src="images/img_form_04.png" class="d-none d-md-block" alt="paper">
                                </div>
                                <p class="col-12 col-md-10 ml-md-3 pl-0 pl-md-3">
                                    <img src="images/img1_small.png" class=" d-sm-none">
                                    <span class="card_title d-none d-md-block">Something about your Occupation</span>
                                    <span class="card_title2 d-sm-none">Something about your Occupation</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">
                            <form id="form" class="w-100" action="{{route('form.insert')}}" method="post">
                                <div>
                                    <label class="label_form">What is your current employment status?*</label>
                                    <br>
                                    <span class="sub_label">
                                        <img src="images/icon_i_small2.png" alt="">
                                        This will concur to determine whether or not you may be eligible to apply for an Australian Visa.
                                    </span>
                                    <br>
                                    <div class="div-select_small">
                                        <select class="w-100" id="employment" name="employment" onchange="changeBackground('employment'); updateProgress();" required>
                                            <option value=""></option>
                                            @foreach($employment as $key => $opt)
                                                <option 
                                                value="{{$key}}" {{session()->get('employment') == $key ? 'selected' : ''}}
                                                >{{$opt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="label_form">Choose your occupation or the one that is closest to
                                        what
                                        you do.*</label>
                                    <br>
                                    <p id="msg_under_occupation" style="display:none" class="sub_label">
                                        You selected “NONE OF THESE” from the list of occupations. <br>
                                        Please describe what is/was your occupation. <br>
                                        This is important to pre-assess any eligibility for an Australian Visa. <br>
                                    </p>
                                    <span class="sub_label">
                                        <img src="images/icon_i_small2.png" alt="">
                                        Your occupation will only be considered if you can provide enough evidence to prove your
                                        work experience in that particular occupation. <br>
                                        Evidence of employment varies depending on the type of employment, such as paid
                                        employment or own business.
                                    </span>
                                    <br>
                                    <div class="">
                                        <div class="div-select_small">
                                            <select class="w-100" id="occupation" name="occupation" required 
                                                    onchange="changeBackground('occupation'); updateProgress();">
                                                <option value=""></option>
                                                @foreach($occupation as $key => $opt)
                                                    <option 
                                                    value="{{$key}}" {{session()->get('occupation') == $key ? 'selected' : ''}}
                                                    >{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="field-box w-100">
                                    <label class="label_form" for="">What is your work experience in this occupation
                                        in
                                        the last 10 years - OUTSIDE Australia:*</label>
                                    <br>
                                    <span class="sub_label">
                                        <img src="images/icon_i_small2.png" alt="">
                                        You must have worked at least 1 year full-time in your nominated skilled occupation, or a closely related occupation. <br>
                                        The work must be paid – it cannot be voluntary work.
                                    </span>
                                    <br>
                                    <div class="">
                                        <div class="div-select_small">
                                            <select class="w-100" id="experience" name="experience" required 
                                                    onchange="changeBackground('experience')">
                                                <option value=""></option>
                                                @foreach($experienceOutside as $key => $opt)
                                                    <option 
                                                    value="{{$key}}" {{session()->get('experience') == $key ? 'selected' : ''}}
                                                    >{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="">
                                    <label class="label_form" for="">What is your work experience in this occupation
                                        in
                                        the last 10 years - IN Australia:*</label>
                                    <br>
                                    <span class="sub_label">
                                    <img src="images/icon_i_small2.png" alt="">
                                    You must have worked at least 1 year in your nominated skilled occupation, or a closely related occupation. <br>
                                    The work must be paid – it cannot be voluntary work
                                </span>
                                <br>
                                    <div class="div-select_small">
                                        <select class="w-100" id="experience_AU" name="experience_AU" required 
                                                onchange="changeBackground('experience_AU'); updateProgress();">
                                            <option value=""></option>
                                            @foreach($experienceInside as $key => $opt)
                                                <option 
                                                value="{{$key}}" {{session()->get('experience_AU') == $key ? 'selected' : ''}}
                                                >{{$opt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </form>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="question w-100 offset-md-2 col-md-8 col-xs-12">
                    <button type="submit" class="float-right mt-3 mr-4">Continue</button>
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
                        <a href="/paf4a"><img src="images/img_previous.png"></a>
                        <button type="submit" id="btn_1" class="remove-btn-style"><img src="images/img_next.png"></button>
                    </div>
                </div>
            </section>
        </form>
    </main>
@endsection

@push('footer-scripts')
    <script>
        $('#occupation').change(function () {
            var val = $(this).val();

            if (val == "1") {
                $('#msg_under_occupation').show();
            } else {
                $('#msg_under_occupation').hide();
            }

        });

        updateProgress();
    </script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>