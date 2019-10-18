<!--
 // **************************************************
 // ******* Name: arvid
 // ******* Description: Bootstrap 4 Admin Dashboard
 // ******* Version: 1.0.0
 // ******* Released on 2019-02-27 13:47:58
 // ******* Support Email : quixlab.com@gmail.com
 // ******* Support Skype : sporsho9
 // ******* Author: Quixlab
 // ******* URL: https://quixlab.com
 // ******* Themeforest Profile : https://themeforest.net/user/quixlab
 // ******* License: ISC
 // ***************************************************
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Deposit - Block Chain Traders</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="/css/style2.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include("inc.header3")
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include("inc.sidebar2")
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">{{date("D, jS M, Y")}}</span>
                    </div>
                </div>

            </div>
            <!-- row -->

            <div class="container">
                
                <div class="row">

                    <div class="col-xl-12 col-xxl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Withdraw</h4>
                                <div class="buy-token mt-4">
                                    <div class="basic-form">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <!-- <label>Bitcoin wallet address</label> -->
                                                    <div class="input-group mb-3 mb-md-0">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text input-text-btc"><i class="cc BTC-alt"></i></span>
                                                        </div>
                                                        <input id="input1" type="text" placeholder="17UMWRhSZN7B4gYrspvFvf6rqcwyopzPSG" class="form-control" aria-label="Example text with button addon" aria-describedby="button-addon1" value="17UMWRhSZN7B4gYrspvFvf6rqcwyopzPSG">
                                                        <div class="input-group-append">
                                                            <button data-clipboard-target="#input1" class="btn btn-primary btn-flat clipboard-btn" title="Copy to clipboard" type="button" id="button-addon1"><i class="fa fa-clipboard" aria-hidden="true"></i></button>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Latest Deposits</h4>
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Transaction Hash</th>
                                                <th scope="col">BTC</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="/javascript:void()">s0o8p4mwcibxxy2</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-success">Confirmed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-success">Confirmed</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-danger">Cancel</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-danger">Cancel</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-danger">Cancel</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-success">Confirm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-warning">Pending</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-success">Confirm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="/javascript:void()">5r1g5f4d5f45d2f</a>
                                                </td>
                                                <td>4.23265785 <span class="BTC">BTC</span>
                                                </td>
                                                <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 1 min ago</td>
                                                <td><span class="badge badge-danger">Cancel</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       @include("inc.footer2")
        <!--**********************************
            Footer end
        ***********************************-->

        
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger gradient-5-x" href="/javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <h4>Pick your style</h4>
                    <div>
                        <p>Background</p>
                        <select class="form-control" name="theme_version" id="theme_version">
                            <option value="light">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div>
                        <p>Layout</p>
                        <select class="form-control" name="theme_layout" id="theme_layout">
                            <option value="vertical">Vertical</option>
                            <option value="horizontal">Horizontal</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <select class="form-control" name="sidebar_style" id="sidebar_style">
                            <option value="full">Full</option>
                            <option value="mini">Mini</option>
                            <option value="compact">Compact</option>
                            <option value="overlay">Overlay</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar position</p>
                        <select class="form-control" name="sidebar_position" id="sidebar_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Header position</p>
                        <select class="form-control" name="header_position" id="header_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Container</p>
                        <select class="form-control" name="container_layout" id="container_layout">
                            <option value="wide">Wide</option>
                            <option value="boxed">Boxed</option>
                            <option value="wide-boxed">Wide Boxed</option>
                        </select>
                    </div>
                    <div>
                        <p>Direction</p>
                        <select class="form-control" name="theme_direction" id="theme_direction">
                            <option value="ltr">LTR</option>
                            <option value="rtl">RTL</option>
                        </select>
                    </div>
                    <div>
                        <p>Navigation Header</p>
                        <div>
                            <span>
                                <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_bg_1">
                                <label for="nav_header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_bg_2">
                                <label for="nav_header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_bg_3">
                                <label for="nav_header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_bg_4">
                                <label for="nav_header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_bg_5">
                                <label for="nav_header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_bg_6">
                                <label for="nav_header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_bg_7">
                                <label for="nav_header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_bg_8">
                                <label for="nav_header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_bg_9">
                                <label for="nav_header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_bg_10">
                                <label for="nav_header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Header</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_bg_1">
                                <label for="header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_bg_2">
                                <label for="header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_bg_3">
                                <label for="header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_bg_4">
                                <label for="header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_bg_5">
                                <label for="header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_bg_6">
                                <label for="header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_bg_7">
                                <label for="header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_bg_8">
                                <label for="header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_bg_9">
                                <label for="header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_bg_10">
                                <label for="header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <div>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_bg_1">
                                <label for="sidebar_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_bg_2">
                                <label for="sidebar_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_bg_3">
                                <label for="sidebar_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_bg_4">
                                <label for="sidebar_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_bg_5">
                                <label for="sidebar_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_bg_6">
                                <label for="sidebar_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_bg_7">
                                <label for="sidebar_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_bg_8">
                                <label for="sidebar_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_bg_9">
                                <label for="sidebar_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_bg_10">
                                <label for="sidebar_bg_10"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/vendor/common/common.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/quixnav.js"></script>
    <script src="/js/styleSwitcher.js"></script>



    <script>
        (function($) {
            "use strict"

            new quixSettings({
                version: "light", //2 options "light" and "dark"
                layout: "vertical", //2 options, "vertical" and "horizontal"
                navheaderBg: "color_7", //have 10 options, "color_7" to "color_10"
                headerBg: "color_7", //have 10 options, "color_7" to "color_10"
                sidebarStyle: "full", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                sidebarBg: "color_7", //have 10 options, "color_7" to "color_10"
                sidebarPosition: "fixed", //have two options, "static" and "fixed"
                headerPosition: "static", //have two options, "static" and "fixed"
                containerLayout: "wide",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
            });


        })(jQuery);
    </script>
    

</body>

</html>