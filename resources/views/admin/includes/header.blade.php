<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Rubies</b>Tech</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Rubies</b>Tech</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- /.messages-menu -->
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            {{--@if(Auth::user()->image)--}}
                                {{--<img src="{{asset('images/courier'.Auth::user()->image)}}" class="user-image" alt="User Image">--}}
                            {{--@else--}}
                                {{--<img src="{{asset('assets/dist/img/avatar.png')}}" class="user-image" alt="User Image">--}}
                                {{--@endif--}}
                                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{Auth::user()->name}} </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                {{--@if(Auth::user()->image)--}}
                                    {{--<img src="{{asset('images/courier'.Auth::user()->image)}}" width="160px" height="160px" class="img-circle" alt="User Image">--}}
                                {{--@else--}}
                                    {{--<img src="{{asset('assets/dist/img/avatar.png ')}}" class="img-circle" alt="User Image">--}}
                                {{--@endif--}}

                                <p>
                                    {{Auth::user()->name}}
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    {{--@if(Auth::user()->image)--}}
                        {{--<img src="{{asset('images/courier'.Auth::user()->image)}}" width="160px" height="160px" class="img-circle" alt="User Image">--}}
                    {{--@else--}}
                        {{--<img src="{{asset('assets/dist/img/avatar.png ')}}" class="img-circle" alt="User Image">--}}
                    {{--@endif--}}
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Navigations</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="{{route('home')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Posts</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a  href="{{route('post.create')}}">New Post</a></li>
                        <li><a  href="{{route('post.index')}}">View Posts</a></li>
                    </ul>
                </li>
                <li><a href="{{route('category.index')}}"><i class="fa fa-book"></i> <span>Category</span></a></li>
                <li><a href="{{route('contacts.index')}}"><i class="fa fa-book"></i> <span>Contact</span></a></li>
                <li><a href="{{route('volunteers.index')}}"><i class="fa fa-book"></i> <span>Volunteers</span></a></li>
                <li><a href="{{route('school.index')}}"><i class="fa fa-book"></i> <span>Schools</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>Gallery</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('image.create')}}">New Gallery</a></li>
                        <li><a  href="{{route('image.index')}}">View Gallery</a></li>
                    </ul>
                </li>
                <li><a href="{{route('user.logout')}}"><i class="fa fa-book"></i> <span>Logout</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>


      
