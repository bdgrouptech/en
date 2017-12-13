@extends('layouts.master')

@section('title','App Development')

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
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="2s">
                <h2 class="featured_Sec text-center">Font Design and Video for App Development</h2>
            </div>
            <div class="col-md-12" >
                <img src="{{asset('assets/images/app_development_aph.png')}}" width="1130px" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 wow slideInLeft">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="{{asset('assets/images/app01.png')}}">
                            <div class="carousel-caption">
                                <h3>App Development</h3>
                                <p>Easily record sales transactions</p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="{{asset('assets/images/app01.png')}}">
                            <div class="carousel-caption">
                                <h3>App Development</h3>
                                <p>Print receipts for customers</p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="{{asset('assets/images/app01.png')}}">
                            <div class="carousel-caption">
                                <h3>App Development</h3>
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
            <h3>Mobile Application Development (Mobile App)</h3>
            <p>Best App Development In Bangladesh CB Products</p>
            <p class="border_bottom"></p>
        </div>
        <div class="row">
            <div class="col-md-6 web_cont wow fadeInUp">
                <h4 class="pos_descri text-center">Description of App Development</h4>
                <p>China Bangla IT  is one of the known mobile application development company that started making Android, Windows and iOS apps. We always provided best in class service in mobile app development outsourcing services till date. When you choose us, you are partnering with most cost-effective team that has been designing and developing feature-rich mobile apps.</p>
                <p>China Bangla IT  hires the most intelligent, proficient and tech-savvy mobile apps developers. We are expert in development of enterprise, e-commerce, educational and utility mobile apps. Our mobile app developers have experience of developing critical, data and performance intensive apps using cloud web services</p>

                <h4 class="pos_descri text-center">Android Development</h4>
                <p>Android is one of the most versatile open source mobile OS by Google that is run on a variety of Mobile Devices. Android application uses the versatile Google Android OS platform known for its intuitive and imaginative design, compatibility with multiple networks and the potential for game-changing applications.</p>

                <h4 class="pos_descri text-center">iPhone/iPad Development</h4>
                <p>China Bangla IT  is one of the leading Mobile Application development (Mobile Apps) company offering mobility solutions to its clientele with iPhone application development, iPad application development and Android application development.</p>
            </div>

            <div class="col-md-6 web_cont wow fadeInUp">
                <h4 class="pos_descri text-center">Why you need Mobile Application Development (Mobile Apps).</h4>
                <p>
                <ul>
                    <li>1. Develop a Mobile Product for millions of users</li>
                    <li>2. Solve a Business Problem with Mobility Solutions</li>
                    <li>3. Extend your Web based business to Mobile</li>
                </ul>
                </p>
                <p>Our team can help you with that. We suggest the right platform & solution for your requirement. Our team has good experience working on various categories of applications in iPhone/iPad and Android which includes:</p>

                <p>
                <ul>
                    <li>1. Office/Business application</li>
                    <li>2. Multimedia Application</li>
                    <li>3. Internet Application</li>
                    <li>4. Fun Application</li>
                    <li>5. Games</li>
                    <li>6. Utility application etc.</li>
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
            <a href="{{url('more_businness')}}"><button class="chinaBtn" type="submit">
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