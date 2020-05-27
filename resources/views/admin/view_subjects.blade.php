@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="container-fluid" style="margin-top: -22px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" id="posts"
                            data-target="#postannouncement">ADD SUBJECTS</button>
                    </div>
                    <div class="card-body">
                        <div class="custom-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="custom-nav-home-tab" data-toggle="tab"
                                        href="#custom-nav-home" role="tab" aria-controls="custom-nav-home"
                                        aria-selected="true">Grade 7</a>
                                    <a class="nav-item nav-link" id="custom-nav-profile-tab" data-toggle="tab"
                                        href="#custom-nav-profile" role="tab" aria-controls="custom-nav-profile"
                                        aria-selected="false">Grade 8</a>
                                    <a class="nav-item nav-link" id="custom-nav-contact-tab" data-toggle="tab"
                                        href="#custom-nav-contact" role="tab" aria-controls="custom-nav-contact"
                                        aria-selected="false">Grade 9</a>
                                    <a class="nav-item nav-link" id="grade-ten-tab" data-toggle="tab" href="#grade-ten"
                                        role="tab" aria-controls="grade-ten" aria-selected="false">Grade 10</a>
                                    <a class="nav-item nav-link" id="grade-eleven-tab" data-toggle="tab"
                                        href="#grade-eleven" role="tab" aria-controls="grade-eleven"
                                        aria-selected="false">Grade 11</a>
                                    <a class="nav-item nav-link" id="grade-twelve-tab" data-toggle="tab"
                                        href="#grade-twelve" role="tab" aria-controls="grade-twelve"
                                        aria-selected="false">Grade 12</a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="custom-nav-home" role="tabpanel"
                                    aria-labelledby="custom-nav-home-tab">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Subject Name</th>
                                                            <th class="text-center">Subject Description</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size:15px">
                                                            <td></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-profile" role="tabpanel"
                                    aria-labelledby="custom-nav-profile-tab">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Subject Name</th>
                                                            <th class="text-center">Subject Description</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size:15px">
                                                            <td></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-nav-contact" role="tabpanel"
                                    aria-labelledby="custom-nav-contact-tab">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Subject Name</th>
                                                            <th class="text-center">Subject Description</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size:15px">
                                                            <td></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="grade-ten" role="tabpanel"
                                    aria-labelledby="grade-ten-tab">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Subject Name</th>
                                                            <th class="text-center">Subject Description</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size:15px">
                                                            <td></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="grade-eleven" role="tabpanel"
                                    aria-labelledby="grade-eleven-tab">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Subject Name</th>
                                                            <th class="text-center">Subject Description</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size:15px">
                                                            <td></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="grade-twelve" role="tabpanel"
                                    aria-labelledby="grade-twelve-tab">
                                    <div class="row">
                                        <div class="col-lg-12" style="margin-left: -7px;">
                                            <div class="table-responsive table--no-card m-b-30">
                                                <table class="table table-borderless table-striped table-earning">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">ID</th>
                                                            <th class="text-center">Subject Name</th>
                                                            <th class="text-center">Subject Description</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="font-size:15px">
                                                            <td></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item" title="edit" data-toggle="modal"
                                                                    data-target="#editannouncement">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTAINER-->

@endsection
