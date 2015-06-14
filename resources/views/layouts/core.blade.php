<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>BCZ - @yield('title')</title>

	<link href="{{ asset('/css/app.css') }}" type="text/css" rel="stylesheet">
	<link href="{{ asset('/css/BCZ-Boxes.min.css') }}" type="text/css" rel="stylesheet"/>
	<link href="{{ asset('/css/custom.css') }}" type="text/css" rel="stylesheet"/>
	<link href="{{ asset('/css/graphics.css') }}" type="text/css" rel="stylesheet"/>
	<link href="{{ asset('/css/responsive.css') }}" type="text/css" rel="stylesheet"/>
	@yield('csslinks')

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
	<div id="head-section">
		<nav class="b-nav b-gum-top">
			<nav class="b-gum cuts-nav-bg"></nav>
			<div class="b-navbar cust-nav">
				<div class="boxx ztop">
					<span class="Icon">BCZ</span>
					<div class="b-navset pull-right">
						<a href="">FOLIO</a>
						<a href="">ABOUT US</a>
						<a href="" class="btn">SIGN UP</a>
					</div>
				</div>
			</div>
			@yield('adminTools')
		</nav>
		
			
			
		<div class="b-fakeNav"></div>
		@yield('fakeAdminHead')
	</div>
	<div id="mid-section">
		@yield('content')
	</div>
	<div id="footer-push"></div>
	<footer class="" id="foot-section">
	</footer>

	<!-- Scripts -->
	<!--
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	-->
	<script src="{{ asset('/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/BCZ-Boxes.min.js') }}"></script>
	<script src="{{ asset('/js/script.js') }}"></script>
	<script src="{{ asset('/js/animation.js') }}"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
	@yield('jslinks')
</body>
</html>
