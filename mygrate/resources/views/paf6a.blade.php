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
							<img src="images/img_form_06.png" class="d-none d-md-block" alt="paper">
						</div>
						<p class="col-12 col-md-10 ml-md-3 pl-0 pl-md-3">
							<img src="images/img1_small.png" class=" d-sm-none">
							<span class="card_title d-none d-md-block">Your English Language Ability</span>
							<span class="card_title2 d-sm-none">Your English Language Ability</span>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">
					<div class="w-100 my-4 col-xs-1 flex-xs-nowrap d-none d-md-block">
						<img src="images/icon_i.png">
					</div>
					<h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
						It is a well–known fact that applicants are
						required to demonstrate their English language
						skills for many Australian visas.
					</h5>
					<h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
						There are several levels and English test types
						accepted by the Department of Immigration
						and Border Protection (DIBP) depending on the
						visa you apply for.
					</h5>
					<p class="text_sec_4_small">
                    	You can prove that your English language ability is at the appropriate level by:
                    </p>
					<p class="text_sec_4_small">
                    	- showing that you have studied in English for at least five years in one
						or more of the following countries: Australia, United Kingdom, Canada,
						New Zealand, the United States, South Africa, or the Republic of Ireland; <br>
						- being enrolled by your education provider; <br>
						- passing an approved test of your English language ability.
                    </p>
				</div>
			</div>
		</div>

		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<a href="/paf6b"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>

		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<a href="/paf6"><img src="images/img_previous.png"></a>
				<a href="/paf6b" id="btn_1"><img src="images/img_next.png"></a>
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