<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="EMR admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin with unlimited possibilities.">
    <meta name="keywords"
        content="admin, EMR admin, dashboard, flat admin, responsive admin, web app">
    <meta name="author" content="EMR">
    <title>IMR</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

    <script src="{{ asset('js/app.js') }}" defer></script>




</head>
<!-- END: Head-->


<body
    class="horizontal-layout horizontal-menu 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">

        <div class="content-overlay"></div>


        <div class="header-navbar-shadow"></div>


        <div class="content-wrapper">

            <div class="content-header row">

            </div>

            <div class="content-body">

                <section class="row flexbox-container">

                    <div class="col-xl-8 col-11 d-flex justify-content-center">

                        <div class="card bg-authentication rounded-0 mb-0">

                            <div class="row m-0">

                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">

                                    <img src="../../../app-assets/images/pages/login.png" alt="branding logo">

                                </div>

                                <div class="col-lg-6 col-12 p-0">

                                    <div class="card rounded-0 mb-0 px-2">

                                        <div class="card-header pb-1">

                                            <div class="card-title">

                                                <h4 class="mb-0">Login</h4>

                                            </div>

                                        </div>

                                        <p class="px-2">Welcome back, please login to your account.</p>

                                        <div class="card-content">

                                            <div class="card-body pt-1">

                                                <form method="POST" action="{{ route('login') }}">
                                                    @csrf
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="email" name="email" class="form-control" id="email"
                                                            placeholder="Email" required>

                                                        <div class="form-control-position">
                                                            <i class="feather icon-mail"></i>
                                                        </div>
                                                        <label for="email">Email</label>
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </fieldset>
                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" name="password" class="form-control"
                                                            id="password" placeholder="Password" required>


                                                        <div class="form-control-position">

                                                            <i class="feather icon-lock"></i>

                                                        </div>

                                                        <label for="user-password">Password</label>
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </fieldset>

                                                    <div
                                                        class="form-group d-flex justify-content-between align-items-center">

                                                        <div class="text-left">

                                                            <fieldset class="checkbox">

                                                                <div class="vs-checkbox-con vs-checkbox-primary">

                                                                    <input type="checkbox">

                                                                    <span class="vs-checkbox">

                                                                        <span class="vs-checkbox--check">

                                                                            <i class="vs-icon feather icon-check"></i>

                                                                        </span>

                                                                    </span>

                                                                    <span class="">Remember me</span>

                                                                </div>

                                                            </fieldset>

                                                        </div>

                                                        @if (Route::has('password.request'))

                                                            <div class="text-right"><a
                                                                    href="{{ route('password.request') }}"
                                                                    class="card-link">

                                                                    {{ __('Forgot Your Password?') }}

                                                                </a>

                                                            </div>

                                                        @endif

                                                    </div>

                                                    <a href="/register"
                                                        class="btn btn-outline-primary float-left btn-inline">Register</a>

                                                    <button type="submit"
                                                        class="btn btn-primary float-right btn-inline">Login</button>
                                                </form>

                                            </div>

                                        </div>

                                        <div class="login-footer">

                                            <div class="divider">

                                                

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
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
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
<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-shadow">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT
            &copy; 2020<a class="text-bold-800 grey darken-2" href="/" target="_blank">IMR,</a>All rights
            Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->

</html>
