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
							<li class="menu-item home current-menu-item"><a href="/home"><i class="icon-home"></i></a></li>
							<li class="menu-item"><a href="#" class="login-button">My Collection</a></li>
							<li class="menu-item"><a href="#" class="login-button">Purchase Now</a></li>
							<li class="menu-item"><a href="#" class="login-button">Publish Book</a></li>
							<li class="menu-item"><a href="/contactus">Contact Us</a></li>
							<li class="menu-item"><a href="/aboutus">About Us</a></li>
						</ul> <!-- .menu -->
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Search...">
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->
				</div> <!-- .container -->
			</div> <!-- .site-header -->

			<div class="home-slider">
				<ul class="slides">
					<li data-bg-image="https://cdn.idntimes.com/content-images/community/2018/03/cb7aa5c47fcd8b3d7d2755c4f3dfd11876f142f8-s2-n1-c6f36d7d2799dbf1df45abf2a28deee1.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Ebook Store Bookxcess</h2>
								<small class="slide-subtitle">$190.00</small>
								
								<p> Not Sure what to read next? Explore our catalog of public domain book with our publisher.</p>
								
								<!-- <a href="cart.html" class="button">Add to cart</a> -->
							</div>

							<img src="dummy/game-cover-1.jpg" class="slide-image">
						</div>
					</li>
					<li data-bg-image="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTao89zw5Dvfx7aF1AOa16bMGGGzYI0d0SRQg&usqp=CAU">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Ebook Store Bookxcess</h2>
								<small class="slide-subtitle">$190.00</small>
								
								<p> Not Sure what to read next? Explore our catalog of public domain book with our publisher.</p>
								
								<!-- <a href="cart.html" class="button">Add to cart</a> -->
							</div>

							<img src="dummy/game-cover-2.jpg" class="slide-image">
						</div>
					</li>
					<li data-bg-image="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ766FzZUlU7C6JTYx8CG9BmmceNBJxU30-NA&usqp=CAU">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">Ebook Store Bookxcess</h2>
								<small class="slide-subtitle">$190.00</small>
								
								<p> Not Sure what to read next? Explore our catalog of public domain book with our publisher.</p>
								
								<!-- <a href="cart.html" class="button">Add to cart</a> -->
							</div>

							<img src="dummy/game-cover-3.jpg" class="slide-image">
						</div>
					</li>
				</ul> <!-- .slides -->
			</div> <!-- .home-slider -->

			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header>
								<h2 class="section-title">New Release</h2>
								<a href="#" class="all">Show All</a>
							</header>


							
							<div class="product-list">
								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="https://awsimages.detik.net.id/community/media/visual/2017/06/16/2769fd27-c3a2-4afb-a3c9-3ef087241901.jpg?w=700&q=90" alt="Game 1"></a>
										</div>
										<h3 class="product-title"><a href="#"> </a></h3>
										<small class="price"></small>
										<p></p>
										<!-- <a href="cart.html" class="button">Add to cart</a> -->
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->
							


								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="https://awsimages.detik.net.id/community/media/visual/2017/06/16/2769fd27-c3a2-4afb-a3c9-3ef087241901.jpg?w=700&q=90" alt="Game 3"></a>
										</div>
										<h3 class="product-title"><a href="#">Bintang (Tere Liye)</a></h3>
										<small class="price">Rp20.000</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<!-- <a href="cart.html" class="button">Add to cart</a> -->
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->

								<div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="https://awsimages.detik.net.id/community/media/visual/2017/06/16/2769fd27-c3a2-4afb-a3c9-3ef087241901.jpg?w=700&q=90" alt="Game 4"></a>
										</div>
										<h3 class="product-title"><a href="#">Bintang (Tere Liye)</a></h3>
										<small class="price">Rp20.000</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<!-- <a href="cart.html" class="button">Add to cart</a> -->
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> <!-- .product -->

							</div> <!-- .product-list -->

						</section>

						<!-- <section>
							<header>
								<h2 class="section-title">promotion</h2>
								<a href="#" class="all">Show All</a>
							</header> -->

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
								
								
								<!-- <div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="dummy/game-6.jpg" alt="Game 2"></a>
										</div>
										<h3 class="product-title"><a href="#">Mortal Kombat X</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> .product -->
								
								
								<!-- <div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="dummy/game-7.jpg" alt="Game 3"></a>
										</div>
										<h3 class="product-title"><a href="#">Metal Gear Solid V</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> .product -->
								
								
								<!-- <div class="product">
									<div class="inner-product">
										<div class="figure-image">
											<a href="single.html"><img src="dummy/game-8.jpg" alt="Game 4"></a>
										</div>
										<h3 class="product-title"><a href="#">Nascar '14</a></h3>
										<small class="price">$19.00</small>
										<p>Lorem ipsum dolor sit consectetur adipiscing elit do eiusmod tempor...</p>
										<a href="cart.html" class="button">Add to cart</a>
										<a href="#" class="button muted">Read Details</a>
									</div>
								</div> .product -->
								
							<!-- </div> .product-list -->

						<!-- </section> -->
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

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
					<form action="{{route('auth2')}}" method="post">
						@csrf
						<input type="email" name="email" placeholder="Email...">
						<input type="password" name="password" placeholder="Password...">
						<input type="submit" value="Login">
					</form>
				</div> <!-- .column -->
				<div class="col-md-6">
					<h2 class="section-title">Create an account</h2>
					<form action="{{route('user/add')}}" method="post">
						@csrf
						@if(Session::has('error'))
							<b class="text-danger">{{ Session::get('error') }}</b>
						@endif
						<input type="text" name="name" placeholder="Name">
						<input type="email" name="email" placeholder="Email address...">
						<label for="">Role</label>
							<select name="role" id="" class="form-control">
								<option value="customer">Customer</option>
								<option value="publisher">Publisher</option>
							</select>
						<input type="password" name="password" placeholder="Password">
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