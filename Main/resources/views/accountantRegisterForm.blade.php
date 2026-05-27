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
                                            src="{{ asset('/storage/image/'. Auth::user()->image) }}"
                                            alt="avatar" height="40" width="40">
                                    @else
                                        <img class="round" src="/storage/image/user.png" alt="avatar" height="40"
                                            width="40">
                                    @endif
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="/adminOwnEdit"><i class="feather icon-user"></i> Edit Profile</a>
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
                    <div class="navbar-brand">
                        <h2 class="brand-text mb-0">IMR</h2>
                    </div>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="/adminDashboard"><i class="feather icon-home"></i><span
                            class="menu-title" data-i18n="dashboard">Dashboard</span></a>
                </li>
            </ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" navigation-header"><span>Content</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-pie-edit"></i><span class="menu-title" data-i18n="Charts">User Management</span></a>
                <ul class="menu-content">
                    <li class="active nav-item"><a href="/accountantRegisterForm"><i class="feather icon-user"></i><span
                                class="menu-title" data-i18n="addAccountant">Add Accountant</span></a>
                    </li>
                    <li class=" nav-item"><a href="/admineditAccountant"><i class="feather icon-edit"></i><span
                                class="menu-title" data-i18n="editAccountant">Edit Accountant</span></a>
                    </li>
                    <li class=" nav-item"><a href="/addStaffRegister"><i class="feather icon-user"></i><span
                                class="menu-title" data-i18n="addStaff">Add Staff</span></a>
                    </li>
                    <li class=" nav-item"><a href="/admineditStaff"><i class="feather icon-edit"></i><span
                                class="menu-title" data-i18n="editStaff">Edit Staff</span></a>
                    </li>
                    <li class=" nav-item"><a href="/receptionistRegisterForm"><i class="feather icon-user"></i><span
                                class="menu-title" data-i18n="addReceptionist">Add Receptionist</span></a>
                    </li>
                    <li class=" nav-item"><a href="/admineditReceptionist"><i class="feather icon-edit"></i><span
                                class="menu-title" data-i18n="editReceptionist">Edit Receptionist</span></a>
                    </li>
                    <li class=" nav-item"><a href="/patientRegister"><i class="feather icon-user"></i><span
                                class="menu-title" data-i18n="addReceptionist">Add Patient</span></a>
                    </li>
                    <li class=" nav-item"><a href="/admineditpatient"><i class="feather icon-edit"></i><span
                                class="menu-title" data-i18n="editReceptionist">Manage Patient Details</span></a>
                    </li>
                </ul>
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
                <!-- users edit start -->
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if (session('status'))
                                        <div class="alert " role="alert">
                                            {{ session('status') }}
                                        </div>
                @endif
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                        
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form action="/registeraccountant" class="form-horizontal" role="form" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <br>
                                        {{-- <div class="media  ml-4 mb-2">
                                        
                                            <div class="media">
                                                        <a href="javascript: void(0);">
                                                            <img id="output"
                                                                src="https://i1.sndcdn.com/avatars-000437232558-yuo0mv-t500x500.jpg"
                                                                class="rounded mr-75" alt="profile image" height="64"
                                                                width="64">
                                                        </a>
                                                        <div class="media-body mt-75">
                                                            <div
                                                                class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">


                                                                <label
                                                                    class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light"
                                                                    for="image">Upload Photo</label>
                                                                <input type="file" accept="image/*" name="image"
                                                                    id="image" onchange="loadFile(event)"
                                                                    style="display: none;">
                                                                <button
                                                                    class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">Reset</button>
                                                                <script>
                                                                    var loadFile = function(event) {
                                                                        var image = document.getElementById(
                                                                            'output');
                                                                        image.src = URL.createObjectURL(event.target
                                                                            .files[0]);
                                                                    };
                                                                </script>
                                                            </div>
                                                            <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or
                                                                    PNG. Max
                                                                    size of
                                                                    800kB</small></p>
                                                        </div>
                                            </div>

                                        </div> --}}
                                            <div class="row">
                                               
                                                <div class="col-12 ml-4 col-sm-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"   required data-validation-required-message="This username field is required">
                                                            @if ($errors->has('username'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('username') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="abc@abc.com" required data-validation-required-message="This email field is required">
                                                            @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Joined Date</label>
                                                            <input type="date" class="form-control"  name="joined_date" id="joined_date"  required data-validation-required-message="This Joined Date field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Date of Birth</label>
                                                            <input type="date" class="form-control"  name="dob" id="dob"  required data-validation-required-message="This DOB field is required">
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="col-16  ml-4 col-sm-3">
                                                    
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"  required data-validation-required-message="This name field is required" pattern="^[a-zA-Z\s]*$">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Qualifications</label>
                                                            <input type="text" class="form-control" name="qualifications" id="qualifications" placeholder="e.g. BA"  required data-validation-required-message="This qualifications field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Address</label>
                                                            <input type="textbox" class="form-control" name="address" id="address" placeholder="e.g. p111..."  required data-validation-required-message="This address field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Contact</label>
                                                            <input type="text" class="form-control" name="contact" id="contact" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" required data-validation-required-message="This contact field is required">
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-16  ml-4 col-sm-3">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Gender</label>
                                                            <select class="browser-default custom-select" name="gender" id="gender" >
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                                <option>Not Specified</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="password" >Password</label>
                                                            <input type="password" name="password" id="inputPassword" class="form-control"
                                                            placeholder="Password" required>
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="inputConfPassword">Confirm Password</label>
                                                            <input type="password" name="password_confirmation" id="inputConfPassword"
                                                            class="form-control" placeholder="Confirm Password"
                                                            required>
                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Submit</button>
                                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- users edit ends -->

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