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
                                <a href=""><i class="fas fa-th-large"></i>
                                    <span class="bot-line"></span> Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="{{route('parent.announcement')}}"><i class="fas fa-bullhorn"></i>
                                    <span class="bot-line"></span> Announcement
                                </a>
                            </li>
                            <li>
                                <a href="{{route('parent.grade')}}"><i class="fas fa-list-ul"></i>
                                    <span class="bot-line"></span> Grades
                                </a>
                            </li>
                            <li>
                                <a href="{{route('parent.profile')}}"><i class="fas fa-user"></i>
                                    <span class="bot-line"></span> Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{route('parent.concern')}}"><i class="fas fa-user"></i>
                                    <span class="bot-line"></span> Concern
                                </a>
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
                            <img src="{{ url('/images/logo-mini.png')}}" alt="SMS" />                        
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
                            <a href="announcement.html"><i class="fas fa-bullhorn"></i>Announcement</a>
                        </li>
                        <li>
                            <a href="studentgrades.html"><i class="fas fa-list-ul"></i>Grades</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="fas fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a href="concern.html"><i class="fas fa-user"></i>Concern</a>
                        </li>
                        <li>
                            <a href="../index.html"><i class="fas fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>