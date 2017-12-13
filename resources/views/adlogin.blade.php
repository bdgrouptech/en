@extends('layouts.master')
@section('head')
    @include('layouts.head')
@endsection
@section('content')
    <div class="main_div " style="margin: 100px 100px 100px 300px; ">
        <div class="row">
            <div class="col-md-6 ">
                <div class=" col-md-12 admainform" style="background-color: #81D4FA">
                    <h4 class="login ">Login As A Admin</h4>
                    <form  method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}
                        <div style="margin-bottom: 25px" class="input-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" name="email" placeholder="ই-মেইল"required>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email')}}</strong>
                            </span>
                        @endif
                        <div style="margin-bottom: 25px" class="input-group" {{ $errors->has('password') ? 'has-error' : '' }}>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="login-password" type="password" class="form-control" name="password" placeholder="পাসওয়ার্ড"required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="signin_btn">সাইন ইন করুন</button>
                        <div class="input-group">
                            <div class="checkbox">
                                <label class="keepinmind" style="color:#006FB2; font-weight: bold ">
                                    <input id="login-remember" type="checkbox" name="remember" value="1"> মনে রাখুন &nbsp &nbsp &nbsp &nbsp &nbsp  আপনি পাসওয়ার্ড ভুলে গিয়েছেন?
                                </label>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection




