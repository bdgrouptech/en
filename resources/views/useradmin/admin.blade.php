@extends('useradmin.master')
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
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/ui/moment/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/plugins/pickers/daterangepicker.js')}}"></script>

<script type="text/javascript" src="{{asset('admin-assets/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('admin-assets/assets/js/pages/dashboard.js')}}"></script>
@endsection
@section('header')
    @include('useradmin.header')
@endsection
@section('sidebar')
    @include('useradmin.sidebar')
@endsection
@section('content')
    @include('useradmin.content')
@endsection
@section('footer')
    @include('useradmin.footer')
@endsection