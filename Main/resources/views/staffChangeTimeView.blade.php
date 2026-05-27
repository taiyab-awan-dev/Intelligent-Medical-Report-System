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
    <title>{{ config('app.name', 'IMR') }}</title>
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
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="/staffOwnEdit"><i class="feather icon-user"></i> Edit Profile</a>
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
        <li class=" nav-item"><a href="/staffDashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="dashboard">Dashboard</span></a>
                </li></ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                <li class=" navigation-header"><span>Actions</span>
                </li>
                <li class=" nav-item"><a href="/staffViewPrescription"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="View Prescription">View Prescription</span></a>
                </li>
                <li class=" nav-item"><a href="/staffScheduleLookup"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Schedule Lookup">Schedule Lookup</span></a>
                </li>
                <li class="active nav-item"><a href="/staffManageTime"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Manage Time">Manage Time</span></a>
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Staff</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a>Manage Time</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
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
                <form method="POST"
                action="/updateStaffTime" onsubmit="return getNewVal();" enctype="multipart/form-data">
                @csrf
            
                <div class="card">
                    
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="name">From</label>
                                            <select onchange="getNewVal();" class="browser-default custom-select" name="time1" id="time1" >
                                                    <option>00:00</option>
                                                    <option>00:30</option>
                                                    <option>01:00</option>
                                                    <option>01:30</option>
                                                    <option>02:00</option>
                                                    <option>02:30</option>
                                                    <option>03:00</option>
                                                    <option>03:30</option>
                                                    <option>04:00</option>
                                                    <option>04:30</option>
                                                    <option>05:00</option>
                                                    <option>05:30</option>
                                                    <option>06:00</option>
                                                    <option>06:30</option>
                                                    <option>07:00</option>
                                                    <option>07:30</option>
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:00</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                    <option>10:30</option>
                                                    <option>11:00</option>
                                                    <option>11:30</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                    
                                </div>
                                    <div class="form-group">
                                        <div class="controls">
                                        <label></label>
                                            <select onchange="getNewVal();" class="browser-default custom-select" name="AM" id="AM" >
                                                <option>AM</option>
                                                <option>PM</option>
                                            </select>
                                        </div>
                                    </div>    
                            </div>

                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label for="name">To</label>
                                            <select onchange="getNewVal();" class="browser-default custom-select" name="time2" id="time2" >
                                                    <option>01:00</option>
                                                    <option>01:30</option>
                                                    <option>02:00</option>
                                                    <option>02:30</option>
                                                    <option>03:00</option>
                                                    <option>03:30</option>
                                                    <option>04:00</option>
                                                    <option>04:30</option>
                                                    <option>05:00</option>
                                                    <option>05:30</option>
                                                    <option>06:00</option>
                                                    <option>06:30</option>
                                                    <option>07:00</option>
                                                    <option>07:30</option>
                                                    <option>08:00</option>
                                                    <option>08:30</option>
                                                    <option>09:00</option>
                                                    <option>09:30</option>
                                                    <option>10:00</option>
                                                    <option>10:30</option>
                                                    <option>11:00</option>
                                                    <option>11:30</option>
                                                    <option>00:00</option>
                                                    <option>00:30</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                    
                                </div>
                                    <div class="form-group">
                                        <div class="controls">
                                        <label></label>
                                            <select onchange="getNewVal();" class="browser-default custom-select" name="PM" id="PM" >
                                                <option>AM</option>
                                                <option>PM</option>
                                            </select>
                                        </div>
                                    </div>    
                            </div>
                            
                        </div>
                        <div class="card-body">
                        </div>
                        <div class="card-body">
                        <div class="controls">
                            <div class="col-sm-6 col-12">
                            <input type="text" class="form-control" name="fromtime" disabled="disabled" value="{{ $doctor->timefrom }}" id="fromtime">
                            </div>
                            <div class="col-sm-6 col-12">
                            <label>To</label>
                            </div>
                            <div class="col-sm-6 col-12">
                            <input type="text" class="form-control" name="totime" disabled="disabled" value="{{ $doctor->timeto }}" id="totime">
                            </div>
                        </div>
                        </div>
                        <div class="card-body">
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                            <button id="abc" type="submit" onsubmit="return getNewVal();" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">
                            Save changes</button>
                            <button type="reset" class="btn btn-outline-warning">Cancel</button>
                        </div>
                        </div>

                </div>
            </div>
                </form>
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
    <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-user.js"></script>
    <script src="../../../app-assets/js/scripts/navs/navs.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <script src="../../../app-assets/js/scripts/forms/select/form-select2.js"></script>
    <script src="../../../app-assets/js/scripts/pages/account-setting.js"></script>
    <!-- END: Page JS-->
    <script type="text/javascript">
    function getNewVal()
    {
        var time1 = document.getElementById("time1");
        var time2 = document.getElementById("time2");
        var am1 = document.getElementById("AM");
        var am2 = document.getElementById("PM");
        var timeFromCheck=Date.parse('20 Aug 2000 09:00 AM');
        var timeToCheck=Date.parse('21 Aug 2000 12:00 AM');
        var t1=Date.parse('20 Aug 2000 '+time1.value+" "+am1.value);
        var t2=Date.parse('20 Aug 2000 '+time2.value+" "+am2.value);
        if (t1>=t2)
		{
			alert('Time is wrong');
            document.getElementById("fromtime").value=time1.value+ " "+am1.value;
            document.getElementById("totime").value=t2.getDate();
            return false;
        }else if(t1<timeFromCheck || t2>timeToCheck)
        {
            alert('Time must be between 9:00AM and 00:00AM');
            document.getElementById("fromtime").value=time1.value+ " "+am1.value;
            document.getElementById("totime").value="";
            return false;
        }
		else
		{
            document.getElementById("fromtime").value=time1.value+ " "+am1.value;
            document.getElementById("totime").value=time2.value+ " "+am2.value;
            return true;
        }

    }
        
    </script>

    
</body>
<!-- END: Body-->

</html>