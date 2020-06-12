<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Navigation</li>

            @if(Auth::user()->level == 1)


            <li>
                <a class="" href="{{route("showAdminDashboard")}}">
                    <i class="fa fa-dashboard"></i><span class="nav-text">Admin Dashboard</span>
                </a>

            </li>
                <li>
                    <a class="" href="{{route("showUsers")}}">
                        <i class="fa fa-users"></i><span class="nav-text">All Users</span>
                    </a>

                </li>

            <li>
                <a class="" href="{{route("pendingDeposit")}}">
                    <i class="fa fa-plus-circle"></i><span class="nav-text">Pending Deposits</span>
                </a>

            </li>



            <li>
                <a class="" href="{{route("pendingWithdrawal")}}">
                    <i class="fa fa-minus-circle"></i><span class="nav-text">Pending Withdrawals</span>
                </a>

            </li>



            @endif




            @if(Auth::user()->level == 0)

            <li>
                <a class="" href="{{route("showDashboard")}}">
                    <i class="fa fa-user"></i><span class="nav-text">Dashboard</span>
                </a>

            </li>



            <li>
                <a class="" href="{{route("showDeposit")}}" >
                    <i class="fa fa-plus"></i><span class="nav-text">Deposit</span>
                </a>

            </li>



            <li>
                <a class="" href="{{route("showWithdraw")}}" aria-expanded="false">
                    <i class="fa fa-minus"></i><span class="nav-text">Withdraw</span>
                </a>

            </li>




            <li><a class="" href="{{route("showDeposits")}}" aria-expanded="false"><i class="fa fa-plus-circle
            "></i><span
                            class="nav-text">My deposits</span></a>

            </li>


            <li><a class="" href="{{route("showWithdrawals")}}"aria-expanded="false"><i class="fa fa-minus-circle
            "></i><span
                            class="nav-text">My Withdrawals</span></a>

            </li>
            @endif




            <li><a class="" href="{{route('logout')}}" aria-expanded="false"><i class="fa fa-lock"></i><span
                            class="nav-text">Logout</span></a>

            </li>




        </ul>
    </div>
</div>