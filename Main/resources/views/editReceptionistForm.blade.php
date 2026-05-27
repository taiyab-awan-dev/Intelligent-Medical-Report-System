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
                    <li class="active nav-item"><a href="/admineditReceptionist"><i class="feather icon-edit"></i><span
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
                                    <li class="breadcrumb-item active"> Manage Receptionist Details
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
                        <h4 class="card-title">Select Receptionist to edit</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-sm-6 col-12">
                                    <div class="form-group">
                                        <select onfocus="hideform(this)"
                                        onchange="reloadform(this)" class="select2-theme form-control" name="id" id="selectP" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                            <optgroup label="Receptionists">
                                                <option selected>Select Email of the Receptionist</option>
                                                @foreach ($users as $user)
                                                @if($user->type==3)
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
                                            <tr>
                                                @if($user->type==3)
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
                                <a class="btn btn-primary mr-2 mb-2 waves-effect waves-light " id="operate" style="display: none" href="/admineditReceptionist" role="button" >Back</a>
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
                                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill"
                                        href="#account-vertical-general{{$user->id}}" aria-expanded="true">
                                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                                        General
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
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general{{$user->id}}"
                                                aria-labelledby="account-pill-general" aria-expanded="true">

                                                <form method="POST"
                                                    action="/updateReceptionist/{{$user->id}}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">
                                                        <div class="col-12 ml-4 col-sm-3">
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
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control" name="name"
                                                                        id="name" placeholder="Name"
                                                                        value="{{ $user->name }}" required
                                                                        data-validation-required-message="This name field is required" pattern="^[a-zA-Z\s]*$">
                                                                </div>
                                                            </div>
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
                                                        <div class="col-12 ml-4 col-sm-3">
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
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="address">Address</label>
                                                                        <input type="textbox" class="form-control" name="address" id="address" value="{{$user->address}}" placeholder="e.g. p111..."  required data-validation-required-message="This address field is required">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Date of Birth</label>
                                                                        <input type="date" class="form-control" value="{{$user->dob}}"  name="dob" id="dob"  required data-validation-required-message="This DOB field is required">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-12 ml-4 col-sm-3">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Qualifications</label>
                                                                        @foreach ($receptionists as $receptionist)
                                                                        @if($receptionist->receptionist_id==$user->id)
                                                                        <input type="text" class="form-control" name="qualifications" id="qualifications" value="{{$receptionist->qualifications}}"  required data-validation-required-message="This contact field is required">    
                                                                        @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label>Contact</label>
                                                                        <input type="text" class="form-control" name="contact" id="contact" value="{{$user->contact}}" placeholder="+923/00923xxxxxxx"  pattern="^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$" required data-validation-required-message="This contact field is required">
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
                                            <div class="tab-pane fade " id="account-vertical-password{{$user->id}}" role="tabpanel"
                                                aria-labelledby="account-pill-password" aria-expanded="false">
                                                <form id="pchangeform" method="POST"
                                                    action="/changepass/{{$user->id}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-12 ml-4 col-sm-3">
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
                                                        <div class="col-12 ml-4 col-sm-3">
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
                                                        <div class="col-12 ml-4 col-sm-3">
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