@extends('layouts.appp')



@section('contents')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>FAQ</h2>
            <p>Frequently Asked Questions</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start FAQ Area -->
<section class="faq-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="faq-content">
                    <h2>Frequently Asked Questions</h2>
                    <div class="bar"></div>
                    <p>Some of the frequently asked questions on the Devis Community which also serves as our Terms and Conditions.</p>

                    <div class="faq-image">
                        <img src="public/frontend/img/faq.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Which Devis Plan Should I Choose?
                            </a>

                            <p class="accordion-content show">The Plan to choose depends on your need and budget, Choose a plan suited for your budget.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Must I lend, to be qualified to receive a loan?
                            </a>

                            <p class="accordion-content">Yes, to be eligible for loan request you must have lent a participant a loan</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Do I need to refer people in order to participate ?
                            </a>

                            <p class="accordion-content">No, all you need to participate in the devis community is just your functional email address.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                               Can I request a loan before maturity?
                            </a>

                            <p class="accordion-content">No, to qualify for loan request before maturity, you must have referred at least 3 participants, whare are active.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                               Who are active participants in the Devis Community?
                            </a>

                            <p class="accordion-content">Active participants are participants who have subscribed to a devis plan, and have paid a borrower, who have confirmed his payments</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                How do I know subscribe to a plan?
                            </a>

                            <p class="accordion-content">From your Devis dashboard, use the initiate transaction button.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                How do I see the participants to Lend to?
                            </a>

                            <p class="accordion-content">From your Devis dashboard, click on the finalize transcation to see a list of participants awaiting your payment .</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                How will I be confirmed after Payment?
                            </a>

                            <p class="accordion-content">After payment, Upload your POP and asked the recipiant to confirm your payment .</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What happens when a recipiant fails to confirm me after payment?
                            </a>

                            <p class="accordion-content">Send the Admins and email, as regards this, with your POP attached, if the recipiant is found guilty, his account will be parmanently suspened and you confirmed.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What happens when I upload a fake POP?
                            </a>

                            <p class="accordion-content">If found quilty, your account will be parmently suspended.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What happens when I refuse to pay a matched participant?
                            </a>

                            <p class="accordion-content">If found quilty, your account will be parmently suspended and the participant rematched.</p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                What happens when I my account is parmently suspeneded?
                            </a>

                            <p class="accordion-content">All earnings, referrals and bonuses will be parmently lost.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                How long does it take to get matched on loan request?
                            </a>

                            <p class="accordion-content">All requests for loans will be honored not later than 48 hours, it could take longer depending on the volume of requests to be atteneded.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Can I loose the money I borrowed to someone on the Devis Platform
                            </a>

                            <p class="accordion-content">Funds borrowed to Devis Participants cannot be lost, in some cases it may take a longer time to get a borrower who will attend to your loan request.</p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Can everyone participate on the Devis Platform
                            </a>

                            <p class="accordion-content">Only Adults who are 18 years and above are allowed to participate on the Devis platorm. Hence Devis Platform assumes that all registered user on Devis are Adults  .</p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Does Devis Platform take responsibility of the funds I borrowed to participants
                            </a>

                            <p class="accordion-content">No, Devisloan(Devis) does NOT take responsibility for any transaction on its platform, all transactions on it's platform are at participant risk .</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="faq-contact">
            <div class="section-title">
                <h2>Do You Have Any Questions</h2>
                <div class="bar"></div>
                <p>Our team of experts is ever ready to listen to your queries. Drop us a message now.</p>
            </div>

            <div class="faq-contact-form">
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
</section>
<!-- End FAQ Area -->


@endsection