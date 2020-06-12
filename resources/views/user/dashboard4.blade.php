<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/favicon.ico">

    <title>Dashboard - Block Chain Traders</title>

	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/assets/vendor_components/bootstrap/dist/css/bootstrap.css">

	<!--amcharts -->
	<link href="/lib/3/plugins/export/export.css" rel="stylesheet" type="text/css" />

	<!-- theme style -->
	<link rel="stylesheet" href="/css/style.css">

	<!-- Crypto Admin skins -->
	<link rel="stylesheet" href="/css/skin_color.css">


  </head>

<body class="hold-transition dark-skin dark-sidebar sidebar-mini theme-mix">

<div class="wrapper">

  @include("inc.header4")

  <!-- Left side column. contains the logo and sidebar -->
  @include("inc.sidebar4")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<h3>
				Dashboard
				<small>Control panel</small>
		  	</h3>
		  	<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
		  	</ol>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box box-inverse box-dark">
					  <div class="box-body">
						  <ul id="webticker-1" class="text-center">
							<li class="py-5"><i class="cc BTC d-block mx-auto mb-10"></i> <p class="mb-0">BTC</p> <span class="d-block text-danger"> -0.784 <i class="fa fa-arrow-down"></i></span></li>
							<li class="py-5"><i class="cc ETH d-block mx-auto mb-10"></i> <p class="mb-0">ETH</p> <span class="d-block text-danger"> -0.714 <i class="fa fa-arrow-down"></i></span></li>
							<li class="py-5"><i class="cc GAME d-block mx-auto mb-10"></i> <p class="mb-0">GAME</p> <span class="d-block text-success"> +1.985 <i class="fa fa-arrow-up"></i></span></li>
							<li class="py-5"><i class="cc LBC d-block mx-auto mb-10"></i> <p class="mb-0">LBC</p> <span class="d-block text-success"> +0.965 <i class="fa fa-arrow-up"></i></span></li>
							<li class="py-5"><i class="cc NEO d-block mx-auto mb-10"></i> <p class="mb-0">NEO</p> <span class="d-block text-danger"> -0.985 <i class="fa fa-arrow-down"></i></span></li>
							<li class="py-5"><i class="cc STEEM d-block mx-auto mb-10"></i> <p class="mb-0">STE</p> <span class="d-block text-success"> +1.784 <i class="fa fa-arrow-up"></i></span></li>
							<li class="py-5"><i class="cc LTC d-block mx-auto mb-10"></i> <p class="mb-0">LIT</p> <span class="d-block text-danger"> -1.002 <i class="fa fa-arrow-down"></i></span></li>
							<li class="py-5"><i class="cc NOTE d-block mx-auto mb-10"></i> <p class="mb-0">NOTE</p> <span class="d-block text-success"> +0.958 <i class="fa fa-arrow-up"></i></span></li>
							<li class="py-5"><i class="cc MINT d-block mx-auto mb-10"></i> <p class="mb-0">MINT</p> <span class="d-block text-success"> +9.845 <i class="fa fa-arrow-up"></i></span></li>
							<li class="py-5"><i class="cc IOTA d-block mx-auto mb-10"></i> <p class="mb-0">IOT</p> <span class="d-block text-danger"> -0.824 <i class="fa fa-arrow-down"></i></span></li>
							<li class="py-5"><i class="cc DASH d-block mx-auto mb-10"></i> <p class="mb-0">DAS</p> <span class="d-block text-success"> +0.632 <i class="fa fa-arrow-up"></i></span></li>
						  </ul>
					  </div>
				  </div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="row">
						<div class="col-lg-6 col-12">
							<a class="box box-link-pop text-center" href="javascript:void(0)">
								<div class="box-body">
									<p class="font-size-40 text-pink">
										<i class="fa fa-money text-muted mr-5 mb-20"></i><br>
										<strong>{{$balance}}</strong>
									</p>
								</div>
								<div class="box-body py-20 bg-dark">
									<h3 class="font-weight-600 mt-0">
										Balance
									</h3>
								</div>
							</a>
						</div>
						<div class="col-lg-6 col-12">
							<div class="box">
								<div class="box-body">
									<div class="chart">
										<div id="chartdiv3" class="h-200"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12">
							<div class="box">
								<div class="box-body">
									<div class="chart">
										<div id="chartdiv4" class="h-300"></div>
									</div>
								</div>
								<!-- /.box-body -->
							</div>
							<!-- /.box -->
						</div>
					</div>
				</div>

				<div class="col-lg-8 col-12">
				  <div class="box">
					<div class="box-header with-border">
					  <h4 class="box-title">Stock Events</h4>
					</div>
					<div class="box-body">
					  <div class="chart">
						<div id="chartdiv21" class="h-500"></div>
					  </div>
					</div>
				  </div>
				</div>




					<div class="col-12">
						<div class="box">
							<div class="box-header with-border">
								<h4 class="box-title">Latest Transactions</h4>
							</div>
							<div class="box-body">
								@if(count($transactions) > 0)
								<div class="table-responsive">
									<table class="table no-margin table-hover">
										<thead>
										<tr class="bg-warning">
											<th scope="col">Reference</th>
											<th scope="col">Amount</th>
											<th scope="col">Time </th>
											<th scope="col">Type </th>
										</tr>
										</thead>
										<tbody>


											@foreach($transactions as $transactions)
										<tr>
											<td>
												<a href="#" class="text-warning hover-warning">
													{{$transactions->reference}}
												</a>

											</td>
											<td>{{$transactions->amount}} BTC</td>
											<td>
												<time class="timeago" datetime="{{$transactions->created_at->diffForHumans()}}" title="{{$transactions->created_at->diffForHumans()}}">{{$transactions->created_at->diffForHumans()}}</time>
											</td>

											@if($transactions->type == 1)
												<td><span class="label label-success">Deposit</span></td>
											@endif
											@if($transactions->type == 0)
												<td><span class="label label-danger">Withdrawal</span></td>
											@endif
										</tr>
											@endforeach




										</tbody>
									</table>
								</div>
							</div>
							@else
								<div class="alert alert-danger">
									No Transaction found
								</div>
							@endif
						</div>

					</div>






			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
	  <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
	  <coingecko-coin-price-marquee-widget currency="usd" coin-ids="bitcoin,ethereum,eos,ripple,litecoin" locale="en"></coingecko-coin-price-marquee-widget>
  <!-- /.content-wrapper -->
  @include("inc.footer4")

  <!-- Control Sidebar -->
  <aside class="control-sidebar">

	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="##control-sidebar-home-tab" data-toggle="tab">Chat</a></li>
      <li class="nav-item"><a href="##control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="##">
				<img src="/images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="##">
				<img src="/images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="##">
				<img src="/images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="##">
				<img src="/images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="##">
				<img src="/images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="##">
				<img src="/images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="##">
				<img src="/images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="##">
				<img src="/images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="##"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->



	<!-- jQuery 3 -->
	<script src="/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- fullscreen -->
	<script src="/assets/vendor_components/screenfull/screenfull.js"></script>

	<!-- jQuery UI 1.11.4 -->
	<script src="/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

	<!-- popper -->
	<script src="/assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

	<!-- Slimscroll -->
	<script src="/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- FastClick -->
	<script src="/assets/vendor_components/fastclick/lib/fastclick.js"></script>

    <!--amcharts charts -->
	<script src="/lib/3/amcharts.js"></script>
	<script src="/lib/3/serial.js"></script>
	<script src="/lib/3/amstock.js"></script>
	<script src="/lib/3/plugins/export/export.min.js"></script>
	<script src="/lib/3/themes/black.js"></script>
	<script src="/lib/3/gauge.js" type="text/javascript"></script>
	<script src="/lib/3/pie.js" type="text/javascript"></script>
	<script src="/lib/3/plugins/animate/animate.min.js" type="text/javascript"></script>

	<!-- webticker -->
	<script src="/assets/vendor_components/Web-Ticker-master/jquery.webticker.min.js"></script>

	<!-- Sparkline -->
	<script src="/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

	<!-- Crypto Admin App -->
	<script src="/js/template.js"></script>

	<script src="/js/pages/dashboard3.js"></script>
	<script src="/js/pages/dashboard3-chart.js"></script>


	<script src="/js/demo.js"></script>


</body>
</html>
