<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    @stack('css')
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('theme/viho/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/viho/assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt="">LPPOM MUI SUMSEL</a></div>
            <div class="dark-logo-wrapper"><a href="{{ route('index') }}"><img class="img-fluid" src="{{asset('assets/images/logo/dark-logo.png')}}" alt="">LPPOM MUI</a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
          </div>
          <div class="left-menu-header col">
            <ul>
              <li>
                {{-- <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form>
                <span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span> --}}
              </li>
            </ul>
          </div>
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li class="onhover-dropdown p-0">
                <a class="btn btn-primary-light" href="{{ route('logout')}}" type="button"><i data-feather="log-out"></i>Log out</a>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>

      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
            <!-- Menu Start-->
            @includeIf('layouts.app_menu')
            <!-- end menu -->
            <!-- start user info -->
            {{-- <div class="sidebar-user text-center">
                <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('assets/images/dashboard/1.png')}}" alt="" />
                <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
                <a href="user-profile"> <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
                <p class="mb-0 font-roboto">Human Resources Department</p>
                <ul>
                    <li>
                        <span><span class="counter">19.8</span>k</span>
                        <p>Follow</p>
                    </li>
                    <li>
                        <span>2 year</span>
                        <p>Experince</p>
                    </li>
                    <li>
                        <span><span class="counter">95.2</span>k</span>
                        <p>Follower</p>
                    </li>
                </ul>
            </div> --}}
        </header>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          @yield('content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                {{-- <p class="mb-0">Copyright {{date('Y')}}-{{date('y', strtotime('+1 year'))}} © viho All rights reserved.</p> --}}
              </div>
              <div class="col-md-6">
                {{-- <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p> --}}
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('theme/viho/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('theme/viho/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('theme/viho/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/config.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('theme/viho/assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugins JS start-->
    @stack('scripts')
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('theme/viho/assets/js/script.js')}}"></script>
    <!-- Plugin used-->
  </body>
</html>
