<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
                        <ul>
                          <li>
                              <a><i class='fas fa-user-alt'></i> Hello, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>
                              <ul class="dropdown">
                                  <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
                              </ul>
                          </li>
                       </ul>
                    </div> <!-- .right-section -->

                        <div class="right-section pull-right">
                            <!-- <a href="cart.html" class="cart"><i class="icon-cart"></i> Cart</a> -->
                            <!-- <a href="#" class="login-button">Login/Register</a> -->
                        </div> <!-- .right-section -->

                        <div class="main-navigation">
                            <button class="toggle-menu"><i class="fa fa-bars"></i></button>
                            <ul class="menu">
                                <li class="menu-item home current-menu-item"><a href="/customerhome"><i class="icon-home"></i></a></li>
                                <li class="menu-item"><a href="products.html">My Collection</a></li>
                                <li class="menu-item">
                                    <?php
                                    $main_order = \App\Models\Order::where('user_ID', Auth::user()->id)->where('status',0)->first();
                                    $notif = \App\Models\OrderDetail::where('order_ID', $main_order->order_ID)->count();
                                    ?> 
                                    <a href="/cart"><i class="fa fa-shopping-cart" style="color:black"></i> <span class="badge badge-danger">{{ $notif }}</span>Purchase Now </a></li>
                                <li class="menu-item"><a href="/contactuscust">Contact Us</a></li>
                                <li class="menu-item"><a href="/aboutuscust">About Us</a></li>
                            </ul> <!-- .menu -->
                            <div class="search-form">
                                <label><img src="{{ asset('frontend/images/icon-search.png') }}"></label>
                                <input type="text" placeholder="Search...">
                            </div> <!-- .search-form -->

                            <div class="mobile-navigation"></div> <!-- .mobile-navigation -->
                        </div> <!-- .main-navigation -->
                    </div> <!-- .container -->
                </div> <!-- .site-header -->
            </div>
        </div>

        <!-- .konten -->
        <div class="container" >
            <div class="page" style="padding-top:30px;">
                <section>
                    <header>
                        <p style="text-align:center"> CUSTOMER PAGE </p> 
                        <h2 class="section-title">New Release</h2>
                        <a href="#" class="all">Show All</a>
                    </header>

                    <div class="product-list">

                        @foreach($data_ebook as $ebook)
                        <div class="product">
                            <div class="inner-product">
                                <div class="figure-image">
                                    <a href="single.html"><img src="{{ url('uploads') }}/{{ $ebook->ebook_image }}" alt="Game 1"></a>
                                </div>
                                <h3 class="product-title"><a href="#">{{ $ebook->ebook_title }}</a></h3>
                                <small class="price">{{ $ebook->ebook_price}}</small>
                                <p>{{ $ebook->short_desc }}</p>
                                <form method="post" action="{{ url('order') }}/{{ $ebook->ebook_ID }}">
                                    @csrf
                                        <input type="submit" style="float: right;" value="add to cart" class="button">
                                       <input style="float: left; width: 90px; height: 25px;" type="number" name="qty"> 
                                </form>
                                <a style="margin-top: 10px;" href="{{ url('detail') }}/{{ $ebook->ebook_ID }}" class="button muted">Read Details</a>
                            </div>
                        </div> <!-- .product -->
                        @endforeach
                    </div> <!-- .product-list -->
                </section>
            </div>
        </div> <!-- .container -->

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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </div>
         @include('sweetalert::alert')
    </body>
    </html>
 
 <style type="text/css">
    ul{
    padding: 0;
    list-style: none;
   
}
ul li{
    display: inline-block;
    position: relative;
    line-height: 21px;
    text-align: right;
}
ul li a{
    display: block;
    padding: 8px 25px;
    color: #333;
    text-decoration: none;
}
ul li a:hover{
    color: #fff;
    background: white;
}
ul li ul.dropdown{
    min-width: 125px; /* Set width of the dropdown */
    display: none;
    position: absolute;
    z-index: 999;
    left: 0;
}
ul li:hover ul.dropdown{
    display: block; /* Display the dropdown */
}
ul li ul.dropdown li{
    display: block;
}
</style>