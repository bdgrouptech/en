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
<section class="comming-soon-area">
    <div class="coming-top overly-bg" style="background-image: url(images/coming.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="coming-wrap">
                        <div class="c-logo">
                            <a href="index.html"><img src="images/logo.png" alt="">
                            </a>
                        </div>
                        <h2>Will be Back <span>soon</span></h2>
                        <p>Z-Theme is specialize in creating some of the Best Free and Premium Bootstrap PSD Templates, HTML Templates & Wordpress Themes</p>
                        <div class="comming-countown"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="coming-bottom">
        <form action="#" class="coming-form">
            <input type="email" placeholder="Your Email Here">
            <button class="ztheme-btn">subscribes</button>
        </form>
    </div>
</section>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection