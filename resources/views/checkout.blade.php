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
<!-- PROMO START HERE -->
<div class="promo-parallax overly-bg" data-stellar-background-ratio="0.6" style="background-image: url(images/hero.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="promo-p-txt">
                    <h2>check out</h2>
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
                    <li class="breadcrumb-item active">check out</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB END HERE -->

<!-- CHECKOUT AREA START HERE -->
<main class="checkout-area main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="checkbox">
                    <h3 class="check-title">billing information</h3>
                    <form action="#" id="checkout-form">
                        <div class="form-group half">
                            <label for="name">First Name</label>
                            <input type="text" id="name" placeholder="Your First Name">
                        </div>
                        <div class="form-group half">
                            <label for="name">Last Name</label>
                            <input type="text" placeholder="Your Last Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input id="email" type="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="company">Your Company Name</label>
                            <input id="company" type="text" placeholder="Your Company Name">
                        </div>
                        <div class="form-group">
                            <label for="country">Your Country</label>
                            <select name="country1" id="country1">
                                <option value="0">Select your Country</option>
                                <option value="1">United States</option>
                                <option value="2">Bangladesh</option>
                                <option value="3">Seria</option>
                                <option value="4">Korea</option>
                            </select>
                        </div>
                        <div class="form-group half">
                            <label for="name">Your State/City</label>
                            <select name="city1" id="city1">
                                <option value="0">Select your City</option>
                                <option value="1">Texas</option>
                                <option value="2">Dhaka</option>
                                <option value="3">Damesk</option>
                                <option value="4">Seuel</option>
                            </select>
                        </div>
                        <div class="form-group half">
                            <label for="zip-code">Zip Code</label>
                            <input id="zip-code" type="text" placeholder="Input Zip Code...">
                        </div>
                        <div class="form-group">
                            <label for="address">Your Address</label>
                            <input id="address" type="text" placeholder="Your Address Here">
                        </div>
                        <div class="form-group">
                            <label for="message">Message (Optional)</label>
                            <textarea name="" id="message" cols="30" rows="5"></textarea>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="checkbox">
                    <h3 class="check-title">Shipping information</h3>
                    <form action="#" id="shiping-form">
                        <div class="form-group half">
                            <label for="name2">First Name</label>
                            <input type="text" id="name2" placeholder="Your First Name">
                        </div>
                        <div class="form-group half">
                            <label for="lastname2">Last Name</label>
                            <input id="lastname2" type="text" placeholder="Your Last Name">
                        </div>
                        <div class="form-group">
                            <label for="email2">Your Email</label>
                            <input id="email2" type="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="company2">Your Company Name</label>
                            <input id="company2" type="text" placeholder="Your Company Name">
                        </div>
                        <div class="form-group">
                            <label for="country">Your Country</label>
                            <select name="country2" id="country1">
                                <option value="0">Select your Country</option>
                                <option value="1">United States</option>
                                <option value="2">Bangladesh</option>
                                <option value="3">Seria</option>
                                <option value="4">Korea</option>
                            </select>
                        </div>
                        <div class="form-group half">
                            <label for="name">Your State/City</label>
                            <select name="city2" id="city1">
                                <option value="0">Select your City</option>
                                <option value="1">Texas</option>
                                <option value="2">Dhaka</option>
                                <option value="3">Damesk</option>
                                <option value="4">Seuel</option>
                            </select>
                        </div>
                        <div class="form-group half">
                            <label for="zip-code2">Zip Code</label>
                            <input id="zip-code2" type="text" placeholder="Input Zip Code...">
                        </div>
                        <div class="form-group">
                            <label for="address2">Your Address</label>
                            <input id="address2" type="text" placeholder="Your Address Here">
                        </div>
                        <div class="form-group">
                            <label for="message2">Message (Optional)</label>
                            <textarea name="" id="message2" cols="30" rows="5"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="check-order">
                    <h3 class="check-title">Cart Details</h3>
                    <ul>
                        <li>DotBike - Bicycle E-commerce PSD Template <span>$17</span></li>
                        <li>Ever  PSD Template <span>$17</span></li>
                        <li>Keymo E-commerce HTML Template <span>$17</span></li>
                        <li>Sub Total <span>$260</span></li>
                        <li>Shiping <span>$7</span></li>
                        <li>Cart Total <span>$267</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="payment-method">
                    <h3 class="check-title">Payment Method</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Paypal
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda sho
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Credit Card
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda sho
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Other
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    On cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda sho
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-checkbox">
                        <input type="checkbox">
                        I have read all terms  &amp; conditions
                    </div>
                    <div class="place-order">
                        <a href="#" class="ztheme-btn red">confirm Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- CHECKOUT AREA END HERE -->
@endsection
@section('footer')
    @include('layouts.footer')
@endsection