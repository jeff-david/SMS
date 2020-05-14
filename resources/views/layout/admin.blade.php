<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">


    <!-- Title Page-->
    <title>SMS - Registrar</title>

     <!-- Bootstrap CSS-->
     <link href="{{ secure_asset('/assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Fontfaces CSS-->
    <link href="{{ secure_asset('/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

   

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{ secure_asset('/assets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{ secure_asset('/css/theme.css') }}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/css/custom.css') }}" rel="stylesheet" media="all">
    <link href="{{ secure_asset('/css/student.css') }}" rel="stylesheet" media="all">

    <!-- Jquery JS-->
    <script src="{{ secure_asset('/assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/patternomaly@1.3.0/dist/patternomaly.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    



  

</head>
<body class="animsition">
    <div class="page-wrapper">

        @include('inc.header')

        @yield('content')

        @include('inc.footer')
    </div>
</body>
  <!-- Bootstrap JS-->
  <script src="{{ secure_asset('/assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>

    <!-- Vendor JS       -->
    <script src="{{ secure_asset('/assets/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('/assets/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ secure_asset('/js/main.js') }}"></script>
    <script src="{{ secure_asset('/js/char.js') }}"></script>
    <script src="{{ secure_asset('/js/ranking.js')}}"></script>
    <script src="{{ secure_asset('/js/custom.js')}}"></script>
    <script src="{{ secure_asset('/js/class.js')}}"></script>
    <script src="{{ secure_asset('/js/student.js')}}"></script>
    <script src="{{ secure_asset('/js/teacher.js')}}"></script>
