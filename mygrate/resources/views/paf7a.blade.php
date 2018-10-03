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
				<form action="">
					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">First Name*</label>
						<input type="text" name="name" id="name" onchange="changeBackground('name')" required>
					</div>

					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">Family Name*</label>
						<input type="text" name="surname" id="surname" onchange="changeBackground('surname')" required>
					</div>

					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">Your Email Address*</label>
						<input type="email" name="email" id="email" onchange="changeBackground('email')" required>
					</div>

					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">Your Mygrate Password*</label>
						<input type="password" name="pswd" id="pswd" onchange="changeBackground('pswd')" required>
					</div>

					<label class="col-md-12 d-flex p-0 flex-lg-wrap">Upload your CV/Resume</label>

					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">LinkedIn Profile</label>
						<input type="text" name="linkedin" id="linkedin" onchange="changeBackground('linkedin')">
					</div>

					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">Skype/Google Hangout</label>
						<input type="text" name="usr_skype" id="usr_skype" onchange="changeBackground('usr_skype')">
					</div>

					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">Phone number</label>
						<input type="tel" name="usr_tel" id="usr_tel" onchange="changeBackground('usr_tel')">
					</div>

					<div>
						<label class="col-md-12 d-flex p-0 flex-lg-wrap">One last chance to add useful details:</label>
						<input type="textarea" name="comment" id="comment" onchange="changeBackground('comment')">
					</div>

				</form>
				</div>
			</div>
		</div>

		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<a href="/paf7"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>

		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<a href="/paf7"><img src="images/img_previous.png"></a>
				<a href="/paf8" id="btn_1"><img src="images/img_next.png"></a>
			</div>
		</div>
	</section>
</main>
@endsection

@push('footer-scripts')
    <script>

    </script>
@endpush

@section('footer')
    
@endsection

<script src="{{asset('js/form.js')}}"></script>