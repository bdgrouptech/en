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
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span>-Dashboard</h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
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
                    {!! Form::model($data,['url' => '/setting_store', 'class' =>'form-horizontal','files' => true]) !!}
                    <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label"><strong> {!! Form::label('phone','Change Phone :') !!} </strong>
                            </label>
                            <div class="col-sm-10">
                                {!! Form::number('phone', null,
                                       array('class'=>'form-control',
                                )) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label"><strong>{!! Form::label('email','Change Email: ') !!}</strong>
                            </label>
                            <div class="col-sm-10">
                                {!! Form::email('email', null,
                                       array( 'class'=>'form-control',
                                ))
                                !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title"
                                   class="col-sm-2 col-form-label"><strong>{!! Form::label('address','Change Address: ') !!}</strong>
                            </label>
                            <div class="col-sm-10">
                                {!! Form::textarea('address', null,array('rows'=>'5','class'=>'form-control',)) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>{!! Form::label('header','Change Header Logo: ') !!}</strong></label>
                            <div class="col-lg-10">
                                {!! Form::file('headerpic', null,
                                       array('class'=>'file-input',
                                )) !!}
                                <span class="help-block">Add New Header Logo</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>{!! Form::label('footerpic','Change Footer Logo: ') !!}</strong></label>
                            <div class="col-lg-10">
                                {!! Form::file('footerpic', null,
                                       array('class'=>'file-input',
                                )) !!}
                                <span class="help-block">Add New Footer Logo</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 control-label text-semibold"><strong>{!! Form::label('bannerpic','Change Banner Images: ') !!}</strong></label>
                            <div class="col-lg-10">
                                {!! Form::file('bannerpic', null,
                                       array('class'=>'file-input',
                                )) !!}
                                <span class="help-block">Image Size 1300 * 306 px</span>
                            </div>
                        </div>
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