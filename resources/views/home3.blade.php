<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bitcon - Bitcoin Cryptocurrency</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
@include("inc.header2")
<section class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-content">
                    <h1 class="hero__title">secure and easy way to trade bitcoin.</h1>
                    <p class="hero__desc">Decentralized digital currency that enables instant payments <br>
                                               anyone in the global control the creation of additional.</p>
                    <div class="hero-btn">
                        <a href="index.html#" class="theme-btn">get started now</a>
                        <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=GmOzih6I1zs" title="Play Video">
                            Watch a Video <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="hero-img-box">
                    <img src="images/v2.png" alt="vector image" class="hero__img">
                </div><!-- end hero-img-box -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="wave-svg-box" viewBox="0 0 120 28">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0
           0 1 0 0 0
           0 0 1 0 0
           0 0 0 13 -9" result="goo" />
                <xfeBlend in="SourceGraphic" in2="goo" />
            </filter>
            <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
        </defs>

        <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2" ></use>
        <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0" ></use>
        <g class="gooeff" filter="url(#goo)">
            <circle class="drop drop1" cx="20" cy="2" r="8.8"  />
            <circle class="drop drop2" cx="25" cy="2.5" r="7.5"  />
            <circle class="drop drop3" cx="16" cy="2.8" r="9.2"  />
            <circle class="drop drop4" cx="18" cy="2" r="8.8"  />
            <circle class="drop drop5" cx="22" cy="2.5" r="7.5"  />
            <circle class="drop drop6" cx="26" cy="2.8" r="9.2"  />
            <circle class="drop drop1" cx="5" cy="4.4" r="8.8"  />
            <circle class="drop drop2" cx="5" cy="4.1" r="7.5"  />
            <circle class="drop drop3" cx="8" cy="3.8" r="9.2"  />
            <circle class="drop drop4" cx="3" cy="4.4" r="8.8"  />
            <circle class="drop drop5" cx="7" cy="4.1" r="7.5"  />
            <circle class="drop drop6" cx="10" cy="4.3" r="9.2"  />

            <circle class="drop drop1" cx="1.2" cy="5.4" r="8.8"  />
            <circle class="drop drop2" cx="5.2" cy="5.1" r="7.5"  />
            <circle class="drop drop3" cx="10.2" cy="5.3" r="9.2"  />
            <circle class="drop drop4" cx="3.2" cy="5.4" r="8.8"  />
            <circle class="drop drop5" cx="14.2" cy="5.1" r="7.5"  />
            <circle class="drop drop6" cx="17.2" cy="4.8" r="9.2"  />
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
        </g>
    </svg>
</section><!-- end hero-area -->
<!-- ================================
    END HERO AREA
================================= -->

<!-- ================================
       START FEATURE AREA
================================= -->
<section class="feature-area">
    <div class="container">
        <div class="row feature-box">
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">01</span>
                   <div class="feature__icon">
                       <i class="flaticon-027-bitcoin-8"></i>
                   </div>
                    <h3 class="feature__title">Create Account</h3>
                    <p class="feature__desc">Use the register form to create your trading account
                        .</p>
                    <a href="/register" class="theme-btn feature__btn">Start</a>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">02</span>
                    <div class="feature__icon">
                        <i class="flaticon-001-bitcoin-20"></i>
                    </div>
                    <h3 class="feature__title">Login to your account</h3>
                    <p class="feature__desc">
                       After registering, use your registered credentials to login to your account
                    </p>
                    <a href="/login" class="theme-btn feature__btn">Enter</a>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">03</span>
                    <div class="feature__icon">
                        <i class="flaticon-028-bitcoin-7"></i>
                    </div>
                    <h3 class="feature__title">Fund your wallet</h3>
                    <p class="feature__desc">
                       Follow intructions inside site to fund your wallet
                    </p>
                    <a href="/dashboard" class="theme-btn feature__btn">Fund</a>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3">
                <div class="feature-item">
                    <span class="feature__number">04</span>
                    <div class="feature__icon">
                        <i class="flaticon-012-bitcoin-15"></i>
                    </div>
                    <h3 class="feature__title">Buy/Sell with wallet</h3>
                    <p class="feature__desc">
                        Our system automatically does the trading for you and u can withdraw anytime
                    </p>
                    <a href="/dashboard" class="theme-btn feature__btn">Buy/sell</a>
                </div><!-- end feature-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end feature-area -->
