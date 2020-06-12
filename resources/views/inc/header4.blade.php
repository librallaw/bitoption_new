<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo -->
        <div class="logo-mini">
            <span class="light-logo"><img src="/images/logo-light.png" alt="logo"></span>
            <span class="dark-logo"><img src="/images/logo-dark.png" alt="logo"></span>
        </div>
        <!-- logo-->
        <div class="logo-lg">
            <span class="light-logo"><img src="/images/logo-light-text.png" alt="logo"></span>
            <span class="dark-logo"><img src="/images/logo-dark-text.png" alt="logo"></span>
        </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="ti-align-left"></i>
            </a>

            <a href="#" data-provide="fullscreen" class="sidebar-toggle" title="Full Screen">
                <i class="mdi mdi-crop-free"></i>
            </a>

        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="User">
                        <i class="fa fa-cog fa-spin"></i>
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <!-- User image -->
                        <li class="user-header bg-img" style="background-image: url('/images/user-info.jpg')" data-overlay="3">
                            <div class="flexbox align-self-center">
                                <img src="https://ui-avatars.com/api/?name={{Auth::user()->first_name." ".Auth::user()->last_name}}" class="float-left rounded-circle" alt="User Image">
                                <h4 class="user-name align-self-center">
                                    <span>{{Auth::user()->first_name." ".Auth::user()->last_name}} </span>
                                    <small>{{Auth::user()->email}}</small>
                                </h4>
                            </div>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <a class="dropdown-item" href="{{route("showDashboard")}}"><i class="ion ion-home"></i> Dashboard </a>
                            <a class="dropdown-item" href="{{route("showDeposits")}}"><i class="ion ion-plus"></i> My deposits</a>
                            <a class="dropdown-item" href="{{route("showWithdrawals")}}"><i class="ion ion-minus"></i> My withdrawals</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}"><i class="ion-log-out"></i> Logout</a>


                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
</header>