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
                <h6 class="panel-title">Pending Post</h6>
            </div>

            <table class="table tasks-list table-lg">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Thumbail</th>
                    <th>Post Title</th>
                    <th>Complains</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach($allads as $item)
                    @if($item->active == 7)
                    <tr>
                        <td>#{{ $no++ }}</td>
                        <td><img src="{{ asset('upload/'.$item->thumbail )}}" class="img-thumbnail" alt="{{ $item->ptitle }}" width="200px" height="250px"></td>
                        <td>
                            <div class="text-semibold"><a href="">{{ $item->ptitle }}</a></div>
                            <div class="text-muted">{{ str_limit($item->ptitle,$limit = 35, $end = '...') }}

                            </div>
                        </td>
                        <td>
                            <div class="text-semibold"><a href="">{{ $item->complain_name }}</a></div>
                            <div class="text-muted">{{ str_limit($item->complain_mail,$limit = 35, $end = '...') }}</div>
                            <div class="text-muted">{{ str_limit($item->complain_message,$limit =500, $end = '...') }}

                            </div>
                        </td>


                        <td>
                            <div class="btn-group">
                                <a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="active"><a href="/admin_check/<?php echo $item->id ?>/<?php echo str_replace(array(' ', '<', '>', '&', '/', '{', '}', '*'), array('-'),$item->ptitle) ?>/" target="_blank"><span class="status-mark position-left bg-danger"></span> View Post</a></li>
                                    <li><a href="{{ url('admin/'.$item->id.'/approve') }}"><span class="status-mark position-left bg-info"></span> Approve Post</a></li>
                                    <li><a data-toggle="modal" data-target="#shamim" href="#"><span class="status-mark position-left bg-primary"></span>Disapprove For Edit</a></li>
                                    <li><a href="{{ url('/admin/'.$item->id.'/delete') }}"><span class="status-mark position-left bg-success"></span> Delete Post</a></li>
                                </ul>
                                <div class="modal fade" id="shamim" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Give Post Comment</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>বিজ্ঞাপনটি Disapprove করার কারণ গুলো উল্লেখ করুন  </p>
                                                {!! Form::open(['url' => '/post/disapprove','files' => true ]) !!}
                                                {!! Form::textarea('comment_post',null ,array('class'=>'comment_posttext',)) !!}<br>
                                                {{--<a href="{{ url('admin/'.$item->id.'/disapprove') }}">Submit</a>--}}
                                                {{ Form::hidden('post_id', $item->id) }}
                                                {!! Form::submit('কমেন্ট করুন',array('class'=>'btn-success btn pic_up',)) !!}
                                                {!! Form::close() !!}

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                    @endif
                @endforeach

                <?php $no=1; ?>
                @foreach($jobpost as $item)
                    <tr>
                        <td>#{{ $no++ }}</td>
                        <td><?php $image =  DB::table('users')->select('image')->where('id',$item->user_id)->value('image'); ?><img src="{{ asset('upload/user/'.$image)  }}" width="130px" height="100px"></td>
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

                        <td>
                            <div class="btn-group">
                                <a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Pending <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="active"><a href="/admin_jobcheck/<?php echo $item->id ?>/<?php echo str_replace(' ','-',$item->jptitle) ?>/" target="_blank"><span class="status-mark position-left bg-danger"></span> View Post</a></li>
                                    <li><a href="{{ url('admin/'.$item->id.'/job_approve') }}"><span class="status-mark position-left bg-info"></span> Approve Post</a></li>
                                    <li><a href="{{ url('admin/'.$item->id.'/job_disapprove') }}"><span class="status-mark position-left bg-primary"></span>Un Approve Post</a></li>
                                    <li><a href="{{ url('/admin/'.$item->id.'/job_delete') }}"><span class="status-mark position-left bg-success"></span> Delete Post</a></li>
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

