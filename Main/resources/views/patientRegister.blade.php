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
                <li class=" nav-item"><a href="/accountantRegisterForm"><i class="feather icon-user"></i><span
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
                <li class="active nav-item"><a href="/patientRegister"><i class="feather icon-user"></i><span
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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Admin</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a>User Management</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a>Add Patient</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

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
                <section id="page-account-settings">
                    <div class="row">
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-basicInfo" data-toggle="pill"
                                        href="#account-vertical-basicInfo" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        Basic Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-contact" data-toggle="pill"
                                        href="#account-vertical-contact" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-employer" data-toggle="pill"
                                        href="#account-vertical-employer" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Employer
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-stats" data-toggle="pill"
                                        href="#account-vertical-stats" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Stats
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-gaurdian" data-toggle="pill"
                                        href="#account-vertical-gaurdian" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Gaurdian
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="POST"
                                        action="/registerpatient" enctype="multipart/form-data">
                                        @csrf
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-basicInfo"
                                                aria-labelledby="account-pill-basicInfo" aria-expanded="true">
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Username</label>
                                                                <input type="text" class="form-control"  name="username" id="username" placeholder="Username"   required data-validation-required-message="This username field is required">
                                                                @if ($errors->has('username'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('username') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                        id="name" placeholder="Name"
                                                                        required
                                                                        data-validation-required-message="This name field is required"  pattern="^[a-zA-Z\s]*$">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="email">E-mail</label>
                                                                    <input type="email" class="form-control"
                                                                        name="email" id="email" placeholder="Email"
                                                                            required
                                                                        data-validation-required-message="This email field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="gender">Gender</label>
                                                                <select class="form-control" name="gender"
                                                                    id="gender">
                                                                    <option >Male</option>
                                                                    <option>Female</option>
                                                                    <option >Not Specified</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6" >
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="martialStatus">Martial Status</label>
                                                                <select class="form-control" name="martialStatus"
                                                                    id="martialStatus">
                                                                    <option >Single</option>
                                                                    <option>Married</option>
                                                                    <option >Divorced</option>
                                                                    <option >Widowed</option>
                                                                    <option >Separated</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>Joined Date</label>
                                                                    <input type="date" class="form-control"   name="joinedDate" id="joinedDate"  required data-validation-required-message="This DOB field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>Date of Birth</label>
                                                                    <input type="date" class="form-control"   name="dob" id="dob"  required data-validation-required-message="This DOB field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
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
                                                        </div>
                                                        <div class="col-6">
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
                                                    </div>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-contact" role="tabpanel"
                                                aria-labelledby="account-pill-contact" aria-expanded="false">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Address</label>
                                                                <input type="textbox" class="form-control" name="address" id="address" placeholder="e.g. p11.."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Contact</label>
                                                                <input type="text" class="form-control" name="contact" id="contact" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Emergency Contact</label>
                                                                <input type="text" class="form-control" name="emerygencyContact" id="emergencyContact" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Home Phone</label>
                                                                <input type="text" class="form-control" name="homeNo" id="homeNo" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="email">Trusted E-mail</label>
                                                                <input type="email" class="form-control"
                                                                    name="trustedEmail" id="trustedEmail" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" name="city" id="city" placeholder="City"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Postal Code</label>
                                                                <input type="text" class="form-control" name="postalCode" id="postalCode" placeholder="Postal Code"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Mother's Name</label>
                                                                <input type="text" class="form-control" name="motherName" id="motherName" placeholder="Mother's Name"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Work Phone</label>
                                                                <input type="text" class="form-control" name="workNo" id="workNo" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-employer" role="tabpanel"
                                                aria-labelledby="account-pill-employer" aria-expanded="false">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Occupation</label>
                                                                <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Occupation"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Industry</label>
                                                                <input type="text" class="form-control" name="industry" id="industry" placeholder="Industry"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" name="employerCity" id="employerCity" placeholder="City"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Postal Code</label>
                                                                <input type="text" class="form-control" name="employerPostalCode" id="employerPostalCode" placeholder=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-stats" role="tabpanel"
                                                aria-labelledby="account-pill-stats" aria-expanded="false">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="language">Language</label>
                                                            <select class="form-control" name="language" id="language">
                                                                <option></option>
                                                                <option value="AF">Afrikaans</option>
                                                                <option value="SQ">Albanian</option>
                                                                <option value="AR">Arabic</option>
                                                                <option value="HY">Armenian</option>
                                                                <option value="EU">Basque</option>
                                                                <option value="BN">Bengali</option>
                                                                <option value="BG">Bulgarian</option>
                                                                <option value="CA">Catalan</option>
                                                                <option value="KM">Cambodian</option>
                                                                <option value="ZH">Chinese (Mandarin)</option>
                                                                <option value="HR">Croatian</option>
                                                                <option value="CS">Czech</option>
                                                                <option value="DA">Danish</option>
                                                                <option value="NL">Dutch</option>
                                                                <option value="EN">English</option>
                                                                <option value="ET">Estonian</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finnish</option>
                                                                <option value="FR">French</option>
                                                                <option value="KA">Georgian</option>
                                                                <option value="DE">German</option>
                                                                <option value="EL">Greek</option>
                                                                <option value="GU">Gujarati</option>
                                                                <option value="HE">Hebrew</option>
                                                                <option value="HI">Hindi</option>
                                                                <option value="HU">Hungarian</option>
                                                                <option value="IS">Icelandic</option>
                                                                <option value="ID">Indonesian</option>
                                                                <option value="GA">Irish</option>
                                                                <option value="IT">Italian</option>
                                                                <option value="JA">Japanese</option>
                                                                <option value="JW">Javanese</option>
                                                                <option value="KO">Korean</option>
                                                                <option value="LA">Latin</option>
                                                                <option value="LV">Latvian</option>
                                                                <option value="LT">Lithuanian</option>
                                                                <option value="MK">Macedonian</option>
                                                                <option value="MS">Malay</option>
                                                                <option value="ML">Malayalam</option>
                                                                <option value="MT">Maltese</option>
                                                                <option value="MI">Maori</option>
                                                                <option value="MR">Marathi</option>
                                                                <option value="MN">Mongolian</option>
                                                                <option value="NE">Nepali</option>
                                                                <option value="NO">Norwegian</option>
                                                                <option value="FA">Persian</option>
                                                                <option value="PL">Polish</option>
                                                                <option value="PT">Portuguese</option>
                                                                <option value="PA">Punjabi</option>
                                                                <option value="QU">Quechua</option>
                                                                <option value="RO">Romanian</option>
                                                                <option value="RU">Russian</option>
                                                                <option value="SM">Samoan</option>
                                                                <option value="SR">Serbian</option>
                                                                <option value="SK">Slovak</option>
                                                                <option value="SL">Slovenian</option>
                                                                <option value="ES">Spanish</option>
                                                                <option value="SW">Swahili</option>
                                                                <option value="SV">Swedish </option>
                                                                <option value="TA">Tamil</option>
                                                                <option value="TT">Tatar</option>
                                                                <option value="TE">Telugu</option>
                                                                <option value="TH">Thai</option>
                                                                <option value="BO">Tibetan</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TR">Turkish</option>
                                                                <option value="UK">Ukrainian</option>
                                                                <option value="UR">Urdu</option>
                                                                <option value="UZ">Uzbek</option>
                                                                <option value="VI">Vietnamese</option>
                                                                <option value="CY">Welsh</option>
                                                                <option value="XH">Xhosa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Family Size</label>
                                                                <input type="text" class="form-control" name="familySize" id="familySize" placeholder=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Monthly Income</label>
                                                                <input type="text" class="form-control" name="income" id="income" placeholder=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="refferalSource">Refferal Source</label>
                                                            <select class="form-control" name="refferalSource"
                                                                id="refferalSource">
                                                                <option></option>
                                                                <option >Patient</option>
                                                                <option >Employee</option>
                                                                <option >Walk-in</option>
                                                                <option >Newspaper</option>
                                                                <option >T.V.</option>
                                                                <option >Radio</option>
                                                                <option >Direct Mail</option>
                                                                <option>Coupan</option>
                                                                <option >Refferal Card</option>
                                                                <option >Other</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label for="Religion">Religion</label>
                                                            <select class="form-control" name="religion" id="religion">
                                                                    <option selected> </option>
                                                                    <option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
                                                                    <option value="Agnostic">Agnostic</option>
                                                                    <option value="Atheist">Atheist</option>
                                                                    <option value="Baha'i">Baha'i</option>
                                                                    <option value="Buddhism">Buddhism</option>
                                                                    <option value="Cao Dai">Cao Dai</option>
                                                                    <option value="Chinese traditional religion">Chinese traditional religion</option>
                                                                    <option value="Christianity">Christianity</option>
                                                                    <option value="Hinduism">Hinduism</option>
                                                                    <option value="Islam">Islam</option>
                                                                    <option value="Jainism">Jainism</option>
                                                                    <option value="Juche">Juche</option>
                                                                    <option value="Judaism">Judaism</option>
                                                                    <option value="Neo-Paganism">Neo-Paganism</option>
                                                                    <option value="Nonreligious">Nonreligious</option>
                                                                    <option value="Rastafarianism">Rastafarianism</option>
                                                                    <option value="Secular">Secular</option>
                                                                    <option value="Shinto">Shinto</option>
                                                                    <option value="Sikhism">Sikhism</option>
                                                                    <option value="Spiritism">Spiritism</option>
                                                                    <option value="Tenrikyo">Tenrikyo</option>
                                                                    <option value="Unitarian-Universalism">Unitarian-Universalism</option>
                                                                    <option value="Zoroastrianism">Zoroastrianism</option>
                                                                    <option value="primal-indigenous">primal-indigenous</option>
                                                                    <option value="Other">Other</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Migrant/Seasonal</label>
                                                                <input type="text" class="form-control" name="migrantOrSeasonal" id="migrantOrSeasonal" placeholder=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-gaurdian" role="tabpanel"
                                                aria-labelledby="account-pill-gaurdian" aria-expanded="false">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control" name="gaurdianAddress" id="gaurdianAddress" placeholder=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" name="guardianName" id="guardianName"  pattern="^[a-zA-Z\s]*$"  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Contact</label>
                                                                <input type="text" class="form-control" name="guardianContact" id="guardianContact" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" name="guardianCity" id="guardianCity" placeholder=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Postal Code</label>
                                                                <input type="text" class="form-control" name="guardianPostalCode" id="guardianPostalCode" placeholder=""  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                   <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Work Phone</label>
                                                                <input type="text" class="form-control" name="guardianWorkNo" id="guardianWorkNo" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                <button type="reset"
                                                    class="btn btn-outline-warning">Cancel</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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