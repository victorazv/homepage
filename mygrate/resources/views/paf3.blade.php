@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3 animated bounceInRight">
        <form action="{{route('paf4')}}" method="get">
            <section id="sec_3" class="how-it-works pt-3 mb-0">
                <div class="container">
                    <div class="row d-sm-flex justify-content-center">
                        <div class="col-md-4 px-0 pr-md-3 d-flex flex-wrap sec_1">
                            <div class="col-md-12">
                                <div class="sec_3">
                                    <div class="mt-4 ml-2">
                                        <img src="images/img_form_03.png" class="d-none d-md-block" alt="paper">
                                    </div>
                                    <p class="col-12 col-md-9 ml-md-3 pl-0 pl-md-3">
                                        <img src="images/img3_small.png" class="d-sm-none">
                                        <span class="card_title d-none d-md-block">Something about your Relocation</span>
                                        <span class="card_title2 d-sm-none">Something about your Relocation</span>
                                    </p>
                                </div>
                                <div class="ml-lg-4 col-12 col-md-9">
                                    <p class="detail1 my-lg-4">
                                        A few details about
                                        you and your current
                                        Visa situation.
                                    </p>
                                    <p>
                                        This will concur to determine
                                        your chances of obtaining an
                                        Australian Visa.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-5 d-flex flex-wrap">
                            <form id="form" class="w-100" action="{{route('form.insert')}}" method="post">

                                {{csrf_field()}}

                                <div>
                                    <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">How old are you?*</label>
                                    <input class="w-100" name="age" type="number" id="age" 
                                    value="{{session()->get('age')}}"
                                    max="65"
                                           onchange="verifyAgeValue(); changeBackground('age'); updateProgress();"
                                           required>
                                </div>
                                <span id="msg_under_age" style="display:none">
                                <img src="images/icon_exclamation_small2.png" alt="">
                                You need to be 18 or older to proceed with this form. Please seek your parents/guardians assistance.</span>
                                <div>
                                    <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">What is your Country of
                                        Citizenship?*</label>
                                    <div class="div-select_small">
                                        <select name="citizenship" id="citizenship" value="" class="w-100"
                                                onchange="changeBackground('citizenship'); updateProgress();" required>
                                            <option value="" selected></option>
                                            @foreach($citizenship as $key => $cit)
                                                <option
                                                value="{{$key}}" {{session()->get('citizenship') == $key ? 'selected' : ''}}
                                                >{{$cit}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="py-2" id="msg_under_citizenship" style="display:none">
                                    <img src="images/icon_exclamation_small2.png" alt="">
                                    You will need a passport of this Country
                                </div>

                                <label class="label_form">Are you the Citizen of more than one Country?*</label>
                                <section class="form">
                                    <input type="radio" name="verify_ot_citizenship" id="yes" value="1" 
                                           onclick="verifyOtCountry(); updateProgress()"><label class="four radio_item1"
                                                                                                for="yes">Yes</label>
                                    <input type="radio" name="verify_ot_citizenship" id="no" value="0"
                                           onclick="verifyOtCountry(); updateProgress()"><label class="four radio_item1"
                                                                                                for="no">No</label>
                                </section>

                                <div id="field_which_country" style="display:none">
                                    <label class="col-md-12 d-flex p-0 flex-lg-wrap label_form">Which Country?*</label>
                                    <div class="div-select_small">
                                        <select name="ot_citizenship" id="ot_citizenship" value="" class="w-100"
                                                onchange="changeBackground('ot_citizenship'); updateProgress();">
                                            <option value="" selected></option>
                                            @foreach($citizenship as $key => $cit)
                                                <option value="{{$key}}">{{$cit}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <label class="label_form">What is the main reason for seeking to apply for an Australian Visa?*</label>
                                <section class="form">
                                    <input type="radio" name="application_reason" id="1" value="1"><label
                                            class="radio_item2 ml-0 pl-2" for="1">Visit Australia</label>
                                    <input type="radio" name="application_reason" id="2" value="2"><label
                                            class="radio_item2 ml-0 pl-2" for="2">Study in Australia</label>
                                    <input type="radio" name="application_reason" id="3" value="3"><label
                                            class="radio_item2 ml-0 pl-2" for="3">Work and live in Australia
                                        (TEMPORARILY)</label>
                                    <input type="radio" name="application_reason" id="4" value="4"><label
                                            class="radio_item2 ml-0 pl-2" for="4">Work and live in Australia
                                        (PERMANENTLY)</label>
                                </section>
                                <div>
                                    <label class="label_form" for="">When would you like to relocate?*</label>
                                    <input type="text" name="when_leave" id="when_leave" 
                                    value="{{session()->get('when_leave')}}"
                                    class="form"
                                           onchange="changeBackground('when_leave')" required>
                                </div>
                                <div>
                                    <label class="label_form" for="">What is the estimated budget for your relocation?</label>
                                    <input type="text" name="usr_budget" id="usr_budget" 
                                    value="{{session()->get('usr_budget')}}"
                                    class="form"
                                           onchange="changeBackground('usr_budget')">
                                </div>

                                <label for="" class="label_form">What is your current marital/relationship status?*</label>
                                <br>
                                <div class="">
                                    <div class="div-select_small">
                                        <select name="marital_status" id="marital_status"
                                                onchange="changeBackground('marital_status')" required>
                                            <option value=""></option>
                                            @foreach($maritalStatus as $key => $opt)
                                                <option 
                                                value="{{$key}}" {{session()->get('marital_status') == $key ? 'selected' : ''}}
                                                >{{$opt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="">

                                    <label class="label_form">Are you currently in Australia?*</label>
                                    <section class="form">
                                        <input type="radio" name="in_AU" id="cur_yes" value="1"
                                               onclick="updateProgress();"><label class="four radio_item1"
                                                                                  for="cur_yes">Yes</label>
                                        <input type="radio" name="in_AU" id="cur_no" value="0"
                                               onclick="updateProgress();"><label class="four radio_item1" for="cur_no">No</label>
                                    </section>
                                </div>

                                <div class="">
                                    <label class="label_form">Do you currently hold an Australian Visa?*</label>
                                    <section class="form">
                                        <input type="radio" name="visa_hold" id="hold_yes" value="1"
                                               onclick="verifyVisaHold(); updateProgress();"><label
                                                class="four radio_item1" for="hold_yes">Yes</label>
                                        <input type="radio" name="visa_hold" id="hold_no" value="0"
                                               onclick="verifyVisaHold(); updateProgress();"><label
                                                class="four radio_item1" for="hold_no">No</label>
                                    </section>
                                </div>

                                <div id="field_visa_hold" style="display:none">
                                    <label for="" class="label_form">What type of Visa do you hold?</label>
                                    <br>
                                    <div>
                                        <div class="div-select_small">
                                            <select id="visa_type" name="visa_type"
                                                    onchange="changeBackground('visa_type');">
                                                <option value=""></option>
                                                @foreach($visaTypes as $key => $opt)
                                                    value="{{$key}}" {{session()->get('visa_type') == $key ? 'selected' : ''}}
                                                    >{{$opt}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div id="currently_hold_fields">
                                        <div class="">
                                            <label class="label_form" for="">When does your Visa expire?
                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                            <input id="exp_date_visa" type="date" name="exp_date_visa" 
                                            value="{{session()->get('exp_date_visa')}}"
                                            class="form" onchange="changeBackground('exp_date_visa');">
                                        </div>

                                        <div>
                                            <label class="label_form" >Do you have any family member in Australia?</label>
                                            <section class="form">
                                                <input type="radio" name="family_AU" id="family_yes" value="1"
                                                       onclick="updateProgress()"><label class="four radio_item1"
                                                                                         for="family_yes">Yes</label>
                                                <input type="radio" name="family_AU" id="family_no" value="0"
                                                       onclick="updateProgress()"><label class="four radio_item1"
                                                                                         for="family_no">No</label>
                                            </section>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="question w-100 offset-md-2 col-md-8 col-xs-12">
                    <a href="paf4">
                        <button type="submit" class="float-right mt-3 mr-4">Continue</button>
                    </a>
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
                        <a href="paf2a"><img src="images/img_previous.png"></a>
                        <button type="submit" id="btn_1" class="remove-btn-style"><img src="images/img_next.png"></button>
                    </div>
                </div>
            </section>
            <br>
        </form>
        
    </main>
@endsection

@push('footer-scripts')
<script>

function verifyOtCountry() {
    var val = $('input[name=verify_ot_citizenship]:checked').val();

    if (val == "1") {
        $('#field_which_country').show();
    } else {
        $('#field_which_country').hide();
    }
}

function verifyVisaHold() {
    var val = $('input[name=visa_hold]:checked').val();

    if (val == "1") {
        $('#field_visa_hold').show();
    } else {
        $('#field_visa_hold').hide();
    }
}

$('#citizenship').change(function () {
    var val = $(this).val();

    if (val != "") {
        $('#msg_under_citizenship').show();
    } else {
        $('#msg_under_citizenship').hide();
    }
});

function verifyAgeValue() {
    var a = $('#age').val();

    if (a < 18) {
        $('#msg_under_age').show();
        $('#age').val("");
    } else {
        $('#msg_under_age').hide();
    }

    if (a > 65) {
        $('#age').val("");
    }
}

function personalizateButton(el1, el2) {
    $('#' + el2).removeClass('button_active');
    $('#' + el1).addClass('button_active');
}
</script>
@endpush

@section('footer')

@endsection

<script src="{{asset('js/form.js')}}"></script>