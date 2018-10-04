@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated bounceInRight">
        <form id="form" action="{{route('paf7')}}" method="get">
            <section id="sec_1" class="how-it-works py-3">
                <div class="container">
                    <div class="row d-sm-flex justify-content-center">
                        <div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
                            <div class="sec_3 col-md-12 ">
                                <div class="mt-4 ml-2">
                                    <img src="images/img_form_06.png" class="d-none d-md-block" alt="paper">
                                </div>
                                <p class="col-12 col-md-10 ml-md-3 pl-0 pl-md-3">
                                    <img src="images/img1_small.png" class=" d-sm-none">
                                    <span class="card_title d-none d-md-block">Your English Language Ability</span>
                                    <span class="card_title2 d-sm-none">Your English Language Ability</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">

                            <div class="field-box w-100">
                                <label for="" class="custom-label">
                                    What is your First language?*
                                </label>
                                <br>
                                <div class="div-select">
                                    <select id="language" name="language">
                                        <option value=""></option>
                                        @foreach($languages as $key => $opt)
                                            <option value="{{$key}}">{{$opt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div id="msg_under_language" style="display:none">
                                If you are a citizen of, and hold a valid passport from, Canada, New Zealand, the
                                Republic
                                of Ireland, the United Kingdom, or the United States, we consider that you have <strong>Competent
                                    English.</strong> <br>
                                However, if you want to claim points for <strong>Proficient</strong> or
                                <strong>Superior</strong> English, you need to achieve
                                the required score from one of the English language test providers.
                            </div>

                            <div class="field-box w-100">
                                <label for="" class="custom-label">
                                    Have you undertaken one of these English language proficiency tests in the last 36
                                    months?*
                                </label>
                                <br>
                                <div class="div-select">
                                    <select id="english_test" name="english_test">
                                        <option value=""></option>
                                        @foreach($englishTests as $key => $opt)
                                            <option value="{{$key}}">{{$opt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div id="msg_under_english_test" style="display:none">
                                <p>
                                    If you are applying for Skilled Migration, you will need to prove your English
                                    language ability.
                                    The required level of English depends on the visa subclass you are applying for.
                                </p>
                                <p>
                                    The <strong>IELTS</strong> test is the most common way of evidencing English
                                    language ability.
                                    Either the Academic or General Training versions of the test are acceptable to the
                                    Department of Immigration,
                                    but some skills assessing authorities require applicants to sit the Academic
                                    version. You will need to obtain a minimum
                                    score in each band of the IELTS (Reading, Writing, Listening, Speaking) in a single
                                    sitting.
                                </p>
                                <p>
                                    The <strong>Occupational English Test (OET)</strong> is also accepted as evidence of
                                    proficient and superior levels of English.
                                    The OET is only appropriate for medical and allied health professionals.
                                </p>
                                <p>
                                    The <strong>Pearson Academic Test of English (Pearson PTE)</strong> and <strong>TOEFL
                                        Internet Based Test (TOEFL iBT)</strong> are now accepted
                                    for all skilled subclasses. Most state and territory governments also recognise
                                    these tests, as do some skills assessment authorities.
                                </p>
                                <p>
                                    The <strong>Cambridge Test of English</strong> is also accepted from January 2015.
                                </p>
                                <p>
                                    Ok so you didn't do any test yet, but keep in mind that, in order to obtain an
                                    Australia Visa,
                                    your English ability <strong>will need to be certified</strong>.
                                </p>
                            </div>

                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    How would your rate your English language Proficiency Level?*
                                </label>
                                <br>
                                <div class="div-select">
                                    <select name="english_level">
                                        @foreach($englishLevels as $key => $opt)
                                            <option value="{{$key}}">{{$opt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

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
                        <a href="/paf6a"><img src="images/img_previous.png"></a>
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
        $('#language').change(function () {
            var val = $(this).val();
            //console.log(val);
            if (val == 38) {
                $('#msg_under_language').show();
            } else {
                $('#msg_under_language').hide();
            }
        });

        $('#english_test').change(function () {
            var val = $(this).val();
            console.log(val);
            if (val == 6) {
                $('#msg_under_english_test').show();
            } else {
                $('#msg_under_english_test').hide();
            }
        });
    </script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>