<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Bookxcess</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ asset('frontend/fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{ asset('frontend/fonts/lineo-icon/style.css')}}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('frontend/style.css')}}">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>
	
<body>
	<!-- <div class="fixed-header"> -->
	<div id="scrollable-container">
		<body class="slider-collapse">
			<div id="site-content">
				<div class="site-header">
					<div class="container">
						<a href="index.html" id="branding">
							<img src="images/logo.png" alt="" class="logo">
							<div class="logo-text">
								<h1 class="site-title">Ebook Store Bookxcess</h1>
								<small class="site-description">Explore our catalog of public domain book with our publisher</small>
							</div>
						</a> <!-- #branding -->

						<div class="right-section pull-right">
							<!-- <a href="cart.html" class="cart"><i class="icon-cart"></i> Cart</a> -->
							<!-- <a href="#" class="login-button">Login/Register</a> -->
						</div> <!-- .right-section -->

						<div class="main-navigation">
							<button class="toggle-menu"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item home current-menu-item"><a href="/customerhome"><i class="icon-home"></i></a></li>
								<li class="menu-item"><a href="products.html">My Collection</a></li>
								<li class="menu-item"><a href="/cart">Purchase Now</a></li>
								<li class="menu-item"><a href="/contactuscust">Contact Us</a></li>
								<li class="menu-item"><a href="/aboutuscust">About Us</a></li>
							</ul> <!-- .menu -->
							<div class="search-form">
								<label><img src="images/icon-search.png"></label>
								<input type="text" placeholder="Search...">
							</div> <!-- .search-form -->

							<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
						</div> <!-- .main-navigation -->
					</div> <!-- .container -->
				</div> <!-- .site-header -->
			</div>
		</div>
			
		<!-- <div class ="c-body">
			<main class="c-main"> -->
			@yield('konten')
			<!-- </main>
		</div> -->

		<body class="slider-collapse">
			<footer class="footer">
				<div class="site-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<div class="widget">
									<h3 class="widget-title">Information</h3>
									<ul class="no-bullet">
										<li><a href="#">Site map</a></li>
										<li><a href="#">About us</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div> <!-- .widget -->
							</div> <!-- column -->
							<div class="col-md-2">
								<div class="widget">
									<h3 class="widget-title">Consumer Service</h3>
									<ul class="no-bullet">
										<li><a href="#">Secure</a></li>
										<li><a href="#">Shipping &amp; Returns</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Orders &amp; Returns</a></li>
										<li><a href="#">Group Sales</a></li>
									</ul>
								</div> <!-- .widget -->
							</div> <!-- column -->
							<div class="col-md-2">
								<div class="widget">
									<h3 class="widget-title">My Account</h3>
									<ul class="no-bullet">
										<li><a href="#">Login/Register</a></li>
										<li><a href="#">Settings</a></li>
										<li><a href="#">Cart</a></li>
										<li><a href="#">Order Tracking</a></li>
										<li><a href="#">Logout</a></li>
									</ul>
								</div> <!-- .widget -->
							</div> <!-- column -->
							<div class="col-md-6">
								<div class="widget">
									<h3 class="widget-title">Join our newsletter</h3>
									<form action="#" class="newsletter-form">
										<input type="text" placeholder="Enter your email...">
										<input type="submit" value="Subsribe">
									</form>
								</div> <!-- .widget -->
							</div> <!-- column -->
						</div><!-- .row -->

						<div class="colophon">
							<div class="copy">Copyright 2020 Ebook Store Bookxcess. Designed by Group 3. Proyek Assignment Purpose.</div>
							<div class="social-links square">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div> <!-- .social-links -->
						</div> <!-- .colophon -->
					</div> <!-- .container -->
				</div> <!-- .site-footer -->
			</div>

			<div class="overlay"></div>

			<div class="auth-popup popup">
				<a href="#" class="close"><i class="fa fa-times"></i></a>
				<div class="row">
					<div class="col-md-6">
						<h2 class="section-title">Login</h2>
						<form action="#">
							<input type="text" placeholder="Username...">
							<input type="password" placeholder="Password...">
							<input type="submit" value="Login">
						</form>
					</div> <!-- .column -->
					<div class="col-md-6">
						<h2 class="section-title">Create an account</h2>
						<form action="#">
							<input type="text" placeholder="Username...">
							<input type="text" placeholder="Email address...">
							<input type="submit" value="register">
						</form>
					</div> <!-- .column -->
				</div> <!-- .row -->
			</div> <!-- .auth-popup -->
			</footer>

			</body>
		</div>
		<script src="{{ asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{ asset('frontend/js/plugins.js')}}"></script>
		<script src="{{ asset('frontend/js/app.js')}}"></script>
	</div>
</body>
</html>
