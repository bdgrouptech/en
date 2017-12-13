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
                            <li class="active">Add New Setting</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <div class="content col-md-10">
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>Change Slider Images-1:</strong></label>
                            <div class="col-lg-10">
                                <form action="{{url('/slide_store1')}}" method="post"
                                      enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="file" onchange="this.form.submit()" name="slide1" class="file-input">
                                </form>
                                <span class="help-block">Add New Slider Images-1</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>Change Slider Images-2:</strong></label>
                            <div class="col-lg-10">
                                <form action="{{url('/slide_store2')}}" method="post"
                                      enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="file" onchange="this.form.submit()" name="slide2" class="file-input">
                                </form>
                                <span class="help-block">Add New Slider Images-2</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>Change Slider Images-3:</strong></label>
                            <div class="col-lg-10">
                                <form action="{{url('/slide_store3')}}" method="post"
                                      enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="file" onchange="this.form.submit()" name="slide3" class="file-input">
                                </form>
                                <span class="help-block">Add New Slider Images-3</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>Change Slider Images-4:</strong></label>
                            <div class="col-lg-10">
                                <form action="{{url('/slide_store4')}}" method="post"
                                      enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="file" onchange="this.form.submit()" name="slide4" class="file-input">
                                </form>
                                <span class="help-block">Add New Slider Images-4</span>
                            </div>
                        </div>

                    <!-- Main charts -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb">
                                    <img src="{{asset('upload/'.$data->slide1)}}" alt="{{ $data->slide1 }}" class="responsive" height="60" width="100">
                                    <h6>Change Slider Images-1</h6>
                                    <div class="caption-overflow">
										<span>
											<a href="{{asset('upload/'.$data->slide1)}}" alt="{{ $data->slide1 }}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb">
                                    <img src="{{asset('upload/'.$data->slide2)}}" alt="{{ $data->slide2 }}" class="responsive" height="20" width="100">
                                    <h6>Change Slider Images-2</h6>
                                    <div class="caption-overflow">
										<span>
											<a href="{{asset('upload/'.$data->slide2)}}" alt="{{ $data->slide2 }}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb">
                                    <img src="{{asset('upload/'.$data->slide3)}}" alt="{{ $data->slide3 }}" class="responsive">
                                    <h6>Change Slider Images-3</h6>
                                    <div class="caption-overflow">
										<span>
											<a href="{{asset('upload/'.$data->slide3)}}" alt="{{ $data->slide3 }}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="thumbnail">
                                <div class="thumb">
                                    <img src="{{asset('upload/'.$data->slide4)}}" alt="{{ $data->slide4 }}" class="responsive">
                                    <h6>Change Slider Images-4</h6>
                                    <div class="caption-overflow">
										<span>
											<a href="{{asset('upload/'.$data->slide4)}}" alt="{{ $data->slide4 }}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
										</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('footer')
    @include('admin.footer')
@endsection