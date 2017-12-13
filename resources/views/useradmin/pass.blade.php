@extends('Admin.master')
@section('title','Admin Dashboard')
@section('head')
        <!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="{{ asset('admin-assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin-assets/css/minified/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin-assets/css/minified/core.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin-assets/css/minified/components.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin-assets/css/minified/colors.min.css') }}" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->
<link rel="stylesheet" type="text/css"  href="{{ asset('admin-assets/css/font-awesome.min.css') }}">
<!-- Core JS files -->
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/loaders/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/core/libraries/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/core/libraries/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/loaders/blockui.min.js') }}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/plugins/ui/moment/moment.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('admin-assets/js/core/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/js/pages/dashboard.js') }}"></script>
<!-- /theme JS files -->
@endsection
@section('admin-content')
    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">

                @if (session('success'))
                    <div class="flash-message">
                        <div class="alert alert-success">

                        </div>
                    </div>
                @endif



                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
            </div>
            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{ url('/admin') }}" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Change Password</li>
            </ul>
        </div>
    </div>



    <div class="content">


        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title">Change Your Password</h6>
            </div>

            <div class="panel-body">
                {!! Form::open(['url' => '/admin/pass/store', 'class' =>'form-horizontal' ]) !!}
                <fieldset class="content-group">
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Default Admin Email <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {!! Form::text('name', Auth::user()->email, ['class'=>'form-control','readonly']) !!}
                        </div>
                    </div>


                    <!-- Basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Password :<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {!! Form::text('pass', null,['class'=>'form-control', 'placeholder'=>'Type New Password']) !!}
                            {{ Form::hidden('id', Auth::user()->id) }}
                        </div>
                    </div>
                    <!-- /basic textarea -->
                    <span class="col-md-offset-10">
                    {!! Form::submit('Change Password',array('class'=>'btn btn-success',)) !!}
                    </span>

                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
        {{--<p> @if(Session::has('mes')){{Session::get('mes')}}@endif</p>--}}
            {{--<script type="text/javascript">$(function() {    $("#successMessage").hide('blind', {}, 100)}, 2000);</script>--}}
        Session::get('success');
    </div>

@endsection
@section('admin-footer')
    @include('Admin.admin-footer')
@endsection
