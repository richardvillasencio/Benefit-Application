<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>BeneFit.</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="/css/animate.min.css" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="/css/demo.css" rel="stylesheet" />


	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	{{--<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>--}}
	<link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-color="purple" data-image="/img/img_bg_3.jpg">

		<!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

		<div class="sidebar-wrapper">
			<div class="logo">
			  <a href="{{ url('/') }}">
            		<img src="/img/logo.png" style="height:100px; weight:200px;">
				</a>
			</div>

			<ul class="nav">
				<li>
					@if(!Auth::guard('admin')->user())
					    <a href="{{ url('/login') }}">
					        <i class="pe-7s-user"></i>
							<p>Dashboard</p>
					    </a>
					@else
						<a href="{{ url('/allevents') }}">
							<i class="pe-7s-news-paper"></i>
							<p>Dashboard</p>
						</a>
					@endif
				</li>
				<li>
					@if(!Auth::guard('admin')->user())
					    <a href="{{ url('/login') }}">
					        <i class="pe-7s-user"></i>
					       <p>Runner</p>
					    </a>
					@else
						<a href="{{ url('/viewrunners') }}">
							<i class="pe-7s-user"></i>
							<p>Runner</p>
						</a>
					@endif
				</li>
				<li>
					@if(!Auth::guard('admin')->user())
					    <a href="{{ url('/login') }}">
					        <i class="pe-7s-user"></i>
							<p>Organizer</p>
					    </a>
					@else
						<a href="{{ url('/vieworganizers') }}">
							<i class="pe-7s-users"></i>
							<p>Organizer</p>
						</a>
					@endif
				</li>
				<li>
					@if(!Auth::guard('admin')->user())
					    <a href="{{ url('/login') }}">
					        <i class="pe-7s-user"></i>
							<p>Beneficiaries</p>
					    </a>
					@else
						<a href="{{ url('/beneficiary') }}">
							<i class="pe-7s-box1"></i>
							<p>Beneficiaries</p>
						</a>
					@endif
				</li>
				<li>
					@if(!Auth::guard('admin')->user())
					    <a href="{{ url('/login') }}">
					        <i class="pe-7s-user"></i>
							<p>Tracking Events</p>
					    </a>
					@else
						<a href="{{ url('/eventmaps') }}">
							<i class="pe-7s-box1"></i>
							<p>Tracking Events</p>
						</a>
					@endif
				</li>
			<!-- 	<li>
					@if(!Auth::guard('admin')->user())
					    <a href="{{ url('/login') }}">
					        <i class="pe-7s-user"></i>
							<p>Events</p>
					    </a>
					@else
						<a href="{{ url('/allevents') }}">
							<i class="pe-7s-news-paper"></i>
							<p>Events</p>
						</a>
					@endif
				</li> -->
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					{{--<a class="navbar-brand" href="#">Dashboard</a>--}}
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Authentication Links -->
						@if(Auth::guard('admin')->user())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu" >
								<li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
							</ul>
						</li>
						@elseif(Auth::guard('organizer')->user())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('organizer')->user()->name }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu" >
								<li><a href="{{ url('/organizer/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
							</ul>
						</li>
						@elseif(Auth::guard('user')->user())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('user')->user()->fname.' '.Auth::guard('user')->user()->lname }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu" role="menu" >
								<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
							</ul>
						</li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Login as
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu" >
								<li><a href="{{ url('/login') }}">PROFILE</a></li>
								<li><a href="{{ url('/organizer/login') }}">Organizer</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Register as
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{ url('/register') }}">Runner</a></li>
								<li><a href="{{ url('/organizer/register') }}">Organizer</a></li>
							</ul>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
@yield('content')
</body>

<!--   Core JS Files   -->
<script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Notifications Plugin    -->
<script src="/js/bootstrap-notify.js"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->

<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyBb7JDTKmm90ZD5snQN8OIZvaEoBq86ka8&callback=initMap" type="text/javascript"></script> -->

</html>