<!-- ================================
       START FEATURE AREA
================================= -->



<section class="package-area howitworks-area package-area2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="package-tab-content">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li role="presentation">
                            <a href="pricing.html#tab4" role="tab" data-toggle="tab" class="active"
                               aria-selected="true">Investment Packages</a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab4">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            Plan 1
                                        </h4>
                                        <div class="price__box">
                                            120%

                                            After 24 Hours btc <br /><br />
                                            Min:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">15</span><br /><br />
                                            Max:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">7,500</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">Start now</a>
                                    </div><!-- end package-content -->
                                </div><!-- end col-lg-3 -->




                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            Plan 2
                                        </h4>
                                        <div class="price__box">
                                            130%

                                            After 48 Hours btc <br /><br />
                                            Min:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">500</span><br /><br />
                                            Max:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">10,000</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">Start now</a>
                                    </div><!-- end package-content -->
                                </div>






                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            Plan 3
                                        </h4>
                                        <div class="price__box">
                                            150%

                                            After 72 Hours btc <br /><br />
                                            Min:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">750</span><br /><br />
                                            Max:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">25,000</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">Start now</a>
                                    </div><!-- end package-content -->
                                </div>







                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            Plan 4
                                        </h4>
                                        <div class="price__box">
                                            180%

                                            After 72 Hours btc <br /><br />
                                            Min:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">1,000</span><br /><br />
                                            Max:<br />  <span class="currency"><i class="fa fa-dollar-sign"></i></span><span class="price__price">50,500</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">Start now</a>
                                    </div><!-- end package-content -->
                                </div>


                            </div>
                        </div><!-- end tab-pane -->

                        <div role="tabpanel" class="tab-pane fade" id="tab5">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            get 100 usd <span>for</span>
                                        </h4>
                                        <div class="price__box">
                                            <span class="currency"><i class="fab fa-bitcoin"></i></span>
                                            <span class="price__price">0.2</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">sell now </a>
                                    </div><!-- end package-content -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            get 1000 usd <span>for</span>
                                        </h4>
                                        <div class="price__box">
                                            <span class="currency"><i class="fab fa-bitcoin"></i></span>
                                            <span class="price__price">0.5</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">sell now </a>
                                    </div><!-- end package-content -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            get 3000 usd <span>for</span>
                                        </h4>
                                        <div class="price__box">
                                            <span class="currency"><i class="fab fa-bitcoin"></i></span>
                                            <span class="price__price">1</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">sell now </a>
                                    </div><!-- end package-content -->
                                </div><!-- end col-lg-3 -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="package-content">
                                        <h4 class="package__title">
                                            get 9000 usd <span>for</span>
                                        </h4>
                                        <div class="price__box">
                                            <span class="currency"><i class="fab fa-bitcoin"></i></span>
                                            <span class="price__price">2</span>
                                        </div>
                                        <a href="pricing.html#" class="order__btn">sell now </a>
                                    </div><!-- end package-content -->
                                </div><!-- end col-lg-3 -->
                            </div>
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end package-tab-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="divider">
                    <span class="divider__circle"></span>
                </div><!-- end divider -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<!-- ================================
       START ABOUT AREA
================================= -->
<section class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-item">
                    <div class="sec-heading">
                        <div class="heading-circle"></div>
                        <p class="sec__meta">learn about us</p>
                        <h2 class="sec__title">Awards Winning Digital Cryptocurrency Platform.</h2>
                        <p class="sec__desc sec__desc2">
                             YESBIT, the smart high-frequency and algorithmic trading platform.
                            Licensed company #118714586
                        </p>

                        <p class="sec__desc">

                            Broadly defined, high-frequency trading refers to automated, electronic systems that use complex algorithms (strings of coded instructions for computers) to buy and sell much faster and at much greater scale than any human could do. Our system is designed to make just a tiny profit on each transaction, but through sheer speed and volume, we generate large returns. Hence, we don’t risk a lot but we do profit a lot.
                        </p><p class="sec__desc">

                        Isn’t that exactly what everyone dreams of? With us you can earn up to 15% per day. Fast profits with fast withdrawals. Everything is automated to supply the best possible experience for our investors. If you want to know more about how and why we do this, click on the button below to find out.
                        </p>
                    </div><!-- end sec-heading -->
                    <a href="about.html" class="theme-btn readmore__btn">read more</a>
                </div><!-- end about-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-5 ml-auto">
                <div class="about-img-box">
                    <img src="images/about-img.jpg" alt="about-us" class="about-img">
                    <img src="images/about-img2.jpg" alt="about-us" class="about-img">
                    <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=GmOzih6I1zs" title="Play Video">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <span class="heboo-text">BITCON</span>
                </div><!-- end about-img-box -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="divider">
                    <span class="divider__circle"></span>
                </div><!-- end divider -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="about-sub-box">
                    <p>
                        Do not hesitate to start with us for better help and services.
                        <a href="index.html#" class="theme-btn">get started</a>
                    </p>
                </div><!-- end about-sub-box -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!-- ================================
       START ABOUT AREA
