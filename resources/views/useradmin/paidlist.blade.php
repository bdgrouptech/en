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
                <h6 class="panel-title">Paid List</h6>
            </div>
            <table class="table tasks-list table-lg">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>AD Title</th>
                    <th>Top ad publish Time</th>
                    <th>Today Time</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($yo as $item)
                    <tr>
                        <td>#{{ $no++ }}</td>
                        <td><?php $name = DB::table('users')->select('name')->where('id',$item->user_id)->value('name'); echo $name; ?></td>
                        <td>
                            <div class="text-muted">{{ $item->ptitle }}</div>
                        </td>
                        <td>
                            <div class="input-group input-group-transparent">
                                <div class="input-group-addon"><i class="icon-calendar2 position-left"></i></div>
                                <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($item->created_at)->format(' jS \\of F h:i A') }}">
                            </div>
                        </td>
                        <td>{{\Carbon\Carbon::parse()->now()->format(' jS \\of F h:i A')}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Actions<span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="/admin/<?php echo $item->id ?>/unverified/topad/" class="label label-danger"> Unverified </a></li>
                                    <li><a href="{{ url('/admin/'.$item->id.'/delete') }}"><span class="status-mark position-left bg-success"></span> Delete Post</a></li>
                           </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /task manager table -->
    </div>
@endsection
@section('admin-footer')
    @include('Admin.admin-footer')
@endsection


