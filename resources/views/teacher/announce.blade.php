@extends('layout.teacher')

@section('content')

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
                                <a href="dashboard.html"><i class="fas fa-th-large"></i>
                                    <span class="bot-line"></span> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="announcement.html"><i class="fas fa-file-text"></i>
                                    <span class="bot-line"></span> Announcement
                                </a>
                            </li>
                            <li>
                                <a href="classlist.html"><i class="fas fa-list-ul"></i>
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
                                <a href="../index.html" style="color: white;">Logout</a>
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
        <div class="main-content">
            <div class="section__content section__content--p30">
                    <div class="container-fluid" style="margin-top: 22px;">
                        <section class="p-t-20">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><small><b>Stefany Yagonia</b></small></h4>
                                                <h5 class="card-subtitle mb-2 text-muted"><small>Principal</small></h5>
                                                <h5 class="card-subtitle mb-2 text-muted"><small>Thursday, November 7, 2019 6:53 PM</small></h5>
                                                <hr>
                                                <h4 class="card-title"><small>SUSPENSION OF WORK AND CLASSES AT 3:00 PM TODAY APRIL 24, 2019</small></h4>
                                                <br>
                                                <p class="card-text" style="text-align: justify;">
                                                    The celebration of the National Youth Day kicks off today at 2:00 p.m. and the procession from the City Sports Center to the Basilica del Sto. Niño has been scheduled at 6:00 p.m. However, the roads for the procession route will be closed earlier. Traffic congestion is expected because of the said activity.
                                                    <br><br>
                                                    In this vein, work and classes will be until 3:00 this afternoon only due to the closure of some roads.
                                                    Work and classes will resume tomorrow, April 25, 2019, except for the classes at the Lower Basic Education that have assigned non-contact activities to the students for the whole week.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title"><small><b>Stefany Yagonia</b></small></h4>
                                                <h5 class="card-subtitle mb-2 text-muted"><small>Principal</small></h5>
                                                <h5 class="card-subtitle mb-2 text-muted"><small>Thursday, November 7, 2019 6:53 PM</small></h5>
                                                <hr>
                                                <h4 class="card-title"><small>SUSPENSION OF WORK AND CLASSES AT 3:00 PM TODAY APRIL 24, 2019</small></h4>
                                                <br>
                                                <p class="card-text" style="text-align: justify;">
                                                    The celebration of the National Youth Day kicks off today at 2:00 p.m. and the procession from the City Sports Center to the Basilica del Sto. Niño has been scheduled at 6:00 p.m. However, the roads for the procession route will be closed earlier. Traffic congestion is expected because of the said activity.
                                                    <br><br>
                                                    In this vein, work and classes will be until 3:00 this afternoon only due to the closure of some roads.
                                                    Work and classes will resume tomorrow, April 25, 2019, except for the classes at the Lower Basic Education that have assigned non-contact activities to the students for the whole week.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div> 
            </div>

    </div>

@endsection