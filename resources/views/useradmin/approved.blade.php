@extends('Admin.master')
@section('title','Admin Dashboard')
@section('head')
    @include('Admin.admin_head')
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
                <h6 class="panel-title"> Our Approved Ads </h6>
            </div>
            <table class="table tasks-list table-lg">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Thumbail</th>
                    <th>Post Description</th>
                    <th>User Name</th>
                    <th>Date Time</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($app as $item)
                    <tr>
                        <td>#{{ $no++ }}</td>
                        <td><img src="{{ asset('upload/'.$item->thumbail )}}" class="img-thumbnail" alt="{{ $item->ptitle }}" width="200px" height="250px"></td>
                        <td>
                            <div class="text-semibold"><a href="">{{ $item->ptitle }}</a></div>
                            <div class="text-muted">{{ str_limit($item->ptitle,$limit = 35, $end = '...') }}</div>
                        </td>
                        <td>
                            <div class="input-group input-group-transparent">
                                <div class="input-group-addon"><i class="icon-calendar2 position-left"></i></div>
                                <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($item->created_at)->format(' jS F Y') }}">
                            </div>
                        </td>
                        <td><?php $name = DB::table('users')->select('name')->where('id',$item->user_id)->value('name'); echo $name; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Actions<span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="active"><a href="/ad/<?php echo $item->id ?>/<?php echo str_replace(' ','-',$item->ptitle) ?>/" target="_blank"><span class="status-mark position-left bg-danger"></span> View Post</a></li>
                                    <li><a href="{{ url('admin/'.$item->id.'/disapprove') }}"><span class="status-mark position-left bg-primary"></span>Un Approve Post</a></li>
                                    <li><a href="{{ url('/admin/'.$item->id.'/delete') }}"><span class="status-mark position-left bg-success"></span> Delete Post</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach


                <?php $no=1; ?>
                @foreach($jobpost as $item)
                    <tr>
                        <td>#{{ $no++ }}</td>
                        <td>  <?php $image =  DB::table('users')->select('image')->where('id',$item->user_id)->value('image'); ?><img src="{{ asset('upload/user/'.$image)  }}" width="80px" height="40px"></td>
                        <td>
                            <div class="text-semibold"><a href="">{{ $item->jptitle }}</a></div>
                            <div class="text-muted">{{ str_limit($item->jptitle,$limit = 35, $end = '...') }}</div>
                        </td>

                        <td>
                            <div class="input-group input-group-transparent">
                                <div class="input-group-addon"><i class="icon-calendar2 position-left"></i></div>
                                <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($item->created_at)->format(' jS F Y') }}">
                            </div>
                        </td>
                        <td><?php $name = DB::table('users')->select('name')->where('id',$item->user_id)->value('name'); echo $name; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="active"><a href="/job/<?php echo $item->id ?>/<?php echo str_replace(' ','-',$item->ptitle) ?>/" target="_blank"><span class="status-mark position-left bg-danger"></span> View Post</a></li>
                                    <li><a href="{{ url('admin/'.$item->id.'/job_disapprove') }}"><span class="status-mark position-left bg-primary"></span>Un Approve Post</a></li>
                                    <li><a href="{{ url('/admin/'.$item->id.'/job_delete') }}"> Delete</a><span class="status-mark position-left bg-success"></span> Delete Post</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <p>{{ $app->links() }}</p>

        </div>


@endsection
@section('admin-footer')
    @include('Admin.admin-footer')
@endsection

