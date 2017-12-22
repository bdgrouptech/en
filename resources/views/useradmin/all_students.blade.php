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

<script type="text/javascript"
        src="{{ asset('admin-assets/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin-assets/assets/js/plugins/forms/selects/select2.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('admin-assets/assets/js/pages/datatables_basic.js')}}"></script>
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
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span>
                                -
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
                            <li class="active">All Student</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <div class="content">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Default style</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li>
                                </ul>
                            </div>
                        </div>

                        <table class="table datatable-basic">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Student Image</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td><img src="{{ asset('upload/'.$item->studentpic) }}" alt="" width="50" height="50"></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="{{ url('edit_students/'.$item->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a></li>
                                                    <li><a href="{{ url('delete_students/'.$item->id) }}"><i class="glyphicon glyphicon-remove"></i> Delete</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
{{--@section('footer')--}}
{{--@include('admin.footer')--}}
{{--@endsection--}}