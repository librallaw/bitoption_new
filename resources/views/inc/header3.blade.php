<div class="nav-header">
    <div class="brand-logo">
        <a href="/index.html">
            <b class="logo-abbr">B </b>
            <span class="brand-title">Block Chain Traders</span>
        </a>
    </div>
    <div class="nav-control">
        <div class="hamburger">
            <span class="toggle-icon"><i class="icon-menu"></i></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content clearfix">

        <div class="header-left">
            <div class="header-search icons">
                <span class="header-magnifier"><i class="icon-magnifier"></i> </span>
                <form class="drop-down">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Here">
                        <div class="input-group-append">
                            <span class="input-group-text pl-3 pr-3">Search</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">

            <ul class="clearfix">

                <li class="icons">
                    <div class="user-img c-pointer">
                        <img src="/images/users/1.jpg" height="40" width="40" alt="avatar">
                        <strong class="ml-2">{{Auth::user()->first_name." ".Auth::user()->last_name}} <span><i class="fa
                        fa-caret-down
                        ml-2"></i></span></strong>

                    </div>
                    <div class="drop-down dropdown-profile animated flipInX">
                        <div class="dropdown-content-body">
                            <ul>

                                <li><a href="">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </div>



    <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
    <coingecko-coin-price-marquee-widget currency="usd" coin-ids="bitcoin,ethereum,eos,ripple,litecoin" locale="en"></coingecko-coin-price-marquee-widget>

    <!-- TradingView Widget END --> <br>

    <br>

    <br>

    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"></a> </div>

    </div>

</div>


