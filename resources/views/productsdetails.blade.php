@extends('layouts.master')

@section('title','Products Details')

@section('head')
    @include('layouts.head')
@endsection
@section('header')
    @include('layouts.header')
@endsection
@section('content')


        <!-- ABOUT PROMO START HERE -->
<div class="product-promo overly-bg" data-stellar-background-ratio="0.6" style="background-image: url(images/hero.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="product-p-text">
                    <h2>50+ PSD, HTML Template & Wordpress Theme for Sale</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT PROMO END HERE -->

<!-- BREADCRUMB START HERE -->
<div class="about-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Product page</a>
                    </li>
                    <li class="breadcrumb-item active">Single product page</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB END HERE -->

<!-- PRODUCT DETAILS AREA START HERE -->
<main class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <!-- SINGLE PRODUCT START -->
                <div class="single-product">
                    <h2 class="product-title">DotBike - Bicycle E-commerce HTML5 Template</h2>
                    <div class="s-product-thumb">
                        <img src="images/sproduct.jpg" alt="">
                    </div>
                    <div class="demo-social">
                        <div class="p-demo-btn">
                            <a href="#" class="ztheme-btn">live demo <i class="fa fa-eye"></i></a>
                        </div>
                        <div class="p-demo-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li class="blue"><a href="#"><i class="fa fa-heart-o"></i> 250 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- S-product Tab Start -->
                    <div class="s-product-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#i-details" aria-controls="i-details" role="tab" data-toggle="tab">Item Details</a>
                            </li>
                            <li role="presentation"><a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">comments</a>
                            </li>
                            <li role="presentation"><a href="#support" aria-controls="support" role="tab" data-toggle="tab">support</a>
                            </li>
                            <li role="presentation"><a href="#buyer-rating" aria-controls="buyer-rating" role="tab" data-toggle="tab">buyer-rating</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="i-details">
                                <div class="item-detail-tab">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                    <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                                    <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,</p>
                                    <ul class="item-details-list">
                                        <li>Nullam a lectus mattis, viverra sapien eget</li>
                                        <li>Phasellus vulputate urna</li>
                                        <li>Aenean viverra est eu lacus tempor rutrum.</li>
                                        <li>Phasellus vitae orci sed enim semper interdum vitae</li>
                                        <li>Donec in orci et diam viverra maximus.</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
                                    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean feugiat a,</p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="comments">
                                <!-- PRODUCTS COMMENT -->
                                <div class="comment-area">
                                    <ol class="comment-wrap">
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-thumb">
                                                    <img src="images/comment.jpg" alt="">
                                                </div>
                                                <div class="comment-txt">
                                                    <h4 class="name">Denise Lopez <a href="#">04 April 2017</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                    <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                </div>
                                            </div>
                                            <ol class="child">
                                                <li>
                                                    <div class="single-comment">
                                                        <div class="comment-thumb">
                                                            <img src="images/comment2.jpg" alt="">
                                                        </div>
                                                        <div class="comment-txt">
                                                            <h4 class="name">Denise Lopez <a href="#">04 April 2017</a></h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                            <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-comment">
                                                        <div class="comment-thumb">
                                                            <img src="images/comment2.jpg" alt="">
                                                        </div>
                                                        <div class="comment-txt">
                                                            <h4 class="name">Denise Lopez <a href="#">04 April 2017</a></h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                            <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-thumb">
                                                    <img src="images/comment.jpg" alt="">
                                                </div>
                                                <div class="comment-txt">
                                                    <h4 class="name">Denise Lopez <a href="#">04 April 2017</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                    <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-thumb">
                                                    <img src="images/comment.jpg" alt="">
                                                </div>
                                                <div class="comment-txt">
                                                    <h4 class="name">Denise Lopez <a href="#">04 April 2017</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                    <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <!-- PRODUCTS COMMENT -->

                                <!-- ADD A COMMENT -->
                                <div class="add-comment">
                                    <h3>leave comment</h3>
                                    <div class="ac-wrap">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                    <button class="ztheme-btn red">submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="support">
                                <div class="item-support">
                                    <h3>Need Support?</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem praesentium nisi, deserunt fugit eius cupiditate sit similique quia magni rerum aperiam cum veniam a, omnis accusantium, laboriosam reiciendis, explicabo facilis?</p>
                                    <a href="contact.html" class="ztheme-btn red">support</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="buyer-rating">
                                <!-- BUYER RATINGS -->
                                <div class="comment-area">
                                    <ol class="comment-wrap">
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-thumb">
                                                    <img src="images/cl1.jpg" alt="">
                                                </div>
                                                <div class="comment-txt">
                                                    <h4 class="name">Joy Root <a href="#">05 April 2017</a></h4>
                                                    <p>I have recent bought the template. Its a fantastic template on Marketplace. ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                    <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-thumb">
                                                    <img src="images/comment.jpg" alt="">
                                                </div>
                                                <div class="comment-txt">
                                                    <h4 class="name">Denise Lopez <a href="#">04 April 2017</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                    <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-thumb">
                                                    <img src="images/comment.jpg" alt="">
                                                </div>
                                                <div class="comment-txt">
                                                    <h4 class="name">Denise Lopez <a href="#">04 April 2017</a></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur.</p>
                                                    <a href="#" class="comment-btn"><i class="fa fa-reply" aria-hidden="true"></i>reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-thumb">
                                                <img src="images/comment2.jpg" alt="">
                                            </div>
                                            <div class="pro-comment">
                                                <form action="#">
                                                    <textarea name="" id="" cols="30" rows="4" placeholder="Write your comment"></textarea>
                                                    <button class="ztheme-btn red">Post Comment</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                                <!-- BUYER RATINGS -->
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB END -->
                </div>
                <!-- SINGLE PRODUCT END -->
            </div>
            <div class="col-md-4 col-sm-12">
                <aside class="product-sidebar">
                    <div class="product-widget">
                        <a href="#" class="currency">$17.00</a>
                        <div class="price-info">
                            <ul class="price-feature">
                                <li>Regilar License</li>
                                <li>6 Month support & update</li>
                                <li>Mobile responsive</li>
                            </ul>
                            <div class="price-form">
                                <form action="#">
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="a" name="checked" checked=""> Extend support to 12 months.........<span>$20</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="a" name="checked" checked=""> Ready-To-Use Website..................<span>$100</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="a" name="checked" checked=""> Converting to Wordpress.............<span>$120</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" value="a" name="checked" checked=""> 1 year hosting.................................<span>$40</span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <a href="#" class="ztheme-btn red">buy now</a>
                        </div>
                    </div>
                    <div class="product-widget">
                        <div class="sells-number">
                            <h3><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span>25</span> sells</h3>
                        </div>
                    </div>
                    <div class="product-widget">
                        <div class="pay-method">
                            <img src="images/p-method.png" alt="">
                        </div>
                    </div>

                    <div class="product-widget">
                        <h3 class="prodect-info-heading">item information</h3>
                        <div class="prodect-information">
                            <ul>
                                <li>
                                    <span class="info-name">item released</span>
                                    <label>:</label>
                                    <span class="info-value"> 21 September 16</span>
                                </li>
                                <li>
                                    <span class="info-name">Category</span>
                                    <label>:</label>
                                    <span class="info-value">E-commerces</span>
                                </li>
                                <li>
                                    <span class="info-name">Layout</span>
                                    <label>:</label>
                                    <span class="info-value">Responsive</span>
                                </li>
                                <li>
                                    <span class="info-name">Compatible browsers</span>
                                    <label>:</label>
                                    <span class="info-value">IE9, IE10, IE11, Fire fox, Safari, Opera, Chrome, Edge</span>
                                </li>

                                <li>
                                    <span class="info-name">Bootstrap</span>
                                    <label>:</label>
                                    <span class="info-value"> Bootstrap 3.x</span>
                                </li>
                                <li>
                                    <span class="info-name">Columns</span>
                                    <label>:</label>
                                    <span class="info-value">4+</span>
                                </li>
                                <li>
                                    <span class="info-name">Documentation</span>
                                    <label>:</label>
                                    <span class="info-value">Unrated</span>
                                </li>
                                <li>
                                    <span class="info-name">Tags</span>
                                    <label>:</label>
                                    <span class="info-value">bicycle, Bicycle Shop, bike, bike accessories, bootstrap, clean, e-commerce, multipurpose, online shop, professional, responsive.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>
