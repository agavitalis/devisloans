@extends('layouts.auth')

@section('contents')


<!-- Start Signup Area -->
<section class="signup-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="signup-image">
                <img src="frontend/img/signup-bg.jpg" alt="image">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 p-0">
            <div class="signup-content">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="signup-form">
                            <div class="logo">
                                <a href="index.html"><img src="frontend/img/black-logo.png" alt="image"></a>
                            </div>

                            <h3>Complete Your Registration</h3>


                            <form action="{{ route('complete_registration') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            

                                            <input id="first_name" type="text" placeholder="First Name"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                name="first_name" required autocomplete="new-first_name">

                                            @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <div class="pre-icon os-icon os-icon-user"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           

                                            <input id="last_name" type="text" placeholder="Last Name"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" required autocomplete="new-last_name">

                                            @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                           
                                            <input id="email" type="email" placeholder="Email Address"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{Auth::user()->email}}" required readonly>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                           

                                            <input id="password" type="password" placeholder="Password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <div class="pre-icon os-icon os-icon-fingerprint"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">

                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-w">
                                    <button class="btn btn-primary">Complete Registration</button>

                                    <div class="row">

                                        <div class="col col-md-12">
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                Already have an account? Login here!
                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->

@endsection