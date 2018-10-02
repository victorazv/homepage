@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
<main class="mb-3 animated bounceInRight">
    <section id="sec_1a" class="py-3">
		<div class="container">
			<div class="row d-sm-flex justify-content-center">
				<div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
					<div class="sec_3 col-md-12">
						<div class="mt-4 ml-2">
							<img src="images/img_form_01.png" class="d-none d-md-block" alt="paper">
						</div>
						<span class="col-12 col-md-9 ml-md-3 pl-0 pl-md-3">
							<img src="images/img1_small.png" class=" d-sm-none">
							<span class="card_title d-none d-md-block col-8">Things you need to know</span>
							<span class="card_title2 d-sm-none">Things you need to know</span>
						</span>
					</div>
					<div class="col-md-12 subcard">
						<h1 class="ml-4 mb-0 d-none d-md-block" style="font-size: 50px; color: #fff">a.</h1>
						<div class="d-flex mb-0 col-md-12 px-0">
							<h6 class="col-md-11 ml-3 d-flex" style="color: #000; font-weight: 800">
								<span class="d-block d-sm-none small_letter">a.</span> Legal stuff - Please read and accept this first.
								<img class="d-none d-sm-block" src="images/icon_sheet.png" alt="paper">
							</h6>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-5 pr-md-0 pt-4">
					<h6 class="title_sec2">Disclaimer</h6>
					<div class="d-flex">
						<!--<div><img src="images/icon_i_small.png"></div>-->
						<div>
							<p class="sec_1a_text">
								The information contained in this website is for general information purposes only. The
								information is provided by Mygrate and while we endeavour to keep the information up
								to date and correct, we make no representations or warranties of any kind, express or
								implied, about the completeness, accuracy, reliability, suitability or availability with
								respect to the website or the information, products, services, or related graphics
								contained on the website for any purpose. Any reliance you place on such information is
								therefore strictly at your own risk.
							</p>
							<p class="sec_1a_text">
								In no event will we be liable for any loss or damage including without limitation, indirect
								or consequential loss or damage, or any loss or damage whatsoever arising from loss of
								data or profits arising out of, or in connection with, the use of this website.
							</p>
							<p class="sec_1a_text">
								Through this website you are able to link to other websites which are not under the
								control of Mygrate. We have no control over the nature, content and availability of those
								sites. The inclusion of any links does not necessarily imply a recommendation or endorse
								the views expressed within them.
							</p>
							<p class="sec_1a_text">
								Every effort is made to keep the website up and running smoothly. However, Mygrate
								takes no responsibility for, and will not be liable for, the website being temporarily
								unavailable due to technical issues beyond our control.
							</p>
							<p class="sec_1a_text">
								You are responsible for the accuracy of information you provided.
								The result of this questionnaire is an estimation and by no means constitute a substitute
								of a complete assessment done by an expert Migration Agent.
							</p>
							<h6 class="title_sec2">Privacy Statement</h6>
							<p class="sec_1a_text">
								Mygrate is collecting your personal information for the purposes of assessing and
								determining whether you could be eligible for an Australian Visa, although no final
								assessment will be provided as this is not Mygrate's purpose.
							</p>
						</div>
					</div>
				</div>	
				<div class="question w-100 col-md-10 col-xs-12">
					<button id="yes" class="float-right mt-3 mr-4 button_inactive" onclick="personalizateButton('yes', 'no'); updateProgress()">I accept</button>
					<button id="no"  class="float-right mt-3 mr-4 button_inactive button_active" onclick="personalizateButton('no', 'yes')">I don't accept</button>
					<div id="error" style="display:none">You must agree to the terms & conditions</div>
				</div>
			</div>
		</div>
		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<a href="/paf1" id="btn_1"><img src="images/img_previous.png"></a>
				<a href="/paf1b" id="btn_1"><img src="images/img_next.png"></a>
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

			if(el1 == 'no'){
				$('#error').css('display', 'block');
			}else{
				$('#error').css('display', 'none');
			}
		}
    </script>
@endpush

@section('footer')
    
@endsection

<script src="{{asset('js/form.js')}}"></script>