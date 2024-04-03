<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
    <head>
  <title>ZeHa_Web - AdminDashboard</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Berry is made using Bootstrap 5 design framework. Download the free admin template & use it for your project."
    />
    <meta name="keywords" content="Berry, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template" />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('webpage/img/z.png') }}" type="image/png">
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="{{asset('dashboard/https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap')}}" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="{{asset('dashboard/fonts/tabler-icons.min.css')}}" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="{{asset('dashboard/fonts/material.css')}}" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}" id="main-style-link" />
<link rel="stylesheet" href="{{asset('dashboard/css/style-preset.css')}}" id="preset-style-link" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="m-header">
    <a href="/" class="b-brand">
      <!-- ========   change your logo hear   ============ -->
      <img src="webpage/img/zeha.png" alt="" class="logo logo-lg" style="width:100px;">
    </a>
    <!-- ======= Menu collapse Icon ===== -->
    <div class="pc-h-item">
      <a href="#" class="pc-head-link head-link-secondary m-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </div>
  </div>
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <li class="pc-h-item header-mobile-collapse">
      <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
    </li>
    <li class="dropdown pc-h-item">
      <a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <span>
          <i class="ti ti-settings"></i>
        </span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <h4>Good Day, <span class="small text-muted"> {{ auth()->user()->name }}</span></h4>
          <p class="text-muted"></p>
          <hr />
            <a href="#" class="dropdown-item">
              <i class="ti ti-settings"></i>
              <span>Account Settings</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Social Profile</span>
            </a>
            {{-- <a href="{{ route('logout') }}" class="dropdown-item">
              <i class="ti ti-logout"></i>
              <span>Logout</span>
            </a> --}}
          </div>
        </div>
      </div>
    </li>
  </ul>
</div> </div>
</header>
<!-- [ Header ] end -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="/" class="b-brand">
        <!-- ========   Change your logo from here   ============ -->
        <img src="webpage/img/zeha.png" alt="" class="logo logo-lg">
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>{{ auth()->user()->name }}</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="admin" class="pc-link"><span class="pc-micon"><i class="ti ti-dashboard"></i></span><span
              class="pc-mtext">Dashboard</span></a>
        </li>   
      </ul>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
      
            
         




          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer text-center">
    <span style="color:blue;"><img src="{{ asset('webpage/img/zeha.png') }}" alt="" style="width: 100px;">All rights reserved.</span>
    </footer>
 <!-- Required Js -->
<script src="{{asset('dashboard/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('dashboard/js/plugins/simplebar.min.js')}}"></script>
<script src="{{asset('dashboard/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/config.js')}}"></script>
<script src="{{asset('dashboard/js/pcoded.js')}}"></script>


    <!-- [Page Specific JS] start -->
    <!-- Apex Chart -->
    <script src="{{asset('dashboard/js/plugins/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashboard/js/pages/dashboard-default.js')}}"></script>
    <!-- [Page Specific JS] end -->
  </body>
  <!-- [Body] end -->
</html>
