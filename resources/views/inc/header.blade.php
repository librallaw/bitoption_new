<div class='page-topbar gradient-blue1'>
    <div class='logo-area crypto'>

    </div>
    <div class='quick-area'>
        <div class='pull-left'>
            <ul class="info-menu left-links list-inline list-unstyled">
                <li class="sidebar-toggle-wrap">
                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>

                <li class="topnav-item item3">
                    <a href="#" class="nav-link w-text" style="border: 1px solid white;
    text-align: center;
    color: rgb(216, 63, 63);
    box-sizing: border-box;
    letter-spacing: 0.15ex;
    background-color: rgba(216, 63, 63, 0.1); padding:10px">
                        <i class="fa fa-sitemap mr-10"></i>Trading
                    </a>
                </li>



            </ul>
        </div>
        <div class='pull-right'>
            <ul class="info-menu right-links list-inline list-unstyled">
                <li class="notify-toggle-wrapper spec">
                    <a href="#" data-toggle="dropdown" class="toggle">
                        <i >$</i>

                    </a>

                </li>

                <li class="profile">
                    <a href="#" data-toggle="dropdown" class="toggle btn btn-success">

                        <span>{{Auth::user()->first_name}}  <i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu profile animated fadeIn">

                        <li>
                            <a href="{{route("showProfile")}}">
                                <i class="fa fa-user"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a href="{{route("resetpwd")}}">
                                <i class="fa fa-info"></i> Change Password
                            </a>
                        </li>
                        <li class="last">
                            <a href="#">
                                <i class="fa fa-lock"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

</div>