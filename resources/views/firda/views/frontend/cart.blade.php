<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Cart</title>

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


	<body class="slider-collapse">
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-text">
							<h1 class="site-title">Ebook Store Bookxcess</h1>
							<small class="site-description">Tagline goes here</small>
						</div>
					</a> <!-- #branding -->

					<div class="right-section pull-right">
						<!-- <a href="cart.html" class="cart"><i class="icon-cart"></i> Cart</a> -->
						<a href="#" class="login-button">Login/Register</a>
					</div> <!-- .right-section -->

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item home current-menu-item"><a href="index.html"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="products.html">My Collection</a></li>
							<li class="menu-item"><a href="products.html">Purchase Now</a></li>
							<li class="menu-item"><a href="products.html">Publish Book</a></li>
							<li class="menu-item"><a href="products.html">Contact Us</a></li>
							<li class="menu-item"><a href="products.html">About Us</a></li>
						</ul> <!-- .menu -->
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Search...">
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->
				</div> <!-- .container -->
			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header>
                            <p style="text-align:center"> CART </p>
							</header>

							<div class="product-list">
								<div class="product">
									<div class="inner-product">
                                        <input type="checkbox">
										<div class="figure-image">
											<a href="single.html"><img src="https://cdn.elevenia.co.id/g/7/1/6/8/4/2/27716842_B.jpg" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#">Pulang (Tere Liye)</a></h3>
										<small class="price">Rp20.000</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
                                        <input type="checkbox">
										<div class="figure-image">
											<a href="single.html"><img src="https://cdn.elevenia.co.id/g/7/1/6/8/4/2/27716842_B.jpg" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="#">Pulang (Tere Liye)</a></h3>
										<small class="price">Rp20.000</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->

							</div> <!-- .product-list -->

						</section>

						<section>
                            <div class="product-list">
								<div class="product">
									<div class="inner-product">
                                        <input type="checkbox">
										<div class="figure-image">
											<a href="single.html"><img src="https://cdn.elevenia.co.id/g/7/1/6/8/4/2/27716842_B.jpg" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#">Pulang (Tere Liye)</a></h3>
										<small class="price">Rp20.000</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
                                        <input type="checkbox">
										<div class="figure-image">
											<a href="single.html"><img src="https://cdn.elevenia.co.id/g/7/1/6/8/4/2/27716842_B.jpg" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="#">Pulang (Tere Liye)</a></h3>
										<small class="price">Rp20.000</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->

							</div> <!-- .product-list -->

						</section>

							<!-- <div class="product-list">
								
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="dummy/game-5.jpg" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#">Watch Dogs</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> .product -->
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

            <div class="site-header">
				<div class="container">
					<div class="main-navigation">
						<ul class="menu">
                        <p style="text-align:center"> Sub Total : Rp100.000 </p>
						</ul> <!-- .menu -->
						<div class="checkoutcontainer">
                            <a href="cart.html" class="button">Checkout</a>
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->
				</div> <!-- .container -->
			</div> <!-- .site-header -->

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

		<script src="{{ asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{ asset('frontend/js/plugins.js')}}"></script>
		<script src="{{ asset('frontend/js/app.js')}}"></script>
		
	</body>

</html>