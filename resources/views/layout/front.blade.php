<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ url('/images/sms.icon') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Student Management System
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ url('assets/vendor/css/material-kit.css') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ url('/css/demo.css') }}" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    @yield('content')
</body>

</html>
<!--   Core JS Files   -->
<script src="{{url('/assets/vendor/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/vendor/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/vendor/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{url('/assets/vendor/core/moment.min.js')}}"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="{{url('/assets/vendor/core/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{url('/assets/vendor/core/nouislider.min.js')}}" type="text/javascript"></script>

<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="{{url('/assets/vendor/core/material-kit.js')}}" type="text/javascript"></script>
