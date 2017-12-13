<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <title>User informations Form </title>
    <!-- set your website meta description and keywords -->
    <meta name="description" content="Add your website description here">
    <meta name="keywords" content="Add your website keywords here">
    <!-- set your website favicon icon -->
    <link href="favicon.html" rel="icon">

    <!-- Bootstrap Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/userdashboard/css/bootstrap.min.css')}}">
    <!-- Font Awesome Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/userdashboard/css/font-awesome.min.css')}}">
    <!-- bootstrap-datepicker Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/userdashboard/css/bootstrap-datepicker3.min.css')}}">
    <!-- sweetalert Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/userdashboard/css/sweetalert.css')}}" type="text/css">
    <!-- Template Main Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/userdashboard/css/reg-form.css')}}" type="text/css">
</head>

<body>
<div class="signupForm-section wrapper">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-wrap clearfix">
                            <h2 class="form-title">User informations Form</h2>
                            <div class="col-sm-6 col-sm-offset-3">
                                <form id="signUpForm" name="signUpForm" data-toggle="validator" class="signUpForm"  enctype="multipart/form-data">
                                    <div class="signUpForm-step-holder">

                                        <div id="section-1" class="signUpForm-step-wrap">
                                            <h3 class="section-title">Step 1 of 4</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line" style="width: 0%;"></div>
                                                    </div>
                                                    <!-- Step 1 -->
                                                    <div class="form-layer-step active">
                                                        <div class="form-layer-step-icon"><i class="fa fa-unlock-alt"></i></div>
                                                        <p>Account</p>
                                                    </div>
                                                    <!-- Step 1 -->

                                                    <!-- Step 2 -->
                                                    <div class="form-layer-step">
                                                        <div class="form-layer-step-icon"><i class="fa fa-user"></i></div>
                                                        <p>Personal</p>
                                                    </div>
                                                    <!-- Step 2 -->

                                                    <!-- Step 3 -->
                                                    <div class="form-layer-step">
                                                        <div class="form-layer-step-icon"><i class="fa fa-credit-card-alt"></i></div>
                                                        <p>Payment Info</p>
                                                    </div>
                                                    <!-- Step 3 -->

                                                    <!-- Step 4 -->
                                                    <div class="form-layer-step">
                                                        <div class="form-layer-step-icon"><i class="fa fa-check"></i></div>
                                                        <p>Confirm</p>
                                                    </div>
                                                    <!-- Step 4 -->
                                                </div>
                                                <h3 class="section-form-title">Account Information</h3>
                                                @if($user)
                                                <div class="help-block with-errors mandatory-error"></div>
                                                <div class="form-group validuname">
                                                    <input class="form-control" value="{{$user->name}}" name="uname" id="uname" type="text" placeholder="UserName*" required data-error="Please enter UserName">
                                                    <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validemail">
                                                    <input class="form-control" value="{{$user->email}}" name="email" id="email" type="email" placeholder="Email*" required data-error="Please enter valid email">
                                                    <div class="input-group-icon"><i class="fa fa-envelope"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validpass">
                                                    <input class="form-control" value="{{$user->password}}" name="pass" id="pass" type="password" placeholder="Password* at least 6 character" required data-error="Please enter password">
                                                    <div class="input-group-icon"><i class="fa fa-key"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" value="{{$user->password}}" name="cpass" id="cpass" type="password" placeholder="Confirm Password*" required data-error="Please retype password">
                                                    <div class="input-group-icon"><i class="fa fa-key"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                @endif
                                                <div class="form-group signUpForm-step-1">
                                                    <button class="btn btn-default disable" type="button">Are you ready!</button>
                                                    <button class="btn btn-custom pull-right" onclick="nextStep2()" type="button">Next <span class="fa fa-arrow-right"></span></button>
                                                </div>
                                            </fieldset>
                                        </div><!-- end section -->

                                        <div id="section-2" class="signUpForm-step-wrap slide-right">
                                            <h3 class="section-title">Step 2 of 4</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line" style="width: 37.25%;"></div>
                                                    </div>
                                                    <!-- Step 1 -->
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i class="fa fa-unlock-alt"></i></div>
                                                        <p>Account</p>
                                                    </div>
                                                    <!-- Step 1 -->

                                                    <!-- Step 2 -->
                                                    <div class="form-layer-step active">
                                                        <div class="form-layer-step-icon"><i class="fa fa-user"></i></div>
                                                        <p>Personal</p>
                                                    </div>
                                                    <!-- Step 2 -->

                                                    <!-- Step 3 -->
                                                    <div class="form-layer-step">
                                                        <div class="form-layer-step-icon"><i class="fa fa-credit-card-alt"></i></div>
                                                        <p>Payment Info</p>
                                                    </div>
                                                    <!-- Step 3 -->

                                                    <!-- Step 4 -->
                                                    <div class="form-layer-step">
                                                        <div class="form-layer-step-icon"><i class="fa fa-check"></i></div>
                                                        <p>Confirm</p>
                                                    </div>
                                                    <!-- Step 4 -->
                                                </div>
                                                <h3 class="section-form-title">Personal Information</h3>
                                                <div class="help-block with-errors mandatory-error"></div>

                                                <div class="form-group validfname">
                                                    <input class="form-control" name="fname" id="fname" type="text" placeholder="First Name*" required data-error="Please enter First Name">
                                                    <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validlname">
                                                    <input class="form-control" name="lname" id="lname" type="text" placeholder="Last Name*" required data-error="Please enter Last Name">
                                                    <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validgender">
                                                    <select class="form-control" name="gender" id="gender" title="" required data-error="Please Select Gender">
                                                        <option value="">--- Select Your Gender* ---</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Femal">Female</option>
                                                    </select>
                                                    <div class="input-group-icon"><i class="fa fa-mars"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div id="date-of-birth" class="form-group validbirthdate">
                                                    <input class="form-control" name="birthdate" id="birthdate" type="text" placeholder="Date Of Birth*" required data-error="Please enter Date Of Birth">
                                                    <div class="input-group-icon"><i class="fa fa-calendar"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validaddress">
                                                    <input class="form-control" name="address" id="address" type="text" placeholder="Address*" required data-error="Please enter address">
                                                    <div class="input-group-icon"><i class="fa fa-map-marker"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validphone">
                                                    <input class="form-control" name="phone" id="phone" type="text" placeholder="Phone*" required data-error="Please enter valid phone">
                                                    <div class="input-group-icon"><i class="fa fa-phone"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validpreferedcontact">
                                                    <strong>Prefered Contact Method*: </strong>
                                                    <label class="radio-inline"><input type="radio" name="preferedcontact" id="preferedcontact1" value="email">email</label>
                                                    <label class="radio-inline"><input type="radio" name="preferedcontact" id="preferedcontact2" value="Phone">Phone</label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <h3 class="section-form-title">Profile Image</h3>
                                                <div class="form-group attachmentFile">
                                                    <label class="input-group-btn">
															<span class="btn">
																Browse&hellip; <input name="userfile" id="userfile" type="file">
															</span>
                                                    </label>
                                                    <input type="text" id="attachedFile" class="form-control" placeholder="Browse to select file" readonly>
                                                </div><!-- end form-group -->
                                                <div class="form-group signUpForm-step-2">
                                                    <button class="btn btn-custom" type="button" onclick="previousStep1()"><span class="fa fa-arrow-left"></span> Back</button>
                                                    <button class="btn btn-custom pull-right" type="button" onclick="nextStep3()">Next <span class="fa fa-arrow-right"></span></button>
                                                </div>
                                            </fieldset>
                                        </div><!-- end section -->

                                        <div id="section-3" class="signUpForm-step-wrap slide-right">
                                            <h3 class="section-title">Step 3 of 4</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line" style="width: 62.25%;"></div>
                                                    </div>
                                                    <!-- Step 1 -->
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i class="fa fa-unlock-alt"></i></div>
                                                        <p>Account</p>
                                                    </div>
                                                    <!-- Step 1 -->

                                                    <!-- Step 2 -->
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i class="fa fa-user"></i></div>
                                                        <p>Personal</p>
                                                    </div>
                                                    <!-- Step 2 -->

                                                    <!-- Step 3 -->
                                                    <div class="form-layer-step active">
                                                        <div class="form-layer-step-icon"><i class="fa fa-credit-card-alt"></i></div>
                                                        <p>Payment Info</p>
                                                    </div>
                                                    <!-- Step 3 -->

                                                    <!-- Step 4 -->
                                                    <div class="form-layer-step">
                                                        <div class="form-layer-step-icon"><i class="fa fa-check"></i></div>
                                                        <p>Confirm</p>
                                                    </div>
                                                    <!-- Step 4 -->
                                                </div>

                                                <h3 class="section-title">Payment Details: </h3>
                                                <div class="help-block with-errors mandatory-error"></div>
                                                <div class="form-group validpaymenttype">
                                                    <select class="form-control" name="paymenttype" id="paymenttype" title="" required data-error="Please Select Payment Type">
                                                        <option value="">--- Select Your Payment Type* ---</option>
                                                        <option value="Master Card">Master Card</option>
                                                        <option value="Visa Card">Visa Card</option>
                                                    </select>
                                                    <div class="input-group-icon"><i class="fa fa-mars"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validhname">
                                                    <input class="form-control" value="***********************" name="hname" id="hname" type="text" placeholder="Card Holder Name*" required data-error="Please enter Card Holder Name">
                                                    <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validcardnumber">
                                                    <input class="form-control" value="***********************" name="cardnumber" id="cardnumber" type="text" pattern="\d*" placeholder="Card Number*" required data-error="Please enter valid card number">
                                                    <div class="input-group-icon"><i class="fa fa-credit-card"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group validcvc">
                                                    <input class="label-control" value="1234567891012345" name="cvc" id="cvc" type="text"  maxlength="3" pattern="\d*" placeholder="CVC*" required data-error="Please enter CVC">
                                                    <div class="input-group-icon"><i class="fa fa-credit-card"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div id="sandbox-container2" class="form-group validexpirydate">
                                                    <input class="form-control" value="123" name="expirydate" id="expirydate" type="text" placeholder="Expiry Date*" required data-error="Please enter Expiry Date">
                                                    <div class="input-group-icon"><i class="fa fa-calendar"></i></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group validagree">
                                                    <div class="checkbox">
                                                        <label><input name="aggre" id="aggre" value="1" type="checkbox">Aggre with terms &amp; conditions</label>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group signUpForm-step-3">
                                                    <button class="btn btn-custom" type="button" onclick="previousStep2()"><span class="fa fa-arrow-left"></span> Back</button>
                                                    <button class="btn btn-custom pull-right" type="button" onclick="nextStep4()">Next <span class="fa fa-arrow-right"></span></button>
                                                </div>
                                            </fieldset>
                                        </div><!-- end section -->

                                        <div id="section-4" class="signUpForm-step-wrap review-submit-section slide-right">
                                            <h3 class="section-title">Step 4 of 4: Review &amp; Submit</h3>
                                            <fieldset>
                                                <div class="form-layer-steps form-layer-tolal-steps-4">
                                                    <div class="form-layer-progress">
                                                        <div class="form-layer-progress-line" style="width: 100%;"></div>
                                                    </div>
                                                    <!-- Step 1 -->
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i class="fa fa-unlock-alt"></i></div>
                                                        <p>Account</p>
                                                    </div>
                                                    <!-- Step 1 -->

                                                    <!-- Step 2 -->
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i class="fa fa-user"></i></div>
                                                        <p>Personal</p>
                                                    </div>
                                                    <!-- Step 2 -->

                                                    <!-- Step 3 -->
                                                    <div class="form-layer-step activated">
                                                        <div class="form-layer-step-icon"><i class="fa fa-credit-card-alt"></i></div>
                                                        <p>Payment Info</p>
                                                    </div>
                                                    <!-- Step 3 -->

                                                    <!-- Step 4 -->
                                                    <div class="form-layer-step active">
                                                        <div class="form-layer-step-icon"><i class="fa fa-check"></i></div>
                                                        <p>Confirm</p>
                                                    </div>
                                                    <!-- Step 4 -->
                                                </div>
                                                <h3 class="section-form-title">Confirm Details</h3>
                                                <div class="row">
                                                    <div class="contentBoxMargin col-sm-12 text-center">
                                                        <div id="profile-Image"><img id="userPhoto" src="#" alt="Prifile Image"/></div>
                                                        <h3>Profile Image</h3>
                                                    </div>
                                                    <div class="contentBoxMargin col-sm-12 text-center">
                                                        <h5>Account Information</h5>
                                                        <p id="unameData"></p>
                                                        <p id="emailData"></p>
                                                        <p id="passData"></p>
                                                    </div>
                                                    <div class="contentBoxMargin col-sm-12 text-center">
                                                        <h5>Personal Information:</h5>
                                                        <p id="firstNameData"></p>
                                                        <p id="lastNameData"></p>
                                                        <p id="genderData"></p>
                                                        <p id="birthdateData"></p>
                                                        <p id="addressData"></p>
                                                        <p id="emailaddressData"></p>
                                                        <p id="phoneData"></p>
                                                        <p id="preferedcontactData"></p>
                                                    </div>
                                                    <div class="contentBoxMargin col-sm-12 text-center">
                                                        <h5>Payment Information:</h5>
                                                        <p id="paymenttypeData"></p>
                                                        <p id="hnameData"></p>
                                                        <p id="cardnumberData"></p>
                                                        <p id="cvcData"></p>
                                                        <p id="expirydateData"></p>
                                                    </div>
                                                    <div class="help-block with-errors mandatory-error"></div>
                                                    <div class="form-group col-sm-12">
                                                        <div id="humanCheckCaptchaBox"></div><div id="firstDigit"></div> + <div id="secondDigit"></div> = <input name="humanCheckCaptchaInput" id="humanCheckCaptchaInput" placeholder="" maxlength="3" class="form-control" type="text" required data-error="Please solve Captcha">
                                                        <div class="help-block with-errors"></div>
                                                    </div><!-- end form-group -->
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div id="AggreData"><strong>Aggre with terms &amp; conditions:</strong> <input name="aggre" id="aggre2" value="1" checked disabled type="checkbox"></div>
                                                        </div>
                                                        <div id="mgsFormSubmit" class="hidden"></div>
                                                        <div id="final-step-buttons" class="form-group  signUpForm-step-4">
                                                            <button class="btn btn-custom" type="button" onclick="previousStep3()"><span class="fa fa-arrow-left"></span> Back</button>
                                                            <button id="Submit" class="btn btn-custom pull-right" type="submit">Submit </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div><!-- end section -->
                                    </div><!-- end signUpForm-section-wrap -->
                                </form>
                            </div><!-- end col-sm-6 -->
                        </div><!-- end form-wrap -->
                    </div><!-- end col-sm-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end display-table-cell -->
    </div><!-- end display-table -->
</div><!-- end wrapper -->

<!-- jQuery Library -->
<script src="{{asset('assets/userdashboard/js/jquery-3.1.1.min.js')}}"></script>
<!-- bootstrap-datepicker Js -->
<script type="text/javascript" src="{{asset('assets/userdashboard/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Form validator Js -->
<script src="{{asset('assets/userdashboard/js/validator.min.js')}}"></script>
<!-- sweetalert Js -->
<script src="{{asset('assets/userdashboard/js/sweetalert.min.js')}}"></script>
<!-- Template main Js -->
<script src="{{asset('assets/userdashboard/js/reg-form.js')}}"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93541536-2', 'auto');
    ga('send', 'pageview');

</script>

</body>

<!-- Mirrored from mgsdemo.mgscoder.com/mgscode/regform/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Dec 2017 07:08:28 GMT -->
</html>