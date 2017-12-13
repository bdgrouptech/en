
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
                    <h2>contac us</h2>
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
                    <li class="breadcrumb-item"> page</li>
                    <li class="breadcrumb-item active"> contact us</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB END HERE -->




<!-- CONTACT AREA START HERE -->
<main class="contact-area main-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="contact-wrap">
                    <h3 class="contact-heading">say Hello!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>
                    <div id="form-messages"></div>
                    <form id="ajax-contact" method="post" action="http://dotthemes.com/demo/z-theme-preview/z-theme/mailer.php">
                        <div class="input_top">
                            <p>Your Name</p>
                            <input type="text" class="form_control" id="name" name="name" placeholder="Your Name" required/>
                        </div>

                        <div class="input_top">
                            <p>Email Address</p>
                            <input type="email" class="form_control" name="email" placeholder="Email address" required/>
                        </div>
                        <div class="textarea">
                            <p>Your Message</p>
                            <textarea id="message"  class="form_control" name="message" placeholder="Write your Message" required></textarea>
                        </div>

                        <button type="submit" id="submit" class="ztheme-btn red">send Message</button>
                    </form>
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