================================= -->

<!-- ================================
       START HOWITWORKS AREA
================================= -->
<section class="howitworks-area text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               <div class="sec-heading">
                   <div class="heading-circle m-x-auto"></div>
                   <p class="sec__meta">check our process</p>
                   <h2 class="sec__title"> Why People Choose Us.</h2>
               </div><!-- end sec-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row hiw-content">
            <div class="col-lg-4">
                <div class="hiw-item">
                   <div class="flaticon__icon">
                       <span class="flaticon-014-bitcoin-13"></span>
                   </div>
                    <h3 class="hiw__title"><a href="service.html">safe and secure</a></h3>
                    <p class="hiw__desc">

                    </p>
                </div><!-- end hiw-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-031-bitcoin-4"></span>
                    </div>
                    <h3 class="hiw__title"><a href="service.html">world coverage</a></h3>
                    <p class="hiw__desc">

                    </p>
                </div><!-- end hiw-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-001-bitcoin-20"></span>
                    </div>
                    <h3 class="hiw__title"><a href="service.html">24/7 support</a></h3>
                    <p class="hiw__desc">

                    </p>
                </div><!-- end hiw-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-002-bitcoin-19"></span>
                    </div>
                    <h3 class="hiw__title"><a href="service.html">Transparency </a></h3>
                    <p class="hiw__desc">

                    </p>
                </div><!-- end hiw-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-004-saving"></span>
                    </div>
                    <h3 class="hiw__title"><a href="service.html">Fast Payout</a></h3>
                    <p class="hiw__desc">

                    </p>
                </div><!-- end hiw-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4">
                <div class="hiw-item">
                    <div class="flaticon__icon">
                        <span class="flaticon-029-bitcoin-6"></span>
                    </div>
                    <h3 class="hiw__title"><a href="service.html">high liquidity</a></h3>
                    <p class="hiw__desc">

                    </p>
                </div><!-- end hiw-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->

    </div><!-- end container -->
</section><!-- end howitworks-area -->

<section class="cta-area">
    <div class="circle-icons">
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="circle-three"></div>
    </div><!-- end box-icons -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sec-heading">
                    <div class="heading-circle"></div>
                    <h2 class="sec__title">Are You Ready to Join Us.</h2>

                </div><!-- end sec-heading -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="cta-btn-box">
                    <div class="circle-icons2">
                        <div class="circle-one"></div>
                        <div class="circle-two"></div>
                        <div class="circle-three"></div>
                    </div>
                    <a href="index.html#" class="theme-btn">get started</a>
                </div><!-- end cta-btn-box -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
       START CTA AREA
================================= -->

<!-- ================================
       START PACKAGE AREA
================================= -->
<!-- end package-area -->
<!-- ================================
       START PACKAGE AREA
================================= -->

<!-- ================================
       START MARKETPRICE AREA
