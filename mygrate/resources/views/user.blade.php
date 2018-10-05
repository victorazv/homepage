@extends('layout.app')

@section('header')
    @include('layout.header')
@endsection

@push('header-scripts')
    <style>
        html, body {
            margin-bottom: 0;
        }
    </style>
@endpush

@section('content')

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"><p id="btn_close">&times;</p></span>
    <p class="modal_header">Congratulations {{$user->details->name}}, Welcome to Mygrate!</p>
    <p class="text_modal">Here is your personal feedback based on the information you provided:</p>


<div class="py-3 modal_card">
    <div class="ml-4 text_modal">
        <strong>Hey there, chances seem pretty low...</strong> <br>
        Are you sure you answered correctly to all the questions?<br>
        It looks like something is missing or needs to be reviewed.<br>
        If everything is correct, you might not have the requirements to obtain<br>
        the visa you are looking for.<br>
        <p>Contact one of our agents to find out what you can do.</p>
        
        <div class="d-none">
            The information you provided tell us there is a good
            chance you can obtain the Visa you are looking for. <br>
            Our Agents will review your case and get in touch soon.
        </div>
        <div class="d-none">
            You're a Unicorn!
            Your chances to get the Visa you are looking for are
            high...
            Our Agents shouldn't take long to contact you in order
            to discuss the next steps.
            Good luck!
        </div>
    </div>
</div>

<div class="text_modal mt-3 col-11 px-0 mx-0">
    Your profile has been created and you will be able to explore it as soon as you
    close this message. You will also find this feedback in your personal Messages
    in Mygrate Dashboard.
</div>

  </div>

