@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
<main class="mb-3 animated {{$return ? 'bounceInLeft' : 'bounceInRight'}}">
    <section id="sec_1b" class="how-it-works py-3">
		<div class="container">
			<div class="row d-sm-flex justify-content-center">
				<div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
					<div class="sec_3 col-md-12">
						<div class="mt-4 ml-2">
							<img src="images/img_form_01.png" class="d-none d-md-block" alt="paper">
						</div>
						<span class="col-12 col-md-9 ml-md-3 pl-0 pl-md-3">
							<img src="images/img1_small.png" class="d-sm-none">
							<span class="card_title d-none d-md-block col-8">Things you need to know</span>
							<span class="card_title2 d-sm-none">Things you need to know</span>
						</span>
					</div>
					<div class="col-md-12 subcard">
						<h1 class="ml-4 mb-0 d-none d-md-block" style="font-size: 50px; color: #fff">b.</h1>
						<div class="d-flex mb-0 col-md-12 px-0">
							<h6 class="col-md-9 ml-3 d-flex" style="color: #000; font-weight: 800">
								<span class="d-block d-sm-none small_letter">b.</span>Few more information before we start
							</h6>
							
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-5 d-flex flex-wrap">			
					
					<div class="pt-4 col-md-12" >
						<img src="images/icon_i.png" class="d-none d-md-block">
					</div>

					<div class="d-flex">
						<div><img src="images/icon_i_small.png" class="d-block d-sm-none"></div>
						<div>
						<p class="mb-0 sec_1b_title">
							<strong>Relocating to Australia is a big move.</strong>
						</p>
						<p class="mb-2 sec_1b_title">
							It should not be done without thinking carefully
							about all the aspects involved and any possible
							consequences
						</p>
						<p class="mb-2 sec_1b_text">
							It has many moving parts and it is a long journey. Literally...
							<br>
							It also involves a financial effort that can be underestimated and easily
							reach thousands of dollars.
						</p>
						<p class="mb-2 sec_1b_text">
							However, <strong>Australia has many opportunities and a great quality of
							living</strong> for those who are determined.
						</p>
						<p class="mb-2 sec_1b_text">
							It is not easy, but it can be done.
						</p>
						<p class="mb-2 sec_1b_text">
							<strong>Mygrate is here to inform you, not to discourage you.</strong>
						</p>
						<p class="sec_1b_text">
							Being honest and transparent about real chances to get an Australian
							Visa is paramount for us. Information is the key. Happy journey.
						</p>
						</div>
					</div>
				</div>            
			</div>
		</div>
		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
        <a href="/paf2"><button class="float-right mt-3 mr-4">Thank you</button></a>
		</div>
		<div class="percent_bar col-12 pl-0 d-flex">
				<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
					<span class="el_percentage">0%</span> Completed
					<div class="progress progress2">
						<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-md-2 mt-2 pl-0">
                <a href="/paf1a?return=1" id="btn_1"><img src="images/img_previous.png"></a>
				<a href="/paf2"  id="btn_1"><img src="images/img_next.png"></a>
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