@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="padding: 10px;margin-top: 45px;">
                        <div class="card-header">
                            <h2><small>Student Profile</small></h2>
                        </div>
                        <form action="" method="post" novalidate="novalidate">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3><small>Student's Information</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col col-md-8">
                                        <div class="form-group has-success">
                                            <label for="lrn" class="control-label mb-1"><small>LRN</small></label>
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
                                <hr>
                                <div class="card-title">
                                    <h3><small>Guardian's Information</small></h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="glname" class="control-label mb-1"><small>Last
                                                    Name</small></label>
                                            <input id="glname" name="glname" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="glname"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gfname" class="control-label mb-1"><small>First
                                                    Name</small></label>
                                            <input id="gfname" name="gfname" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="gfname"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="gmname" class="control-label mb-1"><small>Middle
                                                    Name</small></label>
                                            <input id="gmname" name="gmname" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="gmname"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="relation" class="control-label mb-1"><small>Relatioship to the
                                                    student</small></label>
                                            <input id="relation" name="relation" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="relation"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-success">
                                            <label for="address" class="control-label mb-1"><small>Current
                                                    Residence</small></label>
                                            <input id="address" name="address" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="address"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="cel1" class="control-label mb-1"><small>Religion</small></label>
                                            <input id="cel1" name="cel1" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cel1"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="cel1" class="control-label mb-1"><small>Mother
                                                    Tongue</small></label>
                                            <input id="cel1" name="cel1" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cel1"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="cel1" class="control-label mb-1"><small>Dialects</small></label>
                                            <input id="cel1" name="cel1" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cel1"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-success">
                                            <label for="cel1"
                                                class="control-label mb-1"><small>Ethnicities</small></label>
                                            <input id="cel1" name="cel1" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cel1"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="cel1" class="control-label mb-1"><small>Cellular number
                                                    1</small></label>
                                            <input id="cel1" name="cel1" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cel1"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="cel2" class="control-label mb-1"><small>Cellular number
                                                    2</small></label>
                                            <input id="cel2" name="cel2" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cel2"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label for="tel" class="control-label mb-1"><small>Tellephone
                                                    number</small></label>
                                            <input id="tel" name="tel" type="text" class="form-control">
                                            <span class="help-block field-validation-valid" data-valmsg-for="tel"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" text-center">
                                <button style="margin-top: -15px;" type="button" class="btn btn-info mb-1"
                                    data-toggle="modal" data-target="#staticModal">
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
                <h5 class="modal-title" id="staticModalLabel">Register Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Do you wish to continue register this applicant?
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
