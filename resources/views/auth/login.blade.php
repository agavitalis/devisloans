@extends('layouts.auth')

@section('contents')

        <!-- Start Login Area -->
        <section class="login-area">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-image">
                        <img src="frontend/img/login-bg.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="login-content">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="login-form">
                                    <div class="logo">
                                        <a href="index.html"><img src="frontend/img/black-logo.png" alt="image"></a>
                                    </div>

                                    <h3>Welcome back</h3>
                                    <p>New to Luvion? <a href="/register">Sign up</a></p>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                           
                                            <input placeholder="Enter your Email Address" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>
                                    
                                            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                          
                                            <input id="password" type="password" placeholder="Enter your password"
                                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                                autocomplete="current-password">
                                    
                                            <div class="pre-icon os-icon os-icon-fingerprint"></div>
                                        </div>
                                        <div class="buttons-w">
                                            <button type="submit" class="btn btn-primary">Log me in</button>
                
                                            
                                        </div>
                                    
                                        
                                        <div class="forgot-password">
                                            <a href="#">Forgot Password?</a>
                                        </div>

                                        <div class="connect-with-social">
                                            <button type="submit" class="facebook"><i class="fab fa-facebook-square"></i> Connect with Facebook</button>
                                            <button type="submit" class="google"><i class="fab fa-google"></i> Connect with Google</button>
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