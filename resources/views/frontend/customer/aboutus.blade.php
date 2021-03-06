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
                                <li class="menu-item"><a href="/cart">Purchase Now</a></li>
                                <li class="menu-item"><a href="/contactuscust">Contact Us</a></li>
                                <li class="menu-item home current-menu-item"><a href="/aboutuscust">About Us</a></li>
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
        <div class="page" style="padding-top:30px;">
            <h2 style="text-align:center">Our Team</h2>
            <div class="row">
            <div class="column">
                <div class="card">
                <img src="data:image/png;base64,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" 
                alt="Jane" style="width:100%" >

                <div class="container">
                    <h2>Ali Abdulsamea Hussen</h2>
                    <p class="title">CEO & Founder</p>
                    <p>STATE POLYTECHNIC OF MALANG</p>
                    <p>Ali@example.com</p>
                    <!-- <p><button class="button">Contact</button></p> -->
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="data:image/png;base64,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" 
                alt="Mike" style="width:100%">

                <div class="container">
                    <h2>Herlangga Satria M. P</h2>
                    <p class="title">Art Director</p>
                    <p>STATE POLYTECHNIC OF MALANG</p>
                    <p>Angga@example.com</p>
                    <!-- <p><button class="button">Contact</button></p> -->
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="data:image/png;base64,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" 
                alt="John" style="width:100%">

                <div class="container">
                    <h2>Enggar Rahayu Safitri</h2>
                    <p class="title">Designer</p>
                    <p>STATE POLYTECHNIC OF MALANG</p>
                    <p>Enggar@example.com</p>
                    <!-- <p><button class="button">Contact</button></p> -->
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                <img src="data:image/png;base64,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" 
                alt="John" style="width:100%">

                <div class="container">
                    <h2>Ronio Prima Yudistira</h2>
                    <p class="title">Designer</p>
                    <p>STATE POLYTECHNIC OF MALANG</p>
                    <p>Prima@example.com</p>
                    <!-- <p><button class="button">Contact</button></p> -->
                </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="data:image/png;base64,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" 
                    alt="John" style="width:100%">

                <div class="container">
                    <h2>Salsabila Firdausy</h2>
                    <p class="title">Designer</p>
                    <p>STATE POLYTECHNIC OF MALANG</p>
                    <p>Firda@example.com</p>
                    <!-- <p><button class="button">Contact</button></p> -->
                </div>
                </div>
            </div>
            </div>
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
        body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        }

        html {
        box-sizing: border-box;
        }

        *, *:before, *:after {
        box-sizing: inherit;
        }

        .column {
        float: left;
        width: 20%;
        margin-bottom: 16px;
        padding: 0 8px;
        }

        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        }

        .about-section {
        padding: 50px;
        text-align: center;
        /* background-color: #474e5d; */
        /* color: white; */
        }

        .container {
        padding: 0 10px;
        }

        .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
        }

        .title {
        color: grey;
        }

        .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        }

        .button:hover {
        background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 75%;
                display: block;
            }
        }
    </style>
