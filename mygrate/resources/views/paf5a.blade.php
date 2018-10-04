@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated bounceInRight">
        <form id="form" class="w-100" action="{{route('paf6')}}" method="get">
            <section id="sec_1" class="how-it-works py-3">
                <div class="container">
                    <div class="row d-sm-flex justify-content-center">
                        <div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
                            <div class="sec_3 col-md-12 ">
                                <div class="mt-4 ml-2">
                                    <img src="images/img_form_05.png" class="d-none d-md-block" alt="paper">
                                </div>
                                <p class="col-12 col-md-10 ml-md-3 pl-0 pl-md-3">
                                    <img src="images/img1_small.png" class=" d-sm-none">
                                    <span class="card_title d-none d-md-block">Something about your Qualifications</span>
                                    <span class="card_title2 d-sm-none">Something about your Qualifications</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">
                            {{csrf_field()}}
                            <div class="col-12">
                                <label class="label_form" for="" class="custom-label">What is your Level of qualification*</label>
                                <br>
                                <div class="div-select_small">
                                    <select class="col-12" required name="english_level" required onchange="changeBackground('english_level')">
                                        <option value=""></option>
                                        @foreach($qualifications as $key => $opt)
                                            <option value="{{$key}}">{{$opt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="label_form" for="">In addition to the above qualification, did you
                                    complete
                                    a study course in Australia?*</label>
                                <br>
                                <span class="sub_label">
                                   <img src="images/icon_i_small2.png" alt="">
                                   This means you have been awarded one or more degrees, diplomas or trade qualifications through a course or courses taken at an Australian educational institution.
                                </span>
                                <br>
                                <div class="field-box w-100 flex-wrap">
                                    <section class="form">
                                        <input type="radio" required name="AU_study_req" id="AU_study_req_yes" value="1"
                                            onclick="updateProgress()"><label class="four radio_item1"
                                                                                for="AU_study_req_yes">Yes</label>
                                        <input type="radio" name="AU_study_req" id="AU_study_req_no" value="0"
                                            onclick="updateProgress()"><label class="four radio_item1"
                                                                                for="AU_study_req_no">No</label>
                                    </section>
                                </div>

                            </div>

                            <div class="col-12">
                                <label class="label_form" for="">Do you have any Specialist Education
                                    Qualification?*</label>
                                <br>
                                <p class="sub_label">
                                   <img src="images/icon_i_small2.png" alt="">
                                        A Specialist Qualification is a postgraduate degree by research (doctorate or masters)
                                        that must be awarded from an Australian education institution after at least two academic
                                        years of study in the following science, technology, engineering, mathematics or specified
                                        information and communication technology (ICT) fields:
                                </p>
                                <p>
                                    biological sciences; <br>
                                    chemical sciences;<br>
                                    earth sciences;<br>
                                    mathematical sciences;<br>
                                    natural and physical sciences;<br>
                                    other natural and physical sciences;<br>
                                    physics and astronomy;<br>
                                    computer science;<br>
                                    information systems;<br>
                                    information technology;<br>
                                    other information technology;<br>
                                    aerospace engineering and technology;<br>
                                    civil engineering;<br>
                                    electrical and electronic engineering and technology;<br>
                                    engineering and related technologies;<br>
                                    geomatics engineering;<br>
                                    manufacturing engineering and technology;<br>
                                    maritime engineering and technology;<br>
                                    mechanical and industrial engineering and technology;<br>
                                    other engineering and related technologies;<br>
                                    process and resources engineering.
                                </p>

                                <div>
                                    <div class="field-box w-100 flex-wrap">
                                        <section class="form">
                                            <input type="radio" required name="special_edu" id="yes" value="1"
                                                onclick="updateProgress()"><label class="four radio_item1"
                                                                                    for="yes">Yes</label>
                                            <input type="radio" name="special_edu" id="no" value="0"
                                                onclick="updateProgress()"><label class="four radio_item1"
                                                                                    for="no">No</label>
                                        </section>
                                    </div>
                                
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="label_form">Other points may be granted if you can claim and provide evidence of one or more of the following options:*</label>
                                <br>
                                <p class="sub_label"> 
                                    <strong>Accredited in a Community Language</strong> <br>
                                    To obtain the community language points, you must be accredited by the National <br>
                                    Accreditation Authority for Translators and Interpreters (NAATI) at the para-professional 
                                    level (Level 2) or higher.
                                </p>

                                <p class="sub_label"> 
                                    <strong>Partner skills</strong> <br>
                                    You can claim partner skills if your partner: <br>
                                    is under 50 years of age;<br>
                                    has competent English;<br>
                                    has an occupation that is on the same skilled occupations list as your nominated occupation;<br>
                                    has been assessed by the relevant assessing authority as having suitable skills<br>
                                    for their nominated occupation;<br>
                                    is coming to Australia with you;<br>
                                    is not an Australian citizen or permanent resident.<br>
                                </p>
                                <p class="sub_label">
                                    <strong>Professional Year Program</strong> <br>
                                    Your Professional Year must have been: <br>
                                    completed in Australia in the four years before you are invited to apply for a visa;<br>
                                    in your nominated occupation or a closely related occupation;<br>
                                    completed over a period of at least 12 months;<br>
                                    provided by one of these organisations:<br>
                                    - the Australian Computer Society<br>
                                    - CPA Australia<br>
                                    - Chartered Accountants of Australia and New Zealand<br>
                                    - the Institute of Public Accountants (formerly the National Institute of Accountants)<br>
                                    - Engineers Australia.
                                </p>

                                <p class="sub_label">
                                    <strong>Study in regional Australia or a low population-growth metropolitan area for 2 years</strong>
                                </p>

                                <p class="sub_label">
                                <img src="images/icon_i_small2.png" alt="">
                                    Proof that you met the Australian study requirement while living in regional Australia or a low 
                                    population-growth metropolitan area for two years: <br>
                                    - residential lease agreements <br>
                                    - utilities bills and bank statements showing your name and residential address. <br>
                                    - academic transcripts or other documents that show the campus at which you completed <br>
                                    your study was located in regional Australia or a low population growth metropolitan area.
                                </p>
                                <div class="div-select_small">
                                    <select class="col-12" name="extra_points"
                                            onchange="changeBackground('extra_points')"
                                            required>
                                        @foreach($extraPoints as $key => $opt)
                                            <option value=""></option>
                                            <option value="{{$key}}">{{$opt}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="field-box w-100">
                                <label for="age" class="label_form">When did you obtain your highest or most relevant
                                    qualification?*</label>
                                <br>
                                <p class="sub_label">
                                   <img src="images/icon_i_small2.png" alt="">
                                   A "qualification" is intended as an accomplishment that makes someone suitable for a particular job or activity (for example, Degree/PhD, Diploma, Trade Certificate, etc.).
                                </p>
                                <p class="sub_label">
                                    If you chose any of the qualifications above, when did you obtain the latest? Indicate year ONLY. For example, 2011.
                                </p>
                                <input id="qualif_date" onchange="changeBackground('qualif_date')" required title="qualif_date" type="date" class="">
                            </div>

                            <div class="field-box w-100 flex-wrap">
                                <label class="label_form">Are your qualifications related to your occupation?*</label>
                                <section class="form">
                                    <input type="radio" required name="qualif_occupation" id="yesq" value="1"
                                           onclick="updateProgress()"><label class="four radio_item1"
                                                                             for="yesq">Yes</label>
                                    <input type="radio" name="qualif_occupation" id="noq" value="0"
                                           onclick="updateProgress()"><label class="four radio_item1"
                                                                             for="noq">No</label>
                                </section>
                            </div>

                            <div class="field-box w-100">
                                <label class="label_form">Qualification name*</label>
                                <br>
                                <p class="sub_label">
                                   <img src="images/icon_i_small2.png" alt="">
                                   Please indicate the exact name of your qualification
                                    (i.e. Bachelor's/Master's Degree in Medicine, or Diploma in Accounting, etc.
                                </p>
                                 <p>
                                    If you do not have any qualification, please type N/A
                                </p>
                                <input id="qualification_name" onchange="changeBackground('qualification_name')" title="qualification_name" type="text" required class="col-12">
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
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
                            <a href="/paf4b"><img src="images/img_previous.png"></a>
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

    </script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>