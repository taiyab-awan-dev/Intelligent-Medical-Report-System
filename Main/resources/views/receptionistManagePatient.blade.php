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
    
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 
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
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="/receptionistOwnEdit"><i class="feather icon-user"></i> Edit Profile</a>
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
        <li class=" nav-item"><a href="/receptionistDashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="dashboard">Dashboard</span></a>
                </li></ul>
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span>Content</span>
                </li>
                <li class=" nav-item"><a href="/receptionistpatientRegister"><i class="feather icon-user"></i><span class="menu-title" data-i18n="RegisterPatient">Register Patient</span></a>
                </li>
                <li class="active nav-item"><a href="/receptionisteditpatient"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Manage Patient Details">Manage Patient Details</span></a>
                </li>
                <li class=" nav-item"><a href="receptionistSchedule"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Edit Patient">Schedule</span></a>
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
                            <h2 class="content-header-title float-left mb-0">Receptionist</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a>User Management</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Manage Patient Details
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

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Select Patient to edit</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <select onfocus="hideform(this)"
                                        onchange="reloadform(this)" class="select2-theme form-control" name="id" id="selectP" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                            <optgroup label="Patients">
                                                <option selected>Select Email of the patient</option>
                                                @foreach ($users as $user)
                                                @if($user->type==4)
                                                <option value="{{$user->id}}">{{$user->email}}</option>  
                                                @endif  
                                                @endforeach
                                                
                                            </optgroup>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="example" class="table  dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>DOB</th>
                                                <th>Gender</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            @if($user->type==4)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->contact}}</td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->dob}}</td>
                                                <td>{{$user->gender}}</td>   
                                                @endif
                                            </tr>
                                            @endforeach 
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <a class="btn btn-primary mr-2 mb-2 waves-effect waves-light " id="operate" style="display: none" href="/receptionisteditpatient" role="button" >Back</a>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($users as $user)
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div id="body{{$user->id}}" class="row" style="display: none">
                        <!-- left menu section -->
                        <div class="row-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75 active" id="account-pill-basicInfo" data-toggle="pill"
                                        href="#account-vertical-basicInfo{{$user->id}}" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        Basic Information
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-contact" data-toggle="pill"
                                        href="#account-vertical-contact{{$user->id}}" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-employer" data-toggle="pill"
                                        href="#account-vertical-employer{{$user->id}}" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Employer
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-stats" data-toggle="pill"
                                        href="#account-vertical-stats{{$user->id}}" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Stats
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-gaurdian" data-toggle="pill"
                                        href="#account-vertical-gaurdian{{$user->id}}" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Gaurdian
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill"
                                        href="#account-vertical-password{{$user->id}}" aria-expanded="false">
                                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                                        Change Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- right content section -->
                        <div class="col">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-basicInfo{{$user->id}}"
                                                aria-labelledby="account-pill-basicInfo" aria-expanded="true">
                                                <form method="POST"
                                                    action="/receptionistupdatepatient1/{{$user->id}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                            <div class="controls">
                                                                <label>Username</label>
                                                                <input type="text" class="form-control" value="{{$user->username}}" name="username" id="username" placeholder="Username"   required data-validation-required-message="This username field is required">
                                                                @if ($errors->has('username'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('username') }}</strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                        id="name" placeholder="Name"
                                                                        value="{{ $user->name }}" required
                                                                        data-validation-required-message="This name field is required" pattern="^[a-zA-Z\s]*$">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="email">E-mail</label>
                                                                    <input type="email" class="form-control"
                                                                        name="email" id="email" placeholder="Email"
                                                                        value="{{ $user->email }}" required
                                                                        data-validation-required-message="This email field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="gender">Gender</label>
                                                                <select class="form-control" name="gender"
                                                                    id="gender">
                                                                    @if($user->gender==NULL)
                                                                    <option selected></option>
                                                                    <option >Male</option>
                                                                    <option>Female</option>
                                                                    <option >Not Specified</option>
                                                                    @elseif ($user->gender=="Male")
                                                                    <option selected>Male</option>
                                                                    <option>Female</option>
                                                                    <option >Not Specified</option>
                                                                    @elseif ($user->gender=="Female")
                                                                    <option selected>Female</option>
                                                                    <option>Male</option>
                                                                    <option >Not Specified</option>
                                                                    @elseif ($user->gender=="Not Specified")
                                                                    <option selected>Not Specified</option>
                                                                    <option>Male</option>
                                                                    <option >Female</option>
                                                                    @endif
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Date of Birth</label>
                                                                        <input type="date" class="form-control" value="{{$user->dob}}"  name="dob" id="dob"  required data-validation-required-message="This DOB field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-contact{{$user->id}}" role="tabpanel"
                                                aria-labelledby="account-pill-contact" aria-expanded="false">
                                                <form method="POST"
                                                    action="/receptionistupdatepatient2/{{$user->id}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>Address</label>
                                                                    <input type="textbox" class="form-control" name="address" id="address" placeholder="e.g. p111..."  >
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
                                                                    <input type="text" class="form-control" name="city" id="city" placeholder="e.g. p111..."  >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>Postal Code</label>
                                                                    <input type="text" class="form-control" name="postalCode" id="postalCode" placeholder="e.g. p111..."  >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>Mother's Name</label>
                                                                    <input type="text" class="form-control" name="motherName" id="motherName" placeholder="e.g. p111..."  >
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
                                                    <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-employer{{$user->id}}" role="tabpanel"
                                                aria-labelledby="account-pill-employer" aria-expanded="false">
                                                <form method="POST"
                                                    action="/receptionistupdatepatient3/{{$user->id}}" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Occupation</label>
                                                                <input type="text" class="form-control" name="occupation" id="occupation" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Industry</label>
                                                                <input type="text" class="form-control" name="industry" id="industry" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" name="employerCity" id="employerCity" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Postal Code</label>
                                                                <input type="text" class="form-control" name="employerPostalCode" id="employerPostalCode" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-stats{{$user->id}}" role="tabpanel"
                                                aria-labelledby="account-pill-stats" aria-expanded="false">
                                                <form method="POST"
                                                    action="/receptionistupdatepatient4/{{$user->id}}" enctype="multipart/form-data">
                                                    @csrf
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
                                                                <input type="text" class="form-control" name="familySize" id="familySize" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Monthly Income</label>
                                                                <input type="text" class="form-control" name="income" id="income" placeholder="e.g. p111..."  >
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
                                                                <input type="text" class="form-control" name="migrantOrSeasonal" id="migrantOrSeasonal" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-gaurdian{{$user->id}}" role="tabpanel"
                                                aria-labelledby="account-pill-gaurdian" aria-expanded="false">
                                                <form method="POST"
                                                    action="/receptionistupdatepatient5/{{$user->id}}" enctype="multipart/form-data">
                                                    @csrf
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control" name="gaurdianAddress" id="gaurdianAddress" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Name</label>
                                                                <input type="text" class="form-control" name="guardianName" id="guardianName" placeholder="e.g. p111..."  >
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
                                                                <input type="text" class="form-control" name="guardianCity" id="guardianCity" placeholder="e.g. p111..."  >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Postal Code</label>
                                                                <input type="text" class="form-control" name="guardianPostalCode" id="guardianPostalCode" placeholder="e.g. p111..."  >
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
                                                <div
                                                        class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-outline-warning">Cancel</button>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-password{{$user->id}}" role="tabpanel"
                                                aria-labelledby="account-pill-password" aria-expanded="false">
                                                <form id="pchangeform" method="POST"
                                                    action="/changepass/{{$user->id}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="oldpassword">Old
                                                                        Password</label>
                                                                    <input type="password" name="oldpassword"
                                                                        class="form-control" id="oldpassword" required
                                                                        placeholder="Old Password"
                                                                        data-validation-required-message="This old password field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="newpassword">New
                                                                        Password</label>
                                                                    <input type="password" name="pwd1" id="newpassword"
                                                                        class="form-control" placeholder="New Password"
                                                                        required
                                                                        data-validation-required-message="The password field is required"
                                                                        minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="renewpassword">Retype New
                                                                        Password</label>
                                                                    <input type="password" name="pwd2"
                                                                        class="form-control" required id="renewpassword"
                                                                        data-validation-match-match="password"
                                                                        placeholder="New Password"
                                                                        data-validation-required-message="The Confirm password field is required"
                                                                        minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="col-12 d-flex flex-sm-row flex-column justify-content-end">
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
                        </div>
                    </div>
                </section>
                <!-- account setting page end -->
                @endforeach
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
        document.addEventListener("DOMContentLoaded", function() {

            // JavaScript form validation



            var checkForm = function(e) {

                if (this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {



                } else {
                    alert("Error: Please check that you've entered the same password in confirm password!");
                    this.pwd1.focus();
                    e.preventDefault();
                    return;
                }
            };

            var myForm = document.getElementById("pchangeform");
            myForm.addEventListener("submit", checkForm, true);






        }, false);



    </script>

    <script>
                $(document).ready(function() {
    $('#example').DataTable();
} );
        var loadFile = function(event, id) {
            var t = "output";
            var image = document.getElementById(t.concat(id));
            image.src = URL.createObjectURL(event.target
                .files[0]);

        };

        function loaddef(doc, value) {
            var t = "output";
            var image = document.getElementById(
                    t.concat(doc.value));
            image.src = "/storage/image/user.png";
            var image1 = document.getElementById(
                'img1');
            image1.value = "user.png";

        }

        function settype() {
            var image1 = document.getElementById(
                'img1');
            image1.value = "changed";
        }
        function reloadform(doc, value) {
                       
                    var t = "body";
                    var image1 = document.getElementById(
                    t.concat(doc.value));
                    image1.style = 'display:block;'
                    document.getElementById("selectP").disabled='true';

                    document.getElementById("operate").style='display:block';


               }
    </script>
</body>
<!-- END: Body-->

</html>