<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{ asset('css/animate.css/animate.min.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{asset('css/green.css')}}" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="{{asset('css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{asset('css/jqvmap.min.css')}}" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="{{asset('css/daterangepicker.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        @yield('css')
    </head>

    @guest
        <body class="login">
            <div>
                <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>

                <div class="login_wrapper">
                    @yield('content')
                </div>
            </div>
        </body>
    @else
        <body class="nav-md">
          <div id="app">

          </div>
            <div class="container body">
              <div class="main_container">
                <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                      <a href="{{ route('home') }}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                      <div class="profile_pic">
                        <img src="{{asset('images/user.png')}}" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>{{ Auth::user()->name }}</h2>
                        <!-- <h2>John Doe</h2> -->
                      </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                      <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                          <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="/">Dashboard</a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-edit"></i> Orders <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="/purchases">Purchase Orders</a></li>
                              <li><a href="/salesorders">Sales Orders</a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-stack-overflow"></i> Production <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="#">Master List</a></li>
                              <li><a href="#">Enteng Production</a></li>
                              <li><a href="#">Jun Production</a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a>Products<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                  <li><a href="/Categories">Product Categories</a></li>
                                  <li><a href="/uom">Unit of Measure</a></li>
                                  <li><a href="/Warehouse">Warehouse</a></li>
                                  <li><a href="/Section">Section</a></li>
                                  <li><a href="/suppliers">Suppliers</a></li>
                                  <li><a href="/brands">Brand</a></li>
                                  <li><a href="/products">Products</a></li>
                                </ul>
                              </li>
                              <li>
                                <a href="/stores">Store</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                      <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </a>
                    </div>
                    <!-- /menu footer buttons -->
                  </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                  <div class="nav_menu">
                    <nav>
                      <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                      </div>

                      <ul class="nav navbar-nav navbar-right">
                        <li class="">
                          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('/images/user.png') }}" alt="">{{ Auth::user()->name }}
                            <span class=" fa fa-angle-down"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="javascript:;"> Profile</a></li>
                            <li>
                              <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                              </a>
                            </li>
                            <li>
                              <a href="{{ url('/api/token') }}">
                                <span>Update API Token</span>
                              </a>
                            </li>
                            <li><a href="javascript:;">Help</a></li>

                            <li>
                              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out pull-right"></i>
                                Log Out
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>

                            </li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                  @yield('content')
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                  <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                  </div>
                  <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
              </div>
            </div>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}"></script>

            <!-- jQuery -->
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <!-- Bootstrap -->
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <!-- FastClick -->
            <script src="{{asset('js/fastclick.js')}}"></script>
            <!-- NProgress -->
            <script src="{{asset('js/nprogress.js')}}"></script>
            <!-- Chart.js -->
            <script src="{{asset('js/Chart.min.js')}}"></script>
            <!-- gauge.js -->
            <script src="{{asset('js/gauge.min.js')}}"></script>
            <!-- bootstrap-progressbar -->
            <script src="{{asset('js/bootstrap-progressbar.min.js')}}"></script>
            <!-- iCheck -->
            <script src="{{asset('js/icheck.min.js')}}"></script>
            <!-- Skycons -->
            <script src="{{asset('js/skycons.js')}}"></script>
            <!-- Flot -->
            <script src="{{asset('js/jquery.flot.js')}}"></script>
            <script src="{{asset('js/jquery.flot.pie.js')}}"></script>
            <script src="{{asset('js/jquery.flot.time.js')}}"></script>
            <script src="{{asset('js/jquery.flot.stack.js')}}"></script>
            <script src="{{asset('js/jquery.flot.resize.js')}}"></script>
            <!-- Flot plugins -->
            <script src="{{asset('js/jquery.flot.orderBars.js')}}"></script>
            <script src="{{asset('js/jquery.flot.spline.min.js')}}"></script>
            <script src="{{asset('js/curvedLines.js')}}"></script>
            <!-- DateJS -->
            <script src="{{asset('js/date.js')}}"></script>
            <!-- JQVMap -->
            <script src="{{asset('js/jquery.vmap.js')}}"></script>
            <script src="{{asset('js/jquery.vmap.world.js')}}"></script>
            <script src="{{asset('js/jquery.vmap.sampledata.js')}}"></script>
            <!-- bootstrap-daterangepicker -->
            <script src="{{asset('js/moment.min.js')}}"></script>
            <script src="{{asset('js/daterangepicker.js')}}"></script>

            <!-- Custom Theme Scripts -->
            <script src="{{asset('js/custom.min.js')}}"></script>

            @yield('js')
        </body>
    @endguest
</html>
