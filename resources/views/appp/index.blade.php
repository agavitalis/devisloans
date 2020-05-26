@extends('layouts.appp')

@section('contents')
<div class="main-banner-section jarallax" data-jarallax='{"speed": 0.3}'>
    <div class=d-table>
        <div class=d-table-cell>
            <div class=container>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class=banner-content>
                            <h1>Easy, and tax-free loans for entrepreneurs</h1>
                            <p>Get the financial help and insights to start, build, and grow your business.</p><a
                                href="/faq" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class=money-transfer-form>
                            <form>
                                <div class=form-group> <label>You Lend</label>
                                    <div class=money-transfer-field> <input class=form-control autocomplete=off
                                            value="1,000">
                                        <div class=amount-currency-select> <select>
                                                <option>NGN</option>

                                            </select> </div>
                                    </div>
                                </div>
                                <div class=currency-info>
                                    <div class=bar></div><span><strong>0.00</strong> Exchange Rate</span>
                                    <span><strong>0.00</strong> Transition Fees</span>
                                </div>
                                <div class=form-group> <label>You Borrow</label>
                                    <div class=money-transfer-field> <input class=form-control autocomplete=off
                                            value="2,000">
                                        <div class=amount-currency-select> <select>
                                                <option>NGN</option>

                                            </select> </div>
                                    </div>
                                </div>
                                <div class=money-transfer-info> <span>You can borrow with or without
                                        <strong>Referrals</strong></span> </div><a href="/plans"
                                    class="btn btn-primary">Get Started</a>
                                <div class=terms-info>
                                    <p>By clicking continue, I am agree with <a href="#">Terms & Policy</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class=featured-boxes-area>
    <div class=container>
        <div class=featured-boxes-inner>
            <div class="row m-0">
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class=single-featured-box>
                        <div class="icon color-fb7756"> <i class=flaticon-piggy-bank></i> </div>
                        <h3>Transparent Lending</h3>
                        <p>Automatic lending based on your efforts and contributions to the community.</p><a href="/faq"
                            class=read-more-btn>Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class=single-featured-box>
                        <div class="icon color-facd60"> <i class=flaticon-data-encryption></i> </div>
                        <h3>Fully Encrypted</h3>
                        <p>All transactions within our system and community are fully encrypted. We respect privacy </p>
                        <a href="/faq" class=read-more-btn>Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class=single-featured-box>
                        <div class="icon color-1ac0c6"> <i class=flaticon-wallet></i> </div>
                        <h3>Instant Withdrawal</h3>
                        <p>All loan requests are granted automatically once the borrower meets the community standards.
                        </p><a href="/faq" class=read-more-btn>Read More</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                    <div class=single-featured-box>
                        <div class=icon> <i class=flaticon-shield></i> </div>
                        <h3>Safe and Secure</h3>
                        <p>We take security concerns seriously. Our systems are optimum and fully secured.</p><a
                            href="/faq" class=read-more-btn>Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-it-works-area ptb-70">
    <div class=container>
        <div class=section-title>
            <h2>How Devis Works</h2>
            <div class=bar></div>
            <p>To better understand DevisLoans Community and how it works, follow the chart below for a brief
                operational overview.</p>
        </div>
        <div class=row>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class=single-how-it-works> <img src="public/frontend/img/how-it-works-image/1.png" alt=image>
                    <h3>1. Register for free</h3>
                    <p>Sign up to DevisLoans for free and use your referral link to invite your friends.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class=single-how-it-works> <img src="public/frontend/img/how-it-works-image/2.png" alt=image>
                    <h3>2. Choose an amount to Lend</h3>
                    <p>To be eligible to receive loans in Devis, Choose a plan from our avaliable plans and lead to a
                        borrower.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class=single-how-it-works> <img src="public/frontend/img/how-it-works-image/3.png" alt=image>
                    <h3>3. Credit recipient’s bank account</h3>
                    <p>Pay the borrower matched the sum displayed in your dashboard and get him to confirm your payment
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class=single-how-it-works> <img src="public/frontend/img/how-it-works-image/4.png" alt=image>
                    <h3>4. Request a loan immediately</h3>
                    <p>You can request for loans immediately your refer 3  participants, who are active or after a maturity
                        period of 7 days.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class=single-how-it-works> <img src="public/frontend/img/how-it-works-image/5.png" alt=image>
                    <h3>5. Receive an alert form a lender</h3>
                    <p>Upon loan request, you will be give a lender, who will borrow you the amount requested in a jiffy
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class=single-how-it-works> <img src="public/frontend/img/how-it-works-image/6.png" alt=image>
                    <h3>6. That’s it</h3>
                    <p>You can earn loan credits just by referring your friends, as you earn 5% of any transaction they
                        made</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-area ptb-70 pt-0">
    <div class="container-fluid p-0">
        <div class=overview-box>
            <div class=overview-content>
                <div class="content left-content"> <span class=sub-title>Fast & Easy Online Loans</span>
                    <h2>Freelancers, entrepreneurs, and sole traders</h2>
                    <div class=bar></div>
                    <p>We ensure that we help ourselves and succeed together especially this during this trying time.
                    </p>
                    <ul class=features-list>
                        <li><span><i class=flaticon-check-mark></i> Free plan available</span></li>
                        <li><span><i class=flaticon-check-mark></i> Full data privacy compliance</span></li>
                        <li><span><i class=flaticon-check-mark></i> 100% transparent costs</span></li>
                        <li><span><i class=flaticon-check-mark></i> Commitment-free</span></li>
                        <li><span><i class=flaticon-check-mark></i> Real-time spending overview</span></li>
                        <li><span><i class=flaticon-check-mark></i> Debit Mastercard included</span></li>
                    </ul> <a href="/plans" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class=overview-image>
                <div class=image> <img src="public/frontend/img/4.jpg" alt=image> </div>
            </div>
        </div>
    </div>
