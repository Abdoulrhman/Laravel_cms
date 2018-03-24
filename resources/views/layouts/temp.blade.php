<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Empor | Blog</title>

    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/empor-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vcss/bootstrap-slider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/cubeportfolio.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootsnav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{asset('images/favicon.png')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="boxed">

<!--Pre LOADER-->
<div class="loader">
    <div id="cssload-wrapper">
        <div class="cssload-loader">
            <div class="cssload-line"></div>
            <div class="cssload-line"></div>
            <div class="cssload-line"></div>
            <div class="cssload-line"></div>
            <div class="cssload-line"></div>
            <div class="cssload-line"></div>
            <div class="cssload-subline"></div>
            <div class="cssload-subline"></div>
            <div class="cssload-subline"></div>
            <div class="cssload-subline"></div>
            <div class="cssload-subline"></div>
            <div class="cssload-loader-circle-1"><div class="cssload-loader-circle-2"></div></div>
            <div class="cssload-needle"></div>
            <div class="cssload-loading">loading</div>
        </div>
    </div>
</div>
<!--Pre LOader Ends-->

<!--HEADER STARTS-->
<header class="default">
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="side_item">
                <ul class="cols selection">
                    <li><a class="login_toggle" href="#">Login</a></li>
                    <li>
                        <div class="emp_entry">
                            <div class="emp_title">English</div>
                            <div class="list">
                                <a class="list-entry" href="javascript:void(0)">
                                    <img src="{{asset('images/us.png')}}" alt="us">United State
                                </a>
                                <div class="list-entry">
                                    Change currency:
                                    <form>
                                        <div class="currency">
                                            <select name="countrychose" id="countrychose">
                                                <option>$ USD</option>
                                                <option>$ USD</option>
                                                <option>$ USD$ USD</option>
                                                <option>$ USD</option>
                                            </select>
                                        </div>
                                    </form>
                                    Other Countries
                                </div>
                                <a class="list-entry" href="javascript:void(0)">
                                    <img src="{{asset('images/uk.png')}}" alt="uk"> United Kingdom
                                </a>
                                <a class="list-entry" href="javascript:void(0)">
                                    <img src="{{asset('images/france.png')}}" alt="France"> France
                                </a>
                                <a class="list-entry" href="javascript:void(0)">
                                    <img src="{{asset('images/australia.png')}}" alt="Australia"> Australia
                                </a>
                                <a class="list-entry" href="javascript:void(0)">
                                    <img src="{{asset('images/italia.png')}}" alt="Italia"> Italia
                                </a>
                                <a class="list-entry" href="javascript:void(0)">
                                    <img src="{{asset('images/duc.png')}}" alt="Deutschland"> Deutschland
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="cols">
                    <ul class="empr_nav">
                        <li><a href="#."><i class="icon-heart3"></i></a></li>
                        <li class="search_btn"><i class="icon-icons185"></i></li>
                        <li><a href="#."><i class="icon-icons9"></i></a></li>
                        <li><a href="javascript:void(0)" class="hamburger is-closed" data-toggle="offcanvas"><i class="icon-icons102"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo.png')}}" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="fadeIn" data-out="fadeOut">
                    <li><a href="blog.html">Home</a></li>
                    <li><a href="blog.html">Products</a></li>
                    <li><a href="blog.html">Shopping Cart</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Men</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="shop-recent1.html">Shop — Catalog</a></li>
                                                <li><a href="shop-recent2.html">Shop — Categories Grid</a></li>
                                                <li><a href="shop5.html">Shop — Product Category</a></li>
                                                <li><a href="shop-recent3.html">Shop — with Sidebar</a></li>
                                                <li><a href="wishlist.html">Shopping Cart</a></li>
                                                <li><a href="shop-cart.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Women</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="shop-recent1.html">Shop — Catalog</a></li>
                                                <li><a href="#">Shop — Categories Grid</a></li>
                                                <li><a href="#">Shop — with Sidebar</a></li>
                                                <li><a href="#">Shopping Cart</a></li>
                                                <li><a href="#">Checkout</a></li>
                                                <li><a href="shop-cart.html">Order Tracking</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Kids</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="contact.html">Contact  — V1</a></li>
                                                <li><a href="contact2.html">Contact  — V2</a></li>
                                                <li><a href="contact3.html">Contact  — V3</a></li>
                                                <li><a href="faq.html">Faq's</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Others</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="about-designer.html">About Designer</a></li>
                                                <li><a href="author-post.html">Author Posts</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="wishlist-empty.html">Wishlist Empty</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end col-3 -->
                                </div>
                                <!-- end row -->
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
</header>
<!--HEADER ENDS-->

<!--Shopping Cart-->
<div id="sidebar-wrapper">
    <ul class="nav sidebar-nav">
        <li class="tablecart">
            <div class="photo">
                <a href="#">
                    <img src="{{asset('images/tablecart1.jpg')}}" alt="">
                </a>
            </div>
            <div class="cartbody">
                <h5>Little Barrel in White</h5>
                <span>1 × $1,288.00</span>
                <i class="fa fa-close cross"></i>
            </div>
        </li>
        <li class="tablecart">
            <div class="photo">
                <a href="#">
                    <img src="{{asset('images/tablecart1.jpg')}}" alt="">
                </a>
            </div>
            <div class="cartbody">
                <h5>Little Barrel in White</h5>
                <span>1 × $1,288.00</span>
                <i class="fa fa-close cross"></i>
            </div>
        </li>
        <li class="tablecart">
            <div class="photo">
                <a href="#">
                    <img src="{{asset('images/tablecart1.jpg')}}" alt="">
                </a>
            </div>
            <div class="cartbody">
                <h5>Little Barrel in White</h5>
                <span>1 × $1,288.00</span>
                <i class="fa fa-close cross"></i>
            </div>
        </li>
        <li class="text-center margin40 top40">
            <div class="image-cart bottom10">
                <img src="{{asset('images/shopping-cart.png')}}" alt="">
            </div>
            <h4 class="text-uppercase">no products in the cart.</h4>
        </li>
    </ul>
    <div class="cart-bottom clearfix">
        <h5 class="pull-left top10 bottom10">SUBTOTAL</h5>
        <h5 class="pull-right top10 bottom10">$1,798.00</h5>
        <div class="clearfix"></div>
        <a class="btn btn_dark button_moema">view cart</a>
        <a class="btn btn_colored button_moema">Checkout</a>
    </div>
</div>
<!--Shopping Cart ends-->

<!-- Login starts -->
<div class="login_container fullscreen">
    <button class="close_login"><i class="fa fa-close"></i></button>
    <div class="row">
        <div class="col-sm-6">
            <div class="image"><img src="{{asset('images/login-container.jpg')}}" alt=""></div>
        </div>
        <div class="col-sm-6">
            <div class="contentform">
                <ol class="breadcrumb_simple text-center heading_space">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">My Wishlist</a></li>
                    <li class="active">My Cart</li>
                    <li><a href="#">Checkout</a></li>
                </ol>
                <div class="logintabbed bottom30">
                    <ul class="nav nav-tabs nav-justified heading_space" role="tablist">
                        <li role="presentation" class="active"><a href="#registered" aria-controls="registered" role="tab" data-toggle="tab">Already Registered</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">New to empor ?</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="registered">
                            <form class="callus">
                                <div class="form-group">
                                    <label>EMAIL ADDRESS</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>PASSWORD </label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="checkbox" name="check-box">
                                            <span>Remember Me</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="#" class="lost-pass">Lost your password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn_dark btn_full">login</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <form class="callus">
                                <div class="form-group">
                                    <label>Name </label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label>EMAIL ADDRESS</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>PASSWORD </label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn_dark btn_full">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="hr_head"><span>OR</span></div>
                <div class="share_with text-center top30">
                    <h5 class="bottom20">SIGN IN WITH...</h5>
                    <a href="#." class="facebook"><i class="icon-facebook-1"></i> Facebook </a>
                    <a href="#." class="twitter"><i class="icon-twitter-1"></i> twitter</a>
                    <a href="#." class="google"><i class="icon-google4"></i> google +</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login end -->


<!--Search-->
<div id="search">
    <button type="button" class="close">×</button>
    <form class="centered clearfix">
        <input type="search" value="" placeholder="Search here...."  required/>
        <button type="submit" class="btn-search"><i class="icon-icons185"></i></button>
    </form>
</div>



<main>

@yield('content')

</main>

<!--Footer Starts-->
<footer id="footer" class="padding_t footer clearfix">
    <div class="container footerBg">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="text-uppercase bottom10">Join Our Newsletter</h2>
                <p class="heading_space">Get 10% off your first purchase. by subscribing to our Newsletter.</p>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address" required>
                                <span class="input-group-btn">
                <button type="button"><i class="icon-arrow-right2"></i></button>
                </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <ul class="simple_breadcrumb padding">
                    <li><a href="#.">Shop Now</a></li>
                    <li><a href="#.">The Story</a></li>
                    <li><a href="#.">Lookbook</a></li>
                    <li><a href="#.">Life Style </a></li>
                    <li><a href="#.">Blog</a></li>
                    <li><a href="#.">Contact Us</a></li>
                    <li><a href="#.">Privacy Policy</a></li>
                </ul>
                <ul class="social">
                    <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                    <li><a href="#."><i class="icon-pinterest"></i></a></li>
                    <li><a href="#."><i class="icon-twitter"></i></a></li>
                    <li><a href="#."><i class="icon-google4"></i></a></li>
                    <li><a href="#."><i class="icon-instagram"></i></a></li>
                </ul>
                <p class="heading_space top15 copyright-text">Copyright &copy; 2017 Empor. All right reserved. Designed by<a href="#."> Brighthemes</a></p>
            </div>
        </div>
    </div>
</footer>
<!--Footer Ends-->

@yield('scripts')
<script src="{{asset('js/jquery.2.2.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootsnav.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery-countTo.js')}}"></script>
<script src="{{asset('js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('js/footer-reveal.min.js')}}"></script>
<script src="{{asset('js/jquery.matchHeight-min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/viedobox_video.js')}}"></script>
<script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/select.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('js/functions.js')}}"></script>
</body>
</html>