@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
<main class="mb-3 animated bounceInRight">
	<section id="sec_3" class="how-it-works pt-3 mb-0">		
		<div class="container">
			<div class="row d-sm-flex justify-content-center">
				<div class="col-md-4 px-0 pr-md-3 d-flex flex-wrap sec_1">
					<div class="sec_3 col-md-12">
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

				<div class="col-xs-12 col-md-5 d-flex flex-wrap">
                    <form id="form" class="w-100" action="{{route('form.insert')}}" method="post">
                        {{csrf_field()}}
                        <div>
						    <label class="col-md-12 d-flex p-0 flex-lg-wrap">How old are you?*</label>
						    <input name="age" type="number" name="" id="old" value="" onchange="changeBackground('old'); updateProgress();" required>
                        </div>
                        <div>
                            <label class="col-md-12 d-flex p-0 flex-lg-wrap">What is your Country of Citizenship?*</label>
                            <select name="citizenship" id="country" value="" class="w-100" onchange="changeBackground('country'); updateProgress();" required>
                            <option value="" selected></option>
                                @foreach($citizenship as $key => $cit)
                                    <option value="{{$key}}" {{$user->details->citizenship == $key ? 'selected' : ''}}>{{$cit}}</option>
                                @endforeach
                            </select>			
						</div>
						<label>Are you the Citizen of more than one Country?*</label>
						<section class="form">
							<input type="radio" name="ot_citizenship" id="yes" value="1" onclick="updateProgress()"><label class="four radio_item1" for="yes">Yes</label>
							<input type="radio" name="ot_citizenship" id="no"  value="0" onclick="updateProgress()"><label class="four radio_item1" for="no">No</label>
						</section>
						<label>What is the main reason for seeking to apply for an Australian Visa?*</label>
						<section class="form">
							<input type="radio" name="application_reason" id="1" value=""><label class="radio_item2 ml-0 pl-2" for="1">Visit Australia</label>
							<input type="radio" name="application_reason" id="2" value=""><label class="radio_item2 ml-0 pl-2" for="2">Study in Australia</label>
							<input type="radio" name="application_reason" id="3" value="3"><label class="radio_item2 ml-0 pl-2" for="3">Work and live in Australia (TEMPORARILY)</label>
							<input type="radio" name="application_reason" id="4" value="4"><label class="radio_item2 ml-0 pl-2" for="4">Work and live in Australia (PERMANENTLY)</label>
						</section>
                        <input type="text" name="login_user" value="test" class="form">
                        <br>
                        <br>
                        <button type="submit" class="form">Insert</button>
					</form>
				</div>
			</div>
		</div>

		</div>
		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<a href="paf4"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>
		
		
		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<a href="paf2a"><img src="images/img_previous.png"></a>
				<a href="paf4" id="btn_1"><img src="images/img_next.png"></a>
			</div>
		</div>
	</section>
</main>
@endsection

@push('footer-scripts')
    <script>
		function personalizateButton(el1, el2){
			$('#'+el2).removeClass('button_active');
			$('#'+el1).addClass('button_active');
		}
    </script>
@endpush

@section('footer')
    
@endsection

<script src="{{asset('js/form.js')}}"></script>