================================= -->
<section class="marketprice-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="sec-heading text-center">
                    <div class="heading-circle m-x-auto"></div>
                    <p class="sec__meta">check out market depth</p>
                    <h2 class="sec__title">Deposit/Withdrwals.</h2>
                </div><!-- end sec-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="coinprice-table table-responsive">
                    <table class="table latest-w-d wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0">
                        <thead>
                        <tr>
                            <th>USERNAME</th>
                            <th>DEPOSIT AMOUNT</th>
                            <th>WALLET</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Freddy</td>
                            <td style="text-align: left" class="menutxt">$28.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Martinez</td>
                            <td style="text-align: left" class="menutxt">$50.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Esrom6</td>
                            <td style="text-align: left" class="menutxt">$25.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Jeyo89</td>
                            <td style="text-align: left" class="menutxt">$80.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Kanil</td>
                            <td style="text-align: left" class="menutxt">$30.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Masgom</td>
                            <td style="text-align: left" class="menutxt">$15.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Cass</td>
                            <td style="text-align: left" class="menutxt">$50.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Suca24</td>
                            <td style="text-align: left" class="menutxt">$20.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Zoe</td>
                            <td style="text-align: left" class="menutxt">$15.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>



                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Doperide</td>
                            <td style="text-align: left" class="menutxt">$50.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>

                    </table>
                </div><!-- end table -->
            </div><!-- end col-lg-12 -->


            <div class="col-lg-6">
                <div class="coinprice-table table-responsive">
                    <table class="table latest-w-d wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" cellspacing="0">
                        <thead>
                        <tr>
                            <th>USERNAME</th>
                            <th>WITHDRAWAL AMOUNT</th>
                            <th>WALLET</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Zoe</td>
                            <td style="text-align: left" class="menutxt">$18.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">maria</td>
                            <td style="text-align: left" class="menutxt">$18.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Osisiego1</td>
                            <td style="text-align: left" class="menutxt">$180.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Excellency1</td>
                            <td style="text-align: left" class="menutxt">$72.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">satia</td>
                            <td style="text-align: left" class="menutxt">$384.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Luca</td>
                            <td style="text-align: left" class="menutxt">$57.50</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">ROSINO</td>
                            <td style="text-align: left" class="menutxt">$18.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Umer</td>
                            <td style="text-align: left" class="menutxt">$28.75</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Hanssam</td>
                            <td style="text-align: left" class="menutxt">$24.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                        <tbody>
                        <tr>
                            <td style="text-align: left" class="menutxt">Farid</td>
                            <td style="text-align: left" class="menutxt">$48.00</td>
                            <td style="text-align: left" class="menutxt"><img src="images/48.gif"></td>


                        </tr></tbody>


                    </table>
                </div><!-- end table -->
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end marketprice-area -->
<!-- ================================
       START MARKETPRICE AREA
================================= -->

<!-- ================================
       START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area text-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="sec-heading">
                    <div class="heading-circle m-x-auto"></div>
                    <p class="sec__meta">feedback our investors</p>
                    <h2 class="sec__title">What They Said.</h2>
                </div><!-- end sec-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="client-testimonial">
                    <div class="testimonial-item">
                        <div class="testi__img">
                            <span class="testi__img-cercle"></span>

                        </div>
                        <p class="testi__desc">
                            I was skeptical at first but i was convinced by a friend of mine to try it and it worked
                            just as they said, I deposited and made profits faster than I anticiapted, althought I
                            did a quick withdrawal but I am willing to try again.
                        </p>
                        <h4 class="tesi__title">Grace white</h4>
                        <span class="testi__meta">United States</span>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi__img">
                            <span class="testi__img-cercle"></span>

                        </div>
                        <p class="testi__desc">
                            Fastest Payout ever !!! keep the good work going !!!
                        </p>
                        <h4 class="tesi__title">Denwen Johston</h4>
                        <span class="testi__meta">Australia</span>
                    </div><!-- end testimonial-item -->
                    <div class="testimonial-item">
                        <div class="testi__img">
                            <span class="testi__img-cercle"></span>

                        </div>
                        <p class="testi__desc">
                            This is so far the best trading platform ever, they keep to their words, Recommended 100%
                        </p>
                        <h4 class="tesi__title">Amanda Bucharist</h4>
                        <span class="testi__meta">United Kingdom</span>
                    </div><!-- end testimonial-item -->
                </div><!-- end client-testimonial -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->

@include("inc.footer")

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="fas fa-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- Template JS Files -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/socket.io.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/chart.js"></script>
<script src="js/result-chart.js"></script>
<script src="js/doughutchart.js"></script>
<script src="js/waypoint.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/calculate-script.js"></script>
<script src="js/jquery-nice-select.js"></script>
<script src="js/main.js"></script>
</body>
</html>