@extends('Admin.master')
@section('title','Admin Dashboard - Edit Subcategories')
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
    <div class="col-md-12" >
        <div class="col-md-4 sidnavbar">
            @include('Admin.admin-menu')
        </div>
        <div class="col-md-6" style="background-color:#FFFFFF; margin: 10px">
            {!! Form::model($data,['url' => '/ad/'.$data['id'].'/update', 'class' =>'form-horizontal']) !!}
            <div class="col-md-12">
                <h2 class="title">Add Sub Category</h2>

                <div class="" style="margin-bottom: 20px">
                    {{ Form::select('category_id', $cate, null) }}
                </div>

                <div class="group form-group">
                    {!! Form::text('name', null) !!}
                    <span class="highlight"></span>
                    <label>Name</label>
                </div>

                <div class="group form-group">
                    {{ Form::textarea('description', null,array('placeholder'=>'Write Sub category Short Description...')) }}
                </div>

                <div class="group form-group">
                    {!! Form::text('icon', null) !!}
                    <span class="highlight"></span>
                    <label>Icon Link</label>
                </div>
                {!! Form::submit('Add Sub Categories',array('class'=>'btn btn-success',)) !!}

            </div>
            {!! Form::close() !!}

            <br><br><br><br>

            <p align="center">
            @if(Session::has('message'))
                {{Session::get('message')}}
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                </p>
                <br><br><br>

        </div>

@endsection
@section('admin-footer')
    @include('Admin.admin-footer')
@endsection

