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
                <li class="active">Dashboard</li>
            </ul>
        </div>
    </div>
    <div class="content">


        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title">Add Admin</h6>
            </div>

            <div class="panel-body">
                {!! Form::open(['url' => '/admin/store', 'class' =>'form-horizontal' ]) !!}
                <fieldset class="content-group">
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Select Parent Category <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {{ Form::select('role', ['Admin' => 'Admin','Super Admin' => 'Super Admin', 'class'=>'form-control']) }}

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-3">Name : <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Name']) !!}
                            {{--{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Category Title']) !!}--}}
                        </div>
                    </div>
                    <!-- /basic text input -->


                    <!-- Basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Email :<span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {!! Form::text('email', null,['class'=>'form-control', 'placeholder'=>'Email']) !!}
{{--                            {{ Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Category Description'],array('placeholder'=>'Write Category Short Description...')) }}--}}
                        </div>
                    </div>
                    <!-- /basic textarea -->
                    <!-- Password field -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Link(Fontwasome class) <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {!! Form::text('phone', null,['class'=>'form-control', 'placeholder'=>'Mobile Phone']) !!}
{{--                            {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Fontawesome icon Class']) !!}--}}

                        </div>
                    </div>
                    <span class="col-md-offset-10">
                    {!! Form::submit('Create Admin',array('class'=>'btn btn-success',)) !!}
                    </span>

                </fieldset>
                {!! Form::close() !!}

            </div>

        </div>










        {{--<div class="col-md-6" style="background-color:#FFFFFF; margin: 10px">--}}
            {{--{!! Form::open(['url' => '/admin/store', 'class' =>'form-horizontal' ]) !!}--}}
                {{--<div class="col-md-12">--}}
                    {{--<h2 class="title">Add New Admin</h2>--}}

                    {{--<div class="group form-group">--}}
                        {{--{{ Form::select('role', ['Admin' => 'Admin','Super Admin' => 'Super Admin',]) }}--}}
                    {{--</div>--}}

                    {{--<div class="group form-group">--}}
                        {{--{!! Form::text('name', null) !!}--}}
                        {{--<span class="highlight"></span>--}}
                        {{--<label>Name :</label>--}}
                    {{--</div>--}}

                    {{--<div class="group form-group">--}}
                        {{--{!! Form::text('email', null) !!}--}}
                        {{--<span class="highlight"></span>--}}
                        {{--<label>Email :</label>--}}
                    {{--</div>--}}

                    {{--<div class="group form-group">--}}
                        {{--{!! Form::text('phone', null) !!}--}}
                        {{--<span class="highlight"></span>--}}
                        {{--<label>Phone No :</label>--}}
                    {{--</div>--}}

                    {{--{!! Form::submit('Add Admin',array('class'=>'btn btn-success',)) !!}--}}

                {{--</div>--}}

            {{--{!! Form::close() !!}--}}

            {{--<br><br><br><br><br><br><br><br><br><br><br><br>--}}

            {{--<p align="center">--}}
            {{--@if(Session::has('message'))--}}
                {{--{{Session::get('message')}}--}}
            {{--@endif--}}

            {{--@if (count($errors) > 0)--}}
                {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--@endif--}}
                {{--</p>--}}
                {{--<br><br><br>--}}

            {{--</div>--}}

    </div>

@endsection
@section('admin-footer')
    @include('Admin.admin-footer')
@endsection


