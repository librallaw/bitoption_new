

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard - Block Chain Traders</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/vendor/owl.carousel/dist/css/owl.carousel.min.css">
    <link href="/vendor/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="/vendor/chartist/css/chartist.min.css">
    <link href="/css/style2.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "f75e1513-e852-48e5-8cd9-ff56cedd518f",
            });
        });
    </script>

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
                    <br />
                    <br />

                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">{{date("D, jS M, Y")}}</span>
                    </div>
                </div>

            </div>


            <div class="container">
                <div class="row justify-content-between mb-4 mt-4">
                    <div class="col-xl-12"></div>
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-sm-4 col-xxl-6 col-xl-4">
                                <div class="card stat-widget-one bg-btc">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4 class="mb-3">Total Users</h4>
                                                
                                                <h3 class="mb-3"><span class="counter">{{$users}}</span> </h3>
                                            </div>
                                            <div class="col-auto">
                                                <i class="cc BTC-alt" title="BTC"></i>
                                            </div>
                                        </div>

                                        

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xxl-6 col-xl-4">
                                <div class="card stat-widget-one bg-eth">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4 class="mb-3">Total Deposit</h4>
                                                
                                                <h3 class="mb-3"><span class="counter">{{$total_deposit}}</span> </h3>
                                                <div id="balance_graphd">{{$pending_deposit->count()}} pending
                                                    Transaction(s)
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="cc cc ETH-alt" title="ETH"></i>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xxl-6 col-xl-4">
                                <div class="card stat-widget-one bg-xrp">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-auto">
                                                <h4 class="mb-3">Total Withdrawal</h4>
                                                
                                                <h3 class="mb-3"><span class="counter">{{$total_withdrawal}}</span>
                                                </h3>
                                                <div id="balance_graphd">{{$pending_withdrawal->count()}} pending
                                                    Transaction(s)
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="cc XRP-alt" title="XRP"></i>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-6 col-xxl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Total Successfully Deposit</h4>

                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <h3><strong><span class="counter">{{$total_successfull_deposit->sum('amount')}}</span>
                                            BTC</strong></h3>
                                    <div id="balance_graphd">{{$total_successfull_deposit->count()}} Transaction(s)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-xxl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Total Successfully Withdrawals</h4>

                            </div>
                            <div class="card-body">
                                <div class="chart-wrapper">
                                    <h3><strong><span class="counter">{{$total_successfull_withdrawal->sum('amount')
                                    }}</span>
                                            BTC</strong></h3>
                                    <div id="balance_graphd">{{$total_successfull_withdrawal->count()}} Transaction(s)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12 col-xxl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Wallet Address</h4>
                                <div class="copy-wallet mt-4">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <!-- <label>Bitcoin wallet address</label> -->
                                                <div class="input-group mb-3 mb-md-0">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-text-btc"><i class="cc BTC-alt"></i></span>
                                                    </div>
                                                    <input id="input1" type="text" placeholder="1FfmbHfnpaZjKFvyi1okTjJJusN455paPH" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
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


                    <div class="col-xl-12 col-xxl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Transactions</h4>
                                <div class="recent-transaction table-responsive">
                                    <table class="table mb-0 table-responsive-tiny">
                                        <thead>
                                        <tr>
                                            <th scope="col">User</th>
                                            <th scope="col">Reference</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Time </th>
                                            <th scope="col">Type </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($transactions) > 0)
                                            @foreach($transactions as $transaction)
                                                <tr>
                                                    <td><strong>{{$transaction->user->full_name()}}</strong></td>
                                                    <td><strong>{{$transaction->reference}}</strong></td>
                                                    <td>{{$transaction->amount}} <span class="BTC">BTC</span></td>
                                                    <td class="change">
                                                        <span>{{$transaction->created_at->diffForHumans()}}</span>
                                                    </td>
                                                    @if($transaction->type == 1)
                                                        <td><span class="badge badge-success">Deposit</span>
                                                        </td>
                                                        @endif
                                                    @if($transaction->type == 0)
                                                        <td><span class="badge badge-danger">Withdrawal</span>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        @else
                                            <div>
                                                No Transaction found
                                            </div>
                                        @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">









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
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_11" class="filled-in chk-col-primary" id="sidebar_bg_11">
                                <label for="sidebar_bg_11"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_12" class="filled-in chk-col-primary" id="sidebar_bg_12">
                                <label for="sidebar_bg_12"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_13" class="filled-in chk-col-primary" id="sidebar_bg_13">
                                <label for="sidebar_bg_13"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_14" class="filled-in chk-col-primary" id="sidebar_bg_14">
                                <label for="sidebar_bg_14"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_15" class="filled-in chk-col-primary" id="sidebar_bg_15">
                                <label for="sidebar_bg_15"></label>
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

    <script src="/js/styleSwitcher.js"></script>
    
    
    <!-- ChartJS -->
    <script src="/vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Ticker -->
    <script src="/vendor/webticker/jquery.webticker.min.js"></script>

    <!--  flot-chart js -->
    <script src="/vendor/flot/jquery.flot.js"></script>
    <script src="/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Counter Up -->
    <script src="/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/vendor/jquery.counterup/jquery.counterup.min.js"></script>



    <script src="/js/dashboard/dashboard-1.js"></script>


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
                headerPosition: "fixed", //have two options, "static" and "fixed"
                containerLayout: "wide",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
            });


        })(jQuery);
    </script>

</body>

</html>