</div>


    <main class="mb-3">
        <section class="user-welcome">
            <div class="container-fluid m-0 p-0">
                <div class="d-flex justify-content-around">
                    <div class="d-flex flex-column p-2">
                        <div>
                            @if($profilePicUrl)
                                <img src="{{asset($profilePicUrl)}}" alt="" class="img-thumbnail img-responsive" style="max-width: 80px; max-height: 80px;">
                            @else
                                <img src="{{asset('images/no_pic.jpg')}}" alt="" class="img-thumbnail img-responsive" style="max-width: 80px; max-height: 80px;">
                            @endif
                        </div>
                        <div class="">
                            <h5>Hello, {{$user->details->name . ' ' . $user->details->surname}}</h5>
                        </div>
                    </div>
                    <div class="p-2 align-self-end">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active border-styled" href="{{route('user', $user->id)}}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('profile.view', $user->id)}}">View your Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('profile.edit', $user->id)}}">Edit Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="user-quotations mt-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4>Quotations Received</h4>
                        <hr>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-lg-row flex-column">
                    <div class="card quotation-card mr-md-2 mb-sm-0 mb-3 mx-auto">
                        <img class="card-img-top p-2" src="{{asset('images/user_01.jpeg')}}" alt="Card image cap">
                        <div class="card-body p-0 pl-2 d-flex flex-column">
                            <div>
                                <div>rating</div>
                                <div><span class="agent-name">Zenia Khaira</span></div>
                                <div><span class="agent-subtitle">Registered Migration Agent (RMA)</span></div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img src="https://via.placeholder.com/50x50" class="p-1">
                                </div>
                                <div class="col-6">
                                    <img src="https://via.placeholder.com/50x50" class="p-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card quotation-card mr-md-2 mb-sm-0 mb-3 mx-auto">
                        <img class="card-img-top p-2" src="{{asset('images/user_02.jpeg')}}" alt="Card image cap">
                        <div class="card-body p-0 pl-2 d-flex flex-column">
                            <div>
                                <div>rating</div>
                                <div><span class="agent-name">Zenia Khaira</span></div>
                                <div><span class="agent-subtitle">Registered Migration Agent (RMA)</span></div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img src="https://via.placeholder.com/50x50" class="p-1">
                                </div>
                                <div class="col-6">
                                    <img src="https://via.placeholder.com/50x50" class="p-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card quotation-card mr-md-2 mb-sm-0 mb-3 mx-auto">
                        <img class="card-img-top p-2" src="{{asset('images/user_03.jpeg')}}" alt="Card image cap">
                        <div class="card-body p-0 pl-2 d-flex flex-column">
                            <div>
                                <div>rating</div>
                                <div><span class="agent-name">Zenia Khaira</span></div>
                                <div><span class="agent-subtitle">Registered Migration Agent (RMA)</span></div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <img src="https://via.placeholder.com/50x50" class="p-1">
                                </div>
                                <div class="col-6">
                                    <img src="https://via.placeholder.com/50x50" class="p-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card quotation-card waiting mr-md-2 mb-sm-0 mb-3 mx-auto">
                        <img class="p-0" src="{{asset('images/waiting_quotation_2x.jpg')}}" alt="Card image cap" style="width: 100%">
                    </div>
                    <div class="card quotation-card waiting mr-md-2 mb-sm-0 mb-3 mx-auto">
                        <img class="p-0" src="{{asset('images/waiting_quotation_2x.jpg')}}" alt="Card image cap" style="width: 100%" >
                    </div>
                </div>
            </div>
        </section>
        <section class="user-messages mt-5 mb-5">
            <div class="container">
                <h4 class="mb-0 p-0">Messages</h4>
                <hr class="divider m-1">
                <button class="custom-btn btn-block mt-3 p-2 d-sm-none">
                    <span class="custom-btn-text">Open Messages</span>
                </button>
                <div class="row mt-3 d-none d-sm-flex">
                    <div class="col-4">
                        <div class="card card-message my-1 active">
                            <div class="row">
                                <div class="col-3">
                                    <img src="https://via.placeholder.com/70x70" alt="" class="img-responsive p-2">
                                </div>
                                <div class="col-8 d-flex flex-column align-items-start justify-content-center ml-1">
                                    <div>
                                        <span class="agent-name m-0 p-0">
                                            Zenia Khaira
                                        </span>
                                    </div>
                                    <div>
                                        <span class="agent-subtitle m-0 p-0">
                                            Registered Migration Agent (RMA)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-message my-1">
                            <div class="row">
                                <div class="col-3">
                                    <img src="https://via.placeholder.com/70x70" alt="" class="img-responsive p-2">
                                </div>
                                <div class="col-8 d-flex flex-column align-items-start justify-content-center ml-1">
                                    <div>
                                        <span class="agent-name m-0 p-0">
                                            Wendy Maitland
                                        </span>
                                    </div>
                                    <div>
                                        <span class="agent-subtitle m-0 p-0">
                                            Immigration Lawyer and Migration Agent
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-message my-1">
                            <div class="row">
                                <div class="col-3">
                                    <img src="https://via.placeholder.com/70x70" alt="" class="img-responsive p-2">
                                </div>
                                <div class="col-8 d-flex flex-column align-items-start justify-content-center ml-1">
                                    <div>
                                        <span class="agent-name m-0 p-0">
                                            Mygrate
                                        </span>
                                    </div>
                                    <div>
                                        <span class="agent-subtitle m-0 p-0">
                                            Personal Assistant
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8" style="background: #f0f0f0; width: 100%; height: 500px">

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('footer-scripts')
   
<script>
    var modal = document.getElementById('myModal');
    var btn_close = document.getElementById("btn_close");
    btn_close.onclick = function() {
        modal.style.display = "none";
    }

    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");
    // Get the <span> element that closes the modal
    //var span = document.getElementsByClassName("close")[0];
    // When the user clicks the button, open the modal 
    /*
    btn.onclick = function() {
        modal.style.display = "block";
    }
    */
    // When the user clicks on <span> (x), close the modal    

    // When the user clicks anywhere outside of the modal, close it
    /*
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    */
</script>



@endpush

@section('footer')
    @include('layout.footer')
@endsection