<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Microwells - Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/vendors/css/base/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/base/elisyam-1.5.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel/owl.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/datatables/datatables.min.css')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="loader-logo">
        <div class="spinner"></div>
    </div>
</div>
<!-- End Preloader -->
<div class="page">
    <!-- Begin Header -->
    @include('layouts.header')
    <!-- End Header -->
    <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch">
            <div class="default-sidebar">
                <!-- Begin Side Navbar -->
                @include('layouts.navbar')
                <!-- End Side Navbar -->
            </div>
            <!-- End Left Sidebar -->
            <div class="content-inner">
                @yield('content')
                <!-- End Container -->
                <!-- Begin Page Footer-->
                <footer class="main-footer">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                            <p class="text-gradient-02">Design By Saerox</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="documentation.html">Documentation</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="changelog.html">Changelog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <!-- End Page Footer -->
                <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
            </div>
            <!-- End Content -->
        </div>

    <!-- End Page Content -->
</div>
<!-- Begin Success Modal -->
<div id="delay-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="sa-icon sa-success animate" style="display: block;">
                    <span class="sa-line sa-tip animateSuccessTip"></span>
                    <span class="sa-line sa-long animateSuccessLong"></span>
                    <div class="sa-placeholder"></div>
                    <div class="sa-fix"></div>
                </div>
                <div class="section-title mt-5 mb-5">
                    <h2 class="text-dark">Meeting successfully created</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Success Modal -->
<!-- Begin Modal -->
<div id="modal-view-event" class="modal modal-top fade calendar-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title event-title"></h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left align-self-center mr-3">
                        <div class="event-icon"></div>
                    </div>
                    <div class="media-body align-self-center mt-3 mb-3">
                        <div class="event-body"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<!-- Begin Vendor Js -->
<script src="{{asset('assets/vendors/js/base/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/js/base/core.min.js')}}"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="{{asset('assets/vendors/js/nicescroll/nicescroll.min.js')}}"></script>
<script src="{{asset('assets/vendors/js/chart/chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/js/progress/circle-progress.min.js')}}"></script>
<script src="{{asset('assets/vendors/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/vendors/js/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('assets/vendors/js/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendors/js/app/app.js')}}"></script>
<!-- End Page Vendor Js -->
@yield('scripts')
<script src="{{asset('assets/js/dashboard/db-default.js')}}"></script>
</body>
</html>