</section>
<section class="services-area ptb-70 bg-f7fafd">
    <div class="container-fluid p-0">
        <div class=overview-box>
            <div class=overview-image>
                <div class=image> <img src="public/frontend/img/5.png" alt=image>
                    <div class=circle-img> <img src="public/frontend/img/circle.png" alt=image> </div>
                </div>
            </div>
            <div class=overview-content>
                <div class=content> <span class=sub-title>Tax Free</span>
                    <h2>Small- to medium-sized businesses</h2>
                    <div class=bar></div>
                    <p>Our loans are tax free. Hence you earn more than what you see in the regular financial
                        institutions.</p>
                    <ul class=features-list>
                        <li><span><i class=flaticon-check-mark></i> Easy transfers</span></li>
                        <li><span><i class=flaticon-check-mark></i> Deposit checks instantly</span></li>
                        <li><span><i class=flaticon-check-mark></i> A powerful open API</span></li>
                        <li><span><i class=flaticon-check-mark></i> Coverage around the world</span></li>
                        <li><span><i class=flaticon-check-mark></i> Business without borders</span></li>
                        <li><span><i class=flaticon-check-mark></i> Affiliates and partnerships</span></li>
                    </ul> <a href="/plans" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-area ptb-70">
    <div class="container-fluid p-0">
        <div class=overview-box>
            <div class=overview-content>
                <div class="content left-content"> <span class=sub-title>Price Transparency</span>
                    <h2>Large or enterprise level businesses</h2>
                    <div class=bar></div>
                    <p>Devisloans is designed to help small and large level businesses scale qucikly by helping them
                        raise soft capitals.</p>
                    <ul class=features-list>
                        <li><span><i class=flaticon-check-mark></i> Corporate Cards</span></li>
                        <li><span><i class=flaticon-check-mark></i> International Payments</span></li>
                        <li><span><i class=flaticon-check-mark></i> Automated accounting</span></li>
                        <li><span><i class=flaticon-check-mark></i> Request Features</span></li>
                        <li><span><i class=flaticon-check-mark></i> Premium Support</span></li>
                        <li><span><i class=flaticon-check-mark></i> Direct Debit</span></li>
                    </ul> <a href="/login" class="btn btn-primary">Create Account</a>
                </div>
            </div>
            <div class=overview-image>
                <div class=image> <img src="public/frontend/img/6.jpg" alt=image> </div>
            </div>
        </div>
    </div>
</section>

