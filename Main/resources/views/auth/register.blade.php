


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="EMR admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin with unlimited possibilities.">
    <meta name="keywords"
        content="admin, EMR admin, dashboard, flat admin, responsive admin, web app">
    <meta name="author" content="PIXINVENT">
    <title>Patient Register Page - I-EMRS</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EMR') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="../../../app-assets/images/pages/register.jpg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Create Account</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form class="form-horizontal" role="form" enctype="multipart/form-data"
                                                    method="POST" action="{{ route('register') }}">


                                                    @csrf
                                                    <div class="form-label-group">
                                                        <input type="text" id="name" name="name" class="form-control"
                                                            placeholder="Name" required pattern="^[a-zA-Z\s]*$">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                        <label for="inputName">Name</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" id="email" name="email" class="form-control"
                                                            placeholder="Email" required>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                        <label for="inputEmail">Email</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="password" id="inputPassword" class="form-control"
                                                            placeholder="Password" required>
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="password_confirmation" id="inputConfPassword"
                                                            class="form-control" placeholder="Confirm Password"
                                                            required>
                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                            </span>
                                                        @endif
                                                        <label for="inputConfPassword">Confirm Password</label>
                                                    </div>
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
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked required>
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> I accept the terms &
                                                                        conditions.</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <a href="/login"
                                                        class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                    <button type="submit"
                                                        class="btn btn-primary float-right btn-inline mb-50">{{ __('Register') }}</a>
                                                </form>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>



 