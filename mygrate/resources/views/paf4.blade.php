@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
<main class="mb-3 animated {{$return ? 'bounceInLeft' : 'bounceInRight'}}">
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
					<div class="w-100 my-4 col-xs-1 flex-xs-nowrap d-none d-md-block">
						<img src="images/icon_i.png">
					</div>
					<h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
                        Australia has a pre-migration skills assessment scheme.
					</h5>
					<h5 class="text_sec_1 mb-4"> 
                        A skills assessment helps you find out if you
                        have the necessary skills and qualifications to
                        work in your occupation in Australia.
					</h5>
					<h5 class="text_sec_1 mb-4">
                        More than 90 per cent of offshore skilled
                        migrants who migrate with a satisfactory skills
                        assessment are in skilled employment within six
                        months of arriving in Australia.
					</h5>
                    <p class="text_sec_4_small">
                    Your occupation will only be considered if you can provide enough
                    evidence to prove your work experience in that particular occupation.
                    </p>
                    <p class="text_sec_4_small">
                    Evidence of employment varies depending on the type of employment,
                    such as paid employment or own business
                    </p>
				</div>
			</div>
		</div>

		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<a href="/paf4a"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>

		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<a href="/paf3?return=1"><img src="images/img_previous.png"></a>
				<a href="/paf4a" id="btn_1"><img src="images/img_next.png"></a>
			</div>
		</div>
	</section>
</main>
@endsection

@push('footer-scripts')
    <script>
		updateProgress();
    </script>
@endpush

@section('footer')
    
@endsection

<script src="{{asset('js/form.js')}}"></script>