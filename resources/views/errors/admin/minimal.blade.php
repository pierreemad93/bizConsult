<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ __('admin.dashboard') }}- @yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('assets-admin') }}/css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="light ">
    <div class="wrapper vh-100">
        <div class="align-items-center h-100 d-flex w-50 mx-auto">
            <div class="mx-auto text-center">
                <h1 class="display-1 m-0 font-weight-bolder text-muted" style="font-size:80px;">@yield('code')</h1>
                <h1 class="mb-1 text-muted font-weight-bold">OOPS!</h1>
                <h6 class="mb-3 text-muted">@yield('message')</h6>
                <a href="{{ route('admin.home') }}" class="btn btn-lg btn-primary px-5">Back to Dashboard</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets-admin') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets-admin') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets-admin') }}/js/moment.min.js"></script>
    <script src="{{ asset('assets-admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets-admin') }}/js/simplebar.min.js"></script>
    <script src='{{ asset('assets-admin') }}/js/daterangepicker.js'></script>
    <script src='{{ asset('assets-admin') }}/js/jquery.stickOnScroll.js'></script>
    <script src="{{ asset('assets-admin') }}/js/tinycolor-min.js"></script>
    <script src="{{ asset('assets-admin') }}/js/config.js"></script>
    <script src="{{ asset('assets-admin') }}/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>

</html>
