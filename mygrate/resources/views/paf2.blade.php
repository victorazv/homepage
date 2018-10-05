@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
<main class="mb-3 animated {{$return ? 'bounceInLeft' : 'bounceInRight'}}">
    <section id="sec_2" class="how-it-works py-3">
		<div class="container">
			<div class="row d-sm-flex justify-content-center">
				<div class="col-md-4 px-0 pr-md-4 mb-4 flex-wrap sec_1">
					<div class="sec_3 col-md-12">
						<div class="mt-4 ml-2">
							<img src="images/img_form_02.png" class="d-none d-md-block" alt="">
						</div>						
						<p class="col-12 col-md-9 ml-md-3 pl-0 pl-md-3">
							<img src="images/img2_small.png" class="d-sm-none">
							<span class="card_title d-none d-md-block">About <br> Migration Agents</span>
							<span class="card_title2 d-sm-none">About Migration Agents</span>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-5 d-flex flex-wrap">
					<div class="w-100 mt-5 d-none d-md-block">
						<div class="my-5"></div>
						<img src="images/icon_i.png" class="mt-5">
					</div>
						<h4 class="text_sec_2 mb-4"> 
							A Registered Migration Agent (RMA) is someone
							registered with the <strong>Office of the Migration
							Agents Registration Authority</strong> (MARA) who
							can provide advice on Visa requirements, help
							lodge a Visa application and deal with the
							department on your behalf
						</h4>
						<p class="text_sec_2_minor"> You are responsible for the accuracy of information and supporting
							documentation provided as part of your application, even if you use a
							registered migration agent.
						</p>
				</div>
			</div>
		</div>
		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<a href="/paf2a"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>
		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
                <a href="/paf1b?return=1"><img src="images/img_previous.png"></a>
				<a href="/paf2a" id="btn_1"><img src="images/img_next.png"></a>
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