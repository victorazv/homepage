@extends('layout.app')

@section('header')
    @include('layout.header')
@endsection

@section('content')
    <main class="mb-3">
        <section class="banner pl-5">
            <div class="layer"></div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 mt-5">
                            <h1>The easiest way to find an Australian migration Expert</h1>
                        </div>
                        <div class="col-md-6 offset-md-3 mt-5">
                            <p>Get tailored solutions and choose <br> the best expert for you.</p>
                        </div>
                        <div class="col-md-6 offset-md-3 mt-5 mb-5">
                            <button class="custom-btn">Start your journey</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-flex mt-5 mb-5">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="card-title mb-5">Are you a <br> Migration <br> Expert?</h2>
                            <a class="custom-btn card-link" href="#">Learn More</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="how-it-works py-5">
            <div class="container">
                <div class="row px-2 mt-2 mb-5">
                    <div class="col-12">
                        <h1>How it works</h1>
                    </div>
                </div>
                <div class="row d-sm-flex justify-content-center">
                    <div class="col-md-4 d-flex flex-lg-wrap">
                        <div class="mb-2">
                            <img src="images/img1.png" alt="paper">
                        </div>
                        <div class="ml-4">
                            <h3>Tell us <br> what you need</h3>
                            <p class="item-description"> Fill out our pre-assessment form about your situation </p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-lg-wrap">
                        <div class="mb-2">
                            <img src="images/img2.png" alt="paper">
                        </div>
                        <div class="ml-4">
                            <h3>Receive <br> free offers</h3>
                            <p class="item-description"> Our experts will send you up to five solutions based on your
                                needs </p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-lg-wrap">
                        <div class="mb-2">
                            <img src="images/img3.png" alt="paper">
                        </div>
                        <div class="ml-4">
                            <h3>Hire the <br> best experts</h3>
                            <p class="item-description"> Compare quotes, profiles and reviews to hire the best Expert </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog py-5">
            <div class="container">
                <div class="pic-images">
                    <img src="images/img_box2.png" class="img-thumbnail img-back" alt="expert">
                    <img src="images/img_box1.png" class="img-thumbnail img-front" alt="expert">
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-2">
                        <img src="images/finger.png" alt="expert">
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <h1 class="mb-3">Our blog is <br> full of advices</h1>
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    How to choose the agent, ot to prepare for a move abroad. Tips on job searching and much
                                    more.
                                </p>
                            </div>
                            <div class="col-12">
                                <a href="https://mygrate.me/blog/"><button class="custom-btn">Read our Blog</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="expert py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-2 mb-4">
                        <img src="images/expert.png" alt="expert">
                    </div>

                    <div class="col-sm-12 col-md-10">
                        <h1 class="mb-3">Why should you need an expert?</h1>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-justify mt-3">
                                    Moving to another Country is a big life-change.</p>
                                <p class="text-justify">
                                    Such an important process requires assistance from a highly qualified, registered and
                                    regulated
                                    professional. A qualified expert will let you avoid non-necessary expenses and will
                                    guide you
                                    through the entire
                                    process.
                                </p>
                            </div>
                            <div class="col-12">
                                <a href="https://mygrate.me/agents/"><button class="custom-btn">Visit our Expert Directory</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('footer-scripts')
    <script>
        $(window).scroll(function() {

            $('section.blog .img-front').css({
                transform: 'rotate('+ (20*window.pageYOffset/(document.body.clientHeight - window.innerHeight)) +'deg)',
                marginLeft: 45*window.pageYOffset/(document.body.clientHeight - window.innerHeight),
            });

            $('.img-back').css({transform: 'rotate('+ (-3*window.pageYOffset/(document.body.clientHeight - window.innerHeight)) +'deg)'});

        });
    </script>
@endpush

@section('footer')
    @include('layout.footer')
@endsection