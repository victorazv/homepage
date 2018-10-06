@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated {{$return ? 'bounceInLeft' : 'bounceInRight'}}">
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
                                <label for="" class="label_form">
                                    What is your First language?*
                                </label>
                                <br>
                                <div class="div-select_small">
                                    <select required id="language" name="language" onchange="changeBackground('language')">
                                        <option value=""></option>
                                        @foreach($languages as $key => $opt)
                                            <option 
                                            value="{{$key}}" {{session()->get('language') == $key ? 'selected' : ''}}
                                            >{{$opt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div id="msg_under_language" style="display:none">
							<span class="sub_label">
								<img src="images/icon_i_small2.png" alt="">
								If you are a citizen of, and hold a valid passport from, Canada, New Zealand, the Republic
								of Ireland, the United Kingdom, or the United States, we consider that you have <strong>Competent English.</strong> <br>
								However, if you want to claim points for <strong>Proficient</strong> or <strong>Superior</strong> English, you need to achieve
								the required score from one of the English language test providers.
							</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="" class="label_form">
                                    Have you undertaken one of these English language proficiency tests in the last 36
                                    months?*
                                </label>
                                <br>
                                <div class="div-select_small">
                                    <select required id="english_test" name="english_test" onchange="changeBackground('english_test')">
                                        <option value=""></option>
                                        @foreach($englishTests as $key => $opt)
                                            <option 
                                            value="{{$key}}" {{session()->get('english_test') == $key ? 'selected' : ''}}
                                            >{{$opt}}</option>
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
                                
                                <div class="field-box w-100">
                                    <label for="age" class="label_form">
                                        In the meantime, how would you consider your level of English?*
                                    </label>
                                    <br>
                                    <div class="div-select_small">
                                        <select name="english_level" id="english_level" onchange="changeBackground('english_level')">
                                            <option value=""></option>                                        
                                            <option value="1">Poor</option>
                                            <option value="2">Fair</option>
                                            <option value="3">Good</option>
                                            <option value="4">Fluent</option>
                                            <option value="5">Native Speaker</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div id="field_original" class="field-box w-100">
                                <label for="age" class="label_form">
                                    How would your rate your English language Proficiency Level?*
                                </label>
                                <br>
                                <div class="div-select_small">
                                    <select required name="english_level" id="english_level" onchange="changeBackground('english_level')">
                                        <option value=""></option>
                                        @foreach($englishLevels as $key => $opt)
                                            <option 
                                            value="{{$key}}" {{session()->get('english_level') == $key ? 'selected' : ''}}
                                            >{{$opt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <br>


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
                        <a href="/paf6a?return=1"><img src="images/img_previous.png"></a>
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
                $('#field_original').hide();
            } else {
                $('#msg_under_english_test').hide();
                $('#field_original').show();
            }
        });
        
        applyCss();
        updateProgress();
    </script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>