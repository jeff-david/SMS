@extends('layout.principal')

@section('content')

<div class="page-content--bgf7" style="margin-top: 75px;">
    <!-- STATISTIC CHART-->
    <section class="statistic-chart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    @if (Session::has('failed'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ Session::get('failed') }}</strong>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                    @endif
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-40">Account Settings</h3>
                            <!-- <canvas id="mybarChart"></canvas> -->
                            <!-- <h5 class="text-center"><small>Grade Level</small></h5> -->
                            <div class="row">
                                <!-- <div class="col-md-4 col-lg-4">
                                    <div class="card-container" style="height: 300px;">
                                        <span class="pro">Admin</span>
                                        <img class="round" src="images/icon/avatar-01.jpg" alt="user" />
                                        <h3 style="color: white;">Ricky Park</h3>
                                        <h6 style="color: white;">New York</h6 style="color: white;">
                                        <div class="buttons">
                                            <button class="primary">
                                                Change Profile
                                            </button>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-md-8 col-lg-8">
                                    <form action="{{route('admin.change_settings', Auth::user()->id)}}" method="POST">
                                        @csrf
                                        <div class="row form-group">
                                            <div class="col col-md-4">
                                                <label for="text-input" class=" form-control-label"><small>Username :
                                                    </small></label>
                                            </div>
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <input type="text" id="input2-group2" name="user_name"
                                                        placeholder="new Username" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button type="submit" name="action" value="username"
                                                            class="btn btn-primary">Change</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4">
                                                <label for="text-input" class=" form-control-label"><small>Old Password
                                                        :
                                                    </small> ********</label>
                                            </div>
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <input type="password" id="input2-group2" name="old_pass"
                                                        placeholder="Enter old Password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4">
                                                <label for="text-input" class=" form-control-label"><small>New Password
                                                        :
                                                    </small> ********</label>
                                            </div>
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <input type="password" id="input2-group2" name="new_pass"
                                                        placeholder="Enter New Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group-btn" id="passbtn">
                                                    <button type="submit" name="action" value="password"
                                                        class="btn btn-primary">Change</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-4">
                                                <label for="text-input" class=" form-control-label"><small>Contact
                                                        number : </small></label>
                                            </div>
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <input type="text" id="input2-group2" name="contact_number"
                                                        placeholder="new Contact number" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button type="submit" name="action" value="contact"
                                                            class="btn btn-primary">Change</button>
                                                    </div>
                                                </div>
                                                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-6">
                                                <label for="text-input" class=" form-control-label"><small>Address :
                                                    </small></label>
                                            </div>
                                            <div class="col col-md-12">
                                                <div class="input-group">
                                                    <input type="text" id="input2-group2" name="address"
                                                        placeholder="new Address" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button type="submit" name="action" value="addressbtn"
                                                            class="btn btn-primary">Change</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
