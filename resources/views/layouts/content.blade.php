<!-- HERO AREA START HERE -->
<section class="hero-area overly-bg" data-stellar-background-ratio=".9" style="background-image: url(images/hero.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-wrap">
                    <h2 class="hero-title"> Software, Websites, HTML Templates ,CMS Themes,PSD</h2>
                    <p class="hero-intro">Envatobd is specialize in creating some of the Best Free and Premium Applications Software and Websites, HTML Templates & Wordpress Themes,PSD</p>
                    <a href="{{url('/products')}}" class="ztheme-btn">View all Products</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HERO AREA END HERE -->

<!-- PRODUCT AREA START HERE -->
<section class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="promo-item-wrap">
                    <!-- Nav tabs -->
                    <ul class="ztheme-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#seller" aria-controls="seller" role="tab" data-toggle="tab">All Products</a>
                        </li>
                        <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">HOt Offer</a>
                        </li>
                        <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab"> New Items</a>
                        </li>
                        <li role="presentation"><a href="#free" aria-controls="free" role="tab" data-toggle="tab">Free</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="seller">
                            <div class="row">
                                <!-- Single Product Start -->
                                @foreach($data as $item)
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="{{asset('uploads/'.$item->thumbnail )}}" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="{{$item->demourl}}" target="_blank" >live preview</a>
{{--                                                        <a href="{{url('/productsdetails')}}" class="link-green">Item details</a>--}}
                                                        {{--<a href="/ad/<?php echo $item->id ?>/<?php echo str_replace(array(' ', '<', '>', '&', '/', '{', '}', '*'), array(' '),$item->ptitle) ?>/" title="<?php echo str_replace(array(' ', '<', '>', '&', '/', '{', '}', '*'), array(' '),$item->ptitle)." - Invitebd"; ?>">{{ str_limit($item->ptitle,$limit = 35, $end = '') }}</a></p>--}}
                                                        <a href="/ad/<?php echo $item->id ?>/<?php echo str_replace(array(' ', '<', '>', '&', '/', '{', '}', '*'), array(' '),$item->title) ?>/" title="<?php echo str_replace(array(' ', '<', '>', '&', '/', '{', '}', '*'), array(' '),$item->title)." - Envatobd"; ?>">{{ str_limit($item->title,$limit = 20, $end = '') }}</a>
                                                        {{--<a class="link-green" href="/ad/<?php echo $item->id?>/<?php echo str_replace('-',' ',$item->title) ?>"></a>--}}

