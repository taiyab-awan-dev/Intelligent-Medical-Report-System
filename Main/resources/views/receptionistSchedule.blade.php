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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/data-list-view.css">
    
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
                <li class=" nav-item"><a href="/receptionisteditpatient"><i class="feather icon-settings"></i><span class="menu-title" data-i18n="Manage Patient Details">Manage Patient Details</span></a>
                </li>
                <li class="active nav-item"><a href="receptionistSchedule"><i class="feather icon-check-circle"></i><span class="menu-title" data-i18n="Edit Patient">Schedule</span></a>
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
                                    <li class="breadcrumb-item"><a href="/receptionistDashboard">Home</a>
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
                                @foreach($appointments as $appointment)
                                <tr >
                                    <td hidden></td>
                                    
                                    <td class="product-name">{{ $appointment->patient->id }}</td>
                                        
                                    <td class="product-name">{{ $appointment->patient->name }}</td>
                                    <td class="product-contact">{{ $appointment->patient->contact }}</td>
                                    <td class="product-name">{{ $appointment->doctor->name }}</td>
                                    <td class="product-time">{{ $appointment->date }} {{ $appointment->time }}</td>
                                   
                                    @if($appointment->status==1)
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
                                        @if($appointment->status!=3 && $appointment->status!=4)
                                        <a data-toggle="modal" data-target="#inlineForm{{$appointment->id}}" onclick="updateTimeChange(this,{{$appointment->id}})" id="edit{{$appointment->id}}" type="button" class="btn btn-icon btn-flat-warning nav-link  waves-effect waves-light"><i class="feather icon-edit"></i></a>
                                        @endif
                                        @if($appointment->status==1)
                                        <a data-toggle="modal" data-target="#inlineReciept{{$appointment->id}}" id="reciept{{$appointment->id}}" type="button" class="btn btn-icon btn-flat-warning nav-link  waves-effect waves-light"><i class="feather icon-check"></i></a>
                                        @endif
                                        @if($appointment->status!=3 && $appointment->status!=4)
                                        <a href="/deleteAppointment{{$appointment->id}}" id="del{{$appointment->id}}" type="button" class="btn btn-icon btn-flat-danger nav-link  waves-effect waves-light"><i class="feather icon-trash"></i></a>
                                        @endif
                                    </td>
                                    
                                </tr>
                                <div class="modal fade text-left" id="inlineReciept{{$appointment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Update Appointment </h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/addInvoice/{{$appointment->id}}"  target="_blank" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="data-items pb-3">
                                                        <div class="data-fields px-2 mt-3">
                                                            <div class="row">
                                                                <div class="col-sm-12 data-field-col">
                                                                    <label for="doctor_id">Charges</label>
                                                                    <input type="text" class="form-control" name="charges" id="charges" required data-validation-required-message="This qualifications field is required">
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Generate Invoice</button>
                                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                              
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
                                                                    <select class="select2-theme form-control" onchange="updateTimeChange(this,{{$appointment->id}})" name="doctor_id" id="selectD{{$appointment->id}}" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                                                        
                                                                            @foreach ($doctors as $doctor)
                                                                            @if($doctor->doctor_id==$appointment->doctor_id)
                                                                            <option selected value="{{$doctor->staff_id}}">{{$doctor->doctor->email}}</option>  
                                                                            @else
                                                                            <option value="{{$doctor->staff_id}}">{{$doctor->doctor->email}}</option>  
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
                                                                    <select id="time{{ $appointment->id }}" class="select2-theme form-control"
                                                                        name="time" value="{{ $appointment->time }}"
                                                                        data-select2-id="select2-theme"
                                                                        tabindex="-1" aria-hidden="true" >
                                                                        <option>Select Time</option>
                                                                    </select>
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


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Add Appointment</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <form method="POST" action="/addAppointment" enctype="multipart/form-data">
                            @csrf
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="doctor_id">Doctor</label>
                                            <select class="select2-theme form-control" onchange="getNewVal();" name="doctor_id" id="selectD" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                                
                                                    <option selected>Select Doctor</option>
                                                    @foreach ($doctors as $doctor)
                                                    <option value="{{$doctor->staff_id}}">{{$doctor->doctor->email}}</option>  
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="patient_id">Patient</label>
                                            <select  class="select2-theme form-control" name="patient_id" id="selectP" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">      
                                                    <option selected>Select Patient</option>
                                                    @foreach ($patients as $patient)
                                                    <option value="{{$patient->patient_id}}">{{$patient->patient->email}}</option>  
                                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="date">Date</label>
                                            <input id="date" name="date" min="{{ date('m-d-Y') }}" type='date' class="form-control" />
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="time">Time</label>
                                            <select id="time" name="time" type='text' class="form-control select2-theme" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                            <option selected> Select Time</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button type="submit" class="btn btn-primary">Add Data</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button type="reset" class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
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
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020, IMR, All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

    
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
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
    <script type="text/javascript">
    function updateTimeChange(doc,value)
        {
            var doctors = {!! json_encode($doctors->toArray(), JSON_HEX_TAG) !!};
            var sel = document.getElementById('time'+value);
            length = sel.options.length;
            while(length-->1){
                sel.remove(length);
            }
            for(var i=0;i<doctors.length;i++)
            {   
                if(document.getElementById('selectD'+value).value == doctors[i].staff_id)
                {
                    var datefrom = new Date('01 01 2021 ' +doctors[i].timefrom);
                    var dateto = new Date('01 01 2021 ' +doctors[i].timeto);
                    while(dateto>=datefrom)
                    {
                    var opt = document.createElement('option');
                    opt.appendChild( document.createTextNode(datefrom.toLocaleTimeString('en-US')) );
                    opt.value = datefrom.toLocaleTimeString('en-US'); 
                    sel.appendChild(opt); 
                    datefrom.setMinutes(datefrom.getMinutes()+30);
                   
                    }
                }
            }
        }
    function getNewVal()
    {
        $("#time").empty();
        var xx = document.getElementById("time");
                    var op = document.createElement("option");
                    op.text = "Select Time";
                    xx.add(op); 
        var time1 = document.getElementById("SelectD");
        var doctors=<?php echo json_encode($doctors); ?>;
        var e = document.getElementById("selectD");
var value = e.options[e.selectedIndex].value;
var text = e.options[e.selectedIndex].text;
        
        for(i=0; i<5; i++ ){
           if(doctors[i].staff_id==value)
             { 
                 var tto=doctors[i].timeto;
                var tfr=doctors[i].timefrom;
                
                var hoursFrom = parseInt(tfr.substring(0,2),10);
                var hoursTo = parseInt(tto.substring(0,2),10);
                var minFrom = parseInt(tfr.substring(3,4),10);
                var minTo = parseInt(tto.substring(3,4),10);
                var amFrom = tfr.substring(6,8);
                var amTo = tto.substring(6,8);
                
                do{
                    var x = document.getElementById("time");
                    var option = document.createElement("option");
                    option.text = hoursFrom+":"+minFrom+"0 "+amFrom;
                    x.add(option); 
                    if(minFrom==3 && hoursFrom==11)
                    {
                        if(amFrom=="AM")
                            amFrom="PM";
                            else
                            amFrom="AM";
                    }
                    if(minFrom==0)
                    {
                        minFrom+=3;
                    }
                    else{
                        minFrom=0;
                        if(hoursFrom==12)
                            hoursFrom=1;
                        else
                            hoursFrom=hoursFrom+1;
                    }
                }while(hoursFrom!=hoursTo || minFrom!=minTo || amFrom!=amTo);
            }

        }
        
    }
        
    </script>

</body>
<!-- END: Body-->

</html>
