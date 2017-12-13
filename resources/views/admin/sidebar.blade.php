<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('admin-assets/assets/images/placeholder.jpg')}}"
                                                        class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Farmget, Dhaka
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
                    <li class="active"><a href=""><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li class="navigation-header"><span>Post Informations</span> <i class="icon-menu" title="Forms"></i></li>
                    <li><a href="#"><i class="icon-user-plus"></i> <span>Our Staff</span></a>
                        <ul>
                            <li><a href="">Add New Staff </a></li>
                            <li><a href="">All Stuff </a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-pencil3"></i> <span>Admission</span></a>
                        <ul>
                            <li><a href="">Add New Admission </a></li>
                            <li><a href="">All Admission </a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-people"></i> <span>Students</span></a>
                        <ul>
                            <li><a href="">Add New Students </a></li>
                            <li><a href="">All Students </a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-footprint"></i> <span>Activities</span></a>
                        <ul>
                            <li><a href="">Add New Activities </a></li>
                            <li><a href="">All Activities </a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-gift"></i> <span>About US</span></a>
                        <ul>
                            <li><a href="">Add New About</a></li>
                            <li><a href="">All About</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-images2"></i> <span>Gallery</span></a>
                        <ul>
                            <li><a href="">Add New Gallery</a></li>
                            <li><a href="">All Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-magazine"></i> <span>Courses</span></a>
                        <ul>
                            <li><a href="">Add New Courses</a></li>
                            <li><a href="">All Courses</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-lifebuoy"></i> <span>Know More</span></a>
                        <ul>
                            <li><a href="">Add New More</a></li>
                            <li><a href="">All More</a></li>
                        </ul>
                    </li>
                    <li class="navigation-header"><span>Settings Informations</span> <i class="icon-menu" title="Forms"></i></li>
                    <li><a href="#"><i class="icon-stack2"></i> <span>Settings</span></a>
                        <ul>
                            <li><a href="">General Setting</a></li>
                            <li><a href="">Change Slide Image</a></li>
                        </ul>
                    </li>

                    <!-- Forms -->
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
