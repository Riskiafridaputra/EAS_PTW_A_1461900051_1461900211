<!DOCTYPE html>
<html lang="en">

<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>DistroIT</title>
	<meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah" />
	<meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
	<meta name="author" content="Hakko Bio Richard" />
	<!-- end: Meta -->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<!-- end: Facebook Open Graph -->

	<!-- start: CSS -->
	<link href="{{asset("css/bootstrap.css")}}" rel="stylesheet">
	<link href="{{asset("css/bootstrap-responsive.css")}}" rel="stylesheet">
	<link href="{{asset("css/style.css")}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

	<!--start: Header -->
	<header>

		<!--start: Container -->
		<div class="container">

			<!--start: Row -->
			<div class="row">

				<!--start: Logo -->
				<div class="logo span3">

					<a class="brand" href="#"><img src="{{asset("img/logo2.png")}}" alt="Logo"></a>

				</div>
				<!--end: Logo -->

				<!--start: Navigation -->
				<div class="span9">

					<div class="navbar navbar-inverse">
						<div class="navbar-inner">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li><a href="/index">Home</a></li>
									<li><a href="/keranjang">Keranjang</a></li>
									<li><a href="/pembelian">Pembelian</a></li>
									<li><a href="/logout">Logout</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
				<!--end: Navigation -->

			</div>
			<!--end: Row -->

		</div>
		<!--end: Container-->

	</header>
	<!--end: Header-->


	@yield('content')
	

			<!-- start: Java Script -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="{{asset("js/jquery-1.8.2.js")}}"></script>
			<script src="{{asset("js/bootstrap.js")}}"></script>
			<script src="{{asset("js/flexslider.js")}}"></script>
			<script src="{{asset("js/carousel.js")}}"></script>
			<script src="{{asset("js/jquery.cslider.js")}}"></script>
			<script src="{{asset("js/slider.js")}}"></script>
			<script defer="defer" src="{{asset("js/custom.js")}}"></script>
			<!-- end: Java Script -->

</body>

</html>