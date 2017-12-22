@extends('admin.master')
@section('head')
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
                            <li class="active">Add New Student</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <div class="content col-md-10">
                    {!! Form::model($student,['url' => 'update_students/'.$student->id, 'class' =>'form-horizontal','files' => true]) !!}
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label"><strong>{!! Form::label('title','Title:') !!}</strong> </label>
                        <div class="col-sm-10">
                            {!! Form::text('title', null,
                                   array('class'=>'form-control',
                            )) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label"><strong>{!! Form::label('description','Description:') !!}</strong> </label>
                        <div class="col-sm-10">
                            {!! Form::textarea('description', null,array('rows'=>'5','class'=>'form-control',)) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="linkedin"  class="col-sm-2 col-form-label"><strong>Current Image : </strong> </label>
                        <div class="col-sm-10">
                            <div class="col-lg-3 col-sm-6">
                                <div class="thumbnail">
                                    <div class="thumb">
                                        <img src="{{asset('upload/'.$student->studentpic)}}" alt="{{ $student->name }}">
                                        <div class="caption-overflow">
                                        <span>
                                            <a href="{{asset('upload/'.$student->studentpic)}}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded"><i class="icon-plus3"></i></a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label text-semibold">{!! Form::label('addmissionpic','Addmission Images upload: ') !!}</label>
                        <div class="col-lg-10">
                            {!! Form::file('studentpic', null,
                                  array('class'=>'file-input',
                           )) !!}
                            <span class="help-block">Addmission Image Upload Here</span>
                        </div>
                    </div>
                    {{ Form::hidden('id', $student->id) }}
                    {!! Form::submit('submit Update',array('class'=>'btn btn-primary',)) !!}

                    {!! Form::close() !!}
                            <!-- Main charts -->
                    <div class="row">

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
@section('footer')
    @include('admin.footer')
@endsection