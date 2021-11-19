<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Churchil Admin</title>
        <link type="text/css" href="{{ asset('Admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('Admin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('Admin/css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{ asset('Admin/images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            @notifyCss
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="{{ route('admin.dash')}}">Churchil Events</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <ul class="nav pull-right">


                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{asset('images/avatar.png')}}" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="{{ route('admin.dash')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <ul class="widget widget-menu unstyled">
                                    <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                    </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                    </i>Manage Users</a>
                                        <ul id="togglePages" class="collapse unstyled">
                                            <li><a href="{{ route('users')}}"><i class="icon-inbox"></i>All users </a></li>

                                        </ul>
                                    </li>

                                </ul>


                                    <ul class="widget widget-menu unstyled">
                                        <li><a class="collapsed" data-toggle="collapse" href="#toggleQuestions"><i class="menu-icon icon-cog">
                                        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                        </i>Events </a>
                                            <ul id="toggleQuestions" class="collapse unstyled">
                                                <li><a href="{{ route('events')}}"><i class="icon-inbox"></i>All</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                            </ul>
                            <!--/.widget-nav-->



                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">

                                <li><a href="{{route('logout')}}"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>

                    <x:notify-messages />

                   <div class="spam8">
                    @yield('content')
                   </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2021 www.churchilevents.com </b>All rights reserved.
            </div>
        </div>
        <script src="{{asset('Admin/scripts/jquery-1.9.1.min.js')}}"> type="text/javascript"</script>
        <script src="{{asset('Admin/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('Admin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('Admin/scripts/flot/jquery.flot.js')}}" type="text/javascript"></script>
        <script src="{{asset('Admin/scripts/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
        <script src="{{asset('Admin/scripts/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
        <script src="{{asset('Admin/scripts/common.js')}}" type="text/javascript"></script>

    </body>
    @notifyJs
    </html>
