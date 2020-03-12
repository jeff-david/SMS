@extends('layouts.app')

@section('content')

    <!-- <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/sms.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> -->
        SMS - Landing Page
    <!-- </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' /> -->
    <!--     Fonts and icons     -->
    <div class="section section-signup page-header" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block py-5">
                    <h1 class="title">MISSION</h1>
                    <h4 id="text_mission">Inspired by her patroness, the Virgin of the Poor, the   Sisters of Mary Schools shall direct their energy and resources to the poorest of the poor youth of the country   by way   of   providing them with high quality Secondary Education intensive on Vocational-Technical Curriculum molding them into citizens committed to serve the nation, to love their fellow   being, and spread moral and spiritual values based on the Gospels.</h4>
                    <br>
                    <h1 class="title">VISION</h1>
                    <h4 id="text_mission1">The Sisters of Mary School envisions that the graduates, in their everyday life and in the pursuit of their calling, will become the new disciples in spreading the work of redemption, and at the same time teach and lead by example the Marian virtues of simplicity, charity, gratitude and joy.</h4>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{url('/images/logo5.ico')}}" alt="">
                    <h2>Sign as</h2>
                    <a href="./teacher/index.html" class="btn btn-warning">Teacher
                        <i class="material-icons">person_outline</i>
                    </a> or
                    <a href="./parent/index.html" class="btn btn-info">Parent
                        <i class="material-icons">person_outline</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <footer style="background-color: rgba(38, 12, 12, 0.26) !important">
            <div class="container" style="background-color: rgba(38, 12, 12, 0.26)">
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                </div>
            </div>
            </footer> -->
    <!--   Core JS Files   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" type="text/javascript"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script> 
    
    <!-- <script src="dist/datepicker.min.js"></script> -->

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <!-- <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script> -->
    <!--  Google Maps Plugin    -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <!-- <script src="./assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });
        function scrollToDownload() {
            if ($('.section-download').length != 0) {
                $("html, body").animate({
                    scrollTop: $('.section-download').offset().top
                }, 1000);
            }
        }
    </script> -->
@endsection