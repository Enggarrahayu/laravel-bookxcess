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
                                <li class="menu-item home current-menu-item"><a href="/contactuscust">Contact Us</a></li>
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
        <link href="contact-form.css" rel="stylesheet">
        <div class="fcf-body" style="padding-top:30px;">

            <div id="fcf-form">
                <div style="text-align:center">
                <h2>Contact Us</h2>
                <!-- <p>Swing by for a cup of coffee, or leave us a message:</p> -->
            </div>

            <form id="fcf-form-id" class="fcf-form-class" method="post" action="contact-form-process.php">
                
                <div class="fcf-form-group">
                    <label for="Name" class="fcf-label">Your name</label>
                    <div class="fcf-input-group">
                        <input type="text" id="Name" name="Name" class="fcf-form-control" required>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <label for="Email" class="fcf-label">Your email address</label>
                    <div class="fcf-input-group">
                        <input type="email" id="Email" name="Email" class="fcf-form-control" required>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <label for="Message" class="fcf-label">Your message</label>
                    <div class="fcf-input-group">
                        <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
                    </div>
                </div>

                <div class="fcf-form-group">
                    <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send Message</button>
                </div>

            </form>
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
    #fcf-form {
        display:block;
    }

    .fcf-body {
        margin: 0;
        font-family: -apple-system, Arial, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        /* background-color: #fff; */
        padding: 30px;
        padding-bottom: 10px;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        max-width: 100%;
    }

    .fcf-form-group {
        margin-bottom: 1rem;
    }

    .fcf-input-group {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%;
    }

    .fcf-form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        outline: none;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .fcf-form-control:focus {
        border: 1px solid #313131;
    }

    select.fcf-form-control[size], select.fcf-form-control[multiple] {
        height: auto;
    }

    textarea.fcf-form-control {
        font-family: -apple-system, Arial, sans-serif;
        height: auto;
    }

    label.fcf-label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    .fcf-credit {
        padding-top: 10px;
        font-size: 0.9rem;
        color: #545b62;
    }

    .fcf-credit a {
        color: #545b62;
        text-decoration: underline;
    }

    .fcf-credit a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .fcf-btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .fcf-btn {
            transition: none;
        }
    }

    .fcf-btn:hover {
        color: #212529;
        text-decoration: none;
    }

    .fcf-btn:focus, .fcf-btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .fcf-btn-primary {
        color: #fff;
        background-color: #ffd000;
        border-color:  #ffd000;
    }

    .fcf-btn-primary:hover {
        color: #fff;
        background-color:  #ffd000;
        border-color:  #ffd000;
    }

    .fcf-btn-primary:focus, .fcf-btn-primary.focus {
        color: #fff;
        background-color:  #ffd000;
        border-color:  #ffd000;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
    }

    .fcf-btn-lg, .fcf-btn-group-lg>.fcf-btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem;
    }

    .fcf-btn-block {
        display: block;
        width: 100%;
    }

    .fcf-btn-block+.fcf-btn-block {
        margin-top: 0.5rem;
    }

    input[type="submit"].fcf-btn-block, input[type="reset"].fcf-btn-block, input[type="button"].fcf-btn-block {
        width: 100%;
    }
</style>