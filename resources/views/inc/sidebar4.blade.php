<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="/home">
                    <!-- logo for regular state and mobile devices -->
                    <h3><b>Block Chain </b>Traders</h3>
                </a>
            </div>
            <div class="profile-pic">
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->first_name." ".Auth::user()->last_name}}" alt="user">
                <div class="profile-info"><h5 class="mt-15">{{Auth::user()->first_name." ".Auth::user()->last_name}} </h5>
                    <div class="text-center d-inline-block">

                        <a href="/logout" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ion ion-power"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header nav-small-cap">PERSONAL</li>

            <li class="{{($active == "dashboard"?"active":"")}}">
                <a href="{{route("showDashboard")}}">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>

                </a>

            </li>
            <li class="{{($active == "deposit"?"active":"")}}">
                <a href="{{route("showDeposits")}}">
                    <i class="ti-bar-chart"></i>
                    <span>My Deposits</span>

            </span>
                </a>

            </li>
            <li class="{{($active == "withdraw"?"active":"")}}">
                <a href="{{route("showWithdrawals")}}">
                    <i class="ti-bar-chart"></i>
                    <span>My Withdrawals</span>

                    </span>
                </a>

            </li>


            <li>
                <a href="{{route('logout')}}">
                    <i class="ti-power-off"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>
</aside>