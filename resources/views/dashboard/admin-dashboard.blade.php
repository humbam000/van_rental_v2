<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    {{-- <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style-v2.css') }}">

    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
 <![endif]-->
</head>

<body>

    <div class="main-wrapper">

        <div class="header-outer">
            <div class="header">
                <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"
                        aria-hidden="true"></i></a>
                <a id="toggle_btn" class="float-left" href="javascript:void(0);">
                    <img src="{{ asset('assets/img/sidebar/icon-21.png') }}" alt="">
                </a>

                <ul class="nav float-left">
                    <li>
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="search.html">
                                <input class="form-control" type="text" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img
                                src="{{ asset('assets/img/logo1.png') }}" alt="" width="30" height="30"></a>
                    </li>
                </ul>

                <ul class="nav user-menu float-right">
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="{{ asset('assets/img/sidebar/icon-22.png') }}" alt=""> 
                            <span class="position-absolute top-1 start-100 translate-middle badge rounded-pill bg-danger" id="notif-counts">
                                9
                            </span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span>Notifications</span>
                            </div>
                            <div class="drop-scroll">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="John Doe" src="{{ asset('assets/img/user-06.jpg') }}"
                                                        class="img-fluid rounded-circle">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">John Doe</span> is
                                                        now following you </p>
                                                    <p class="noti-time"><span class="notification-time">4 mins
                                                            ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">T</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Tarah
                                                            Shropshire</span> sent you a message.</p>
                                                    <p class="noti-time"><span class="notification-time">6 mins
                                                            ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">L</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                        like your photo.</p>
                                                    <p class="noti-time"><span class="notification-time">8 mins
                                                            ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">G</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Rolland
                                                            Webber</span> booking appoinment for meeting.</p>
                                                    <p class="noti-time"><span class="notification-time">12 mins
                                                            ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">T</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Bernardo
                                                            Galaviz</span> like your photo.</p>
                                                    <p class="noti-time"><span class="notification-time">2 days
                                                            ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img
                                src="{{ asset('assets/img/sidebar/icon-23.png') }}" alt=""> </a>
                    </li>
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class=" nav-link user-link" data-toggle="dropdown">
                            <span class="user-img"><img class="rounded-circle" src="assets/img/user-06.jpg"
                                    width="30" alt="Admin">
                                <span class="status online"></span></span>
                            <span>{{ auth()->user()->firstname }}</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                            <a class="dropdown-item" href="settings.html">Settings</a>
                            <a class="dropdown-item" >
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Logout</button>
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu float-right">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/img/logo1.png') }}" width="40" height="40" alt="">
                            <span class="text-uppercase">Van Rental</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="index.html"><img src="{{ asset('assets/img/sidebar/icon-1.png') }}"
                                    alt="icon"><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-2.png') }}" alt="icon"> <span>
                                    Drivers</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-teachers.html"><span>All Drivers</span></a></li>
                                {{-- <li><a href="add-teacher.html"><span>Add Teacher</span></a></li>
                                <li><a href="edit-teacher.html"><span>Edit Teacher</span></a></li>
                                <li><a href="about-teacher.html"><span>About Teacher</span></a></li> --}}
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-3.png') }}" alt="icon"> <span>
                                    Clients</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-students.html"><span>All Clients</span></a></li>
                                {{-- <li><a href="add-student.html"><span>Add Student</span></a></li>
                                <li><a href="edit-student.html"><span>Edit Student</span></a></li>
                                <li><a href="about-student.html"><span>ABout student</span></a></li> --}}
                            </ul>
                        </li>
                        {{-- <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-4.png') }}" alt="icon"> <span>
                                    Parents</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-parents.html"><span>All Parents</span></a></li>
                                <li><a href="add-parent.html"><span>Add Parent</span></a></li>
                                <li><a href="edit-parent.html"><span>Edit Parent</span></a></li>
                                <li><a href="about-parent.html"><span>About Parent</span></a></li>
                            </ul>
                        </li> --}}
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/sidebar/icon-5.png') }}" alt="icon">
                                <span>Apps</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Email</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="compose.html"><span>Compose Mail</span></a></li>
                                        <li>
                                            <a href="inbox.html"> <span> Inbox</span> </a>
                                        </li>
                                        <li><a href="mail-view.html"><span>Mailview</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="chat.html"> Chat <span
                                            class="badge badge-pill bg-primary float-right">5</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="voice-call.html"><span>Voice Call</span></a></li>
                                        <li><a href="video-call.html"><span>Video Call</span></a></li>
                                        <li><a href="incoming-call.html"><span>Incoming Call</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contacts.html"><span> Contacts</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html"><img src="{{ asset('assets/img/sidebar/icon-6.png') }}" alt="icon">
                                <span>Calendar</span></a>
                        </li>
                        {{-- <li>
                            <a href="exam-list.html"><img src="{{ asset('assets/img/sidebar/icon-7.png') }}" alt="icon">
                                <span>Exam list</span></a>
                        </li> --}}
                        <li>
                            <a href="holidays.html"><img src="{{ asset('assets/img/sidebar/icon-8.png') }}" alt="icon">
                                <span>Holidays</span></a>
                        </li>
                        <li>
                            <a href="calendar.html"><img src="{{ asset('assets/img/sidebar/icon-9.png') }}" alt="icon"><span>
                                    Events</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-10.png') }}" alt="icon"><span>
                                    Accounts </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="invoices.html"><span>Invoices</span></a></li>
                                {{-- <li><a href="payments.html"><span>Payments</span></a></li>
                                <li><a href="expenses.html"><span>Expenses</span></a></li>
                                <li><a href="provident-fund.html"><span>Provident Fund</span></a></li>
                                <li><a href="taxes.html"><span>Taxes</span></a></li> --}}
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-11.png') }}" alt="icon"><span> Payroll
                                </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="salary.html"><span> Employee Salary </span></a></li>
                                <li><a href="salary-view.html"><span> Payslip </span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-12.png') }}" alt="icon"> <span>
                                    Blog</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="blog.html"><span>Blog</span></a></li>
                                <li><a href="blog-details.html"><span>Blog View</span></a></li>
                                <li><a href="add-blog.html"><span>Add Blog</span></a></li>
                                <li><a href="edit-blog.html"><span>Edit Blog</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="noti-dot"><img src="{{ asset('assets/img/sidebar/icon-13.png') }}"
                                    alt="icon"> <span>Management </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="#"><span> Employees</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="all-employees.html"><span>All Employees</span></a></li>
                                        <li><a href="holidays.html"><span>Holidays</span></a></li>
                                        <li><a href="leaves.html"><span>Leave Requests</span> <span
                                                    class="badge badge-pill bg-primary float-right">1</span></a></li>
                                        <li><a href="attendance.html"><span>Attendance</span></a></li>
                                        <li><a href="departments.html"><span>Departments</span></a></li>
                                        <li><a href="designations.html"><span>Designations</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="activities.html"><span>Activities</span></a>
                                </li>
                                <li>
                                    <a href="users.html"><span>Users</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span> Reports </span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="expense-reports.html"> <span>Expense Report </span></a></li>
                                        <li><a href="invoice-reports.html"> <span>Invoice Report</span> </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><img src="{{ asset('assets/img/sidebar/icon-14.png') }}" alt="icon">
                                <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-15.png') }}" alt="icon"> <span>
                                    Components</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="uikit.html"><span>UI Kit</span></a></li>
                                <li><a href="typography.html"><span>Typography</span></a></li>
                                <li><a href="tabs.html"><span>Tabs</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-26.png') }}" alt="icon"> <span>
                                    Elements</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="ribbon.html">Ribbon</a></li>
                                <li><a href="clipboard.html">Clipboard</a></li>
                                <li><a href="drag-drop.html">Drag & Drop</a></li>
                                <li><a href="rangeslider.html">Range Slider</a></li>
                                <li><a href="rating.html">Rating</a></li>
                                <li><a href="toastr.html">Toastr</a></li>
                                <li><a href="text-editor.html">Text Editor</a></li>
                                <li><a href="counter.html">Counter</a></li>
                                <li><a href="scrollbar.html">Scrollbar</a></li>
                                <li><a href="spinner.html">Spinner</a></li>
                                <li><a href="notification.html">Notification</a></li>
                                <li><a href="lightbox.html">Lightbox</a></li>
                                <li><a href="stickynote.html">Sticky Note</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-27.png') }}" alt="icon"> <span>
                                    Chart</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="chart-apex.html">Apex Charts</a></li>
                                <li><a href="chart-js.html">Chart Js</a></li>
                                <li><a href="chart-morris.html">Morris Charts</a></li>
                                <li><a href="chart-flot.html">Flot Charts</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                                <li><a href="chart-c3.html">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-28.png') }}" alt="icon">
                                <span>Icons</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-17.png') }}" alt="icon"> <span>
                                    Forms</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="basic-inputs.html"><span>Basic Input</span></a></li>
                                <li><a href="form-basic-inputs.html"><span>Basic Inputs</span></a></li>
                                <li><a href="form-input-groups.html"><span>Input Groups</span></a></li>
                                <li><a href="form-horizontal.html"><span>Horizontal Form</span></a></li>
                                <li><a href="form-vertical.html"><span>Vertical Form</span></a></li>
                                <li><a href="form-validation.html"> Form Validation </a></li>
                                <li><a href="form-select2.html">Form Select2 </a></li>
                                <li><a href="form-fileupload.html">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-18.png') }}" alt="icon"> <span>
                                    Tables</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="tables-basic.html"><span>Basic Tables</span></a></li>
                                <li><a href="tables-datatables.html"><span>Data Table</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Extras</span></li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-19.png') }}" alt="icon">
                                <span>Pages</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="login.html"> <span>Login </span></a></li>
                                <li><a href="register.html"><span> Register </span></a></li>
                                <li><a href="forgot-password.html"> <span>Forgot Password</span> </a></li>
                                <li><a href="change-password2.html"> <span>Change Password</span> </a></li>
                                <li><a href="lock-screen.html"> <span>Lock Screen </span></a></li>
                                <li><a href="profile.html"> <span>Profile</span> </a></li>
                                <li><a href="gallery.html"> <span>Gallery </span></a></li>
                                <li><a href="error-404.html"><span>404 Error </span></a></li>
                                <li><a href="error-500.html"><span>500 Error </span></a></li>
                                <li><a href="blank-page.html"><span> Blank Page</span> </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/sidebar/icon-20.png') }}" alt="icon">
                                <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
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
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">Dashboard</h3>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcrumb mb-0 p-0 float-right">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- all drivers --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="page-title">
                                            All Drivers
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-outline-primary mr-2"><img
                                                    src="{{ asset('assets/img/excel.png') }}" alt=""><span
                                                    class="ml-2">Excel</span></button>
                                            <button class="btn btn-outline-danger mr-2"><img src="{{ asset('assets/img/pdf.png') }}"
                                                    alt="" height="18"><span
                                                    class="ml-2">PDF</span></button>
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table custom-table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name </th>
                                                <th>Email</th>
                                                <th>Nationality</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                
                                                
                                                
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="driver-table">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- driver statistic --}}
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="{{ asset('assets/img/dash/dash-1.png') }}" alt=""
                                    width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Drivers</span>
                                <h3>60,000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info text-left d-inline-block">
                                <span>Clients</span>
                                <h3>12,000</h3>
                            </div>
                            <span class="float-right"><img src="{{ asset('assets/img/dash/dash-2.png') }}" width="80"
                                    alt=""></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="{{ asset('assets/img/dash/dash-3.png') }}" alt=""
                                    width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Reports</span>
                                <h3>20,000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info d-inline-block text-left">
                                <span>Requests</span>
                                <h3 id="request-content">20,000</h3>
                            </div>
                            <span class="float-right"><img src="{{ asset('assets/img/dash/dash-4.png') }}" alt=""
                                    width="80"></span>
                        </div>
                    </div>
                </div>
                {{-- client statistic --}}
                {{-- <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            Drivers Statistics
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            Client Statistics
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- total member --}}
                {{-- <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            Events
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="calendar" class=" overflow-hidden"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            Total Member
                                        </div>
                                    </div>
                                    <div class="col text-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-center overflow-hidden">
                                <div id="chart3"> </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

               
                {{-- reports --}}
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="page-title">
                                            Reports
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-outline-primary mr-2"><img
                                                    src="{{ asset('assets/img/excel.png') }}" alt=""><span
                                                    class="ml-2">Excel</span></button>
                                            <button class="btn btn-outline-danger mr-2"><img src="{{ asset('assets/img/pdf.png') }}"
                                                    alt="" height="18"><span
                                                    class="ml-2">PDF</span></button>
                                            <button class="btn btn-light" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h"></i></button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Name </th>
                                                        <th>Email</th>
                                                        
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="{{ asset('assets/img/profile/img-1.jpg') }}"
                                                                        alt=""></a><a
                                                                    href="profile.html">Parker <span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d001</td>
                                                        <td>Mr. Johnson</td>
                                                        <td>973-584-58700</td>
                                                        <td>9946 Baker Rd. Marysville, </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="{{ asset('assets/img/profile/img-2.jpg') }}"
                                                                        alt=""></a><a
                                                                    href="profile.html">Smith <span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d002</td>
                                                        <td>Mr. Luke Idaman</td>
                                                        <td>973-584-58700</td>
                                                        <td>193 S. Harrison Drive </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="{{ asset('assets/img/profile/img-3.jpg') }}"
                                                                        alt=""></a><a
                                                                    href="profile.html">Hensley<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d003</td>
                                                        <td>Mr. Kevin H</td>
                                                        <td>973-584-58700</td>
                                                        <td>8949 Golf St. Palm Coast </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="assets/img/pdf.png" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="{{ asset('assets/img/profile/img-4.jpg') }}"
                                                                        alt=""></a><a
                                                                    href="profile.html">Friesen<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d004</td>
                                                        <td>Mr. Randy O</td>
                                                        <td>973-584-58700</td>
                                                        <td>23 Ohio Court Alexandria </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="{{ asset('assets/img/profile/img-5.jpg') }}"
                                                                        alt=""></a><a
                                                                    href="profile.html">Jackson<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d005</td>
                                                        <td>Mr. Steven</td>
                                                        <td>973-584-58700</td>
                                                        <td>338 North Cleveland Rd </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html" class="avatar text-white"><img
                                                                        src="{{ asset('assets/img/profile/img-6.jpg') }}"
                                                                        alt=""></a><a
                                                                    href="profile.html">Mason<span></span></a></h2>
                                                        </td>
                                                        <td>ST-0d006</td>
                                                        <td>Mr. Ervin</td>
                                                        <td>973-584-58700</td>
                                                        <td>7909 W. Sunnyslope St. </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h2><a href="profile.html"
                                                                    class="avatar text-white"><img
                                                                        src="{{ asset('assets/img/profile/img-7.jpg') }}"
                                                                        alt=""></a>
                                                                <a href="profile.html">Garrett <span></span></a>
                                                            </h2>
                                                        </td>
                                                        <td>ST-0d007</td>
                                                        <td>Mr. Marquz</td>
                                                        <td>973-584-58700</td>
                                                        <td>7361 Dunbar Street </td>
                                                        <td>20/1/2021</td>
                                                        <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                                        <td class="text-right">
                                                            <a href="edit-student.html"
                                                                class="btn btn-primary btn-sm mb-1">
                                                                <i class="far fa-edit"></i>
                                                            </a>
                                                            <button type="submit" data-toggle="modal"
                                                                data-target="#delete_employee"
                                                                class="btn btn-danger btn-sm mb-1">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- notification box --}}
                <div class="notification-box">
                    <div class="msg-sidebar notifications msg-noti">
                        <div class="topnav-dropdown-header">
                            <span>Messages</span>
                        </div>
                        <div class="drop-scroll msg-list-scroll">
                            <ul class="list-box">
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Richard Miles </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item new-message">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Ruth C. Gault</span>
                                                <span class="message-time">1 Aug</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Tarah Shropshire </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Mike Litorus</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Catherine Manseau </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">D</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Domenic Houston </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">B</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Buster Wigton </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Rolland Webber </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">C</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author"> Claire Mapes </span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">M</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Melita Faucher</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">J</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Jeffery Lalor</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">L</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Loren Gatlin</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                                <span class="avatar">T</span>
                                            </div>
                                            <div class="list-body">
                                                <span class="message-author">Tarah Shropshire</span>
                                                <span class="message-time">12:28 AM</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="chat.html">See all messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- view modal --}}
        
         <div class='modal fade' id='viewModal' tabindex='-1' aria-labelledby='exampleModalLabel'
         aria-hidden='true'>
         <div class='modal-dialog modal-lg'>
             <div class='modal-content'>
                 <div class='modal-header'>
                     <h5 class='modal-title text-secondary' id='exampleModalLabel'><b>Van Rental View Section</b></h5>
                     <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                         <span aria-hidden='true'>&times;</span>
                     </button>
                 </div>
                 <div class='modal-body'>
                    {{-- <p>{{ url('storage/') }}</p> --}}
                    {{-- <img src="{{ storage_path('/app/public/profile/profile648d6abf9ab263.53359234/Qrcode_wikipedia_fr_v2clean.png') }}" alt="no image"> --}}
                   
                    <form action="#" method="POST" enctype="multipart/form-data"
                    class="row g-3">
                    @csrf
                    <div class="col-md-12 row" id="view-con">
                    {{-- <img src="{{ asset('storage/profile/tmp/profile64bf2341e7d979.79852656/vanrental.jpg') }}"> --}}
                        {{-- role --}}
                        
                        
                        {{-- <div class="mb-3">
                            <div class="d-flex justify-content-center">
                                <div class="d-grid w-50">
                                    <button class="btn btn-primary">Register Driver</button>
                                </div>
                            </div>
                        </div> --}}
                   
                    
                    {{-- <div class="mb-3 text-center d-flex justify-content-center">
                        <div class="d-grid">
                            <span class="text-secondary">Are you looking for a driver ? <a href="{{ route('register') }}" class="text-primary "><b>Register here</b></a> </span>
                        </div>
                    </div> --}}
                </form>
                 </div>
                 <div class='modal-footer'>
                     <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                     <button type='button' class='btn btn-primary' id='update'>Update</button>
                 </div>
             </div>
         </div>
     </div>

    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>

    <script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fullcalendar.js') }}"></script>

    {{-- <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/apexcharts.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/chart-data.js') }}"></script> --}}

    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/methods/fetch.js') }}"></script>
</body>

</html>
