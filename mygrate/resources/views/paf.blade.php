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
						<a href="/paf1" id="btn_start"><button class="custom-btn animated bounceInRight">I’m ready</button></a>
					</div>
				</div>
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