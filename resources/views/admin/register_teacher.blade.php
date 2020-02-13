@extends('layout.admin')

@section('content')

<!-- PAGE CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="padding: 10px;margin-top: 45px;">
                    @if (Session::has('failed'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ Session::get('failed') }}</strong>
                    </div>
                    @endif
                        <div class="card-header">
                            <h2><small>Teacher Profile</small></h2>
                        </div>
                        <form action="{{route('admin.register_store_teacher')}}" method="POST" novalidate="novalidate">
                            @csrf
                            <div class="card-body">
                                <div class="card-title">
                                    <h3><small>Teacher's Information</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="profession"
                                                class="control-label mb-1"><small>Department</small></label>
                                            <select name="department" class="form-control">
                                                <option value="" selected="selected">-------------Select Departments------------</option>
                                                @foreach($departments as $department)
                                                <option value="{{$department->id}}" {{ old('department') == $department->id ? 'selected' : ''}}>{{$department->department_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('department') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="lrn" class="control-label mb-1"><small>Cell no:</small></label>
                                            <input id="cell_no" name="cell_no" type="text" class="form-control" value="{{old('cell_no')}}">
                                            <span class="text-danger">{{ $errors->first('cell_no') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="datetoday"
                                                class="control-label mb-1"><small>Register Date</small></label>
                                            <input id="register_date" name="register_date" type="date" class="form-control" value="{{old('register_date')}}">
                                            <span class="text-danger">{{ $errors->first('register_date') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="lastname" class="control-label mb-1"><small>Last
                                                    Name</small></label>
                                            <input id="slname" name="lastname" type="text" class="form-control" value="{{old('lastname')}}">
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group has-success">
                                            <label for="sfname" class="control-label mb-1"><small>First
                                                    Name</small></label>
                                            <input id="sfname" name="firstname" type="text" class="form-control" value="{{old('firstname')}}">
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="smname" class="control-label mb-1"><small>Middle
                                                    Name</small></label>
                                            <input id="smname" name="middlename" type="text" class="form-control" value="{{old('middlename')}}">
                                            <span class="text-danger">{{ $errors->first('middlename') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-2">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Gender</small></label>
                                            <select name="gender" id="gender" class="form-control">
                                                @foreach(config('const.gender') as $id => $gender)
                                                    <option value={{$gender}} {{old('gender') == $gender ? 'selected' : '' }}>{{$gender}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-2">
                                        <div class="form-group has-success">
                                            <label for="age" class="control-label mb-1"><small>Age</small></label>
                                            <input id="age" name="age" type="number" class="form-control"value="{{old('age')}}">
                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Birth
                                                    Date</small></label>
                                            <input id="birthDate" name="birthdate" type="date" class="form-control" value="{{old('birthdate')}}">
                                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Religion</small></label>
                                            <input id="religion" name="religion" type="text" class="form-control" value="{{old('religion')}}">
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="sAddress" class="control-label mb-1"><small>Street
                                                    Address</small></label>
                                            <input id="sAddress" name="street_address" type="text" class="form-control" value="{{old('street_address')}}">
                                            <span class="text-danger">{{ $errors->first('street_address') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="city" class="control-label mb-1"><small>City</small></label>
                                            <input id="city" name="city" type="text" class="form-control" value="{{old('city')}}">
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="province"
                                                class="control-label mb-1"><small>Province</small></label>
                                            <input id="province" name="province" type="text" class="form-control" value="{{old('province')}}">
                                            <span class="text-danger">{{ $errors->first('province') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group has-success">
                                            <label for="motherName" class="control-label mb-1"><small>School
                                                    Graduate</small></label>
                                            <input id="school_graduated" name="school_graduated" type="text" class="form-control" value="{{old('school_graduated')}}">
                                            <span class="text-danger">{{ $errors->first('school_graduated') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="motherOccupation" class="control-label mb-1"><small>Date
                                                    Graduated:</small></label>
                                            <input id="date_graduated" name="date_graduated" type="date"
                                                class="form-control" value="{{old('date_graduated')}}">
                                            <span class="text-danger">{{ $errors->first('date_graduated') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="username" class="control-label mb-1"><small>Username</small></label>
                                            <input id="username" name="username" type="text" class="form-control" value="{{old('username')}}">
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="password" class="control-label mb-1"><small>Password</small></label>
                                            <input id="password" name="password" type="text"
                                                class="form-control" value="{{old('password')}}">
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" class="btn btn-info mb-1" value="Register"/>
                                </div>
                                @if (Session::has('success'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ Session::get('success') }}</strong>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE CONTENT-->
</div>

@endsection
