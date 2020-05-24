@extends('layouts.appp')



@section('contents')

<!-- Start Page Title Area -->
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>Contact</h2>
            <p>If you have an idea, we would love to hear about it.</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h2>Drop us message for any query</h2>
            <div class="bar"></div>
            <p>Our team of experts is ever ready to listen to your queries. Drop us a message now.</p>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Address</span>
                            CA 560 Bush St & 20th Ave, Apt 5 San Francisco, 230909, Canada
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>
                            <a href="#">devisloans@email.com</a>
                            <a href="#">support@devisloans.com</a>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <span>Phone</span>
                            <a href="#">+44 587 154756</a>
                            <a href="#">+55 5555 14574</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <form id="contactForm" action="/other_requests" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="First Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder=" Last Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                           

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                        required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="public/frontend/img/bg-map.png" alt="image"></div>
</section>
<!-- End Contact Area -->

<!-- Start Account Create Area -->
<section class="account-create-area">
    <div class="container">
        <div class="account-create-content">
            <h2>Apply for an account in minutes</h2>
            <p>Get your Luvion account today!</p>
            <a href="#" class="btn btn-primary">Get Your Luvion Account</a>
        </div>
    </div>
</section>
<!-- End Account Create Area -->

@endsection