{{--                                                        <a href="{{url('/productsdetails')}}" class="link-green">Item details</a>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="product-header">
                                            <h3 class="product-name"><a href="{{url('/productsdetails')}}">{{$item->title}}</a></h3>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="{{asset('assets/images/item2.jpg')}}" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="{{url('/productsdetails')}}">live preview</a>
                                                        <a href="{{url('/productsdetails')}}" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="product-header">
                                            <h3 class="product-name"><a href="{{url('/productsdetails')}}">DDot - Product Landing page PSD Template</a></h3>
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="{{asset('assets/images/item3.jpg')}}" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="{{url('/productsdetails')}}">live preview</a>
                                                        <a href="{{url('/productsdetails')}}" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="product-header">
                                            <h3 class="product-name"><a href="{{url('/productsdetails')}}">Dotapps – App Landing Page Template</a></h3>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="{{asset('assets/images/item4.jpg')}}" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="{{url('/productsdetails')}}">live preview</a>
                                                        <a href="{{url('/productsdetails')}}" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="product-header">
                                            <h3 class="product-name"><a href="{{url('/productsdetails')}}">Fairness - One Page Bootstrap Charity Template</a></h3>
                                                <span class="p-category">
                                                <a href="#">E-commerce / charity</a>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="{{asset('assets/images/item5.jpg')}}" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="{{url('/productsdetails')}}">live preview</a>
                                                        <a href="{{url('/productsdetails')}}" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="product-header">
                                            <h3 class="product-name"><a href="{{url('/productsdetails')}}">WINNER - Multi-Purpose HTML Template</a></h3>
                                                <span class="p-category">
                                                <a href="#">Multipurpose / Creative</a>
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="{{asset('assets/images/item6.jpg')}}" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </figure>

                                        <div class="product-header">
                                            <h3 class="product-name"><a href="product-details.html">Weddy - Wedding Planner PSD Template</a></h3>
                                                <span class="p-category">
                                                <a href="#">Wedding / Event</a>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                        <!-- BEST SELLTER TAB PANEL END -->

                        <!-- HOT TAB PANEL START -->
                        <div role="tabpanel" class="tab-pane fade" id="hot">
                            <div class="row">
                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/item2.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/bicycle.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/item4.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/item3.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                        <!-- HOT TAB PANEL END -->

                        <!-- NEW TAB PANEL START -->
                        <div role="tabpanel" class="tab-pane  fade" id="new">
                            <div class="row">
                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/item6.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/item2.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                        <!-- NEW TAB PANEL END -->

                        <!-- FREE TAB PANEL START -->
                        <div role="tabpanel" class="tab-pane fade" id="free">
                            <div class="row">
                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/item5.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-template">
                                        <figure>
                                            <img src="images/bicycle.jpg" alt="">
                                            <div class="product-caption">
                                                <div class="caption-cel">
                                                    <div class="product-link">
                                                        <a href="product-details.html">live preview</a>
                                                        <a href="product-details.html" class="link-green">Item details</a>
                                                    </div>
                                                </div>
                                            </div>
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
                                                <li class="p-status"><a href="#">$16.00</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->
                            </div>
                        </div>
                        <!-- FREE TAB PANEL END -->
                    </div>
                </div>
            </div>
        </div>
        <!-- VIEW ALL BUTTON -->
        <div class="row">
            <div class="col-md-12">
                <div class="view-btn-wrap text-center">
                    <a href="product.html" class="ztheme-btn red">view all products</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PRODUCT AREA END HERE -->

<!-- FEATEAR AREA START HERE -->
<section class="feature-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-feature">
                    <span class="feature-icon"><i class="fa fa-laptop"></i></span>
                    <h3 class="feature-heading">High Quality Products</h3>
                    <p>Product made BY professionals with 5 years of work experience.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-feature">
                    <span class="feature-icon"><i class="fa fa-clock-o"></i></span>
                    <h3 class="feature-heading">24/7 Customer Services</h3>
                    <p>Our Customer Services Managers will always help you.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-feature">
                    <span class="feature-icon"><i class="fa fa-thumbs-o-up"></i></span>
                    <h3 class="feature-heading">100% Satisfaction</h3>
                    <p>In case you are not satisfied with the purchased product, we’ll change it.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-feature">
                    <span class="feature-icon"><i class="fa fa-money"></i></span>
                    <h3 class="feature-heading">Money Back guarantee</h3>
                    <p>In case you change your mind you’ll get a refund in 30 days.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATEAR AREA END HERE -->

<!-- SERVICE AREA START HERE -->
<section class="service-area overly-bg" style="background-image: url(images/service.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12 spread-full hidden-xs">
                <figure class="service-thumb">
                    <img src="{{asset('assets/images/serv2.png')}}" alt="">
                </figure>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="service-details">
                    <h2 class="service-heading">Our Custom Service</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.</p>
                    <div class="service-list">
                        <ul>
                            <li class="ui"><a href="#">1. UI/UX Design (Website & Mobile</a>
                            </li>
                            <li class="psd"><a href="#">2. PSD To HTML</a>
                            </li>
                            <li class="wp"><a href="#">3. Wordpress Customization</a>
                            </li>
                            <li class="theme"><a href="#">4. Theme Development</a>
                            </li>
                            <li class="web"><a href="#">5. Responsive Web Development</a>
                            </li>
                            <li class="br"><a href="#">6. Branding Design</a>
                            </li>
                        </ul>
                    </div>
                    <button class="ztheme-btn red">create your order</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICE AREA END HERE -->

<!-- CLIENT AREA START HERE -->
<section class="client-area overly-bg" data-stellar-background-ratio="0.6" style="background-image: url(images/clien-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="client-wrap">
                    <div class="single-quote">
                        <div class="quote-thumb">
                            <img src="{{asset('assets/images/cl1.png')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium</p>
                        <div class="client-name">
                            <h5>albert Hunter</h5>
                            <span>CEO, Jhon Heart, Austalia</span>
                        </div>
                    </div>
                    <!-- Singel Quote End -->
                    <div class="single-quote">
                        <div class="quote-thumb">
                            <img src="{{asset('assets/images/cl1.png')}}" alt="">
                        </div>
                        <p>consectetur adipisicing elit. Optio omnis possimus accusamus autem odio, nisi iusto nihil illo harum, tempore soluta minus nemo ab at ipsa reprehenderit facilis officiis dolorum?</p>
                        <div class="client-name">
                            <h5>albert Hunter</h5>
                            <span>CEO, Jhon Heart, Austalia</span>
                        </div>
                    </div>
                    <!-- Singel Quote End -->
                    <div class="single-quote">
                        <div class="quote-thumb">
                            <img src="{{asset('assets/images/cl1.png')}}" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium</p>
                        <div class="client-name">
                            <h5>albert Hunter</h5>
                            <span>CEO, Jhon Heart, Austalia</span>
                        </div>
                    </div>
                    <!-- Singel Quote End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CLIENT AREA END HERE -->

<!-- BLOG AREA START HERE -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-heading text-center">
                    <h2>from our blog</h2>
                </div>
            </div>
            <!-- Single Blog -->
            <div class="col-md-3 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="{{asset('assets/images/blog1.jpg')}}" alt="">
                    </figure>
                    <div class="s-blog-detiails">
                        <div class="s-blog-meta">
                            <span>By: <a href="#">Admin</a></span>
                            <span>| <a href="#">02-April-2017</a></span>
                        </div>
                        <h3 class="s-blog-heading">
                            <a href="{{url('/singleblog')}}">9 Best Marketplace for Selling Design Online</a>
                        </h3>
                        <div class="blog-tags">
                            <span><a href="#">marketplace</a></span>
                            <span><a href="#">trends</a></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus...... </p>
                    </div>
                </div>
            </div>
            <!-- Single Blog -->
            <div class="col-md-3 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="{{asset('assets/images/blog2.jpg')}}" alt="">
                    </figure>
                    <div class="s-blog-detiails">
                        <div class="s-blog-meta">
                            <span>By: <a href="#">Admin</a></span>
                            <span>| <a href="#">02-April-2017</a></span>
                        </div>
                        <h3 class="s-blog-heading">
                            <a href="{{url('/singleblog')}}">7 Best Way for Facebook Marketing</a>
                        </h3>
                        <div class="blog-tags">
                            <span><a href="#">marketplace</a></span>
                            <span><a href="#">trends</a></span>
                        </div>
                        <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. bibendum velit ....... </p>
                    </div>
                </div>
            </div>
            <!-- Single Blog -->
            <div class="col-md-3 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="{{asset('assets/images/blog3.jpg')}}" alt="">
                    </figure>
                    <div class="s-blog-detiails">
                        <div class="s-blog-meta">
                            <span>By: <a href="#">Admin</a></span>
                            <span>| <a href="#">02-April-2017</a></span>
                        </div>
                        <h3 class="s-blog-heading">
                            <a href="{{url('/singleblog')}}">Successful Career with artical writing</a>
                        </h3>
                        <div class="blog-tags">
                            <span><a href="#">marketplace</a></span>
                            <span><a href="#">trends</a></span>
                        </div>
                        <p>Aliquam lorem ante, dapibus in, quis, feugiat a, tellus. Phasellus viverra nulla ut metus vriu laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel ....</p>
                    </div>
                </div>
            </div>
            <!-- Single Blog -->
            <div class="col-md-3 col-sm-6">
                <div class="single-blog">
                    <figure>
                        <img src="{{asset('assets/images/blog4.jpg')}}" alt="">
                    </figure>
                    <div class="s-blog-detiails">
                        <div class="s-blog-meta">
                            <span>By: <a href="#">Admin</a></span>
                            <span>| <a href="#">02-April-2017</a></span>
                        </div>
                        <h3 class="s-blog-heading">
                            <a href="{{url('/singleblog')}}">How to earn money from Youtube easily</a>
                        </h3>
                        <div class="blog-tags">
                            <span><a href="#">marketplace</a></span>
                            <span><a href="#">trends</a></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus...... </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BLOG AREA END HERE -->
