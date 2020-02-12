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
                    <!-- <li class="has-sub">
                        <a href="#">
                            <i class="fas fa-cogs"></i>
                            <span class="bot-line"></span> Announcement
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="{{route('admin.register_student')}}"><i class="fas fa-plus-square"></i> Register Student</a>
                            </li>
                            <li>
                                <a href="{{route('admin.register_teacher')}}"><i class="fas fa-plus-square"></i> Teacher</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="{{route('principal.announcement')}}"><i class="fas fa-list-ul"></i>
                            <span class="bot-line"></span> Announcement
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.studentlist')}}"><i class="fas fa-list-ul"></i>
                            <span class="bot-line"></span> Student
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.register_teacher')}}"><i class="fas fa-list-ul"></i>
                            <span class="bot-line"></span> Teacher
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
                <li class="has-sub">
                    <a class="js-arrow" href="#"><i class="fas fa-cogs"></i> Manage User</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="registerstudent.html"><i class="fas fa-plus-square"></i> Register Student</a>
                        </li>
                        <li>
                            <a href="registerteacher.html"><i class="fas fa-plus-square"></i> Teacher</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="classlist.html"><i class="fas fa-list-ul"></i>Class</a>
                </li>
                <li>
                    <a href="studentlist.html"><i class="fas fa-list-ul"></i>Student</a>
                </li>
                <li>
                    <a href="teacherlist.html"><i class="fas fa-list-ul"></i>Teacher</a>
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
