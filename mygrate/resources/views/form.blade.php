@extends('layout.app')

@section('header')
    @include('layout.header')
    <link rel="stylesheet" href="{{asset('css/form_style.css')}}">
@endsection

@section('content')
    <main class="mb-3">
	<section class="banner_form pl-5">
		<div class="layer"></div>
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="row banner_title">
					<div class="col-md-6 offset-md-3 mt-5">
						<h1>Mygrate <br>Pre-Assessment Form</h1>
					</div>
					<div class="col-md-8 offset-md-3 mt-5">
						<h5>
							This pre-assessment is designed to help our
						Agents assess your situation.
						</h5>
						<h5>
							It will also give you information about how
						Australian Immigration works.
						</h5>
						<h5>
							After you submit it, our agents will contact
							you with possible solutions.
						</h5>
					</div>
					<div class="col-md-12 offset-md-3 mt-3">
						<h5>Please take the time to complete this form. It will take about 30 minutes to complete.
							Despite this seems like a long time for a form, you will find really useful information.
							it is nothing compared to hours of research you would have to do on your own.</h5>
					</div>
					<div class="col-md-12 offset-md-3 mt-5 mb-5">
						<a href="#sec_1" id="btn_start"><button class="custom-btn">I’m ready</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section  id="sec_1" class="how-it-works py-3">
		<div class="container">
			<div class="row d-sm-flex justify-content-center">
				<div class="col-md-4 px-0 pr-md-3 flex-wrap sec_1">
					<div class="sec_3 col-md-12 ">
						<div class="mt-4 ml-2">
							<img src="images/img_form_01.png" class="d-none d-md-block" alt="paper">
						</div>
						<p class="col-12 col-md-8 ml-md-3 pl-0 pl-md-3">
							<img src="images/img1_small.png" class=" d-sm-none">
							<span class="card_title d-none d-md-block">Things you need to know</span>
							<span class="card_title2 d-sm-none">Things you need to know</span>
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-md-5 pr-md-0 mt-4 d-flex flex-wrap">
					<div class="w-100 my-5 col-xs-1 flex-xs-nowrap d-none d-md-block">
						<img src="images/icon_i.png">
					</div>
					<h5 class="text_sec_1 mb-4 offset-xs-2 col-xs-10">
						This section will go through the usual legal stuff.
					</h5>
					<h5 class="text_sec_1 mb-4"> 
						Some of the Australian Visas require a
						mandatory, satisfactory skills assessment from
						the relevant assessing authority for your
						occupation.
					</h5>
					<h5 class="text_sec_1 mb-4">
						Not every Visa is points-based and not every
						Visa requires a skills assessment.
						However, this form will consider all the options in
						order to cover each possibility.
					</h5>
				</div>
			</div>
		</div>

		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<a href="#sec_1a"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>

		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<img src="images/img_previous_blocked.png">
				<a href="#sec_1a" id="btn_1"><img src="images/img_next.png"></a>
			</div>
		</div>
	</section>

	<section id="sec_1a" class="how-it-works py-3">
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

		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<button class="float-right mt-3 mr-4" onclick="updateProgress()">I accept</button>
			<button class="float-right mt-3 mr-4">I don't accept</button>
		</div>
		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<img src="images/img_previous.png">
				<a href="#sec_1b" id="btn_1"><img src="images/img_next.png"></a>
			</div>
		</div>
	</section>

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
			<button class="float-right mt-3 mr-4">Thank you</button>
		</div>
		<div class="percent_bar col-12 pl-0 d-flex">
				<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
					<span class="el_percentage">0%</span> Completed
					<div class="progress progress2">
						<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="col-md-2 mt-2 pl-0">
					<img src="images/img_previous.png">
					<a href="#sec_2" id="btn_1"><img src="images/img_next.png"></a>
				</div>
		</div>
	</section>

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
			<a href="#sec_2a"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>
		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<img src="images/img_previous.png">
				<a href="#sec_2a" id="btn_1"><img src="images/img_next.png"></a>
			</div>
		</div>
	</section>

	<section id="sec_2a" class="how-it-works py-3">		
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
								<span class="d-block d-sm-none small_letter">a.</span> <span class="col-md-8 mr-5 pt-3">Interesting question.</span>
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
		<div class="question w-100 offset-md-2 col-md-8 col-xs-12">
			<button class="float-right mt-3 mr-4">No</button>
			<button class="float-right mt-3 mr-4">Yes</button>
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
					<img src="images/img_previous.png">
					<a href="#sec_3" id="btn_1"><img src="images/img_next.png"></a>
				</div>
			</div>
	</section>

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
							<span class="card_title d-none d-md-block">Something about you</span>
							<span class="card_title2 d-sm-none">Something about you</span>
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
			<a href="#"><button class="float-right mt-3 mr-4">Continue</button></a>
		</div>
		
		
		<div class="percent_bar col-12 pl-0 d-flex">
			<div class="offset-1 offset-md-2 col-6 col-md-7 mt-3 pl-0">
				<span class="el_percentage">0%</span> Completed
				<div class="progress progress2">
					<div class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
			<div class="col-md-2 mt-2 pl-0">
				<img src="images/img_previous.png">
				<a href="#" id="btn_1"><img src="images/img_next.png"></a>
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
    @include('layout.footer')
@endsection

<script src="{{asset('js/form.js')}}"></script>