<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>ZeHa_Web - Admin Dashboard</title>
    <link rel="icon" href="{{ asset('webpage/img/z.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/icons/flags/flags.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    @if ($errors->any())
    <!-- Display the first error message -->
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif
  
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="/" class="logo">
                    <img src="{{ asset('webpage/img/zeha.png') }}" alt="Logo" style="width: 100px;">
                </a>
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="/assets/img/icons/header-icon-05.svg" alt="">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0"></span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- Other notification messages -->
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item zoom-screen me-2">  
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="/assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <div class="user-text">
                                @if(auth()->user()->user_type == 'student')
                                <h6>{{ auth()->user()->name }}</h6>
                                <p class="text-muted mb-0">Student</p>
                                @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                                <h6>{{ auth()->user()->name }}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                                @elseif(auth()->user()->user_type == 'teacher')
                                <h6>{{ auth()->user()->name }}</h6>
                                <p class="text-muted mb-0">Teacher</p>
                                @endif
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="user-text">
                                @if(auth()->user()->user_type == 'student')
                                <h6>{{ auth()->user()->name }}</h6>
                                <p class="text-muted mb-0">Student</p>
                                @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                                <h6>{{ auth()->user()->name }}</h6>
                                <p class="text-muted mb-0">Administrator</p>
                                @elseif(auth()->user()->user_type == 'teacher')
                                <h6>{{ auth()->user()->name }}</h6>
                                <p class="text-muted mb-0">Teacher</p>
                                @endif
                            </div>
                        </div>
                        @if(auth()->user()->user_type == 'admin')
                        <a class="dropdown-item" href="{{ route('inbox') }}">Inbox</a>
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather-grid"></i> <span>Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul class="dropdown-menu">
                                @if(auth()->user()->user_type == 'student')
                                <li><a href="dashboard">Student Dashboard</a></li>
                                @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                                <li><a href="dashboard">Admin Dashboard</a></li>
                                @elseif(auth()->user()->user_type == 'teacher')
                                <li><a href="dashboard">Teacher Dashboard</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
          <div class="content container-fluid">

              <div class="page-header">
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="page-sub-header">

                            @if(auth()->user()->user_type == 'student')
                              <h3 class="page-title">Welcome {{ auth()->user()->name }}!</h3>
                              <ul class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                                  <li class="breadcrumb-item active">Student</li>

                         @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                         <h3 class="page-title">Welcome {{ auth()->user()->name }}!</h3>
                         <ul class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="breadcrumb-item active">Admin</li>
                        
                             @elseif(auth()->user()->user_type == 'teacher')
                             <h3 class="page-title">Welcome {{ auth()->user()->name }}!</h3>
                              <ul class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                                  <li class="breadcrumb-item active">Teacher</li>
                                  @endif
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>

              
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                <div class="db-info">
                    @if(auth()->user()->user_type == 'student')
                <h6>All Courses</h6>
                <h3>04/06</h3>
                @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                <h6>Students</h6>
                <h3>50055</h3>
                @elseif(auth()->user()->user_type == 'teacher')
                <h6>Total Classes</h6>
                <h3>04/06</h3>
                @endif
                </div>
                <div class="db-icon">
                <img src="/assets/img/icons/teacher-icon-01.svg" alt="Dashboard Icon">
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                <div class="db-info">
                    @if(auth()->user()->user_type == 'student')
                <h6>All Projects</h6>
                <h3>40/60</h3>
                @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                <h6>Awards</h6>
                <h3>50+</h3>
                @elseif(auth()->user()->user_type == 'teacher')
                <h6>Total Students</h6>
            <h3>40/60</h3>
                @endif
                </div>
                <div class="db-icon">
                <img src="/assets/img/icons/teacher-icon-02.svg" alt="Dashboard Icon">
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                <div class="db-info">
                    @if(auth()->user()->user_type == 'student')
                <h6>Test Attended</h6>
                <h3>30/50</h3>
                @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                <h6>Department</h6>
                <h3>30+</h3>
                @elseif(auth()->user()->user_type == 'teacher')
                <h6>Total Lessons</h6>
            <h3>30/50</h3>
                @endif
                </div>
                <div class="db-icon">
                <img src="/assets/img/icons/student-icon-01.svg" alt="Dashboard Icon">
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                <div class="card bg-comman w-100">
                <div class="card-body">
                <div class="db-widgets d-flex justify-content-between align-items-center">
                <div class="db-info">
                    @if(auth()->user()->user_type == 'student')
                <h6>Test Passed</h6>
                <h3>15/20</h3>
                @elseif(auth()->check() && auth()->user()->user_type == 'admin')
                <h6>Revenue</h6>
                <h3>$505</h3>
                @elseif(auth()->user()->user_type == 'teacher')
                <h6>Total Hours</h6>
                <h3>15/20</h3>
                @endif
                </div>
                <div class="db-icon">
                <img src="/assets/img/icons/student-icon-02.svg" alt="Dashboard Icon">
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
               
    </div>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/feather.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>
