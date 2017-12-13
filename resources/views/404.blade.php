@extends('layouts.master')

@section('title','Envatobd Ltd')

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
                    <h2>404 page</h2>
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
                    <li class="breadcrumb-item active"> 404 page</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB END HERE -->

<!-- CONTACT AREA START HERE -->
<main class="error-area main-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="error-wrap">
                    <h3 class="error-heading">Oops! Page not found</h3>
                    <div class="error">404</div>
                    <p>Page cannot be found. But this search form is gonna help you!</p>
                    <form action="#" class="error-form">
                        <input type="text" placeholder="Search Keyword">
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