<!-- PRODUCT DETAILS AREA END HERE -->

<!-- RELATED PRODUCT START -->
<div class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="related-p-heading">
                    <h3>Related Product</h3>
                </div>
                <div class="row">
                    <div class="related-wrap">
                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/item2.jpg" alt="">
                                </figure>

                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/item3.jpg" alt="">
                                </figure>
                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/item4.jpg" alt="">
                                </figure>
                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/item5.jpg" alt="">
                                </figure>
                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/item3.jpg" alt="">
                                </figure>
                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/item5.jpg" alt="">
                                </figure>
                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/bicycle.jpg" alt="">
                                </figure>
                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->

                        <!-- Single Product Start -->
                        <div class="col-md-12">
                            <div class="product-template">
                                <figure>
                                    <img src="images/item5.jpg" alt="">
                                </figure>
                                <div class="product-header">
                                    <h3 class="product-name"><a href="product-details.html">DotBike - Bicycle E-commerce PSD Template</a></h3>
                                        <span class="p-category">
                                        <a href="#">E-commerce / Creative</a>
                                    </span>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i>psd
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>250
                                            </a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i>50
                                            </a>
                                        </li>
                                        <li class="p-status"><a href="#">free</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- RELATED PRODUCT END -->



@endsection
@section('footer')
    @include('layouts.footer')
@endsection
