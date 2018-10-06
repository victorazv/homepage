@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated {{$return ? 'bounceInLeft' : 'bounceInRight'}}">
        <form id="form" action="{{route('paf8')}}" method="get">
            <section id="sec_1" class="how-it-works py-3">
                <div class="container">
                    <div class="row d-sm-flex justify-content-center">
                        <div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
                            <div class="sec_3 col-md-12 ">
                                <div class="mt-4 ml-2">
                                    <img src="images/img_form_07.png" class="d-none d-md-block" alt="paper">
                                </div>
                                <p class="col-12 col-md-10 ml-md-3 pl-0 pl-md-3">
                                    <img src="images/img1_small.png" class=" d-sm-none">
                                    <span class="card_title d-none d-md-block">Your Personal Details</span>
                                    <span class="card_title2 d-sm-none">Your Personal Details</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">
                            <div class="w-100">
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">First Name*</label>
                                <input class="w-100" 
                                value="{{session()->get('name')}}"
                                type="text" name="name" id="name" onchange="changeBackground('name')" required>
                            </div>

                            <div class="w-100">
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Family Name*</label>
                                <input class="w-100" 
                                value="{{session()->get('surname')}}"
                                type="text" name="surname" id="surname" onchange="changeBackground('surname')" required>
                            </div>

                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Your Email Address*</label>
                                <span class="sub_label">Please make sure this is correct as it will be used for all future communication regarding your assessment.</span>
                                <input class="w-100" type="email" 
                                value="{{session()->get('email')}}"
                                name="email" id="email" onchange="changeBackground('email')" required>
                                
                                <span class="error_message" style="display: {{isset($email_error) ? 'none' : ''}}">This email is already registered, please use another.</span>
                                
                            </div>

                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Your Mygrate Password*</label>
                                <span class="sub_label">Choose the password to log-in your Mygrate Profile. Password should be at least 8 digit and should contain at least XXXXXXXXXX.</span>
                                <input class="w-100" type="password" name="pswd" 
                                value="{{session()->get('pswd')}}"
                                id="pswd" onchange="changeBackground('pswd')" required>
                            </div>

                            <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Upload your CV/Resume</label>
                            <span class="sub_label">Agents always require a CV in order to better assess your situation. <br> If you want, you can upload your most recent and updated version now or <strong>you can leave it for later</strong>.</span>
                            <div class="upload-btn-wrapper">
                                <button class="upload-btn btn custom-btn mb-1 mt-4 btn-block">Upload</button>
                                <input type="file" name="cv"/>
                            </div>

                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">LinkedIn Profile</label>
                                <span class="sub_label">If you have a LinkedIn profile, please copy the link and paste it here.</span>
                                <input class="w-100" 
                                value="{{session()->get('linkedin')}}"
                                type="text" name="linkedin" id="linkedin" onchange="changeBackground('linkedin')">
                            </div>

                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Skype/Google Hangout</label>
                                <span class="sub_label">Would you like to be contacted via video-chat? Insert your preferred contact here:</span>
                                <input class="w-100" 
                                value="{{session()->get('usr_skype')}}"
                                type="text" name="usr_skype" id="usr_skype" onchange="changeBackground('usr_skype')">
                            </div>

                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Phone number</label>
                                <span class="sub_label">Feel like a chat? Insert your phone number here (please include the international code - for example +61):</span>
                                <input class="w-100" 
                                value="{{session()->get('usr_tel')}}"
                                type="tel" name="usr_tel" id="usr_tel" onchange="changeBackground('usr_tel')">
                            </div>

                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">One last chance to add useful details:</label>
                                <p>Is there anything in particular you would like to add that would help our Migration Agents to better understand your situation?</p>
                                <p>This is a great chance to ask or add something that was not covered in the previous questions. <br>  Any detail could be important, such as:</p>
                                <p>
                                    - something specific about your situation;<br>
                                    - if you have a partner, their nationality could be relevant for some Visas;<br>
                                    - any particular family situation (would they come with you?);<br>
                                    - Indicatively, when you would like to be in Australia;<br>
                                    - anything that you think it is relevant;
                                </p>
                                <input class="w-100" 
                                value="{{session()->get('comment')}}"
                                type="textarea" name="comment" id="comment" onchange="changeBackground('comment')">
                            </div>

                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Where did you find this link?*</label>
                                <span class="sub_label">Thank you for helping us improving :)</span>
                                <select class="w-100" name="where_find" id="where_find" onchange="changeBackground('where_find')" required>
                                <option value="" selected></option>
                                    <option {{session()->get('where_find') == '1' ? 'selected' : ''}} value="1">Google Search</option>
                                    <option {{session()->get('where_find') == '2' ? 'selected' : ''}} value="2">Facebook</option>
                                    <option {{session()->get('where_find') == '3' ? 'selected' : ''}} value="3">Twitter</option>
                                    <option {{session()->get('where_find') == '4' ? 'selected' : ''}} value="4">Instagram</option>
                                    <option {{session()->get('where_find') == '5' ? 'selected' : ''}} value="5">Email</option>
                                    <option {{session()->get('where_find') == '6' ? 'selected' : ''}} value="6">Other</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Tell a friend!</label>
                                <span class="sub_label">Type a friend's email address below and you'll receive our ebook 'A Simple Guide to Australia ed. 2018'</span>
                                <input class="w-100" 
                                value="{{session()->get('email_friend')}}"
                                type="text" name="email_friend" id="email_friend" onchange="changeBackground('email_friend')">
                            </div>
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
                        <a href="/paf7?return=1"><img src="images/img_previous.png"></a>
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
        applyCss();
        updateProgress();
    </script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>