<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/data-list-view.css">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">

                        </div>
                        <ul class="nav navbar-nav float-right">

                            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                        class="ficon feather icon-maximize"></i></a></li>

                            <li class="dropdown dropdown-user nav-item">
                                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                                            {{ auth()->user()->name }}</span></div><span>
                                        @if (auth()->user()->image != 'user.png')
                                            <img class="round"
                                                src="{{ asset('/storage/image/' . auth()->user()->email . auth()->user()->image) }}"
                                                alt="avatar" height="40" width="40">
                                        @else
                                            <img class="round" src="/storage/image/user.png" alt="avatar" height="40"
                                                width="40">
                                        @endif
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                        href="/staffOwnEdit"><i class="feather icon-user"></i> Edit Profile</a>
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
                <li class="active nav-item"><a href="/staffScheduleLookup"><i class="feather icon-user"></i><span class="menu-title" data-i18n="Schedule Lookup">Schedule Lookup</span></a>
                </li>
                <li class=" nav-item"><a href="/staffManageTime"><i class="feather icon-edit"></i><span class="menu-title" data-i18n="Manage Time">Manage Time</span></a>
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
                            <h2 class="content-header-title float-left mb-0">Doctor</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/staffDashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Appointments
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

                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">


                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th hidden></th>
                                    <th>PATIENT ID</th>
                                    <th>PATIENT NAME</th>
                                    <th>PATIENT CONTACT</th>
                                    <th>DOCTOR NAME</th>
                                    <th>TIME</th>
                                    <th>STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td hidden></td>


                                        <td class="product-name">{{ $appointment->patient->id }}</td>
                                        
                                        <td class="product-name">{{ $appointment->patient->name }}</td>
                                        <td class="product-contact">{{ $appointment->patient->contact }}</td>
                                        <td class="product-name">{{ $appointment->doctor->name }}</td>
                                        <td class="product-time">{{ $appointment->date }} {{ $appointment->time }}</td>
                                        @if ($appointment->status == 1)
                                            <td>
                                                <div class="chip chip-warning">
                                                    <div class="chip-body">
                                                        <div class="chip-text">Payment Pending</div>
                                                    </div>
                                                </div>
                                            </td>
                                        @elseif($appointment->status==2)
                                            <td>
                                                <div class="chip chip-primary">
                                                    <div class="chip-body">
                                                        <div class="chip-text">Payment Cleared</div>
                                                    </div>
                                                </div>
                                            </td>
                                        @elseif($appointment->status==3)
                                            <td>
                                                <div class="chip chip-success">
                                                    <div class="chip-body">
                                                        <div class="chip-text">Completed</div>
                                                    </div>
                                                </div>
                                            </td>
                                        @elseif($appointment->status==4)
                                            <td>
                                                <div class="chip chip-danger">
                                                    <div class="chip-body">
                                                        <div class="chip-text">Cancelled</div>
                                                    </div>
                                                </div>
                                            </td>
                                        @endif
                                        <td class="product-action">
                                            @if($appointment->status==2)
                                            <a data-toggle="modal" data-target="#inlineFormGen{{$appointment->id}}" id="gen{{ $appointment->id }}" type="button"
                                                class="btn btn-icon btn-flat-success nav-link  waves-effect waves-light"><i
                                                    class="feather icon-check"></i></a>
                                            @endif

                                                <a  onclick="document.getElementById('form2{{ $appointment->id }}').submit()"
                                                id="del{{ $appointment->id }}" type="button"
                                                class="btn btn-icon btn-flat-danger nav-link  waves-effect waves-light"><i
                                                class="feather icon-x-circle"></i></a>
                                                <a data-toggle="modal" data-target="#inlineForm{{$appointment->id}}" id="edit{{$appointment->id}}" type="button" class="btn btn-icon btn-flat-warning nav-link  waves-effect waves-light"><i class="feather icon-edit"></i></a>
                                      
                                                <form id="form1{{ $appointment->id }}" action="/updatestatus3/{{ $appointment->id }}" method="POST">
                                                    @csrf
                                                    </form>
                                                <form id="form2{{ $appointment->id }}" action="/updatestatus4/{{ $appointment->id }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                </form>
                                        </td>
                                       
                                    </tr>
                                    <div class="modal fade text-left" id="inlineForm{{$appointment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Update Appointment </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="/updateAppointment/{{$appointment->id}}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="data-items pb-3">
                                                            <div class="data-fields px-2 mt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="doctor_id">Doctor</label>
                                                                        <select class="select2-theme form-control" name="doctor_id" id="selectD{{$appointment->id}}" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                                                            
                                                                                @foreach ($doctors as $doctor)
                                                                                @if(auth()->user()->id==$appointment->doctor_id)
                                                                                <option selected value="{{auth()->user()->id}}">{{$doctor->doctor->email}}</option>  
                                                                                @else
                                                                                <option value="{{auth()->user()}}">{{$doctor->doctor->email}}</option>  
                                                                                @endif
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="patient_id">Patient</label>
                                                                        <select class="select2-theme form-control" name="patient_id" id="selectP{{$appointment->id}}" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">       
                                                                                @foreach ($patients as $patient)
                                                                                @if($patient->patient_id==$appointment->patient_id)
                                                                                <option selected value="{{$patient->patient_id}}">{{$patient->patient->email}}</option>  
                                                                                @else
                                                                                <option value="{{$patient->patient_id}}">{{$patient->patient->email}}</option>  
                                                                                @endif
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="date{{$appointment->id}}">Date</label>
                                                                        <input id="date{{$appointment->id}}" name="date" min="{{ date('m-d-Y') }}" value="{{$appointment->date}}" type='date' class="form-control" />
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="time{{$appointment->id}}">Time</label>
                                                                        <input id="time{{$appointment->id}}" name="time" value="{{$appointment->time}}" type='text' class="form-control pickatime" />
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                  
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade text-left" id="inlineFormGen{{$appointment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Add Prescriptions </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="/generatePrescription/{{ $appointment->id }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="data-items pb-3">
                                                            <div class="data-fields px-2 mt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="patient_DOB">Patient Date Of Birth</label>
                                                                        <input type="text" class="form-control" name="patient_DOB"
                                                                        id="patient_DOB" placeholder="Patient DOB"
                                                                        value="{{ $appointment->patient->dob }}" readonly required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    @if($appointment->patient_weight == NULL)
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="patient_weight">Patient Weight</label>
                                                                        <input type="text" class="form-control" name="patient_weight"
                                                                        id="patient_weight" placeholder="Weight"
                                                                        value="" required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    @else
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="patient_weight">Patient Weight</label>
                                                                        <input type="text" class="form-control" name="patient_weight"
                                                                        id="patient_weight" placeholder="Weight"
                                                                        value="{{ $appointment->patient_weight }}" required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    @endif
                                                                    @if($appointment->disease == NULL)
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="disease">Disease</label>
                                                                        <input type="text" class="form-control" name="disease"
                                                                        id="disease" placeholder="Diesease"
                                                                        value="" required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    @else
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="disease">Disease</label>
                                                                        <input type="text" class="form-control" name="disease"
                                                                        id="disease" placeholder="Diesease"
                                                                        value="{{ $appointment->disease }}" required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    @endif
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="med_name">Medicine Name</label>
                                                                        <input type="text" class="form-control" name="med_name"
                                                                        id="med_name" placeholder="Medicine Name"
                                                                        value="" required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="med_type">Medicine Type</label>
                                                                       <select class="form-control" name="med_type"
                                                                    id="med_type">
                                                                    <option selected>Tablet</option>
                                                                    <option>Syrup</option>
                                                                    <option >Capsule</option>
                                                                    <option >Drops</option>
                                                                    <option >Injection</option>
                                                                    <option >Topical Medicines</option>
                                                                    <option >Inhaler</option>
                                                                </select>
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="med_description">Medicine Description</label>
                                                                        <input type="text" class="form-control" name="med_description"
                                                                        id="med_description" placeholder="Description"
                                                                        value="" required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        <label for="med_dose">Medicine Dose</label>
                                                                        <input type="text" class="form-control" name="med_dose"
                                                                        id="med_dose" placeholder="Medicine Dosage"
                                                                        value="" required
                                                                        data-validation-required-message="This name field is required">
                                                                    </div>
                                                                    <div class="col-sm-12 data-field-col">
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
    
    
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button id="add_btn" type="submit" class="btn btn-primary">Add</button>
                                                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                        <button onclick="document.getElementById('form1{{ $appointment->id }}').submit()"  class="btn btn-success">Complete Appointment</button>
                                                       
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->


                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020, IMR, All rights
                Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                    class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/ui/data-list-view.js"></script>
    <script src="../../../app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
