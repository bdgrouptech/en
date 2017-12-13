<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- MAIN MENU AREA START -->
                <div class="main-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{asset('assets/images/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-10">
                                <div class="main-menu">
                                    <nav>
                                        <ul id="nav">
                                            <li><a href="{{'/'}}">Home</a>
                                            </li>
                                            <li><a href="{{url('/products')}}">Products</a>
                                                <ul class="sub-menu">
                                                    <li><a href="#"> Wordpress Themes</a>
                                                    </li>
                                                    <li><a href="#">HTML Templates</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="#">sub-category</a>
                                                                <ul class="sub-menu">
                                                                    <li><a href="#">sub-category</a>
                                                                    </li>
                                                                    <li><a href="#">sub-category</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">sub-category</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">PSD Templates</a>
                                                    </li>
                                                    <li><a href="#">Free Templates</a>
                                                    </li>
                                                    <li><a href="#">Graphic Design</a>
                                                    </li>
                                                    <li><a href="#">Logo Design</a>
                                                    </li>
                                                    <li><a href="#">Business Card</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{url('/faq')}}">Faq</a>
                                                    </li>
                                                    <li><a href="{{url('/about')}}">about</a>
                                                    </li>
                                                    <li><a href="{{url('/productsdetails')}}">product details</a>
                                                    </li>
                                                    <li><a href="{{url('/commingsoon')}}">Coming soon</a>
                                                    </li>
                                                    <li><a href="{{url('/error404')}}">404 Page</a>
                                                    </li>
                                                    <li><a href="{{url('/contact')}}">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{url('/blog')}}">Blog</a>
                                            </li>
                                            <li><a href="{{url('/contact')}}">support</a>
                                            </li>
                                            {{--<li><a  href="{{ url('/myaccount') }}">Login</a></li>--}}
                                            @if (Auth::check())
                                                <li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ url('/home')  }}">Home</a></li>
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout <span class="glyphicon glyphicon-alert"></span>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>
                                                            </a>
                                                        </li>
                                                        @else
                                                            <li><a  href="{{ url('/login') }}">Login</a></li>
                                                    </ul>
                                                </li>
                                            @endif


                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="cart-login hidden-sm hidden-xs">
                                    <ul>
                                        <li class="price-cart">
                                            <a href="#"><span><i class="fa fa-shopping-cart"></i></span> 3 Items-$0.00  </a>
                                            <ul class="cart-details">
                                                <li>
                                                    <div class="cart-img">
                                                        <img src="images/item5.jpg" alt="">
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">cart heading here</a></h4>
                                                        <span>$30.00</span>
                                                    </div>
                                                    <div class="cart-del">
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart-img">
                                                        <img src="images/item4.jpg" alt="">
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">cart heading here</a></h4>
                                                        <span>$30.00</span>
                                                    </div>
                                                    <div class="cart-del">
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart-img">
                                                        <img src="images/item2.jpg" alt="">
                                                    </div>
                                                    <div class="cart-info">
                                                        <h4><a href="#">cart heading here</a></h4>
                                                        <span>$30.00</span>
                                                    </div>
                                                    <div class="cart-del">
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <h5>Total Price</h5>
                                                    <p><span>$</span>90</p>
                                                </li>
                                                <li><a href="cart.html" class="ztheme-btn blue">go to cart</a>
                                                    <a href="checkout.html" class="ztheme-btn red">check out</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!--  Cart Login End -->
                        </div>
                    </div>
                </div>
                <!-- MAIN MENU AREA START -->

                <!-- MOBILE-MENU-AREA START -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <div class="m-logo">
                            <a href="#"><img src="images/logo.png" alt="">
                            </a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a>
                                </li>
                                <li><a href="product.html">Products</a>
                                    <ul class="sub-menu">
                                        <li><a href="#"> Wordpress Themes</a>
                                        </li>
                                        <li><a href="#">HTML Templates</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">sub-category</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">sub-category</a>
                                                        </li>
                                                        <li><a href="#">sub-category</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">sub-category</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PSD Templates</a>
                                        </li>
                                        <li><a href="#">Free Templates</a>
                                        </li>
                                        <li><a href="#">Graphic Design</a>
                                        </li>
                                        <li><a href="#">Logo Design</a>
                                        </li>
                                        <li><a href="#">Business Card</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#music">Freebie</a>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">Faq</a>
                                        </li>
                                        <li><a href="about.html">about</a>
                                        </li>
                                        <li><a href="product-details.html">product details</a>
                                        </li>
                                        <li><a href="comming-soon.html">Coming soon</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                </li>
                                <li><a href="contact.html">support</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MOBILE-MENU AREA END -->
</header>
<!-- HEADER END HERE -->