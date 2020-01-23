@extends('layout.parent')

@section('content')

<div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid" style="margin-top: 45px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" style="padding: 10px;">
                                <div class="card-header"><h2><small>Student Profile</small></h2></div>
                                <form action="" method="post" novalidate="novalidate">
                                    <div class="card-body">
                                        <div class="card-title"><h3><small>Student's Information</small></h3></div>
                                        <div class="row">
                                            <div class="col col-md-6">
                                                <div class="form-group has-success">
                                                    <label for="username" class="control-label mb-1"><small>Username</small></label>
                                                    <input id="username" name="username" type="text" class="form-control" value="TSuper" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col col-md-6">
                                                <div class="form-group has-success">
                                                    <label for="password" class="control-label mb-1"><small>Password</small></label>
                                                    <input id="password" name="password" type="password" class="form-control" value="TSuper" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-8">
                                                <div class="form-group has-success">
                                                    <label for="lrn" class="control-label mb-1"><small>LRN</small></label>
                                                    <input id="lrn" name="lrn" type="text" class="form-control" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="datetoday" class="control-label mb-1"><small>Date</small></label>
                                                    <input id="datetoday" name="datetoday" type="text" class="form-control" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="datetoday" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="slname" class="control-label mb-1"><small>Last Name</small></label>
                                                    <input id="slname" name="slname" type="text" class="form-control" value="Thank" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="slname" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class=" col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="sfname" class="control-label mb-1"><small>First Name</small></label>
                                                    <input id="sfname" name="sfname" type="text" class="form-control" value="Super" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="sfname" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="smname" class="control-label mb-1"><small>Middle Name</small></label>
                                                    <input id="smname" name="smname" type="text" class="form-control" value="Nice" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="smname" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="gender" class="control-label mb-1"><small>Gender</small></label>
                                                    <input id="gender" name="gender" type="text" class="form-control" value="Male" readonly>
                                                    <!-- <select name="gender" id="gender" class="form-control">
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                    </select> -->
                                                    <span class="help-block field-validation-valid" data-valmsg-for="gender" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="birthDate" class="control-label mb-1"><small>Birth Date</small></label>
                                                    <input id="birthDate" name="birthDate" type="text" class="form-control" value="Nov 20, 1996" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="birthDate" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="religion" class="control-label mb-1"><small>Religion</small></label>
                                                    <input id="religion" name="religion" type="text" class="form-control" value="Roman Catholic" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="religion" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label for="sAddress" class="control-label mb-1"><small>Street Address</small></label>
                                                    <input id="sAddress" name="sAddress" type="text" class="form-control" value="Nasipit Road, Talamban" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="sAddress" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="form-group has-success">
                                                    <label for="city" class="control-label mb-1"><small>City</small></label>
                                                    <input id="city" name="city" type="text" class="form-control" value="Cebu City" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="city" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col col-md-3">
                                                <div class="form-group has-success">
                                                    <label for="province" class="control-label mb-1"><small>Province</small></label>
                                                    <input id="province" name="province" type="text" class="form-control" value="Cebu" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="province" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group has-success">
                                                    <label for="motherName" class="control-label mb-1"><small>Mother's Maiden Name</small></label>
                                                    <input id="motherName" name="motherName" type="text" class="form-control" value="Roselle Thank" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="motherName" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="motherOccupation" class="control-label mb-1"><small>Occupation</small></label>
                                                    <input id="motherOccupation" name="motherOccupation" type="text" class="form-control" value="House Maid" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="motherOccupation" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group has-success">
                                                    <label for="fatherName" class="control-label mb-1"><small>Father's Name</small></label>
                                                    <input id="fatherName" name="fatherName" type="text" class="form-control" value="Steven Thank" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="fatherName" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="fatherOccupation" class="control-label mb-1"><small>Occupation</small></label>
                                                    <input id="fatherOccupation" name="fatherOccupation" type="text" class="form-control" value="Farmer" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="fatherOccupation" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="card-title"><h3><small>Guardian's Information</small></h3></div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="glname" class="control-label mb-1"><small>Last Name</small></label>
                                                    <input id="glname" name="glname" type="text" class="form-control" value="Doe" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="glname" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="gfname" class="control-label mb-1"><small>First Name</small></label>
                                                    <input id="gfname" name="gfname" type="text" class="form-control" value="Jeany" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="gfname" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="gmname" class="control-label mb-1"><small>Middle Name</small></label>
                                                    <input id="gmname" name="gmname" type="text" class="form-control" value="Gomez" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="gmname" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label for="relation" class="control-label mb-1"><small>Relatioship to the student</small></label>
                                                    
                                                    <input id="relation" name="relation" type="text" class="form-control" value="Mother" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="relation" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label for="address" class="control-label mb-1"><small>Current Residence</small></label>
                                                    <input id="address" name="address" type="text" class="form-control" value="Asignar, Nasipit Road, Talamban" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="address" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group has-success">
                                                    <label for="cel1" class="control-label mb-1"><small>Religion</small></label>
                                                    <input id="cel1" name="cel1" type="text" class="form-control" value="Roman Catholic" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cel1" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-success">
                                                    <label for="cel1" class="control-label mb-1"><small>Mother Tongue</small></label>
                                                    <input id="cel1" name="cel1" type="text" class="form-control" value="Cebuano" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cel1" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-success">
                                                    <label for="cel1" class="control-label mb-1"><small>Dialects</small></label>
                                                    <input id="cel1" name="cel1" type="text" class="form-control" value="Bisaya" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cel1" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group has-success">
                                                    <label for="cel1" class="control-label mb-1"><small>Ethnicities</small></label>
                                                    <input id="cel1" name="cel1" type="text" class="form-control" value="Visayan" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cel1" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="cel1" class="control-label mb-1"><small>Cellular number 1</small></label>
                                                    <input id="cel1" name="cel1" type="text" class="form-control" value="+63 0945 781 9879" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cel1" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="cel2" class="control-label mb-1"><small>Cellular number 2</small></label>
                                                    <input id="cel2" name="cel2" type="text" class="form-control" value="+63 0948  787 4857" readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cel2" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-success">
                                                    <label for="tel" class="control-label mb-1"><small>Tellephone number</small></label>
                                                    <input id="tel" name="tel" type="text" class="form-control" value=02-8123-4567 readonly>
                                                    <span class="help-block field-validation-valid" data-valmsg-for="tel" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=" text-center">
										<button style="margin-top: -15px;" type="button" class="btn btn-info mb-1" onclick="window.location='studentlist.html'">
											Back to list
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
    </div>