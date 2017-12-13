@extends('layouts.master')

@section('title','Envatobd')

@section('head')
    @include('layouts.head')
@endsection
@section('header')
    @include('layouts.header')
@endsection
@section('content')
        <!-- ****************** Product List Section Start ****************** -->
<section class="HospitalFeature">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="2s">
                <h2 class="featured_Sec text-center"> Email Marketing System</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="{{asset('assets/images/em_01.png')}}">
                            <div class="carousel-caption">
                                <h3>Corporate Email System</h3>
                                <p>Corporate Email for Your Business</p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="{{asset('assets/images/em_01.png')}}">
                            <div class="carousel-caption">
                                <h3>Corporate Email System</h3>
                                <p>Print receipts for customers</p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="{{asset('assets/images/em_01.png')}}">
                            <div class="carousel-caption">
                                <h3>Corporate Email System</h3>
                                <p>Manage product pricing and discounts.</p>
                            </div>
                        </div><!-- End Item -->

                    </div><!-- End Carousel Inner -->

                    <!--<div id="#myCarousel" class="carousel slide" data-ride="#myCarousel">-->

                    <!--<ul class="carousel-indicators top">-->
                    <!--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
                    <!--<li data-target="#myCarousel" data-slide-to="1"></li>-->
                    <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
                    <!--</ul>-->
                    <!--</div>-->


                </div><!-- End Carousel -->
            </div>

            <div class="col-md-6 wow slideInRight">
                <iframe width="550" height="360" src="https://www.youtube.com/embed/fb8Yw8SK7nI" frameborder="5" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- ****************** Product List Section Start ****************** -->
<!-- ****************** Product Section Start ****************** -->
<section class="web_dev">
    <div class="container">
        <div class="product_cont text-center wow fadeInUp">
            <h3>Corporate Email System</h3>
            <p>Best Corporate Email for Your Business System In Bangladesh CB Products</p>
            <p class="border_bottom"></p>
        </div>
        <div class="row">
            <div class="col-md-6 web_cont wow fadeInUp">
                <h4 class="pos_descri text-center">Description of Corporate Email System</h4>
                <p>Our professional email hosting services is ideal for businesses or individuals looking for a reliable email solution featuring yourdomain@gmail.com</p>

                <p>Why choose yourdomain@gmail.com ?</p>

                <p>Gmail is Fast, Reliable, Accessible from around the world, and you never have to worry about backing up your email.</p>
                <p>Gmail for business is a professional email, online storage, shared calendars, video meetings and more. Built for business, designed for teams. We will do the necessary to create, edit & delete email account as per your request. For more details, please contact with our service specialist.</p>
                <ul>
                    <li>Yourdomain@gmail</li>
                    <li>1 user @1,000/-</li>
                    <li>10 user @8,000/-</li>
                    <li>50 user @25,000/-</li>
                    <li>1 year period</li>
                </ul>

            </div>

            <div class="col-md-6 web_cont wow fadeInUp">

                <h4 class="pos_descri text-center">Key Features of Gmail for Business Application</h4>
                <p>
                <ul>
                    <li>1. Business email addresses (name@yourcompany.com)</li>
                    <li>2. 1TB Space for each email</li>
                    <li>3. Google Video and voice calls</li>
                    <li>4. Google online calendars</li>
                    <li>5. Google online contact</li>
                    <li>6. Google Drive</li>
                    <li>7. 1TB of online storage for file syncing and sharing</li>
                    <li>8. Online text documents, spreadsheets and slides</li>
                </ul>
                </p>

            </div>
        </div>
    </div>
</section>
<!-- ****************** Product Section End ****************** -->

<!-- ****************** View Our Projects Section Start ****************** -->
<section class="ViewPoject OurPoject text-center wow fadeInUp" data-wow-duration="2s">
    <div class="container">
        <div class="row viewSec">
            <h3>View Our Businness</h3>
            <p>Our engineering team has built software for industry leaders, helping them outperform the competition, increase revenues, and automate mission-critical workflows. Let us help you achieve the same. Simply click the button below to view our projects.</p>
            <a href="more_businness.html"><button class="chinaBtn" type="submit">
                    <svg>
                        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                    </svg>
                    More Businness
                </button></a>
        </div>
    </div>
</section>
<!-- ****************** View Our Projects Section End ****************** -->
@endsection
@section('footer')
    @include('layouts.footer')
@endsection