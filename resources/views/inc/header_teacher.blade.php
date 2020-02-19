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
                                    <span class="bot-line"></span> Schedule
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-user"></i>
                                    <span class="bot-line"></span> Concern
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{ url('/images/teacher.jpg')}}" alt="Teacher" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Teacher</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ url('/images/teacher.jpg')}}" alt="Teacher" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Parent</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{route('teacher.settings')}}">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="{{route('logout')}}">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
