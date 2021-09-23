<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Informasi Inventaris SMK Muhammadiyah 1 Bantul</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ asset('vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('dist/css/sb-admin-2.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{ asset('vendor/morrisjs/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        @yield ('styleTambahan')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/home')}}">SIIM</a>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            @can('user')
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Pengguna<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('users.index') }}">Pengguna</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('roles.index') }}">Role</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            @endcan
                            @can('masterbarang')
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Master Barang<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Kategori Barang</a>
                                    </li>
                                    <li>
                                        <a href="#">Ruang</a>
                                    </li>
                                    <li>
                                        <a href="#">Barang</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            @endcan
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                @yield('konten')
            </div>
        </div>
        <!-- /.wrapper -->
         <!-- jQuery -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('vendor/metisMenu/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('vendor/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('vendor/morrisjs/morris.min.js')}}"></script>
        <script src="{{asset('data/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('dist/js/sb-admin-2.js')}}"></script>

        @yield('jsTambahan')
    </body>
</html>