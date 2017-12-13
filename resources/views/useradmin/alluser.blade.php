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


        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title">All Users List</h6>
            </div>

            <table class="table tasks-list table-lg">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($alluser as $item)
                    <tr>
                        <td>#{{ $no++ }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="/user/delete/<?php echo $item->id ?>/<?php echo str_replace(' ','-',$item->name) ?>/" onclick="return confirm('Are you sure you want to delete this Person ?');">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Delete
                                </a>

                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>










        {{--<div class="col-md-7" style="background-color:#FFFFFF; margin: 10px">--}}
            {{--<div class="panel-body">--}}
                    {{--<div class="panel panel-flat"><P style="text-align: center">@if(Session::has('message')){{Session::get('message')}}@endif</P>--}}
                        {{--<table class="table datatable-basic">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>ID</th>--}}
                                {{--<th>Name</th>--}}
                                {{--<th>Email</th>--}}
                                {{--<th>Phone</th>--}}
                                {{--<th class="text-center">Actions</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--<?php $no=1; ?>--}}
                            {{--@foreach($alluser as $item)--}}
                                {{--<tr>--}}
                                    {{--<td>{{ $no++ }}</td>--}}
                                    {{--<td>{{ $item->name }}</td>--}}
                                    {{--<td>{{ $item->email }}</td>--}}
                                    {{--<td>0{{ $item->phone }}</td>--}}
                                    {{--<td>--}}
                                    {{--<a href="/user/delete/<?php echo $item->id ?>/<?php echo str_replace(' ','-',$item->name) ?>/" onclick="return confirm('Are you sure you want to delete this Person ?');">--}}
                                            {{--<span class="glyphicon glyphicon-remove"></span>--}}
                                    {{--</a>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
   </div>
@endsection
@section('admin-footer')
    @include('Admin.admin-footer')
@endsection


