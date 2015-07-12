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

	<!-- Fonts
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <script src="{{ asset('js/angular.min.js') }}"></script>
</head>
<body>
	<div id="head-section">
		<nav class="b-nav b-gum-top">
			<nav class="b-gum cuts-nav-bg"></nav>
			<div class="b-navbar cust-nav">
				<div class="boxx ztop">
					<div  >
						<span class="Icon">BCZ</span>
						<div class="b-navset pull-right">
							<a >FOLIO</a>
							<a >ABOUT US</a>
							<a  class="btn signup">SIGN UP</a>
						</div>
					</div>
					<div class="pf2NavHead"  style="height:0px; overflow:hidden; transition:height 0.2s;" >
						<div class="col-md-10 col-md-offset-1 pfNavH">
							<span class="fnavb fnavb1 ">
								WEB APPS
							</span>
							<span class="fnavb fnavb2">
								MOBILE APPS
							</span>
							<span class="fnavb fnavb3">
								DESKTOP APPS
							</span>
							<span class="fnavb fnavb4">
								OTHERS
							</span>
						</div>
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
	
	<footer class="foot-section" id="foot-section">
		<div class="container">
			<div class="col-md-12" style="height:150px; ">
				<div class="col-md-3 inputF inputFocus"> <input type="text" placeholder="USERNAME"> </div>
				<div class="col-md-3 inputF"> <input type="text" placeholder="EMAIL"> </div>
				<div class="col-md-3 inputF"> <input type="password" placeholder="PASSWORD"> </div>
				<div class="col-md-3 inputF"> <input type="password" placeholder="CONFIRM PASSWORD"> </div>
				<div class="col-md-4 col-md-offset-4 inputF"> <button type="submit" >SUBMIT</button> </div>
			</div>
			<div class="col-md-12 footerLinks">
				<div class="col-md-2 footerLinkSet">
					<span><a >Support</a></span>
					<span><a >Manuel  </a></span>
					<span><a >Enemy  </a></span>
					<span><a >Door  </a></span>
				</div>
				<div class="col-md-2 footerLinkSet">
					<span><a >Street Dog</a></span>
					<span><a >Something  </a></span>
					<span><a >Hall </a></span>
					<span><a >Man of Doll </a></span>
				</div>
				
				<div class="col-md-4 b-untouchable" style="text-align:center; font-family:masterblast; font-size:80px; color:#95a5a6; padding-top:90px; line-height:30px; height:200px;">
					BCZ
					<span style="font-family:Dosis; font-size:20px; height:40px; margin:0px;">Bluecipherz 2015</span>
				</div>
				
				<div class="col-md-2 footerLinkSet">
					<span><a >Big IPPc</a></span>
					<span><a >Peace  </a></span>
					<span><a >Some </a></span>
					<span><a >Door Dummy </a></span>
				</div>
				<div class="col-md-2 footerLinkSet">
					<span><a >Cat street</a></span>
					<span><a >fear  </a></span>
					<span><a >User Kind </a></span>
					<span><a >Great  </a></span>
				</div>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<!--
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	-->
	<script src="{{ asset('/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/BCZ-Boxes.min.js') }}"></script>
	<script src="{{ asset('/js/script.js') }}"></script>
	<script src="{{ asset('/js/animation.js') }}"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
	@yield('jslinks')
</body>
</html>
