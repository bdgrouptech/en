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
        <div class="col-md-6" style="background-color:#FFFFFF; margin: 10px">
            <form>
                <div class="col-md-12">
                    <h2 class="title">Product Categories Form</h2>
                    <div class="form-group">
                        <select class="input-sm" id="prod_cat_id">

                            <option value="0" disabled="true" selected="true">-- Category Select --</option>
                            @foreach($category as $cat)
                                <option value ="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <select class="input-sm">

                            <option value="0" disabled="true" selected="true">-- Category Select --</option>

                        </select>
                    </div>



                    {{--<script>--}}

                            {{--$('#category').on('change',function(e){--}}
                                {{--console.log(e);--}}

                                {{--var cat_id = e.target.value;--}}
                            {{--//ajax--}}
                                {{--$.get('/ajax-subcat?cat_id=' + cat_id, function (data){--}}
                                    {{--$('#subcategory').empty();--}}
                                    {{--$.each(data,function(index,subcatObj){--}}

                                      {{--$('#subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>')--}}

                                    {{--});--}}
                                {{--});--}}
                            {{--});--}}

                        {{--</script>--}}

                    <div class="group form-group">
                        <input type="text" class="" required>
                        <span class="highlight"></span>
                        <label>Name</label>
                    </div>

                    <div class="group form-group">
                        <input type="text" required>
                        <span class="highlight"></span>
                        <label>Icon Link</label>
                    </div>
                    <button type="submit" class="btn btn-success" style="padding: 5px; margin-bottom: 10px" > Add Categories </button>
                </div>
            </form>

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


