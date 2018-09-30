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
        <section class="user-welcome d-flex flex-column-reverse">
            <div class="p-2 align-self-end mr-md-5">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link border-styled" href="{{route('user')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('profile.view')}}">View your Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.edit')}}">Edit Profile</a>
                    </li>
                </ul>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-3">
                    <div class="row">
                        <div class="col-md-12 col-6">
                            @if($profilePicUrl)
                                <img src="{{asset($profilePicUrl)}}" alt="" class="img-thumbnail w-100 ml-1" style="max-width: 250px; max-height: 250px">
                            @else
                                <img src="{{asset('images/no_pic.jpg')}}" alt="" class="img-thumbnail w-100 ml-1" style="max-width: 250px; max-height: 250px">
                            @endif
                        </div>
                        <div class="col-md-12 col-6">
                            <h2 class="mt-4 mb-4 profile-name">{{$user->details->name . ' ' . $user->details->surname}}</h2>
                            <div class="profile-info w-100"><i class="fa fa-envelope mr-1"></i> {{$user->login}}</div>
                            <div class="profile-info w-100"><i class="fa fa-linkedin mr-1"></i> {{$user->details->linkedin ? '/'.$user->details->linkedin : '/' }}</div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-1">
                            <i class="fa fa-exclamation-circle mr-2"></i>
                        </div>
                        <div class="col-10">
                            <span><b>{{explode(' ', $user->details->name)[0]}}</b> {{$user->want_pay ? 'is' : 'is not'}} willing to pay for a consultation</span>
                        </div>
                    </div>
                    @if($user->user_type == 'agent')
                    <div class="row mt-5">
                        <div class="col-6 col-md-12 p-1">
                            <div class="d-flex justify-content-start btn-custom-gray align-items-center">
                                <div class="m-3">
                                    <img src="https://via.placeholder.com/120x50" alt="" class="mr-1 w-100">
                                </div>
                                <div class="mr-1">
                                    Send a Message to {{explode(' ', $user->details->name)[0]}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 mt-md-2 p-1">
                            <div class="d-flex justify-content-start btn-custom-gray align-items-center">
                                <div class="m-3">
                                    <img src="https://via.placeholder.com/120x50" alt="" class="mr-1 w-100">
                                </div>
                                <div class="mr-1">
                                    Send a Quotation to {{explode(' ', $user->details->name)[0]}}
                                </div>
                            </div>
                        </div>
                    </div>
                        @endif
                </div>
                <div class="col-md-9">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-12 col-md-5 m-0 p-1 mt-4">
                                <h1 class="form-header">Personal Details</h1>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Age:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->age}}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Country of citizenship:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->citizenshipR->descr}}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Second citizenship:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->citizenshipOtherR ? $user->details->citizenshipOtherR->descr : '/'}}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        First Language:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->languageR->descr}}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Relationship Status:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->maritalStatusR->descr}}</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-7  m-0 p-1 mt-4">
                                <h1 class="form-header">Occupation</h1>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Employment status:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->employmentR->descr}}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Skilled occupation:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->occupationR->descr}}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Current occupation:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->occupationNoneR ? $user->details->occupationNoneR->descr : '/' }}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Work experience OUTSIDE Australia in the last 10 years:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->experienceOutsideR ? $user->details->experienceOutsideR->descr : '/' }}</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Work experience IN Australia in the last 10 years:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">{{$user->details->experienceInsideR ? $user->details->experienceInsideR->descr : '/' }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col m-0 p-1">
                                <h1 class="form-header pl-2">Visa Situation</h1>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Reason for seeking to apply for an Australian Visa:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->visaTypeR ? $user->details->visaTypeR->descr : '/'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Currently in Australia:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->in_AU ? 'Yes' : 'No'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    In possess of an Australian Visa:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->visa_hold ? 'Yes, I have an Australian Visa' : 'No, I don\'t have any Visa'}}</span>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col m-0 p-1">
                                <h1 class="form-header pl-2">English language Ability</h1>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    English language proficiency test in the last 36 months:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->languageR ? $user->details->languageR->descr : '/'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Score obtained:
                                </label>
                                <br>
                                <span class="custom-label-value">COMPETENT ENGLISH: Passport
                                from UK, USA, Ireland, Canada or
                                NZ; or IELTS 6+ in each component;
                                or PTE Academic 50+ in each
                                component; or Cambridge (CAE)
                                169+ in each component; or
                                TOEFL iBT 12 in Listening, 13
                                Reading, 21 Writing, 18 Speaking.
                            </span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    How would you consider your level of English?
                                </label>
                                <br>
                                <span class="custom-label-value">/</span>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col m-0 p-1">
                                <h1 class="form-header pl-2">Qualifications</h1>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Level of qualifications:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->qualificationR ? $user->details->qualificationR->descr : '/'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Qualification name:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->qualification_name ? $user->details->qualification_name : '/'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Obtained in:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->qualif_date ? $user->details->qualif_date->format('Y') : '/'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Are the qualifications related to the occupation:
                                </label>
                                <br>
                                <span class="custom-label-value">Yes</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Australia Study Requirements:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->AU_study_req ? 'Yes' : 'No'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Specialist Education Qualification:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->special_edu ? 'Yes' : 'No'}}</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Other:
                                </label>
                                <br>
                                <span class="custom-label-value">{{$user->details->extraPointR ? $user->details->extraPointR->descr : 'None'}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-0 p-1">
                                <h1 class="form-header pl-2">Additional Information</h1>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Comments:
                                </label>
                                <br>
                                <p class="custom-label-value">{{$user->details->comment ? $user->details->comment : ''}}</p>
                            </div>
                            @if($user->details->cv)
                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        CV:
                                    </label>
                                    <br>
                                    <div class="mt-4">
                                        <a href="{{$profileCvUrl}}" download target="_blank">
                                            <i class="fa fa-file fa-5x" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
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