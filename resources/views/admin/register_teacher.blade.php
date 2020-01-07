@extends('layout.admin')

@section('content')

<!-- PAGE CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="padding: 10px;margin-top: 45px;">
                        <div class="card-header">
                            <h2><small>Teacher Profile</small></h2>
                        </div>
                        <form action="" method="post" novalidate="novalidate">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3><small>Teacher's Information</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="profession"
                                                class="control-label mb-1"><small>Profession</small></label>
                                            <select name="" class="form-control">
                                                <option selected="selected">All Teacher</option>
                                                <option value="">Filipino Teacher</option>
                                                <option value="">English Teacher</option>
                                                <option value="">Mathematics Teacher</option>
                                                <option value="">Science Teacher</option>
                                                <option value="">AralPan Teacher</option>
                                                <option value="">C.L.E. Teacher</option>
                                                <option value="">T.L.E. Teacher</option>
                                                <option value="">Music Teacher</option>
                                                <option value="">Arts Teacher</option>
                                                <option value="">P.E. Teacher</option>
                                                <option value="">Health Teacher</option>
                                            </select><span class="help-block field-validation-valid"
                                                data-valmsg-for="profession" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="lrn" class="control-label mb-1"><small>Id no.</small></label>
                                            <input id="lrn" name="lrn" type="text" class="form-control" readonly>
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="datetoday"
                                                class="control-label mb-1"><small>Date</small></label>
                                            <input id="datetoday" name="datetoday" type="text" class="form-control"
                                                readonly>
                                            <span class="help-block field-validation-valid" data-valmsg-for="datetoday"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="slname" class="control-label mb-1"><small>Last
                                                    Name</small></label>
                                            <input id="slname" name="slname" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="slname"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class=" col-md-4">
                                        <div class="form-group has-success">
                                            <label for="sfname" class="control-label mb-1"><small>First
                                                    Name</small></label>
                                            <input id="sfname" name="sfname" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="sfname"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="smname" class="control-label mb-1"><small>Middle
                                                    Name</small></label>
                                            <input id="smname" name="smname" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="smname"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gender" class="control-label mb-1"><small>Gender</small></label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                            <span class="help-block field-validation-valid" data-valmsg-for="gender"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="birthDate" class="control-label mb-1"><small>Birth
                                                    Date</small></label>
                                            <input id="birthDate" name="birthDate" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="birthDate"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="form-group has-success">
                                            <label for="religion"
                                                class="control-label mb-1"><small>Religion</small></label>
                                            <input id="religion" name="religion" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="religion"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="sAddress" class="control-label mb-1"><small>Street
                                                    Address</small></label>
                                            <input id="sAddress" name="sAddress" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="sAddress"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="city" class="control-label mb-1"><small>City</small></label>
                                            <input id="city" name="city" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="city"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col col-md-3">
                                        <div class="form-group has-success">
                                            <label for="province"
                                                class="control-label mb-1"><small>Province</small></label>
                                            <input id="province" name="province" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="province"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group has-success">
                                            <label for="motherName" class="control-label mb-1"><small>Mother's Maiden
                                                    Name</small></label>
                                            <input id="motherName" name="motherName" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="motherName"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="motherOccupation"
                                                class="control-label mb-1"><small>Occupation</small></label>
                                            <input id="motherOccupation" name="motherOccupation" type="text"
                                                class="form-control">
                                            <span class="help-block field-validation-valid"
                                                data-valmsg-for="motherOccupation" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group has-success">
                                            <label for="fatherName" class="control-label mb-1"><small>Father's
                                                    Name</small></label>
                                            <input id="fatherName" name="fatherName" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="fatherName"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="fatherOccupation"
                                                class="control-label mb-1"><small>Occupation</small></label>
                                            <input id="fatherOccupation" name="fatherOccupation" type="text"
                                                class="form-control">
                                            <span class="help-block field-validation-valid"
                                                data-valmsg-for="fatherOccupation" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-center">
                                    <button type="button" class="btn btn-info mb-1" data-toggle="modal"
                                        data-target="#staticModal">
                                        Register
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PAGE CONTENT-->
<!-- modal static -->
<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
    aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Do you wish to create this account?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Confirm</button>
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                    style="margin-top: 0rem;">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal static -->
</div>

@endsection
