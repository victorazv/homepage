@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated {{$return ? 'bounceInLeft' : 'bounceInRight'}}">
        <section id="sec_2a" class="py-3">
            <form action="{{route('paf3')}}" method="get">
                <div class="container">
                    <div class="row d-sm-flex justify-content-center">
                        <div class="col-md-4 px-0 pr-md-4 mb-4 flex-wrap sec_1">
                            <div class="sec_3 col-md-12">
                                <div class="mt-4 ml-2">
                                    <img src="images/img_form_02.png" class="d-none d-md-block" alt="">
                                </div>
                                <span class="col-12 col-md-9 ml-md-3 pl-0 pl-md-3">
							<img src="images/img2_small.png" class="d-sm-none">
							<span class="card_title d-none d-md-block">About <br> Migration Agents</span>
							<span class="card_title2 d-sm-none">About Migration Agents</span>
						</span>
                            </div>
                            <div class="col-md-12 subcard">
                                <h1 class="ml-4 mb-0 d-none d-md-block" style="font-size: 50px; color: #fff">a.</h1>
                                <div class="d-flex mb-0 col-md-12 px-0">
                                    <h6 class="col-md-11 d-flex" style="color: #000; font-weight: 800">
                                        <span class="d-block d-sm-none small_letter">a.</span> <span
                                                class="col-md-8 mr-5 pt-3">Interesting question.</span>
                                        <img class="d-none d-sm-block" src="images/icon_wallet.png" alt="paper">
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5 d-flex flex-wrap">
                            <div class="w-100 pt-3">
                                <img src="images/icon_i.png" class="d-none d-md-block">
                            </div>
                            <p class="text_sec_2a mb-4">
                                A Migration Agent may charge a fee for a first
                                consultation to discuss a possibile path to
                                Australia. They are experts in Immigration and
                                could save you a lot of time AND money.
                            </p>
                            <p class="text_sec_2a_minor">
                                This fee does not include the costs of the Visa application process and
                                other services. (for example: skills recognition/assessment process,
                                qualification assessments, document translations, etc.).
                            </p>
                            <div class="w-100">
                                <img src="images/icon_x.png" class="d-none d-md-block">
                            </div>
                            <p class="text_sec_2a_bottom">
                                Would you like to receive a quote even from
                                agents whom don't offer free first consultation?
                            </p>
                        </div>
                    </div>
                </div>
                <div id="buttons" class="question w-100 offset-md-2 col-md-8 col-xs-12">
                    <input class="" type="radio" name="agent_without_free_first_consultation" id="no"
                           value="0"><label
                            class="four radio_item1 float-right mt-3 mr-4" for="no">No</label>
                    <input class="" type="radio" name="agent_without_free_first_consultation" id="yes"
                           value="1" checked><label
                            class="four radio_item1 float-right mt-3 mr-4" for="yes">Yes</label>
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
                        <a href="/paf2?return=1"><img src="images/img_previous.png"></a>
                        <button type="submit" id="btn_1" class="remove-btn-style"><img src="images/img_next.png"></button>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection

@push('footer-scripts')
    <script>
    /*
        function personalizateButton(el1, el2) {
            $('#' + el2).removeClass('button_active');
            $('#' + el1).addClass('button_active');
        }
    */
        updateProgress();
    </script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>