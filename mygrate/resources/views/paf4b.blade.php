@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
<main class="mb-3 animated bounceInRight">
	<section  id="sec_1" class="how-it-works py-3">
		<div class="container">
			<div class="row d-sm-flex justify-content-center">
				<div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
					<div class="sec_3 col-md-12 ">
						<div class="mt-4 ml-2">
							<img src="images/img_form_04.png" class="d-none d-md-block" alt="paper">
						</div>
						<p class="col-12 col-md-10 ml-md-3 pl-0 pl-md-3">
							<img src="images/img1_small.png" class=" d-sm-none">
							<span class="card_title d-none d-md-block">Something about your Occupation</span>
							<span class="card_title2 d-sm-none">Something about your Occupation</span>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">
					<form id="form" class="w-100" action="{{route('form.insert')}}" method="post">
						<div>
							<label class="custom-label">What is your current employment status?*</label>
							<br>
							<select id="employment" name="employment" onchange="changeBackground('employment')">
								<option value=""></option>
								@foreach($employment as $key => $opt)
									<option value="{{$key}}" {{$user->details->employment == $key ? 'selected' : ''}}>{{$opt}}</option>
								@endforeach
							</select>
						</div>

						<div>
							<label class="custom-label">Choose your occupation or the one that is closest to what you do.*</label>
							<br>
							<div class="">
								<select id="occupation" name="occupation" onchange="changeBackground('occupation')">
									<option value=""></option>
                                    @foreach($occupation as $key => $opt)
                                        <option value="{{$key}}" {{$user->details->occupation == $key ? 'selected' : ''}}>{{$opt}}</option>
                                        @endforeach
                                </select>
							</div>
							<p id="msg_under_occupation" style="display:none">
								You selected “NONE OF THESE” from the list of occupations. <br>
								Please describe what is/was your occupation. <br>
								This is important to pre-assess any eligibility for an Australian Visa. <br>
								Your occupation will only be considered if you can provide enough evidence to prove your
								work experience in that particular occupation. Evidence of employment varies depending
								on the type of employment, such as paid employment or own business.
							</p>
						</div>

						<div class="field-box w-100">
						<label class="custom-label" for="">What is your work experience in this occupation in the last 10 years - OUTSIDE Australia:*</label>
							<br>
							<div class="">
								<select id="experience" name="experience" onchange="changeBackground('experience')">
									<option value=""></option>
									@foreach($experienceOutside as $key => $opt)
										<option value="{{$key}}" {{$user->details->experience == $key ? 'selected' : ''}}>{{$opt}}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="">
							<label class="custom-label" for="">What is your work experience in this occupation in the last 10 years - IN Australia:*</label>
							<br>
							<select id="experience_AU" name="experience_AU" onchange="changeBackground('experience_AU')">
								<option value=""></option>
								@foreach($experienceInside as $key => $opt)
									<option value="{{$key}}" {{$user->details->experience_AU == $key ? 'selected' : ''}}>{{$opt}}</option>
								@endforeach
							</select>
						</div>

					</form>
				</div>
			</div>
		</div>

		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<a href="/paf5"><button class="float-right mt-3 mr-4">I Understand</button></a>
		</div>

		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<a href="/paf4a"><img src="images/img_previous.png"></a>
				<a href="/paf5" id="btn_1"><img src="images/img_next.png"></a>
			</div>
		</div>
	</section>
</main>
@endsection

@push('footer-scripts')
    <script>
		$('#occupation').change(function() {
			var val = $(this).val();

			if (val == "1") {
				$('#msg_under_occupation').show();
			}else{
				$('#msg_under_occupation').hide();
			}

		});
    </script>
@endpush

@section('footer')
    
@endsection

<script src="{{asset('js/form.js')}}"></script>