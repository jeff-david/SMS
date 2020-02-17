@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="padding: 10px;margin-top: 45px;">
                        <div class="card-header">
                            @if (Session::has('failed'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ Session::get('failed') }}</strong>
                            </div>
                            @endif
                            <h2><small>Student Profile</small></h2>
                        </div>
                        <form action="{{route('admin.student_update', $student->id)}}" method="POST">
                        @csrf
                            <div class="card-body">
                                <div class="card-title">
                                    <h3><small>Student's Information</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col col-md-8">
                                        <div class="form-group has-success">
                                            <label for="lrn" class="control-label mb-1"><small>LRN</small></label>
                                            <input name="LRN" type="text" class="form-control" value="{{old('LRN',$student->LRN)}}">
                                            <span class="text-danger">{{ $errors->first('LRN') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="datetoday"
                                                class="control-label mb-1"><small>Date</small></label>
                                            <input id="register_date" name="register_date" type="date" class="form-control" value="{{old('register_date',$student->register_date)}}">
                                            <span class="text-danger">{{ $errors->first('register_date') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="slname" class="control-label mb-1"><small>Last
                                                    Name</small></label>
                                            <input id="slname" name="lastname" type="text" class="form-control" value="{{old('lastname',$student->lastname)}}">
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group has-success">
                                            <label for="sfname" class="control-label mb-1"><small>First
                                                    Name</small></label>
                                            <input id="sfname" name="firstname" type="text" class="form-control" value="{{old('firstname',$student->firstname)}}">
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="smname" class="control-label mb-1"><small>Middle
                                                    Name</small></label>
                                            <input id="smname" name="middlename" type="text" class="form-control" value="{{old('middlename',$student->middlename)}}">
                                            <span class="text-danger">{{ $errors->first('middlename') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                    <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Gender</small></label>
                                            <input id="gender" name="gender" type="text" class="form-control" value="Male" readonly>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Birth
                                                    Date</small></label>
                                            <input id="birthday" name="birthday" type="date" class="form-control" value="{{old('birthday',$student->birthday)}}">
                                            <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Religion</small></label>
                                            <input id="religion" name="religion" type="text" class="form-control" value="{{old('religion',$student->religion)}}">
                                            <span class="text-danger">{{ $errors->first('religion') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="sAddress" class="control-label mb-1"><small>Street
                                                    Address</small></label>
                                            <input id="sAddress" name="street_address" type="text" class="form-control" value="{{old('street_address',$student->street_address)}}">
                                            <span class="text-danger">{{ $errors->first('street_address') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="city" class="control-label mb-1"><small>City</small></label>
                                            <input id="city" name="city" type="text" class="form-control" value="{{old('city',$student->city)}}">
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="province"
                                                class="control-label mb-1"><small>Province</small></label>
                                            <input id="province" name="province" type="text" class="form-control" value="{{old('province',$student->province)}}">
                                            <span class="text-danger">{{ $errors->first('province') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group has-success">
                                            <label for="motherName" class="control-label mb-1"><small>Mother's Maiden
                                                    Name</small></label>
                                            <input id="motherName" name="mother_name" type="text" class="form-control" value="{{old('mother_name',$student->mother_name)}}">
                                            <span class="text-danger">{{ $errors->first('mother_name') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="motherOccupation"
                                                class="control-label mb-1"><small>Occupation</small></label>
                                            <input id="mother_occupation" name="mother_occupation" type="text"
                                                class="form-control" value="{{old('mother_occupation',$student->mother_occupation)}}">
                                            <span class="text-danger">{{ $errors->first('mother_occupation') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group has-success">
                                            <label for="fatherName" class="control-label mb-1"><small>Father's
                                                    Name</small></label>
                                            <input id="father_name" name="father_name" type="text" class="form-control" value="{{old('father_name', $student->father_name)}}">
                                            <span class="text-danger">{{ $errors->first('father_name') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="fatherOccupation"
                                                class="control-label mb-1"><small>Occupation</small></label>
                                            <input id="father_occupation" name="father_occupation" type="text"
                                                class="form-control" value="{{old('father_occupation',$student->father_occupation)}}">
                                            <span class="text-danger">{{ $errors->first('father_occupation') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-title">
                                    <h3><small>Guardian's Information</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="glname" class="control-label mb-1"><small>Last
                                                    Name</small></label>
                                            <input id="guardian_lastname" name="guardian_lastname" type="text" class="form-control" value="{{old('guardian_lastname',$student->guardian_lastname)}}">
                                            <span class="text-danger">{{ $errors->first('guardian_lastname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gfname" class="control-label mb-1"><small>First
                                                    Name</small></label>
                                            <input id="gfname" name="guardian_firstname" type="text" class="form-control" value="{{old('guardian_firstname',$student->guardian_firstname)}}">
                                            <span class="text-danger">{{ $errors->first('guardian_firstname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gmname" class="control-label mb-1"><small>Middle
                                                    Name</small></label>
                                            <input id="gmname" name="guardian_middlename" type="text" class="form-control" value="{{old('guardian_middlename',$student->guardian_middlename)}}">
                                            <span class="text-danger">{{ $errors->first('guardian_middlename') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="relation" class="control-label mb-1"><small>Relatioship to the
                                                    student</small></label>
                                            <input id="relation" name="rel_student" type="text" class="form-control" value="{{old('rel_student',$student->rel_student)}}">
                                            <span class="text-danger">{{ $errors->first('rel_student') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="address" class="control-label mb-1"><small>Current
                                                    Residence</small></label>
                                            <input id="address" name="current_res" type="text" class="form-control" value="{{old('current_res',$student->current_res)}}">
                                            <span class="text-danger">{{ $errors->first('current_res') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="guardian_rel" class="control-label mb-1"><small>Religion</small></label>
                                            <input id="guardian_rel" name="guardian_rel" type="text" class="form-control" value="{{old('guardian_rel',$student->guardian_rel)}}">
                                            <span class="text-danger">{{ $errors->first('guardian_rel') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="cel1" class="control-label mb-1"><small>Mother
                                                    Tongue</small></label>
                                            <input id="mother_tounge" name="mother_tounge" type="text" class="form-control" value="{{old('mother_tounge',$student->mother_tounge)}}">
                                            <span class="text-danger">{{ $errors->first('mother_tounge') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="username" class="control-label mb-1"><small>Username</small></label>
                                            <input id="username" name="username" type="text" class="form-control" value="{{old('username',$student->username)}}" readonly>
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="password" class="control-label mb-1"><small>Password</small></label>
                                            <input id="password" name="password" type="text" class="form-control" value="{{old('password',$student->password)}}" readonly>
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="dialects" class="control-label mb-1"><small>Dialects</small></label>
                                            <input id="dialects" name="dialects" type="text" class="form-control" value="{{old('dialects',$student->dialects)}}">
                                            <span class="text-danger">{{ $errors->first('dialects') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="eth"
                                                class="control-label mb-1"><small>Ethnicities</small></label>
                                            <input id="eth" name="ethnicities" type="text" class="form-control" value="{{old('ethnicities',$student->ethnicities)}}">
                                            <span class="text-danger">{{ $errors->first('ethnicities') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="cel1" class="control-label mb-1"><small>Cellular number</small></label>
                                            <input id="cel1" name="cell_1" type="text" class="form-control" value="{{old('cell_1',$student->cell_1)}}">
                                            <span class="text-danger">{{ $errors->first('cell_1') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" text-center">
                                <input style="margin-top: -15px;" type="submit" value="Save" class="btn btn-info mb-1"
                                    data-toggle="modal" data-target="#staticModal" />
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
<!-- modal static -->
</div>
@endsection
