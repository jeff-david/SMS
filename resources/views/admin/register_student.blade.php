@extends('layout.admin')

@section('content')
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
                            <h2><small>Student Profile</small></h2>
                        </div>
                        <form action="{{route('admin.register_student')}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            <div class="card-body">
                                <div class="card-title">
                                    <h3><small>Student's Information</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col col-md-8">
                                        <div class="form-group has-success">
                                            <label for="lrn" id="required-field"  class="control-label mb-1"><small>LRN</small></label>
                                            <input id="lrn" name="LRN" type="text" maxlength="12" class="form-control" value="{{old('LRN')}}">
                                            <span class="text-danger">{{ $errors->first('LRN') }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-12" id="image-preview" style="left:100%;width:125px">
                                            <img src="{{ url('/images/download.png')}}" id="img" style="max-width:110%;max-height:110%;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">  
                                        <div class="form-group has-success">
                                            <label for="datetoday" id="required-field"
                                                class="control-label mb-1"><small>Date</small></label>
                                            <input id="register_date" name="register_date" type="text"
                                                class="form-control" value="{{old('register_date')}}">
                                            <span class="text-danger">{{ $errors->first('register_date') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" id="required-field" class="control-label mb-1"><small>Birth
                                                    Date</small></label>
                                            <input id="birthday" name="birthday" type="text" class="form-control" value="{{old('birthday')}}">
                                            <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Image Upload</small></label>
                                            <input id="image-photo" name="photo_img" type="file"  accept="image/*" class="form-control"
                                                value="{{old('photo_img')}}">
                                            <span class="text-danger">{{ $errors->first('photo_img') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="slname" id="required-field" class="control-label mb-1"><small>Last
                                                    Name</small></label>
                                            <input id="slname" name="lastname" type="text" class="form-control"
                                                value="{{old('lastname')}}">
                                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group has-success">
                                            <label for="sfname" id="required-field" class="control-label mb-1"><small>First
                                                    Name</small></label>
                                            <input id="sfname" name="firstname" type="text" class="form-control"
                                                value="{{old('firstname')}}">
                                            <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="smname" class="control-label mb-1"><small>Middle
                                                    Name</small></label>
                                            <input id="smname" name="middlename" type="text" class="form-control"
                                                value="{{old('middlename')}}">
                                            <span class="text-danger">{{ $errors->first('middlename') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                    <div class="form-group has-success">
                                            <label for="birthDate" id="required-field" class="control-label mb-1"><small>Gender</small></label>
                                            <input id="gender" name="gender" type="text" class="form-control" value="Male" readonly>
                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="age" class="control-label mb-1"><small>Age</small></label>
                                            <input id="age" name="age" type="number" class="form-control"
                                                value="{{old('age')}}" readonly>
                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                        <label for="religion" id="required-field" class="control-label mb-1"><small>Religion</small></label>
                                        <select class="form-control" id="required-field" name="religion">
                                            <option>Roman Catholic</option>
                                            <option>Baptist</option>
                                            <option>Protestant</option>
                                            <option>Jehovas Witness</option>
                                            <option>Islam</option>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="sAddress" id="required-field" class="control-label mb-1"><small>Street
                                                    Address</small></label>
                                            <input id="sAddress" name="street_address" type="text" class="form-control"
                                                value="{{old('street_address')}}">
                                            <span class="text-danger">{{ $errors->first('street_address') }}</span>
                                        </div>
                                    </div>
                                    
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="province" id="required-field"
                                                class="control-label mb-1"><small>Province</small></label>
                                            <select name="province" class="form-control">
                                                <option value=""></option>
                                                @foreach(config('const.province') as $id => $province)
                                                    <option value={{$province}} {{old('province') == $province ? 'selected' : '' }}>{{$province}}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->first('province') }}</span>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="city" id="required-field" class="control-label mb-1"><small>Municipality / City</small></label>
                                            <select name="city" class="form-control">

                                            </select>
                                            <span class="text-danger">{{ $errors->first('city') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group has-success">
                                            <label for="motherName"  id="required-field" class="control-label mb-1"><small>Mother's
                                                    Name</small></label>
                                            <input id="motherName" name="mother_name" type="text" class="form-control"
                                                value="{{old('mother_name')}}">
                                            <span class="text-danger">{{ $errors->first('mother_name') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="motherOccupation" id="required-field"
                                                class="control-label mb-1"><small>Occupation</small></label>
                                            <input id="mother_occupation" name="mother_occupation" type="text"
                                                class="form-control" value="{{old('mother_occupation')}}">
                                            <span class="text-danger">{{ $errors->first('mother_occupation') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group has-success">
                                            <label for="fatherName" id="required-field" class="control-label mb-1"><small>Father's
                                                    Name</small></label>
                                            <input id="father_name" name="father_name" type="text" class="form-control"
                                                value="{{old('father_name')}}">
                                            <span class="text-danger">{{ $errors->first('father_name') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="fatherOccupation" id="required-field"
                                                class="control-label mb-1"><small>Occupation</small></label>
                                            <input id="father_occupation" name="father_occupation" type="text"
                                                class="form-control" value="{{old('father_occupation')}}">
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
                                            <label for="glname" id="required-field" class="control-label mb-1"><small>Last
                                                    Name</small></label>
                                            <input id="guardian_lastname" name="guardian_lastname" type="text"
                                                class="form-control" value="{{old('guardian_lastname')}}">
                                            <span class="text-danger">{{ $errors->first('guardian_lastname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gfname" id="required-field" class="control-label mb-1"><small>First
                                                    Name</small></label>
                                            <input id="gfname" name="guardian_firstname" type="text"
                                                class="form-control" value="{{old('guardian_firstname')}}">
                                            <span class="text-danger">{{ $errors->first('guardian_firstname') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gmname" class="control-label mb-1"><small>Middle
                                                    Name</small></label>
                                            <input id="gmname" name="guardian_middlename" type="text"
                                                class="form-control" value="{{old('guardian_middlename')}}">
                                            <span class="text-danger">{{ $errors->first('guardian_middlename') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="relation" id="required-field" class="control-label mb-1"><small>Relatioship to the
                                                    student</small></label>
                                            <input id="relation" name="rel_student" type="text" class="form-control"
                                                value="{{old('rel_student')}}">
                                            <span class="text-danger">{{ $errors->first('rel_student') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="address" id="required-field" class="control-label mb-1"><small>Current
                                                    Residence</small></label>
                                            <input id="address" name="current_res" type="text" class="form-control"
                                                value="{{old('current_res')}}">
                                            <span class="text-danger">{{ $errors->first('current_res') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                    <div class="form-group has-success">
                                        <label for="address" id="required-field" class="control-label mb-1"><small>Guardian Religion    </small></label>
                                        <select class="form-control" id="required-field" name="guardian_rel">
                                            <option>Roman Catholic</option>
                                            <option>Baptist</option>
                                            <option>Protestant</option>
                                            <option>Jehovas Witness</option>
                                            <option>Islam</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="cel1" id="required-field" class="control-label mb-1"><small>Mother
                                                    Tongue</small></label>
                                            <input id="mother_tounge" name="mother_tounge" type="text"
                                                class="form-control" value="{{old('mother_tounge')}}">
                                            <span class="text-danger">{{ $errors->first('mother_tounge') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="username" class="control-label mb-1"><small>Username</small></label>
                                            <input id="username" name="username" type="text" class="form-control" value="{{old('username')}}" readonly>
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="password" class="control-label mb-1"><small>Password</small></label>
                                            <input id="password" name="password" type="text" class="form-control" value="{{old('password')}}" readonly>
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="dialects" id="required-field" class="control-label mb-1"><small>Dialects</small></label>
                                            <input id="dialects" name="dialects" type="text" class="form-control" value="{{old('dialects')}}">
                                            <span class="text-danger">{{ $errors->first('dialects') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="eth" id="required-field"
                                                class="control-label mb-1"><small>Ethnicities</small></label>
                                            <input id="eth" name="ethnicities" type="text" class="form-control"
                                                value="{{old('ethnicities')}}">
                                            <span class="text-danger">{{ $errors->first('ethnicities') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="cel1" id="required-field" class="control-label mb-1"><small>Cellular number</small></label>
                                            <input id="cel1" name="cell_1" maxlength="11" type="text" class="form-control" value="{{old('cell_1')}}">
                                            <span class="text-danger">{{ $errors->first('cell_1') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <input id="cel1" name="year_level_id" type="hidden" class="form-control"
                                                value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" text-center">
                                <input style="margin-top: -15px;" type="submit" value="Register"
                                    class="btn btn-info mb-1">
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