<section class="comparisons-area ptb-70 bg-f6f4f8">
    <div class=container>
        <div class=section-title>
            <h2>Compare Devis Plans</h2>
            <div class=bar></div>
            <p>See our DevisLoans Lending Plans, and make the choice that suits your institutional, business or private
                needs.</p>
        </div>
        <div class="comparisons-table table-responsive">
            <table class=table>
                <thead>
                    <tr>
                        <th scope=col>Packages</th>
                        <th scope=col>Freelancer</th>
                        <th scope=col>Householder</th>
                        <th scope=col>Business</th>
                        <th scope=col>Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Control payout timing</td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                    </tr>
                    <tr>
                        <td>Transparent payouts</td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                    </tr>
                    <tr>
                        <td>Automate evidence submission</td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                    </tr>

                    <tr>
                        <td>Deposit tagging</td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                    </tr>
                    <tr>
                        <td>Technical support over IRC</td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                    </tr>
                    <tr>
                        <td>24×7 support</td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                        <td><i class=flaticon-check-mark></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<section class="features-section ptb-70 bg-f7fafd">
    <div class=container>
        <div class=section-title>
            <h2>Our Features</h2>
            <div class=bar></div>
            <p>Devis was developed on some of this core features, to provide a long lasting support for businesses and
                enterprise.</p>
        </div>
    </div>
    <div class=container-fluid>
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class=features-box-list>
                    <div class=row>
                        <div class="col-lg-12 col-sm-6 col-md-6">
                            <div class=features-box>
                                <div class=icon> <i class=flaticon-settings></i> </div>
                                <h3>Incredible infrastructure</h3>
                                <p>We are built on the best infrastures, which keeps us running effortlessly.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-md-6">
                            <div class=features-box>
                                <div class="icon bg-f78acb"> <i class=flaticon-envelope-of-white-paper></i> </div>
                                <h3>Email notifications</h3>
                                <p>Devis notifies you on the progress of your transactions. we know that communication
                                    is vita;.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-md-6">
                            <div class=features-box>
                                <div class="icon bg-cdf1d8"> <i class=flaticon-menu></i> </div>
                                <h3>Simple dashboard</h3>
                                <p>Our dashboard, your small office is greatly simplified to capture all the necessary
                                    details at a glance.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 col-md-6">
                            <div class=features-box>
                                <div class="icon bg-c679e3"> <i class=flaticon-info></i> </div>
                                <h3>Information Security</h3>
                                <p>We know the need for privacy, hence any information provided to Devis will never be
                                    disclosed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class=features-image> <img src="public/frontend/img/features-img1.png" alt=image> </div>
            </div>
        </div>
    </div>
</section>
<section class="invoicing-area ptb-70">
    <div class=container-fluid>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class=invoicing-content>
                    <h2>Easy way to get interest free loans and get a better filling at your hustle</h2>
                    <div class=bar></div>
                    <p>We know the the grind is real. The streets are brutal, and only the strongest survive, hence at
                        Devis, we can optain interest free loans just be helping each other.</p><a href="#"
                        class="btn btn-primary">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class=invoicing-image>
                    <div class=main-image> <img src="public/frontend/img/invoicing-image/1.png" class="wow zoomIn"
                            data-wow-delay=0.7s alt=image> <img src="public/frontend/img/invoicing-image/2.png"
                            class="wow fadeInLeft" data-wow-delay=1s alt=image> <img
                            src="public/frontend/img/invoicing-image/3.png" class="wow fadeInLeft" data-wow-delay=1.3s
                            alt=image> <img src="public/frontend/img/invoicing-image/4.png" class="wow fadeInRight"
                            data-wow-delay=1s alt=image> </div>
                    <div class=main-mobile-image> <img src="public/frontend/img/invoicing-image/main-pic.png"
                            class="wow zoomIn" data-wow-delay=0.7s alt=image> </div>
                    <div class=circle-image> <img src="public/frontend/img/invoicing-image/circle1.png" alt=image> <img
                            src="public/frontend/img/invoicing-image/circle2.png" alt=image> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="funfacts-area ptb-70 pt-0">
    <div class=container>
        <div class=section-title>
            <h2>We always try to understand our community expectation</h2>
            <div class=bar></div>
            <p>At Devis we preach win win for all. We believe in growing by helping others grow</p>
        </div>
        <div class=row>
            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class=funfact>
                    <h3><span class=odometer data-count=180>00</span>K</h3>
                    <p>Paticipants</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class=funfact>
                    <h3><span class=odometer data-count=20>00</span>K</h3>
                    <p>Feedback</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class=funfact>
                    <h3><span class=odometer data-count=50>00</span>+</h3>
                    <p>Staff</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-md-3 col-6">
                <div class=funfact>
                    <h3><span class=odometer data-count=700>00</span>K</h3>
                    <p>Transactions</p>
                </div>
            </div>
        </div>
        <div class=contact-cta-box>
            <h3>Have any question about us?</h3>
            <p>Don't hesitate to contact us</p><a href="/contact" class="btn btn-primary">Contact Us</a>
        </div>
        <div class=map-bg><img src="public/frontend/img/map.png" alt=map></div>
    </div>
