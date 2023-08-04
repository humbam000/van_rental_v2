@section('links')
    <style>
        .profile-container {
            width: 200px;
            height: 200px
        }

        .profile {
            width: 100%;
            /* Make the image width 100% of its container */
            height: 100%;
            /* Make the image height 100% of its container */
            object-fit: cover;
            /* Maintain aspect ratio and fill the container, cropping if needed */
        }

        /* Media query for mobile */
        @media (max-width: 767px) {
            .profile-container {
                width: 150px;
                height: 150px
            }
            
            .profile-details{
                /* font-size: 10px; */
                /* background: red; */
                display: flex;
                flex-direction: row;
            }
            .profile-contents{
                width: 220px;
                font-size: 10px
            }
            .profile-contents .col-sm-12 h5{
                font-size: 15px;
                width: 100%;
            }

        }

        /* Media query for desktop */
        @media (min-width: 768px) {

            /* Styles specific to devices with a viewport width of 768px and above (desktop) */
            body {
                font-size: 20px;
            }
        }
    </style>
@endsection
@section('details-modal')
    <div class="modal fade modal-xl" data-id="0" id="details" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h1 class="modal-title fs-5 d-flex justify-content-center" id="exampleModalLabel">
                        <i class='bx bxs-user h1'></i>
                    </h1>
                    <b><span class="h3 ml-2">DRIVER'S INFORMATION</span></b>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <form method="POST" action="{{ route('login') }}"> --}}
                <div class="modal-body row modalBody">
                    <!-- Add your login form here -->

                    <div class="col-sm-5 p-2 border-0">
                        {{-- <div id="calendar" style=""></div> --}}
                        <div class="wrapper mb-2">
                            <header>
                                <p class="current-date"></p>
                                <div class="icons">
                                    <span id="prev" class="material-symbols-rounded">chevron_left</span>
                                    <span id="next" class="material-symbols-rounded">chevron_right</span>
                                </div>
                            </header>
                            <div class="calendar border">
                                <ul class="weeks">
                                    <li>Sun</li>
                                    <li>Mon</li>
                                    <li>Tue</li>
                                    <li>Wed</li>
                                    <li>Thu</li>
                                    <li>Fri</li>
                                    <li>Sat</li>
                                </ul>
                                <ul class="days"></ul>
                            </div>
                        </div>
                    </div>
                    {{-- @csrf --}}
                    <div class="col-sm-7 p-3 profile-details">
                        <div class="row  mx-auto">
                            <div class="col-sm-6 profile-container"
                                style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                <img src="{{ asset('img/default-van-img.webp') }}" alt="Profile Image"
                                    class="img-fluid profile">
                            </div>
                            <div class="col-sm-6 profile-contents">
                                
                            </div>
                            <div class="col-sm-12 mt-4 ">
                                <a href="{{ route('client-dash-chatroom') }}" class="btn btn-info mb-2">CHAT WITH DRIVER</a>
                                <a href="{{ route('client-dash-about') }}" class="btn btn-info mb-2">ABOUT DRIVER</a>
                                <a href="{{ route('client-dash-location') }}" class="btn btn-info mb-2">LOCATE DRIVER</a>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <div class="row">
                                    <div class="col-sm-6 card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <img src="{{ asset('img/default-van-img.webp') }}" alt="Profile Image"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-sm-6 mt-2">
                                        <h6 style="color: rgb(2, 47, 61);"><b>DETAILS</b></h6>
                                        <div class="text-center"
                                            style="display: flex; align-items:start;justify-content:start;color: rgb(2, 47, 61);">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h4' style="font-size: 2em;"></i>
                                            </div>
                                            <div class="pt-2">
                                                <div class="h6 mt-2"> <b>Bags | 8 Bags</b></div>
                                            </div>
                                        </div>
                                        <div class="text-center"
                                            style="display: flex; align-items:start;justify-content:start;color: rgb(2, 47, 61);">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h4' style="font-size: 2em;"></i>
                                            </div>
                                            <div class="pt-2">
                                                <div class="h6 mt-2"> <b>People | 11 Setas People</b></div>
                                            </div>
                                        </div>
                                        <div class="text-center"
                                            style="display: flex; align-items:start;justify-content:start;color: rgb(2, 47, 61);">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-gas-pump h4' style="font-size: 2em;"></i>
                                            </div>
                                            <div class="pt-2">
                                                <div class="h6 mt-2"> <b>Bags | 8 Bags</b></div>
                                            </div>
                                        </div>
                                        <div class="text-center"
                                            style="display: flex; align-items:start;justify-content:start;color: rgb(2, 47, 61);">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-thermometer h4' style="font-size: 2em;"></i>
                                            </div>
                                            <div class="pt-2">
                                                <div class="h6 mt-2"> <b>Air Conditioning | Dual Zone</b></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 mt-4">
                        <h4 class="text-center"><b>CUSTOMER'S FEEDBACK</b></h4>
                        <div class="row mx-auto">
                            <div class="col-sm-4">
                                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>User</b></h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>User</b></h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><b>User</b></h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                            content.</p>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                {{-- <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-info form-control text-white">Login</button>
                        <p class="text-secondary form-control border-0">Don't have an account? <span class="text-info"><a href="#" data-bs-toggle="modal" data-bs-target="#signup-modal">Register here</a></span></p>
                    </div> --}}
                {{-- </form> --}}
            </div>
        </div>
    </div>

    <!-- JavaScript code to trigger the modal -->
@endsection


