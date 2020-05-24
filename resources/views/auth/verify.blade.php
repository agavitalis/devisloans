@extends('layouts.auth')

@section('contents')

<!-- Start Verify Area -->
<section class="signup-area">
    <div class="row m-0">
        <div class="col-lg-6 col-md-12 p-0">
            <div class="signup-image">
                <img src="public/frontend/img/signup-bg.jpg" alt="image">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 p-0">
            <div class="signup-content">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="signup-form">
                            <div class="logo">
                                <a href="index.html"><img src="../public/frontend/img/black-logo.png" alt="image"></a>
                            </div>

                            <h3> Verify Your Email Address</h3>
                            <p>Already signed up? <a href="/login">Log in</a></p>

                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('A fresh verification link has been sent to your email address.') }}
                                            </div>
                                            @endif

                                            {{ __('Before proceeding, please check your email for a verification link. This may take some time.') }}

                                        </div>

                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-body">

                                            {{ __('If you did not receive the email after 5 minutes,') }}, <a
                                                href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                                        </div>

                                    </div>

                                </div>

                                <div class="buttons-w">
                                    <div class="row">

                                        <div class="col col-md-12">
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                Already have an account? Login!
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
<!-- End Verify Area -->

@endsection