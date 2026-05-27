<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-user.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

     <!-- BEGIN: Header-->
     <div><nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        
                    </div>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        
                        <li class="dropdown dropdown-user nav-item">
                            <a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                                        {{ auth()->user()->name }}</span></div><span>
                                    @if (Auth::user()->image != 'user.png')
                                        <img class="round"
                                            src="{{ asset('/storage/image/' . Auth::user()->email . Auth::user()->image) }}"
                                            alt="avatar" height="40" width="40">
                                    @else
                                        <img class="round" src="/storage/image/user.png" alt="avatar" height="40"
                                            width="40">
                                    @endif
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="accountantOwnEdit"><i class="feather icon-user"></i> Edit Profile</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>
    
  
    </div>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <div class="navbar-brand" >
                        <h2 class="brand-text mb-0">IMR</h2>
                    </div>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="active nav-item"><a href="#"><i class="feather icon-home"></i><span class="menu-title" data-i18n="dashboard">Dashboard</span></a>
                </li></ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>Content</span>
                </li>
               
                <li class=" nav-item"><a href="accountantConfirmAppointment"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Confirm Appointment">Confirm Appointment</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

   <!-- BEGIN: Content-->
   <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- page users view start -->
            <section class="page-users-view">
                <div class="row">
                    <!-- account start -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Account</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="users-view-image">
                                        @if (Auth::user()->image != 'user.png')
                                        <img src="{{ asset('/storage/image/' . Auth::user()->email . Auth::user()->image) }}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        @else
                                        <img src="/storage/image/user.png" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                        @endif
                                    </div> 
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">Username</td>
                                                <td>{{Auth::user()->username}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Name</td>
                                                <td>{{Auth::user()->name}}</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Email</td>
                                                <td>{{Auth::user()->email}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-5">
                                        <table class="ml-0 ml-sm-0 ml-lg-0">
                                            <tr>
                                                <td class="font-weight-bold">Status</td>
                                                <td>active</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Role</td>
                                                @if(Auth::user()->type==1)
                                                <td>Accountant</td>
                                                @endif
                                            </tr>
                                            
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <a href="/accountantOwnEdit" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- account end -->
                    <!-- information start -->
                    <div class="col-md-6 col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title mb-2">Information</div>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold">Birth Date </td>
                                        <td>{{Auth::user()->dob}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Mobile</td>
                                        <td>{{Auth::user()->contact}}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="font-weight-bold">Gender</td>
                                        <td>{{Auth::user()->gender}}</td>
                                    </tr>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- information start -->
                    
                </div>
            </section>
            <!-- page users view end -->

        </div>
    </div>
</div>
           <!-- account end -->
                  
                    
                </div>
            </section>
            <!-- page users view end -->

        </div>
    </div>
   </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020, IMR, All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-user.js"></script>
    <script src="../../../app-assets/js/scripts/navs/navs.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>