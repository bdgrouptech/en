@extends('layouts.master')

@section('title','Envatobd')

@section('head')
    @include('layouts.head')
@endsection
@section('header')
    @include('layouts.header')
@endsection
@section('content')


<!-- PROMO START HERE -->
<div class="promo-parallax overly-bg" data-stellar-background-ratio="0.6" style="background-image: url(images/hero.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="promo-p-txt">
                    <h2>My cart</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PROMO END HERE -->

<!-- BREADCRUMB START HERE -->
<div class="about-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">cart</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB END HERE -->

<!-- CART AREA START HERE -->
<main class="cart-area main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="my-cart-wrap">
                    <div class="cart-header hidden-xs">
                        <div class="cart-product">
                            <p>Product</p>
                        </div>
                        <div class="cart-category">
                            <p>category</p>
                        </div>
                        <div class="cart-price">
                            <p>price</p>
                        </div>
                        <div class="cart-remove">
                            <p>remove</p>
                        </div>
                    </div> <!-- Cart Header End -->
                    <div class="cart-list">
                        <div class="single-cart">
                            <div class="single-cart-product">
                                <div class="cart-prev">
                                    <a href="product-details.html"><img src="images/item4.jpg" alt=""></a>
                                </div>
                                <div class="cart-txt">
                                    <h4><a href="product-details.html">Yourmax E-commerce HTML5 Template</a></h4>
                                    <p>Lorem ipsum dolor me took here sit neque accusamus...... </p>
                                </div>
                            </div>
                            <div class="single-cart-category hidden-xs">
                                <a href="#">HTML Template</a>
                            </div>
                            <div class="single-cart-price hidden-xs">
                                <p class="s-cart-price"><span>$</span>17</p>
                            </div>
                            <div class="single-cart-remove">
                                <a href="#"><span><i class="fa fa-times"></i></span></a>
                            </div>
                        </div> <!-- Single Cart End -->
                        <div class="single-cart">
                            <div class="single-cart-product">
                                <div class="cart-prev">
                                    <a href="product-details.html"><img src="images/bicycle.jpg" alt=""></a>
                                </div>
                                <div class="cart-txt">
                                    <h4><a href="product-details.html">DotBike - Bicycle E-commerce HTML5 Template</a></h4>
                                    <p>Lorem ipsum dolor me took here sit neque accusamus...... </p>
                                </div>
                            </div>
                            <div class="single-cart-category hidden-xs">
                                <a href="#">HTML Template</a>
                            </div>
                            <div class="single-cart-price hidden-xs">
                                <p class="s-cart-price"><span>$</span>17</p>
                            </div>
                            <div class="single-cart-remove">
                                <a href="#"><span><i class="fa fa-times"></i></span></a>
                            </div>
                        </div> <!-- Single Cart End -->
                        <div class="single-cart">
                            <div class="single-cart-product">
                                <div class="cart-prev">
                                    <a href="product-details.html"><img src="images/item2.jpg" alt=""></a>
                                </div>
                                <div class="cart-txt">
                                    <h4><a href="product-details.html">Headx Ecommerce HTML5 Template</a></h4>
                                    <p>Lorem ipsum dolor me took here sit neque accusamus...... </p>
                                </div>
                            </div>
                            <div class="single-cart-category hidden-xs">
                                <a href="#">HTML Template</a>
                            </div>
                            <div class="single-cart-price hidden-xs">
                                <p class="s-cart-price"><span>$</span>17</p>
                            </div>
                            <div class="single-cart-remove">
                                <a href="#"><span><i class="fa fa-times"></i></span></a>
                            </div>
                        </div> <!-- Single Cart End -->
                        <div class="single-cart">
                            <div class="single-cart-product">
                                <div class="cart-prev">
                                    <a href="product-details.html"><img src="images/item6.jpg" alt=""></a>
                                </div>
                                <div class="cart-txt">
                                    <h4><a href="product-details.html">Wedding HTML5 Template</a></h4>
                                    <p>Lorem ipsum dolor me took here sit neque accusamus...... </p>
                                </div>
                            </div>
                            <div class="single-cart-category hidden-xs">
                                <a href="#">HTML Template</a>
                            </div>
                            <div class="single-cart-price hidden-xs">
                                <p class="s-cart-price"><span>$</span>17</p>
                            </div>
                            <div class="single-cart-remove">
                                <a href="#"><span><i class="fa fa-times"></i></span></a>
                            </div>
                        </div> <!-- Single Cart End -->
                        <div class="cart-calculate">
                            <h4>cart subtotal</h4>
                            <p class="ca-price"><span>$</span>120</p>
                        </div>
                        <div class="cart-calculate">
                            <h4>shipping</h4>
                            <p class="ca-price"><span>$</span>20</p>
                        </div>
                        <div class="cart-calculate">
                            <h4>cart total</h4>
                            <p class="ca-price"><span>$</span>140</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<!-- CONTACT AREA END HERE -->

@endsection
@section('footer')
    @include('layouts.footer')
@endsection