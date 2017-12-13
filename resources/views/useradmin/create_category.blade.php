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
<link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/font-awesome.min.css') }}">
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

        <!-- Task manager table -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title">Create Category</h6>
            </div>

            <div class="panel-body">
                {!! Form::open(['url' => '/admin/category/store', 'class' =>'form-horizontal' ]) !!}
                <fieldset class="content-group">
                    <!-- Basic text input -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Name <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Category Title']) !!}
                            {{--<input type="text" name="basic" class="form-control" required="required" placeholder="Text input validation">--}}
                        </div>
                    </div>
                    <!-- /basic text input -->


                    <!-- Basic textarea -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Description <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {{ Form::textarea('description', null,['class'=>'form-control', 'placeholder'=>'Category Description'],array('placeholder'=>'Write Category Short Description...')) }}
                            {{--<textarea rows="5" cols="5" name="textarea" class="form-control" required="required" placeholder="Default textarea"></textarea>--}}
                        </div>
                    </div>
                    <!-- /basic textarea -->
                    <!-- Password field -->
                    <div class="form-group">
                        <label class="control-label col-lg-3">Link(Fontwasome class) <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            {!! Form::text('icon', null, ['class'=>'form-control', 'placeholder'=>'Fontawesome icon Class']) !!}
                            {{--<input type="text" name="minimum_characters" class="form-control" required="required" placeholder="Enter at least 10 characters">--}}
                        </div>
                    </div>
                    <span class="col-md-offset-10">
                    {!! Form::submit('Add Categories',array('class'=>'btn btn-success',)) !!}
                    </span>

                </fieldset>
                {!! Form::close() !!}

            </div>

        </div>
        <!-- /task manager table -->


        {{--<div class="col-md-6" style="background-color:#FFFFFF; margin: 10px">--}}
            {{--{!! Form::open(['url' => '/admin/category/store', 'class' =>'form-horizontal' ]) !!}--}}
            {{--<div class="col-md-12">--}}
                {{--<h2 class="title">Add Product Category</h2>--}}
                {{--<div class="group form-group">--}}
                    {{--{!! Form::text('name', null) !!}--}}
                    {{--<span class="highlight"></span>--}}
                    {{--<label>Name</label>--}}
                {{--</div>--}}

                {{--<div class="group form-group">--}}
                    {{--{{ Form::textarea('description', null,array('placeholder'=>'Write Category Short Description...')) }}--}}
                {{--</div>--}}

                {{--<div class="group form-group">--}}
                    {{--{!! Form::text('icon', null) !!}--}}
                    {{--<span class="highlight"></span>--}}
                    {{--<label>Icon Link</label>--}}
                {{--</div>--}}
                {{--{!! Form::submit('Add Categories',array('class'=>'btn btn-success',)) !!}--}}

            {{--</div>--}}
            {{--{!! Form::close() !!}--}}

            {{--<br><br><br><br>--}}

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
    