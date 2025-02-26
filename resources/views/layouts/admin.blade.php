<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="Author" content="Muhammad Rivaldi Fanani">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{asset('vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{asset('vendor/notyf/notyf.min.css')}}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{asset('css/volt.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>

</head>
<body>

    @yield('content')

    <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
        <div class="row">
            <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
            </div>
            <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                <!-- List -->
                <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="https://themesberg.com/about">About</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="https://themesberg.com/themes">Themes</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="https://themesberg.com/blog">Blog</a>
                    </li>
                    <li class="list-inline-item px-0 px-sm-2">
                        <a href="https://themesberg.com/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Core -->
    <script src="{{asset("@popperjs/core/dist/umd/popper.min.js")}}"></script>
    <script src="{{asset("vendor/bootstrap/dist/js/bootstrap.min.js")}}"></script>

    <!-- Vendor JS -->
    <script src="{{asset("vendor/onscreen/dist/on-screen.umd.min.js")}}"></script>

    <!-- Slider -->
    <script src="{{asset("vendor/nouislider/distribute/nouislider.min.js")}}"></script>

    <!-- Smooth scroll -->
    <script src="{{asset("vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js")}}"></script>

    <!-- Charts -->
    <script src="{{asset("vendor/chartist/dist/chartist.min.js")}}"></script>
    <script src="{{asset("vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js")}}"></script>

    <!-- Datepicker -->
    <script src="{{asset("vendor/vanillajs-datepicker/dist/js/datepicker.min.js")}}"></script>

    <!-- Sweet Alerts 2 -->
    <script src="{{asset("vendor/sweetalert2/dist/sweetalert2.all.min.js")}}"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="{{asset("vendor/vanillajs-datepicker/dist/js/datepicker.min.js")}}"></script>

    <!-- Notyf -->
    <script src="{{asset("vendor/notyf/notyf.min.js")}}"></script>

    <!-- Simplebar -->
    <script src="{{asset("vendor/simplebar/dist/simplebar.min.js")}}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="{{asset("js/volt.js")}}"></script>
</body>
</html>
