<script src="//code.jivosite.com/widget.js" data-jv-id="kcr53AiRQ0" async></script>
<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="header-top-info">
                        <ul class="info-list">
                            <li><i class="fa fa-envelope"></i>
                                <a href="info@blockchaintrade.exchange">info@blockchaintrade.exchange</a>
                            </li>
                            <li><i class="fa fa-phone"></i>
                                <a href="tel:+1631237884">+1(323) 985-5130</a>
                            </li>
                        </ul>
                    </div><!-- end header-top-info -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 col-sm-6">
                    <div class="header-top-info header-login-info">
                        <ul class="info-list">
                            @if(Auth::check())
                            <li><a href="/dashboard"><i class="fa fa-user"></i>My Account</a></li>
                            @else
                                <li><a href="/login"><i class="fa fa-user"></i> Login</a></li>
                                <li><a href="/register"><i class="fa fa-sign-in-alt"></i> Sign up</a></li>
                            @endif
                            <li>
                                <a href="#">
                                    <img src="images/flag.jpg" alt="English">
                                    English

                                </a>

                            </li>
                        </ul>
                    </div><!-- end header-top-info -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end header-top -->
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row header-menu-row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="/"> <img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                </div><!-- end col-lg-3-->
                <div class="col-lg-9 main-menu-wrapper">
                    <div class="main-menu-content">
                        <nav>
                            <ul>
                                <li>
                                    <a href="/">Home </a>

                                </li>
                                <li>
                                    <a href="/about">About </a>

                                </li>
                                <li>
                                    <a href="/contact">Contact</a>

                                </li>
                                <li>
                                    <a href="/login">Start</a>

                                </li>

                            </ul>
                        </nav>
                        <div class="logo-right-button">

                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->
                        </div><!-- end logo-right-button -->

                    </div><!-- end main-menu-content -->
                </div><!-- end col-lg-9 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li class="sidenav__item">
                    <a href="/">home</a>

                </li>
                <li class="sidenav__item">
                    <a href="/about">About</a>

                </li>
                <li class="sidenav__item">
                    <a href="/contact">Contact</a>

                </li>


                <li class="sidenav__item sidenav__item2 text-center">
                    <a href="/home"><i class="fa fa-sign-in-alt"></i> Start</a>
                </li>
            </ul>
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
</header>