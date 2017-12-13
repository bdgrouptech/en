@extends('admin.master')
@section('head')
        <!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/assets/css/minified/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/assets/css/minified/core.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/assets/css/minified/components.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin-assets/assets/css/minified/colors.min.css')}}" rel="stylesheet" type="text/css">
<!-- /global stylesheets -->

<!-- Core JS files -->
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/loaders/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/core/libraries/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/core/libraries/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/loaders/blockui.min.js')}}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="{{ asset('admin-assets/assets/js/plugins/uploaders/fileinput.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('admin-assets/assets/js/core/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/assets/js/pages/uploader_bootstrap.js') }}"></script>
<!-- /theme JS files -->
<!-- /theme JS files -->
@endsection
@section('header')
    @include('admin.header')
@endsection
@section('sidebar')
    @include('admin.sidebar')
@endsection
@section('content')
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            @yield('sidebar')


                    <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> -
                                Dashboard</h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                            class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="{{url('/home')}}"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Add New About</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <div class="content col-md-10">
                    <form action="{{url('/gallery_store')}}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label"><strong>Name:</strong> </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name Here..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label"><strong>Designation:</strong> </label>
                            <div class="col-sm-10">
                                <input type="text" name="designation" class="form-control" id="designation" placeholder="Designation Here..">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>Image File Upload:</strong></label>
                            <div class="col-lg-10">
                                <input type="file" name="gallerypic" class="file-input">
                                <span class="help-block">Image File Upload Here..</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"  value="submit">Submit</button>
                    </form>
                    <!-- Main charts -->
                    <div class="row">

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
{{--@section('footer')--}}
{{--@include('admin.footer')--}}
{{--@endsection--}}