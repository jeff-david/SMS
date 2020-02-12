@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <section class="p-t-20">
                <div class="container">
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool">
                                <div class="table-data__tool-left" style="margin-top: 25px;">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select name="" id="test" class="myselect">
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
                                        </select>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <a style="margin-top: 25px;" href="registerstudent.html"
                                        class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add teacher
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table" id="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id no.</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Department</th>
                                            <th class="text-center">Handled Classes</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teacher as $teachers)
                                        <tr>
                                            <td class="text-center">{{$teachers->id}}</td>
                                            <td class="text-center">{{$teachers->lastname}} {{$teachers->firstname}}
                                            </td>
                                            <td class="text-center">{{$teachers->department_name}}</td>
                                            <td class="text-center">{{$teachers->handle_classes}}</td>
                                            <td class="text-center">
                                                <div class="table-data-feature">
                                                    <button class="item" title="Send" data-toggle="modal"
                                                        data-target="#sendModal">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <a href="{{route('admin.teacher_edit',$teachers->id)}}" class="item"
                                                        data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <button class="item" title="Delete" data-toggle="modal"
                                                        data-target="#deleteModal">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="More" onclick="window.location='viewstudent.html'">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true" data-backdrop="delete">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Delete Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Do you wish to delete this account?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Yes</button>
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                    style="margin-top: 0rem;">No</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal delete -->

<!-- modal send -->
<div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Send Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <textarea name="" id="" cols="30" rows="5" placeholder="type your message here . . ."></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Send</button>
                <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                    style="margin-top: 0rem;">Cancel</button>
            </div>
        </div>
    </div>
</div>

@endsection
