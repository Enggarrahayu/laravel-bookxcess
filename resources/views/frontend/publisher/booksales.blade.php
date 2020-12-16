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
		
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
								<small class="site-description">Publish your book and let the world know!</small>
							</div>
						</a> <!-- #branding -->

						<div class="right-section pull-right">
							<!-- <a href="cart.html" class="cart"><i class="icon-cart"></i> Cart</a> -->
							<!-- <a href="#" class="login-button">Login/Register</a> -->
						</div> <!-- .right-section -->

						<div class="main-navigation">
							<button class="toggle-menu"><i class="fa fa-bars"></i></button>
							<ul class="menu">
                                <li class="menu-item"><a href="/publisherhome"><i class="icon-home"></i></a></li>
								<li class="menu-item"><a href="/publish">Publish Book</a></li>
								<li class="menu-item home current-menu-item"><a href="/booksales">Book Sales</a></li>
								<li class="menu-item"><a href="/contactuspub">Contact Us</a></li>
								<li class="menu-item"><a href="/aboutuspub">About Us</a></li>
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
                <div id="book_form">
                    <h3 style="text-align:center">Book Sales</h3>
                    <br/>
                <?php
                $conn = mysqli_connect("localhost","root","","db_bookxcess");
                if(!$conn){
                    echo "Error: Unable to connect to MySql";
                    die();
                }
                    $query="select * from tb_ebook";
                    $result = mysqli_query($conn, $query);
                    if($result){
                    ?>
                    <table>
                    <thead>
                        <tr>
                        <th>Book ID</th>
                        <th>Category</th>
                        <th>Published Data</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Downloadable</th>
						<th>Detail</th>
                        <th>Purchase amount (qty)</th>
                        <th>Purchase amount (Rp.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = mysqli_fetch_array($result)){
                        ?>
                        <tr>
                        <td><?php echo $row['ebook_ID']; ?></td>
                        <td><?php echo $row['ebook_category']; ?></td>
                        <td><?php echo $row['ebook_published_date']; ?></td>
                        <td><?php echo $row['ebook_title']; ?></td>
                        <td><?php echo $row['ebook_price']; ?></td>
                        <td><?php echo $row['ebook_type']; ?></td>
                        <td><?php echo $row['ebook_status']; ?></td>
                        <td><?php echo $row['ebook_downloadabe']; ?></td>
						<td> <a href="detail.blade.php?id=<?php echo $row['ebook_ID']; ?>">Detail</a>  </td>

                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                    <?php
                }
                ?>
                </div>
            </body>

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
                body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px;}
                #book_form{padding:50px;}
                label{display:inline-block; width:220px; }
                th, td{width:120px; text-align:left;}
            </style>