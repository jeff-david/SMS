<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block position-fixed fixed-top">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="dashboard.html">
                        <img src="{{ url('/images/logo-mini.png')}}" alt="SMS" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{url('/teacher')}}"><i class="fas fa-th-large"></i>
                                    <span class="bot-line"></span> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{route('teacher.announce')}}"><i class="fas fa-file-text"></i>
                                    <span class="bot-line"></span> Announcement
                                </a>
                            </li>
                            <li>
                                <a href="{{route('teacher.class')}}"><i class="fas fa-list-ul"></i>
                                    <span class="bot-line"></span> Class
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span> Account
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="#"><i class="fas fa-cog"></i> General Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-cog"></i> Privacy Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                                <a href="{{ url('logout')}}" style="color: white;">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none position-fixed fixed-top">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard.html">
                            <img src="../images/icon/logo-mini.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="dashboard.html"><i class="fas fa-th-large"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="announcement.html"><i class="fas fa-file-text"></i>Announcemt</a>
                        </li>
                        <li>
                            <a href="classlist.html"><i class="fas fa-list-ul"></i>Class</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#"><i class="fas fa-user"></i> Account</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="#"><i class="fas fa-cog"></i> General Settings</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-cog"></i> Security Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="../index.html"><i class="fas fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- WELCOME-->
            <section class="welcome p-t-10" style="margin-top: 77px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>Jeff!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">474</h2>
                                <span class="desc">Grade 7</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--yellow">
                                <h2 class="number">688</h2>
                                <span class="desc">Grade 8</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">486</h2>
                                <span class="desc">Grade 9</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">586</h2>
                                <span class="desc">Grade 10</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--purple">
                                <h2 class="number">486</h2>
                                <span class="desc">Grade 11</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">688</h2>
                                <span class="desc">Grade 12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <!-- CHART PERCENT-->
                        <div class="chart-percent-2">
                            <h3 class="title-3 m-b-30">Overall Status</h3>
                            <div class="chart-wrap">
                                <canvas id="percent-chart2"></canvas>
                                <div id="chartjs-tooltip">
                                    <table></table>
                                </div>
                            </div>
                            <div class="chart-info">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>Passed</span>
                                </div>
                                <div class="chart-note">
                                    <span class="dot dot--red"></span>
                                    <span>Failed</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CHART PERCENT-->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Overall Ranking</h3>
                        </div>
                    </div>
                    <div class="row" id="rank">
                        <!-- tables for the ranking of all grade level -->
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- COPYRIGHT-->
            <!-- <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <script src="../js/ranking.js"></script>
    

</body>