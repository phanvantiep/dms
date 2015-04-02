<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Distributor Management System</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">
						<img src="/img/header/logo.png" />
					</a>
				</div>
	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}"><?php echo Lang::get('header.home');?></a></li>
						<li class="dropdown">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo Lang::get('header.sales');?>
						    <span class="caret"></span></a>
						    <ul class="dropdown-menu">
						      <li><a href="{{ url('/sales') }}"><?php echo Lang::get('header.sales.sub.menu.sales.order');?></a></li>
						      <li><a href="{{ url('/sales/print_invoices') }}"><?php echo Lang::get('header.sales.sub.menu.print.order');?></a></li>
						      <li><a href="{{ url('/sales/return_orders') }}"><?php echo Lang::get('header.sales.sub.menu.return.order');?></a></li> 
						      <li class="divider"></li>
						      <li><a href="{{ url('/sales/salesmans') }}"><?php echo Lang::get('header.sales.sub.menu.salesman.mangement');?></a></li> 
						      <li><a href="{{ url('/sales/sales_routes') }}"><?php echo Lang::get('header.sales.sub.menu.sales.routes.mangement');?></a></li> 
						      <li><a href="{{ url('/sales/mean_of_tranports') }}"><?php echo Lang::get('header.sales.sub.menu.mean.of.tranport.management');?></a></li> 
						      <li class="divider"></li>
						      <li><a href="{{ url('/promotion') }}"><?php echo Lang::get('header.sales.sub.menu.promotions');?></a></li>
						      <li class="divider"></li>	
						      <li><a href="{{ url('/sales/invoices') }}"><?php echo Lang::get('header.sales.sub.menu.sales.invoices.report');?></a></li>
						      <li><a href="{{ url('/sales/issue_reports') }}"><?php echo Lang::get('header.sales.sub.menu.sales.issue.report');?></a></li>  
						    </ul>
						</li>
	
					
						<li><a href="{{ url('/purchasing') }}"><?php echo Lang::get('header.purchasing.sub.menu.purchasing');?></a></li>			
						<li class="dropdown">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo Lang::get('header.inventory.sub.menu.inventory');?> 
						    <span class="caret"></span></a>
						    <ul class="dropdown-menu">
						      <li><a href="{{ url('/inventory') }}"><?php echo Lang::get('header.inventory.sub.menu.inventory.transactions');?></a></li>
						      <li class="divider"></li>
						      <li><a href="{{ url('/inventory/products') }}"><?php echo Lang::get('header.inventory.sub.menu.inventory.products.management');?></a></li>
						      <li class="divider"></li>
						      <li><a href="{{ url('/inventory/stock_report_summaries') }}"><?php echo Lang::get('header.inventory.sub.menu.inventory.stock.report.summary');?></a></li>
						      <li><a href="{{ url('/inventory/stock_report_details') }}"><?php echo Lang::get('header.inventory.sub.menu.inventory.stock.report.details');?></a></li>
						    </ul>
						</li>
						
						<li class="dropdown">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo Lang::get('header.ar.sub.menu.account.receivable');?>
						    <span class="caret"></span></a>
						    <ul class="dropdown-menu">
						      <li><a href="{{ url('/ar') }}"><?php echo Lang::get('header.ar.sub.menu.account.receivable.payment');?></a></li>
						      <li class="divider"></li>
						      <li><a href="{{ url('/ar/customers') }}"><?php echo Lang::get('header.ar.sub.menu.account.cutomers');?></a></li>
						      <li class="divider"></li>
						      <li><a href="{{ url('/ar/balance_reports') }}"><?php echo Lang::get('header.ar.sub.menu.balance.reports');?></a></li>
						      <li><a href="{{ url('/ar/recieve_reports') }}"><?php echo Lang::get('header.ar.sub.menu.receivable.reports');?></a></li>
						    </ul>
						</li>
						
						<li class="dropdown">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo Lang::get('header.ap.sub.menu.account.payable');?>
						    <span class="caret"></span></a>
						    <ul class="dropdown-menu">
						      <li><a href="{{ url('/ap') }}"><?php echo Lang::get('header.ap.sub.menu.account.payable.payment');?></a></li>
						      <li class="divider"></li>
						      <li><a href="{{ url('/ap/vendors') }}"><?php echo Lang::get('header.ap.sub.menu.account.vendors');?></a></li>
						      <li class="divider"></li>
						      <li><a href="{{ url('/ap/balance_reports') }}"><?php echo Lang::get('header.ap.sub.menu.account.balance.reports');?></a></li>
						      <li><a href="{{ url('/ap/payable_reports') }}"><?php echo Lang::get('header.ap.sub.menu.account.payable.reports');?></a></li>
						    </ul>
						</li>
						
						<li><a href="{{ url('/setup') }}"><?php echo Lang::get('header.setups.menu.setups');?></a></li>					
					</ul>
	
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/auth/login') }}"><?php echo Lang::get('header.right.menu.login');?></a></li>
							<li><a href="{{ url('/auth/register') }}"><?php echo Lang::get('header.right.menu.register');?></a></li>
						@else
							<li>
								<a href="{{ url('/message') }}" class="navbar-brand">
								<img src="/img/header/message_icon.png"/></a>
							</li>
							<li><a href="{{ url('/notify') }}" class="navbar-brand">
								<img src="/img/header/earth_icon.png"/></a>
							</li>
							<li class="navbar-brand">|</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/user') }}">My Account</a></li>
									<li class="divider"></li>
									<li><a href="{{ url('/company') }}">My Company</a></li>
									<li class="divider"></li>
									<li><a href="{{ url('/info') }}"><?php echo Lang::get('header.info.menu.info');?></a></li>
									<li class="divider"></li>
									<li><a href="{{ url('/lang_en') }}">English</a></li>
									<li><a href="{{ url('/lang_vi') }}">Vietnamese</a></li>
									<li class="divider"></li>
									<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
								</ul>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</div>	
	</nav>
	<div class="body">
		@yield('content')
	</div>
	
	<footer class="footer">
		<div class="container">
			@2015 Distributor Management System
		</div>
	</footer>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="/js/common.js"></script>
</body>
</html>
