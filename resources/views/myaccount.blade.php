@extends('layouts.master')

@section('title','My Account')

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
                    <h2>My account</h2>
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
                    <li class="breadcrumb-item active">My account</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB END HERE -->

<!-- CONTACT AREA START HERE -->
<main class="account-area main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="loging-wrap">
                    <h3>login</h3>
                    <form action="#">
                        <div class="form-group">
                            <label for="name">User Name or Email Address*</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password">
                        </div>
                        <div class="form-group form-inline">
                            <button class="ztheme-btn red">login</button>
                            <label class="inline"><input type="checkbox"> Remember me</label>
                        </div>
                        <p class="lost-pass"><a href="#">lost your Password</a></p>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="register-wrap">
                    <h3>register</h3>
                    <form action="#">
                        <div class="form-group">
                            <label for="name">Email Address*</label>
                            <input type="text">
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password">
                        </div>
                        <button class="ztheme-btn red">register</button>
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