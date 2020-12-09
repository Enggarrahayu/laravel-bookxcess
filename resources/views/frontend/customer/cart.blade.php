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
    <!-- .header -->
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
								<li class="menu-item"><a href="/customerhome"><i class="icon-home"></i></a></li>
								<li class="menu-item"><a href="products.html">My Collection</a></li>
								<li class="menu-item home current-menu-item"><a href="/cart">Purchase Now</a></li>
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

		<!-- .konten -->
		<body>
			<main>
				<div class="basket" style="padding-top:20px;">
				<div class="basket-labels">
					<ul>
					<li class="item item-heading">Books</li>
					<!-- <li class="price">Price</li> -->
					<!-- <li class="quantity">Quantity</li> -->
					<li class="subtotal">Price</li>
					</ul>
				</div>
				<div class="basket-product">
					<div class="item">
					<div class="product-image">
						<img src="https://awsimages.detik.net.id/community/media/visual/2017/06/16/2769fd27-c3a2-4afb-a3c9-3ef087241901.jpg?w=700&q=90" alt="Placholder Image 2" class="product-frame">
					</div>
					<div class="product-details">
						<h1><strong>Bintang</strong> Tere Liye</h1>
						<p><strong>Navy, Size 18</strong></p>
						<!-- <p>Product Code - 232321939</p> -->
					</div>
					</div>
					<div class="price">26.000</div>
					<!-- <div class="quantity">
					<input type="number" value="4" min="1" class="quantity-field">
					</div> -->
					<!-- <div class="subtotal">104.00</div> -->
					<div class="remove">
					<button>Remove</button>
					</div>
				</div>
				<div class="basket-product">
					<div class="item">
					<div class="product-image">
						<img src="https://awsimages.detik.net.id/community/media/visual/2017/06/16/2769fd27-c3a2-4afb-a3c9-3ef087241901.jpg?w=700&q=90" alt="Placholder Image 2" class="product-frame">
					</div>
					<div class="product-details">
						<h1><strong>Bintang</strong> Tere Liye</h1>
						<p><strong>Navy, Size 10</strong></p>
						<p>Product Code - 232321939</p>
					</div>
					</div>
					<div class="price">26.000</div>
					<!-- <div class="quantity">
					<input type="number" value="1" min="1" class="quantity-field">
					</div> -->
					<!-- <div class="subtotal">26.00</div> -->
					<div class="remove">
					<button>Remove</button>
					</div>
				</div>
				</div>
				<aside>
				<div class="summary">
					<div class="summary-total-items"><span class="total-items"></span> Books in your Cart</div>
					<div class="summary-total">
					<div class="total-title">Total</div>
					<div class="total-value final-value" id="basket-total">130.000</div>
					</div>
					<div class="summary-checkout">
					<button class="checkout-cta">Go to Checkout</button>
					</div>
				</div>
				</aside>
			</main>
		</body>
		</div>

		<!-- .footer -->
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


<style>
	@charset "utf-8";

	@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700,600);

	html,
	html a {
	-webkit-font-smoothing: antialiased;
	text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
	}

	body {
	/* background-color: #fff; */
	color: #666;
	font-family: 'Open Sans', sans-serif;
	font-size: 62.5%;
	margin: 0 auto;
	}

	a {
	border: 0 none;
	outline: 0;
	text-decoration: none;
	}

	strong {
	font-weight: bold;
	}

	p {
	margin: 0.75rem 0 0;
	}

	h1 {
	font-size: 0.75rem;
	font-weight: normal;
	margin: 0;
	padding: 0;
	}

	input,
	button {
	border: 0 none;
	outline: 0 none;
	}

	button {
	background-color: #666;
	color: #fff;
	}

	button:hover,
	button:focus {
	background-color: #555;
	}

	img,
	.basket-module,
	.basket-labels,
	.basket-product {
	width: 100%;
	}

	input,
	button,
	.basket,
	.basket-module,
	.basket-labels,
	.item,
	.price,
	.quantity,
	.subtotal,
	.basket-product,
	.product-image,
	.product-details {
	float: left;
	}

	.price:before,
	.subtotal:before,
	.subtotal-value:before,
	.total-value:before,
	.promo-value:before {
	content: 'Rp.';
	}

	.hide {
	display: none;
	}

	main {
	clear: both;
	font-size: 0.75rem;
	margin: 0 auto;
	overflow: hidden;
	padding: 1rem 0;
	width: 960px;
	}

	.basket,
	aside {
	padding: 0 1rem;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	}

	.basket {
	width: 70%;
	}

	.basket-module {
	color: #111;
	}

	label {
	display: block;
	margin-bottom: 0.3125rem;
	}

	.promo-code-field {
	border: 1px solid #ccc;
	padding: 0.5rem;
	text-transform: uppercase;
	transition: all 0.2s linear;
	width: 48%;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
	-o-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
	}

	.promo-code-field:hover,
	.promo-code-field:focus {
	border: 1px solid #999;
	}

	.promo-code-cta {
	border-radius: 4px;
	font-size: 0.625rem;
	margin-left: 0.625rem;
	padding: 0.6875rem 1.25rem 0.625rem;
	}

	.basket-labels {
	border-top: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	margin-top: 1.625rem;
	}

	ul {
	list-style: none;
	margin: 0;
	padding: 0;
	}

	li {
	color: #111;
	display: inline-block;
	padding: 0.625rem 0;
	}

	li.price:before,
	li.subtotal:before {
	content: '';
	}

	.item {
	width: 55%;
	}

	.price,
	.quantity,
	.subtotal {
	width: 15%;
	}

	.subtotal {
	text-align: right;
	}

	.remove {
	bottom: 1.125rem;
	float: right;
	position: absolute;
	right: 0;
	text-align: right;
	width: 45%;
	}

	.remove button {
	background-color: transparent;
	color: #777;
	float: none;
	text-decoration: underline;
	text-transform: uppercase;
	}

	.item-heading {
	padding-left: 4.375rem;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	}

	.basket-product {
	border-bottom: 1px solid #ccc;
	padding: 1rem 0;
	position: relative;
	}

	.product-image {
	width: 35%;
	}

	.product-details {
	width: 65%;
	}

	.product-frame {
	border: 1px solid #aaa;
	}

	.product-details {
	padding: 0 1.5rem;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	}

	.quantity-field {
	background-color: #ccc;
	border: 1px solid #aaa;
	border-radius: 4px;
	font-size: 0.625rem;
	padding: 2px;
	width: 3.75rem;
	}

	aside {
	float: right;
	position: relative;
	width: 30%;
	}

	.summary {
	background-color: #eee;
	border: 1px solid #aaa;
	padding: 1rem;
	position: fixed;
	width: 250px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	}

	.summary-total-items {
	color: #666;
	font-size: 0.875rem;
	text-align: center;
	}

	.summary-subtotal,
	.summary-total {
	border-top: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	clear: both;
	margin: 1rem 0;
	overflow: hidden;
	padding: 0.5rem 0;
	}

	.subtotal-title,
	.subtotal-value,
	.total-title,
	.total-value,
	.promo-title,
	.promo-value {
	color: #111;
	float: left;
	width: 50%;
	}

	.summary-promo {
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
	}

	.promo-title {
	float: left;
	width: 70%;
	}

	.promo-value {
	color: #8B0000;
	float: left;
	text-align: right;
	width: 30%;
	}

	.summary-delivery {
	padding-bottom: 3rem;
	}

	.subtotal-value,
	.total-value {
	text-align: right;
	}

	.total-title {
	font-weight: bold;
	text-transform: uppercase;
	}

	.summary-checkout {
	display: block;
	}

	.checkout-cta {
	display: block;
	float: none;
	font-size: 0.75rem;
	text-align: center;
	text-transform: uppercase;
	padding: 0.625rem 0;
	width: 100%;
	}

	.summary-delivery-selection {
	background-color: #ccc;
	border: 1px solid #aaa;
	border-radius: 4px;
	display: block;
	font-size: 0.625rem;
	height: 34px;
	width: 100%;
	}

	@media screen and (max-width: 640px) {
	aside,
	.basket,
	.summary,
	.item,
	.remove {
		width: 100%;
	}
	.basket-labels {
		display: none;
	}
	.basket-module {
		margin-bottom: 1rem;
	}
	.item {
		margin-bottom: 1rem;
	}
	.product-image {
		width: 40%;
	}
	.product-details {
		width: 60%;
	}
	.price,
	.subtotal {
		width: 33%;
	}
	.quantity {
		text-align: center;
		width: 34%;
	}
	.quantity-field {
		float: none;
	}
	.remove {
		bottom: 0;
		text-align: left;
		margin-top: 0.75rem;
		position: relative;
	}
	.remove button {
		padding: 0;
	}
	.summary {
		margin-top: 1.25rem;
		position: relative;
	}
	}

	@media screen and (min-width: 641px) and (max-width: 960px) {
	aside {
		padding: 0 1rem 0 0;
	}
	.summary {
		width: 28%;
	}
	}

	@media screen and (max-width: 960px) {
	main {
		width: 100%;
	}
	.product-details {
		padding: 0 1rem;
	}
	}
</style>
			