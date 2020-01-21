<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="logo">
                            <a href="{{route('index')}}"><img src="{{asset('images/logo/4.png')}}" alt="logo images"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="{{route('index')}}">Home</a></li>
                                <li class="drop"><a href="#">Categories</a>
                                    <ul class="dropdown mega_dropdown">
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="product-grid.html">Shop Pages</a>
                                            <ul class="mega__item">
                                                <li><a href="product-grid.html">Product Grid</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="product-grid.html">All categories</a>
                                            <ul class="mega__item">
                                                @foreach(App\Models\category:: orderBy('id','asc')->where('parent_id',NULL)->get() as $cat)
                                                <li><a href="#">{{$cat->category_name}}</a></li>
                                                {{--<li><a href="#">My Account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>--}}
                                                @endforeach
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                            <ul class="mega__item">
                                                <li><a href="#">Simple Product</a></li>
                                                <li><a href="#">Variable Product</a></li>
                                                <li><a href="#">Grouped Product</a></li>
                                                <li><a href="#">Downloadable Product</a></li>
                                                <li><a href="#">Simple Product</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                    </ul>
                                </li>
                                {{--<li class="drop"><a href="#">men</a>
                                    <ul class="dropdown mega_dropdown">
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="product-grid.html">Shop Pages</a>
                                            <ul class="mega__item">
                                                <li><a href="product-grid.html">Product Grid</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                            <ul class="mega__item">
                                                <li><a href="#">Category</a></li>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                        <!-- Start Single Mega MEnu -->
                                        <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                            <ul class="mega__item">
                                                <li><a href="#">Simple Product</a></li>
                                                <li><a href="#">Variable Product</a></li>
                                                <li><a href="#">Grouped Product</a></li>
                                                <li><a href="#">Downloadable Product</a></li>
                                                <li><a href="#">Simple Product</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Single Mega MEnu -->
                                    </ul>
                                </li>--}}
                                <li class="drop"><a href="#">Product</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('home.product-grid')}}">Product Grid</a></li>
                                        {{--<li><a href="product-details.html">Product Details</a></li>--}}
                                    </ul>
                                </li>
                                <li class="drop"><a href="blog.html">blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="drop"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="cart.html">Cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="product-grid.html">product grid</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('home.contact')}}">contact</a></li>
                            </ul>
                        </nav>

                        <div class="mobile-menu clearfix visible-xs visible-sm">
                            <nav id="mobile_dropdown">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="cart.html">Cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="{{route('home.contact')}}">contact</a></li>
                                            <li><a href="product-grid.html">product grid</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('home.contact')}}">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                        <div class="header__right">
                            <div class="header__search search search__open">
                                <a href="#"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <div class="header__account">
                                @if(Session ::has ('name'))
                                    {{--<a href="{{route('home.login-or-registration')}}"><i class="icon-user icons"></i></a>--}}
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ session()->get('name') }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Account</a>
                                            <a class="dropdown-item" href="#">Another</a>
                                            <a class="dropdown-item" href="{{route('home.logout')}}">Logout</a>
                                        </div>
                                    </div>
                                    @else
                                <a href="{{route('home.login-or-registration')}}"><i class="icon-user icons"></i></a>
                                @endif
                            </div>
                            <div class="htc__shopping__cart">
                                <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                <a href="#"><span class="htc__qua">2</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>
