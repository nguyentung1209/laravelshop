<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sleek - Admin Dashboard Template</title>
    <script src="source/assets_admin/plugins/jquery/jquery.min.js"></script>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="source/assets_admin/plugins/toaster/toastr.min.css" rel="stylesheet" />
    <link href="source/assets_admin/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="source/assets_admin/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
    <link href="source/assets_admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="source/assets_admin/plugins/ladda/ladda.min.css" rel="stylesheet" />
    <link href="source/assets_admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="source/assets_admin/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="source/assets_admin/css/sleek.css" />
    <!-- FAVICON -->
    <link href="source/assets_admin/img/favicon.png" rel="shortcut icon" />
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="source/assets_admin/plugins/nprogress/nprogress.js"></script>
</head>
<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>
<div class="mobile-sticky-body-overlay"></div>
<div class="wrapper">
    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
    <aside class="left-sidebar bg-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="/index.html">
                    <svg
                        class="brand-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid"
                        width="30"
                        height="33"
                        viewBox="0 0 30 33"
                    >
                        <g fill="none" fill-rule="evenodd">
                            <path
                                class="logo-fill-blue"
                                fill="#7DBCFF"
                                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                            />
                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                    </svg>
                    <span class="brand-name">Laravel Shop</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">
                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                           aria-expanded="false" aria-controls="ui-elements">
                            <i class="mdi mdi-folder-multiple-outline"></i>
                            <span class="nav-text">Catalogs</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="ui-elements"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link" href="{{route('product')}}" >
                                        <span class="nav-text">Products</span>
                                    </a>
                                </li>
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                                       aria-expanded="false" aria-controls="components">
                                        <span class="nav-text">Categories</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                           aria-expanded="false" aria-controls="charts">
                            <i class="mdi mdi-chart-pie"></i>
                            <span class="nav-text">Sales</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="charts"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li >
                                    <a class="sidenav-item-link" href="{{route('order')}}">
                                        <span class="nav-text">Orders</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                           aria-expanded="false" aria-controls="pages">
                            <i class="mdi mdi-image-filter-none"></i>
                            <span class="nav-text">Customers</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="pages"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li >
                                    <a class="sidenav-item-link" href="{{route('customer')}}">
                                        <span class="nav-text">All Customers</span>
                                    </a>
                                </li>
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                                       aria-expanded="false" aria-controls="authentication">
                                        <span class="nav-text">Now Online</span>
                                    </a>
                                </li>
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                                       aria-expanded="false" aria-controls="others">
                                        <span class="nav-text">Customers Group</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                           aria-expanded="false" aria-controls="documentation">
                            <i class="mdi mdi-book-open-page-variant"></i>
                            <span class="nav-text">Documentation</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse"  id="documentation"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li class="section-title">
                                    Getting Started
                                </li>
                                <li >
                                    <a class="sidenav-item-link" href="introduction.html">
                                        <span class="nav-text">Introduction</span>
                                    </a>
                                </li>
                                <li >
                                    <a class="sidenav-item-link" href="setup.html">
                                        <span class="nav-text">Setup</span>
                                    </a>
                                </li>
                                <li >
                                    <a class="sidenav-item-link" href="customization.html">
                                        <span class="nav-text">Customization</span>
                                    </a>
                                </li>
                                <li class="section-title">
                                    Layouts
                                </li>
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                                       aria-expanded="false" aria-controls="headers">
                                        <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                                    </a>
                                    <ul  class="collapse"  id="headers">
                                        <div class="sub-menu">

                                            <li >
                                                <a href="header-fixed.html">Header Fixed</a>
                                            </li>

                                            <li >
                                                <a href="header-static.html">Header Static</a>
                                            </li>

                                            <li >
                                                <a href="header-light.html">Header Light</a>
                                            </li>

                                            <li >
                                                <a href="header-dark.html">Header Dark</a>
                                            </li>

                                        </div>
                                    </ul>
                                </li>
                                <li  class="has-sub" >
                                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                                       aria-expanded="false" aria-controls="sidebar-navs">
                                        <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                                    </a>
                                    <ul  class="collapse"  id="sidebar-navs">
                                        <div class="sub-menu">

                                            <li >
                                                <a href="sidebar-open.html">Sidebar Open</a>
                                            </li>

                                            <li >
                                                <a href="sidebar-minimized.html">Sidebar Minimized</a>
                                            </li>

                                            <li >
                                                <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                                            </li>

                                            <li >
                                                <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                                            </li>

                                            <li >
                                                <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                                            </li>

                                            <li >
                                                <a href="right-sidebar.html">Right Sidebar</a>
                                            </li>

                                        </div>
                                    </ul>
                                </li>
                                <li >
                                    <a class="sidenav-item-link" href="rtl.html">
                                        <span class="nav-text">RTL Direction</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
            <hr class="separator" />
            <div class="sidebar-footer">
                <div class="sidebar-footer-content">
                    <h6 class="text-uppercase">
                        Cpu Uses <span class="float-right">40%</span>
                    </h6>
                    <div class="progress progress-xs">
                        <div
                            class="progress-bar active"
                            style="width: 40%;"
                            role="progressbar"
                        ></div>
                    </div>
                    <h6 class="text-uppercase">
                        Memory Uses <span class="float-right">65%</span>
                    </h6>
                    <div class="progress progress-xs">
                        <div
                            class="progress-bar progress-bar-warning"
                            style="width: 65%;"
                            role="progressbar"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                               autofocus autocomplete="off" />
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <!-- Github Link Button -->
                        <li class="dropdown notifications-menu">
                            <button class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">You have 5 notifications</li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-plus"></i> New user registered
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-remove"></i> User deleted
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-supervisor"></i> New client
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-server-network-off"></i> Server overloaded
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a class="text-center" href="#"> View All </a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account -->
                    @if(Auth::guard('admins')->check())
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="source/assets_admin/img/user/u1.jpg" class="user-image" alt="User Image" />
                                <span class="d-none d-lg-inline-block"> {{Auth::guard('admins')->user()->name}}</span>
                            </button>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="source/assets_admin/img/user/u1.jpg" class="img-circle" alt="User Image" />
                                    <div class="d-inline-block">
                                        {{Auth::guard('admins')->user()->name}} <small class="pt-1">{{Auth::guard('admins')->user()->email}}</small>
                                    </div>
                                </li>
                                <li>
                                    <a href="profile.html">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="email-inbox.html">
                                        <i class="mdi mdi-email"></i> Message
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="{{route('logout')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                    &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                    <a
                        class="text-primary"
                        href="http://www.iamabdus.com/"
                        target="_blank"
                    >Abdus</a
                    >.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
        </footer>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="source/assets_admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="source/assets_admin/plugins/toaster/toastr.min.js"></script>
<script src="source/assets_admin/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="source/assets_admin/plugins/charts/Chart.min.js"></script>
<script src="source/assets_admin/plugins/ladda/spin.min.js"></script>
<script src="source/assets_admin/plugins/ladda/ladda.min.js"></script>
<script src="source/assets_admin/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="source/assets_admin/plugins/select2/js/select2.min.js"></script>
<script src="source/assets_admin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="source/assets_admin/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="source/assets_admin/plugins/daterangepicker/moment.min.js"></script>
<script src="source/assets_admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="source/assets_admin/plugins/jekyll-search.min.js"></script>
<script src="source/assets_admin/js/sleek.js"></script>
<script src="source/assets_admin/js/chart.js"></script>
<script src="source/assets_admin/js/date-range.js"></script>
<script src="source/assets_admin/js/map.js"></script>
<script src="source/assets_admin/js/custom.js"></script>
</body>
</html>

