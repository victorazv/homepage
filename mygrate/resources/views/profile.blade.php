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
                                <a class="nav-link active" href="#">View your Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Edit Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-3">
                    <div class="row">
                        <div class="col-md-12 col-6">
                            <img src="https://via.placeholder.com/250x250" alt="" class="img-thumbnail w-100 ml-1">
                        </div>
                        <div class="col-md-12 col-6">
                            <h2 class="mt-4 mb-4">Abhishek Mohan Kaushal</h2>
                            <span><i class="fa fa-envelope mr-1"></i> er.abhishekmohan@gmail.com</span>
                            <span><i class="fa fa-linkedin mr-1"></i> /abhishekmohankaushal</span>
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
                    <div class="row mt-5">
                        <div class="col-6 col-md-12 p-1">
                            <div class="d-flex justify-content-start btn-custom-gray align-items-center">
                                <div class="m-3">
                                    <img src="https://via.placeholder.com/120x50" alt="" class="mr-1 w-100">
                                </div>
                                <div class="mr-1">
                                    Send a Message to Abhishek
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6 mt-md-2 p-1">
                            <div class="d-flex justify-content-start btn-custom-gray align-items-center">
                                <div class="m-3">
                                    <img src="https://via.placeholder.com/120x50" alt="" class="mr-1 w-100">
                                </div>
                                <div class="mr-1">
                                    Send a Quotation to Abhishek
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <span class="custom-label-value">29</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Country of citizenship:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">India</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Second citizenship:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">/</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        First Language:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">Hindi</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Relationship Status:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">Married</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-7  m-0 p-1 mt-4">
                                <h1 class="form-header">Occupation</h1>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Employment status:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">Unenployed</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Skilled occupation:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">Engineering Technologist</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Second citizenship:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">/</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Current occupation:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">/</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Work experience OUTSIDE Australia in the last 10 years:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">5-7 years</span>
                                </div>

                                <div class="field-box w-100">
                                    <label for="age" class="custom-label">
                                        Work experience IN Australia in the last 10 years:
                                    </label>
                                    <br>
                                    <span class="custom-label-value">Less than a year</span>
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
                                <span class="custom-label-value">Work and live in Australia (PERMANENTLY)</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Currently in Australia:
                                </label>
                                <br>
                                <span class="custom-label-value">No</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    In possess of an Australian Visa:
                                </label>
                                <br>
                                <span class="custom-label-value">No, I don't have any Visa</span>
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
                                <span class="custom-label-value">IELTS</span>
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
                                <span class="custom-label-value">A Bachelor/Masters degree from
                                an Australian educational
                                institution or a Bachelor
                                qualification, from another
                                educational institution that is
                                of a recognised standard.</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Qualification name:
                                </label>
                                <br>
                                <span class="custom-label-value">Bachelor of electrical engineering</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Obtained in:
                                </label>
                                <br>
                                <span class="custom-label-value">2011</span>
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
                                <span class="custom-label-value">No</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Specialist Education Qualification:
                                </label>
                                <br>
                                <span class="custom-label-value">No</span>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    Other:
                                </label>
                                <br>
                                <span class="custom-label-value">Accredited in a community language Partner Skill Qualifications</span>
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
                                <p class="custom-label-value">Sure, using a placeholder like
                                    lorem ipsum is tempting with its
                                    convenience - but ultimately it will
                                    hold you back. For starters, using
                                    a placeholder perpetuates the idea
                                    that content is secondary.</p>
                            </div>
                            <div class="field-box w-100">
                                <label for="age" class="custom-label">
                                    CV:
                                </label>
                                <br>
                                <span class="custom-label-value">

                            </span>
                            </div>
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