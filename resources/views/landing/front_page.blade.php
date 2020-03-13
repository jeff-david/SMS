@extends('layout.front')

@section('content')

<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100"
    id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="">
                <img src="{{url('/images/sms-xl.ico')}}" width="40" alt="">SMS
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">apps</i> Sign In
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{route('login.teacher')}}" class="dropdown-item">
                            <i class="material-icons">layers</i> as Teacher
                        </a>
                        <a href="{{route('login.parent')}}"
                            class="dropdown-item">
                            <i class="material-icons">content_paste</i> as Parent
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-header header-filter">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Mission</h1>
                <h4>Inspired by her patroness, the Virgin of the Poor,
                    the Sisters of Mary Schools shall direct their energy and resources to the poorest of the poor youth
                    of the country by way of providing them with high quality Secondary Education intensive on
                    Vocational-Technical Curriculum molding them into citizens committed to serve the nation, to love
                    their fellow being, and spread moral and spiritual values based on the Gospels.
                </h4>
                <br>
            </div>

            <div class="col-md-6">
                <h1 class="title">Vision</h1>
                <h4>The Sisters of Mary School envisions that the graduates, in their everyday life and in the pursuit
                    of their calling, will become the new disciples in spreading the work of redemption, and at the same
                    time teach and lead by example the Marian virtues of simplicity, charity, gratitude and joy.
                </h4>
                <br>
            </div>
        </div>


    </div>

    @endsection