</section>
<section class="feedback-area ptb-70 bg-f7fafd">
    <div class=container>
        <div class=section-title>
            <h2>What customers say about Us</h2>
            <div class=bar></div>
            <p>Some of the beneficiaries at Devis, here decided to share their toughts and feelings.</p>
        </div>
        <div class=feedback-slides>
            <div class=client-feedback>
                <div>
                    <div class=item>
                        <div class=single-feedback>
                            <div class=client-img><img src="public/frontend/img/client-image/1.jpg" alt=image></div>
                            <h3>Oluwatosin Ayade</h3><span>Analyst</span>
                            <p>The best and most rewarding online loans I have seen, guaranteeing absolute peace of
                                mind.</p>
                        </div>
                    </div>
                    <div class=item>
                        <div class=single-feedback>
                            <div class=client-img><img src="public/frontend/img/client-image/2.jpg" alt=image></div>
                            <h3>Ajayi Tar</h3><span>Worker</span>
                            <p>Devisloans community is the best.. I just referred 5 persons and I was completely paid
                                the same day</p>
                        </div>
                    </div>
                    <div class=item>
                        <div class=single-feedback>
                            <div class=client-img><img src="public/frontend/img/client-image/3.jpg" alt=image></div>
                            <h3>Ugwoke Emma</h3><span>Business Anaylst</span>
                            <p>When I discovered Devis Loans, I be no believe am.. but that limp of faith don change
                                alot.</p>
                        </div>
                    </div>
                    <div class=item>
                        <div class=single-feedback>
                            <div class=client-img><img src="public/frontend/img/client-image/4.jpg" alt=image></div>
                            <h3>Rik Emmanuel</h3><span>Industralist</span>
                            <p>Devis community is simply the best.</p>
                        </div>
                    </div>

                    <div class=item>
                        <div class=single-feedback>
                            <div class=client-img><img src="public/frontend/img/client-image/5.jpg" alt=image></div>
                            <h3>Steven Smith</h3><span>Enginner</span>
                            <p>I reluctantly tried out Devis, and to my greatest surprise, it has all ended in smiles.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class=client-thumbnails>
                <div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/1.jpg" alt=client></div>
                    </div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/2.jpg" alt=client></div>
                    </div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/3.jpg" alt=client></div>
                    </div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/4.jpg" alt=client></div>
                    </div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/5.jpg" alt=client></div>
                    </div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/1.jpg" alt=client></div>
                    </div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/2.jpg" alt=client></div>
                    </div>
                    <div class=item>
                        <div class=img-fill><img src="public/frontend/img/client-image/3.jpg" alt=client></div>
                    </div>
                </div><button class="prev-arrow slick-arrow"><i class="fas fa-arrow-left"></i></button><button
                    class="next-arrow slick-arrow"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>
<section class=ready-to-talk>
    <div class=container>
        <div class=ready-to-talk-content>
            <h3>Ready to talk?</h3>
            <p>Our team is here to answer your question about Devis</p><a href="#" class="btn btn-primary">Contact
                Us</a> <span><a href="#">Or, get started now with plan</a></span>
        </div>
    </div>
</section>
<div class=partner-area>
    <div class=container>
        <h3>More that 1.5 million businesses and organizations use Devis</h3>
        <div class=partner-inner>
            <div class="row align-items-center">
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-7.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover7.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-8.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover8.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-9.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover9.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-10.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover10.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-11.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover11.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-12.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover12.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-13.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover13.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-14.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover14.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-15.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover15.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-16.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover16.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-17.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover17.png" alt=partner></a></div>
                <div class="col-lg-2 col-sm-4 col-md-3 col-6"><a href="#"><img
                            src="public/frontend/img/partner-image/partner-18.png" alt=partner><img
                            src="public/frontend/img/partner-image/partner-hover18.png" alt=partner></a></div>
            </div>
        </div>
    </div>
</div>
<!-- <section class=app-download-area>
    <div class=container>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class=app-image>
                    <div class=main-image> <img src="public/frontend/img/mobile-app1.png" class="wow fadeInLeft"
                            data-wow-delay=0.6s alt=image> <img src="public/frontend/img/mobile-app2.png" class="wow fadeInUp"
                            data-wow-delay=0.9s alt=image> </div>
                    <div class=main-mobile-image> <img src="public/frontend/img/main-mobile.png" class="wow fadeInUp"
                            data-wow-delay=0.6s alt=image> </div>
                    <div class=circle-img> <img src="public/frontend/img/circle.png" alt=image> </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class=app-download-content>
                    <h2>You can find all the thing you need to payout</h2>
                    <div class=bar></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip.</p>
                    <div class=btn-box> <a href="#" class=app-store-btn> <i class=flaticon-apple></i> Download on
                            <span>App Store</span> </a> <a href="#" class=play-store-btn> <i
                                class=flaticon-play-store></i> Download on <span>Google play</span> </a> </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection