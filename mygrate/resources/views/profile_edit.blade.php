@extends('layout.app')

@section('header')
    @include('layout.header')
@endsection

@push('header-scripts')
    <style>
        html, body {
            margin-bottom: 0;
        }
    </style>
@endpush

@section('content')
    <main class="mb-3">
        <section class="user-welcome d-none d-md-flex">
            <div class="container-fluid m-0 p-0">
                <div class="d-flex justify-content-around">
                    <div class="d-flex flex-column p-2">
                        <div>
                            <img src="https://via.placeholder.com/80" alt=""
                                 class="img-thumbnail img-responsive invisible">
                        </div>
                        <div class="">
                            <h5 class="d-none">Hello, Abhishek Mohan Kaushal</h5>
                        </div>
                    </div>
                    <div class="p-2 align-self-end d-none d-md-flex">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link border-styled" href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View your Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Edit Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <form action="{{route('profile.update')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-3 mt-3">
                        <div class="row">
                            <div class="col-md-12 col-6">
                                <img src="https://via.placeholder.com/250x250" alt="" class="img-thumbnail w-100 ml-1">
                                <button class="btn custom-btn mb-1 mt-4 btn-block"
                                        style="border: 0; border-radius: 0; font-weight: bold; font-size: 1.1em">
                                    Upload Photo
                                </button>
                                <button class="btn btn-block"
                                        style="background: #cccccc; color: #f0f0f0; font-weight: bold; border: 0; border-radius: 0; font-size: 1.1em">
                                    Delete Photo
                                </button>
                            </div>
                            <div class="col-md-12 col-6 mt-5">
                                <h2 class="mt-4 mb-4 profile-name">Abhishek Mohan Kaushal</h2>
                                <div class="profile-info w-100"><i class="fa fa-envelope mr-1"></i> <input
                                            title="english_level" type="text" class="form-control custom-input-sidebar"
                                            name="email" value="er.abhishekmohan@gmail.com"></div>
                                <div class="profile-info w-100"><i class="fa fa-linkedin mr-1"></i> <input
                                            title="english_level" type="text" class="form-control custom-input-sidebar"
                                            name="linkedin" value="/abhishekmohankaushal"></div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-1">
                                <i class="fa fa-exclamation-circle mr-2"></i>
                            </div>
                            <div class="col-10">
                                <span><b>Abhishek</b> is willing to pay for a consultation</span>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 pl-5">
                                <input type="radio" name="want_pay" id="yes"
                                       value="1" {{$user->details->want_pay ? 'checked' : ''}}><label
                                        class="four radio_item1" for="yes">Yes</label>
                                <input type="radio" name="want_pay" id="no"
                                       value="0" {{!$user->details->want_pay ? 'checked' : ''}}><label
                                        class="four radio_item1" for="no">No</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="container">
                            <div class="row mt-5">
                                <div class="col-12 col-md-5 m-0 p-1 mt-4">
                                    <h1 class="form-header darker">Personal Details</h1>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Age:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="age">
                                                <option selected>29</option>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="citizenship" class="custom-label">
                                            Country of citizenship:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="citizenship">
                                                @foreach($citizenship as $key => $cit)
                                                    <option value="{{$key}}" {{$user->details->citizenship == $key ? 'selected' : ''}}>{{$cit}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Second citizenship:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="ot_citizenship">
                                                <option value="">-- Select one --</option>
                                                @foreach($citizenship as $key => $cit)
                                                    <option value="{{$key}}" {{$user->details->ot_citizenship == $key ? 'selected' : ''}}>{{$cit}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            First Language:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="language">
                                                @foreach($languages as $key => $opt)
                                                    <option value="{{$key}}" {{$user->details->language == $key ? 'selected' : ''}}>{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Relationship Status:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="marital_status">
                                                @foreach($maritalStatus as $key => $opt)
                                                    <option value="{{$key}}" {{$user->details->marital_status == $key ? 'selected' : ''}}>{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7  m-0 p-1 mt-4">
                                    <h1 class="form-header darker">Occupation</h1>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Employment status:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="employment">
                                                @foreach($employment as $key => $opt)
                                                    <option value="{{$key}}" {{$user->details->employment == $key ? 'selected' : ''}}>{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Skilled occupation:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="occupation">
                                                @foreach($occupation as $key => $opt)
                                                    <option value="{{$key}}" {{$user->details->occupation == $key ? 'selected' : ''}}>{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Current occupation:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="occupation_none">
                                                @foreach($occupation as $key => $opt)
                                                    <option value="{{$key}}" {{$user->details->occupation_none == $key ? 'selected' : ''}}>{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Work experience OUTSIDE Australia in the last 10 years:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="experience">
                                                @foreach($experienceOutside as $key => $opt)
                                                    <option value="{{$key}}" {{$user->details->experience == $key ? 'selected' : ''}}>{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field-box w-100">
                                        <label for="age" class="custom-label">
                                            Work experience IN Australia in the last 10 years:
                                        </label>
                                        <br>
                                        <div class="div-select">
                                            <select name="experience_AU">
                                                @foreach($experienceInside as $key => $opt)
                                                    <option value="{{$key}}" {{$user->details->experience_AU == $key ? 'selected' : ''}}>{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col m-0 p-1">
                                    <h1 class="form-header darker pl-2">Visa Situation</h1>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Reason for seeking to apply for an Australian Visa:
                                    </label>
                                    <br>
                                    <div class="div-select">
                                        <select name="visa_type">
                                            @foreach($visaTypes as $key => $opt)
                                                <option value="{{$key}}" {{$user->details->visa_type == $key ? 'selected' : ''}}>{{$opt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Currently in Australia:
                                    </label>
                                    <br>
                                    <input type="radio" name="in_AU" id="in_AUYes"
                                           value="1" {{$user->details->in_AU ? 'checked' : ''}}><label
                                            class="four radio_item1" for="in_AUYes">Yes</label>
                                    <input type="radio" name="in_AU" id="in_AUNo"
                                           value="0" {{!$user->details->in_AU ? 'checked' : ''}}><label
                                            class="four radio_item1" for="in_AUNo">No</label>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        In possess of an Australian Visa:
                                    </label>
                                    <br>
                                    <input type="radio" name="visa_hold" id="visa_holdYes"
                                           value="1" {{$user->details->visa_hold ? 'checked' : ''}}><label
                                            class="four radio_item1"
                                            for="visa_holdYes">Yes</label>
                                    <input type="radio" name="visa_hold" id="visa_holdNo"
                                           value="0" {{!$user->details->visa_hold ? 'checked' : ''}}><label
                                            class="four radio_item1" for="visa_holdNo">No</label>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col m-0 p-1">
                                    <h1 class="form-header darker pl-2">English language Ability</h1>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        English language proficiency test in the last 36 months:
                                    </label>
                                    <br>
                                    <input title="english_level" type="text" class="form-control custom-input"
                                           value="/">
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Score obtained:
                                    </label>
                                    <br>
                                    <div class="div-select">
                                        <select name="english_test">
                                            @foreach($englishLevels as $key => $opt)
                                                <option value="{{$key}}" {{$user->details->english_test == $key ? 'selected' : ''}}>{{$opt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        How would you consider your level of English?
                                    </label>
                                    <br>
                                    <input title="english_level" type="text" class="form-control custom-input"
                                           value="/">
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col m-0 p-1">
                                    <h1 class="form-header darker pl-2">Qualifications</h1>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Level of qualifications:
                                    </label>
                                    <br>
                                    <div class="div-select">
                                        <select name="qualification_level">
                                            @foreach($qualifications as $key => $opt)
                                                <option value="{{$key}}" {{$user->details->qualification_level == $key ? 'selected' : ''}}>{{$opt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Qualification name:
                                    </label>
                                    <br>
                                    <input title="qualification_name" type="text" class="form-control custom-input"
                                           value="{{$user->details->qualification_name}}">
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Obtained in:
                                    </label>
                                    <br>
                                    <input title="english_level" type="text" class="form-control custom-input"
                                           value="{{$user->details->qualif_date ? $user->details->qualif_date->format('Y') : ''}}">
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Are the qualifications related to the occupation:
                                    </label>
                                    <br>
                                    <input type="radio" name="sql1" id="yes" value="Y" checked><label
                                            class="four radio_item1" for="yes">Yes</label>
                                    <input type="radio" name="sql1" id="no" value="N"><label class="four radio_item1"
                                                                                             for="no">No</label>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Australia Study Requirements:
                                    </label>
                                    <br>
                                    <input type="radio" name="sql2" id="yes" value="Y"><label class="four radio_item1"
                                                                                              for="yes">Yes</label>
                                    <input type="radio" name="sql2" id="no" value="N" checked><label
                                            class="four radio_item1" for="no">No</label>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Specialist Education Qualification:
                                    </label>
                                    <br>
                                    <input type="radio" name="sql3" id="yes" value="Y"><label class="four radio_item1"
                                                                                              for="yes">Yes</label>
                                    <input type="radio" name="sql3" id="no" value="N" checked><label
                                            class="four radio_item1" for="no">No</label>
                                </div>
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Other:
                                    </label>
                                    <br>
                                    <textarea title="level_quali" class="form-control custom-textarea-input" rows="2">Accredited in a community language Partner Skill Qualifications
                                </textarea>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 m-0 p-1">
                                    <h1 class="form-header darker pl-2">Additional Information</h1>
                                </div>
                                <div class="field-box mr-5" style="width: 60%">
                                    <label for="age" class="custom-label">
                                        Comments:
                                    </label>
                                    <br>
                                    <textarea title="level_quali" class="form-control custom-textarea-input" rows="4">Sure, using a placeholder like lorem ipsum is tempting with its convenience - but ultimately it will hold you back. For starters, using a placeholder perpetuates the idea that content is secondary.
                                </textarea>
                                </div>
                                <div class="field-box w-25 text-center">
                                    <label for="age" class="custom-label">
                                        CV:
                                    </label>
                                    <br>
                                    <img src="https://via.placeholder.com/100x100" alt="" class="mb-4">
                                    <button class="btn custom-btn mb-1 btn-block"
                                            style="border: 0; border-radius: 0; font-weight: bold;">
                                        Upload CV
                                    </button>
                                    <button class="btn btn-block"
                                            style="background: #cccccc; color: #f0f0f0; font-weight: bold; border: 0; border-radius: 0">
                                        Delete File
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-block custom-btn mt-5"
                                style="font-size: 1.4em; font-weight: bold; letter-spacing: 1px">
                            SAVE CHANGES
                        </button>
                    </div>
                </div>
            </form>
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