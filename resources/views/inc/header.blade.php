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
                        <a href="{{url('/admin')}}"><i class="fas fa-th-large"></i>
                            <span class="bot-line"></span> Dashboard
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="#">
                            <i class="fas fa-cogs"></i>
                            <span class="bot-line"></span> Manage User
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="{{route('admin.register_student')}}"><i class="fas fa-plus-square"></i>
                                    Register Student</a>
                            </li>
                            <li>
                                <a href="{{route('admin.register_teacher')}}"><i class="fas fa-plus-square"></i>
                                    Teacher</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin.register_class')}}"><i class="fas fa-list-ul"></i>
                            <span class="bot-line"></span> Class
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="{{route('admin.diagnostic_exam')}}"><i class="fas fa-plus-square"></i>
                                    Diagnostic Exam</a>
                            </li>
                            <li>
                                <a href="{{route('admin.subject')}}"><i class="fas fa-plus-square"></i>Subject</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.studentlist')}}"><i class="fas fa-list-ul"></i>
                            <span class="bot-line"></span> Student
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="{{route('admin.teacher')}}"><i class="fas fa-list-ul"></i>
                            <span class="bot-line"></span> Teacher
                        </a>
                        <ul class="header3-sub-list list-unstyled">
                            <li>
                                <a href="{{route('admin.department')}}"><i class="fas fa-plus-square"></i>
                                    Department</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="{{ url('/images/admin.jpg')}}" alt="Administrator" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">Administrator</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{ url('/images/admin.jpg')}}" alt="Administrator" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">Administrator</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="{{route('admin.announcement')}}">
                                        <i class="zmdi zmdi-notifications"></i>Announcement</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="smsLAYOUTsetting.html">
                                        <i class="zmdi zmdi-comment-text"></i>Concern</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="{{route('admin.settings')}}">
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
<!-- <a href="{{route('logout')}}" style="color: white;">Logout</a> -->

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
                    <a href=""><i class="fas fa-th-large"></i> Dashboard</a>
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
