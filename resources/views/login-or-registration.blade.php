<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details || Asbab - eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <style>
        .login-form{

        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
       @include('elements.header')
        <!-- End Header Area -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            @include('elements.search-panel')
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            @include('elements.cart-panel')
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url({{asset('product_images/cover-photo-2.jpeg')}}) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <a class="breadcrumb-item" href="product-grid.html">Products</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Product details</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--login or registration--}}
        <div class="login-register-area ptb-130" style="    text-align: center; margin-left: 290px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 ml-auto mr-auto" style="height: 670px;margin-top: 65px;">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav" style="display: flex;justify-content: center;">
                                <a class="active ship-to-another-trigger" data-toggle="tab" href="#lg1">
                                    <h3 style="font-size: 35px;    margin-right: 10px;"> LOGIN </h3>
                                </a>
                                <a data-toggle="tab" href="#lg2" class="ship-to-another-trigger">
                                    <h3 style="font-size: 35px;    margin-left: 10px;"> REGISTER </h3>
                                </a>
                            </div>
                            <div class="tab-content" style="margin-top: 30px;">
                                <div id="lg1" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-form">
                                                <div class="accordion__body">
                                                    <div class="shipinfo">
                                                        <h3 class="shipinfo__title">Shipping Address</h3>
                                                        <div style="display: ruby-base">
                                                            {{-------login form-----------------}}
                                                            <form action="{{route('home.user.login')}}" method="post" enctype="multipart/form-data">
                                                                {{csrf_field()}}

                                                                @if(Session::has('loginError'))
                                                                    <span class="alert alert-danger">
                                                                        {{ session()->get('loginError') }}
                                                                    </span>
                                                                    @endif

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <input type="text" placeholder="User name" name="username">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <input type="password" placeholder="Password" name="pass">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <button class="btn btn-success" type="submit"  style="width: 100%">Login</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane">
                                    <div class="login-form-container">
                                        <div class="login-form">
                                                <div class="accordion__body">
                                                    <div class="shipinfo">
                                                        <h3 class="shipinfo__title">Shipping Address</h3>
                                                       <div  style="display: ruby-base">
                                                           {{-----------------registration form---------------}}
                                                            <form action="{{route('home.user.registration')}}" method="post" enctype="multipart/form-data">
                                                                {{csrf_field()}}
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <input type="text" name="full_name" placeholder="Full Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <input type="text" name="email" placeholder="email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <input type="text" name="username" placeholder="User name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <input type="password" name="password" placeholder="password">
                                                                        </div>
                                                                    </div>
                                                                    {{--<div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <input type="password" name="confirm_password" placeholder="confirm password">
                                                                        </div>
                                                                    </div>--}}
                                                                    <div class="col-md-12">
                                                                        <div class="single-input">
                                                                            <button class="btn btn-success" type="submit"style="width: 100%">Register</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('elements.footer')
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{asset('js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- Waypoints.min.js. -->
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
