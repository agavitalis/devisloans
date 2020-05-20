@extends('layouts.auth')

@php

   if(isset($_GET['referral'])){
       $referral = $_GET['referral'];
   }else{
       $referral = null;
   }

@endphp
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

                            <h3>Open up your Luvion Account now</h3>
                            <p>Already signed up? <a href="/login">Log in</a></p>

                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                               
                                <div class="form-group">
                                     
                                    <input type="hidden" name="referral" value="{{$referral}}">
                                    
                                   
                                    <input id="email" type="email" placeholder="Email Address"
                                        class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                        autocomplete="email">
                            
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="pre-icon os-icon os-icon-email-2-at2"></div>
                                </div>
                                
                                <div class="buttons-w">
                                    <button class="btn btn-primary float-right">Continue Registration</button>
                                    <div class="clearfix"></div>
                                    <hr>
                            
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