<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{ asset('assets/img/logo.png') }}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;{{{ isset(Auth::user()->email) ? Auth::user()->email : Auth::user()->email }}}
                        </div>
                    </div>

                    <div class="media-right media-middle">
                        <ul class="icons-list">
                            <li>
                                <a href="#"><i class="icon-cog3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="active"><a href="{{ url('/admin') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
{{--                    @if(Auth::user()->role == "Super Admin")--}}
                        <li class="navigation-header"><span>Post Informations</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>Posts</span></a>
                            <ul>
                                <li><a href="{{ route('admin.allpost') }}">New Posts</a></li>
                                <li><a href="{{ route('admin.approved') }}">Approved Posts</a></li>
                                <li><a href="{{ route('admin.disapproved') }}">Disapproved Posts</a></li>
                            </ul>
                        </li>
                        <li class="navigation-header"><span>Categories Informations</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>Category</span></a>
                            <ul>
                                <li><a href="{{ url(route('admin.category.create')) }}">Create Category</a></li>
                                <li><a href="{{ url(route('admin.category.list')) }}">Category List</a></li>
                                <li><a href="{{ url(route('admin.subcategory.create')) }}">Create Subcategory</a></li>
                                <li><a href="{{ url(route('admin.subcategory.list')) }}">Subcategory List</a></li>
                            </ul>
                        </li>

                        <!-- Forms -->
                        <li class="navigation-header"><span>Payments Section</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-pencil3"></i> <span>Bikash-System</span></a>
                            <ul>
                                <li><a href="{{ route('admin.bikashpay') }}">Unverified Transection No</a></li>
                                <li><a href="{{ route('admin.bikashpaied') }}">Verified Transection No</a></li>
                            </ul>
                        </li>
                        <li class="navigation-header"><span>Admin Manage</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>Admins</span></a>
                            <ul>
{{--                                @if(Auth::user()->role == "Super Admin")--}}
                                    <li><a href="{{ route('admin.create') }}">Create New Admin</a></li>
                                {{--@endif--}}
                                <li><a href="{{ route('admin.list') }}">Admin List</a></li>
                                <li><a href="{{ route('admin.password') }}">Change Password</a></li>

                            </ul>
                        </li>
                        <li class="navigation-header"><span>User Manage</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>Users</span></a>
                            <ul>
                                <li><a href="{{ route('admin.userlist') }}">Free Members List</a></li>
                                <li><a href="#">Premium Members List</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-spinner3 spinner"></i> <span>Settings</span></a></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>All Settings</span></a>
                            <ul>
                                <li><a href="#">New Posts</a></li>

                            </ul>
                        </li>
                        <li><a href="#"><i class="icon-spinner3 spinner"></i> <span>Reports</span></a></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span> Reports</span></a>
                            <ul>
                                <li><a href="{{ route('admin.userlist') }}">Users Reports</a></li>
                                <li><a href="{{ route('admin.bikashpaied') }}">Payments Reports</a></li>
                                <li><a href="{{ route('admin.approved') }}">Ads Reports</a></li>
                                <li><a href="#">Free Members Reports</a></li>
                                <li><a href="#">Premium Members Reports</a></li>

                            </ul>
                        </li>
                        <li class="navigation-header"><span>All Complains</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>Post Compains</span></a>
                            <ul>
                                <li><a href="{{ route('admin.post_complains') }}">Post Compains</a></li>

                            </ul>
                        </li>
                    {{--@endif--}}
{{--                    @if(Auth::user()->role == "Admin")--}}
                        <li class="navigation-header"><span>Post Informations</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>Posts</span></a>
                            <ul>
                                <li><a href="{{ route('admin.allpost') }}">New Posts</a></li>
                                <li><a href="{{ route('admin.approved') }}">Approved Posts</a></li>
                                <li><a href="{{ route('admin.disapproved') }}">Disapproved Posts</a></li>
                            </ul>
                        </li>
                        <li class="navigation-header"><span>Payments Section</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-pencil3"></i> <span>Bikash-System</span></a>
                            <ul>
                                <li><a href="{{ route('admin.bikashpay') }}">Unverified Transection No</a></li>
                                <li><a href="{{ route('admin.bikashpaied') }}">Verified Transection No</a></li>
                            </ul>
                        </li>
                        <li class="navigation-header"><span>User Manage</span> <i class="icon-menu" title="Forms"></i></li>
                        <li>
                            <a href="#"><i class="icon-stack2"></i> <span>Users</span></a>
                            <ul>
                                <li><a href="{{ route('admin.userlist') }}">Free Members List</a></li>
                                <li><a href="#">Premium Members List</a></li>
                            </ul>
                        </li>
                    {{--@endif--}}


                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->