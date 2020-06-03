@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="container-fluid" style="margin-top: -22px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" data-toggle="modal" id="posts" data-target="#addsubjects">ADD
                            SUBJECTS</button>
                        <button class="btn btn-primary" data-toggle="modal" id="posts" data-target="#addsubjectset">ADD
                            SUBJECTS FOR GRADE 11 AND 12</button>
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
                                                        @php
                                                        $i = 1
                                                        @endphp
                                                        @foreach($seven as $sevens)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$i++}}</td>
                                                            <td class="text-center">{{$sevens->subject_name}}</td>
                                                            <td class="text-center">{{$sevens->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subject_edit" title="edit"
                                                                    data-toggle="modal" data-target="#edit_subjects"
                                                                    data-name="{{$sevens->subject_name}}"
                                                                    data-description="{{$sevens->description}}"
                                                                    data-year="{{$sevens->year_level_id}}"
                                                                    data-id="{{$sevens->id}}"
                                                                    data-department="{{$sevens->department_id}}">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $seven->links() !!}
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
                                                        @php
                                                        $g = 1
                                                        @endphp
                                                        @foreach($eight as $eights)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$g++}}</td>
                                                            <td class="text-center">{{$eights->subject_name}}</td>
                                                            <td class="text-center">{{$eights->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subject_edit" title="edit"
                                                                    data-toggle="modal" data-target="#edit_subjects"
                                                                    data-name="{{$eights->subject_name}}"
                                                                    data-description="{{$eights->description}}"
                                                                    data-year="{{$eights->year_level_id}}"
                                                                    data-id="{{$eights->id}}"
                                                                    data-department="{{$eights->department_id}}">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $eight->links() !!}
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
                                                        @php
                                                        $n = 1
                                                        @endphp
                                                        @foreach($nine as $nines)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$n++}}</td>
                                                            <td class="text-center">{{$nines->subject_name}}</td>
                                                            <td class="text-center">{{$nines->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subject_edit" title="edit"
                                                                    data-toggle="modal" data-target="#edit_subjects"
                                                                    data-name="{{$nines->subject_name}}"
                                                                    data-description="{{$nines->description}}"
                                                                    data-year="{{$nines->year_level_id}}"
                                                                    data-id="{{$nines->id}}"
                                                                    data-department="{{$nines->department_id}}">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $nine->links() !!}
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
                                                        @php
                                                        $t = 1
                                                        @endphp
                                                        @foreach($ten as $tens)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$t++}}</td>
                                                            <td class="text-center">{{$tens->subject_name}}</td>
                                                            <td class="text-center">{{$tens->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subject_edit" title="edit"
                                                                    data-toggle="modal" data-target="#edit_subjects"
                                                                    data-name="{{$tens->subject_name}}"
                                                                    data-description="{{$tens->description}}"
                                                                    data-year="{{$tens->year_level_id}}"
                                                                    data-id="{{$tens->id}}"
                                                                    data-department="{{$tens->department_id}}">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $ten->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="grade-eleven" role="tabpanel"
                                    aria-labelledby="grade-eleven-tab">
                                    <div class="row">
                                        <div class="typo-headers">
                                            <h3 class="pb-2 display-5">First Semester Subjects</h3>
                                        </div>
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
                                                        @php
                                                        $e = 1;
                                                        @endphp
                                                        @foreach($elevenfirst as $elevenfirsts)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$e++}}</td>
                                                            <td class="text-center">{{$elevenfirsts->subject_name}}</td>
                                                            <td class="text-center">{{$elevenfirsts->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subjectset_edit" title="edit"
                                                                    data-toggle="modal" data-target="#edit_subjectset"
                                                                    data-name="{{$elevenfirsts->subject_name}}"
                                                                    data-description="{{$elevenfirsts->description}}"
                                                                    data-year="{{$elevenfirsts->year_level_id}}"
                                                                    data-id="{{$elevenfirsts->id}}"
                                                                    data-department="{{$elevenfirsts->department_id}}"
                                                                    data-semester="{{$elevenfirsts->semester}}">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $elevenfirst->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="typo-headers">
                                            <h3 class="pb-2 display-5">Second Semester Subjects</h3>
                                        </div>
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
                                                        @php
                                                        $es = 1
                                                        @endphp
                                                        @foreach($elevensecond as $elevenseconds)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$es++}}</td>
                                                            <td class="text-center">{{$elevenseconds->subject_name}}
                                                            </td>
                                                            <td class="text-center">{{$elevenseconds->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subjectset_edit" title="edit"
                                                                    data-toggle="modal" data-target="#edit_subjectset"
                                                                    data-name="{{$elevenseconds->subject_name}}"
                                                                    data-description="{{$elevenseconds->description}}"
                                                                    data-year="{{$elevenseconds->year_level_id}}"
                                                                    data-id="{{$elevenseconds->id}}"
                                                                    data-department="{{$elevenseconds->department_id}}"
                                                                    data-semester="{{$elevenseconds->semester}}">>
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $elevensecond->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- G12 subjects -->
                                <div class="tab-pane fade" id="grade-twelve" role="tabpanel"
                                    aria-labelledby="grade-twelve-tab">
                                    <div class="row">
                                        <div class="typo-headers">
                                            <h3 class="pb-2 display-5">First Semester Subjects</h3>
                                        </div>
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
                                                        @php
                                                        $e = 1;
                                                        @endphp
                                                        @foreach($twelvefirst as $twelvefirsts)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$e++}}</td>
                                                            <td class="text-center">{{$twelvefirsts->subject_name}}</td>
                                                            <td class="text-center">{{$twelvefirsts->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subjectset_edit" title="edit" data-toggle="modal"
                                                                    data-target="#edit_subjectset"
                                                                    data-name="{{$twelvefirsts->subject_name}}"
                                                                    data-description="{{$twelvefirsts->description}}"
                                                                    data-year="{{$twelvefirsts->year_level_id}}"
                                                                    data-id="{{$twelvefirsts->id}}"
                                                                    data-department="{{$twelvefirsts->department_id}}"
                                                                    data-semester="{{$twelvefirsts->semester}}">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $twelvefirst->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- G12 second sem -->
                                    <div class="row">
                                        <div class="typo-headers">
                                            <h3 class="pb-2 display-5">Second Semester Subjects</h3>
                                        </div>
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
                                                        @php
                                                        $es = 1
                                                        @endphp
                                                        @foreach($twelvesecond as $twelveseconds)
                                                        <tr style="font-size:15px">
                                                            <td class="text-center">{{$es++}}</td>
                                                            <td class="text-center">{{$twelveseconds->subject_name}}
                                                            </td>
                                                            <td class="text-center">{{$twelveseconds->description}}</td>
                                                            <td class="table-data-feature" style="text-align:center;">
                                                                <button class="item subjectset_edit" title="edit" data-toggle="modal"
                                                                    data-target="#edit_subjectset"
                                                                    data-name="{{$twelveseconds->subject_name}}"
                                                                    data-description="{{$twelveseconds->description}}"
                                                                    data-year="{{$twelveseconds->year_level_id}}"
                                                                    data-id="{{$twelveseconds->id}}"
                                                                    data-department="{{$twelveseconds->department_id}}"
                                                                    data-semester="{{$twelveseconds->semester}}">>
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>

                                                                <button class="item sendannounce" title="Send"
                                                                    data-toggle="modal" data-target="#sendModal">
                                                                    <i class="zmdi zmdi-archive"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {!! $twelvesecond->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of G12 second sem -->
                                </div>
                                <!-- end of G12 semesters -->
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
<!-- ADD SUBJECTS FOR GRADE 7 TO GRADE 10 -->
<div class="modal fade" id="addsubjects" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content text-center" style="margin-top: 20%;">
            <form id="subjectForm" action="{{route('admin.addSubject')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">ADD SUBJECTS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input name="add_subject" type="text" class="form-control"
                                    placeholder="Enter Subject Name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="2"
                                    placeholder="Enter Description . . ."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group has-success">
                                <label for="">Grade Year :</label>
                                <select name="year" id="" class="form-control">
                                    <option value="0"></option>
                                    @foreach($year as $years)
                                    <option value="{{$years->id}}" class="form-control">{{$years->yearlevel}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <label for="">Department :</label>
                            <div class="form-group has-success">
                                <select name="department" id="" class="form-control">
                                    <option value="0"></option>
                                    @foreach($department as $departments)
                                    <option value="{{$departments->id}}" class="form-control">
                                        {{$departments->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">ADD</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ADD SUBJECTS FOR GRADE 11 AND GRADE 12 -->
<div class="modal fade" id="addsubjectset" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel"
    aria-hidden="true" data-backdrop="send">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content text-center" style="margin-top: 20%;">
            <form id="subjectsetForm" action="{{route('admin.addSubjectset')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">ADD SUBJECTS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input name="add_subject" type="text" class="form-control"
                                    placeholder="Enter Subject Name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="2"
                                    placeholder="Enter Description . . ."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-4">
                            <div class="form-group has-success">
                                <label for="">Grade Year :</label>
                                <select name="year" id="" class="form-control">
                                    <option value="0"></option>
                                    @foreach($yearset as $key => $yearsets)
                                    <option value="{{$yearset[$key]->id}}" class="form-control">{{$yearsets->yearlevel}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <label for="">Department :</label>
                            <div class="form-group has-success">
                                <select name="department" id="" class="form-control">
                                    <option value="0"></option>
                                    @foreach($department as $departments)
                                    <option value="{{$departments->id}}" class="form-control">
                                        {{$departments->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <label for="">Semester :</label>
                            <div class="form-group has-success">
                                <select name="semester" id="" class="form-control">
                                    <option value="1" class="form-control">First Semester</option>
                                    <option value="2" class="form-control">Second Semester</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="id" name="id" type="hidden" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">ADD</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- UPDATING SUBJECTS FOR GRADE 7 TO GRADE 10 -->
<div class="modal fade" id="edit_subjects" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content text-center" style="margin-top: 20%;">
            <form id="editSubjectForm" action="{{route('admin.editSubject')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">UPDATE SUBJECTS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input name="add_subject" type="text" id="subject_name" class="form-control"
                                    placeholder="Enter Subject Name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="2"
                                    placeholder="Enter Description . . ."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group has-success">
                                <label for="">Grade Year :</label>
                                <select name="edityear" id="edityear" class="form-control">
                                    <option value=""></option>
                                    @foreach($year as $years)
                                    <option value="{{$years->id}}">{{$years->yearlevel}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <label for="">Department :</label>
                            <div class="form-group has-success">
                                <select name="editdepartment" id="editdepartment" class="form-control">
                                    <option value=""></option>
                                    @foreach($department as $departments)
                                    <option value="{{$departments->id}}">{{$departments->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="id" name="id" type="hidden" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- UPDATING SUBJECTS FOR GRADE 11 TO GRADE 12 -->
<div class="modal fade" id="edit_subjectset" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel"
    aria-hidden="true" data-backdrop="send">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content text-center" style="margin-top: 20%;">
            <form id="editSubjectsetForm" action="{{route('admin.editSubjectset')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">UPDATE SUBJECTS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input name="add_subject" type="text" id="add_subject" class="form-control"
                                    placeholder="Enter Subject Name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="2"
                                    placeholder="Enter Description . . ."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-4">
                            <div class="form-group has-success">
                                <label for="">Grade Year :</label>
                                <select name="edityear" id="edityear" class="form-control">
                                    <option value="0"></option>
                                    @foreach($yearset as $key => $yearsets)
                                    <option value="{{$yearset[$key]->id}}" class="form-control">{{$yearsets->yearlevel}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <label for="">Department :</label>
                            <div class="form-group has-success">
                                <select name="editdepartment" id="editdepartment" class="form-control">
                                    <option value="0"></option>
                                    @foreach($department as $departments)
                                    <option value="{{$departments->id}}" class="form-control">
                                        {{$departments->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <label for="">Semester :</label>
                            <div class="form-group has-success">
                                <select name="editsemester" id="editsemester" class="form-control">
                                    <option value="1" class="form-control">First Semester</option>
                                    <option value="2" class="form-control">Second Semester</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="id" name="id" type="hidden" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
