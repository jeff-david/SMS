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
                                <div class="table-data__tool-right">
                                    <a style="margin-top: 25px;" href="{{route('admin.register_student')}}"
                                        class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add student
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table" id="student">
                                    <thead>
                                        <tr>
                                            <th class="text-center">LRN</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Grade Level</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($student as $students)
                                        <tr>
                                            <td class="text-center">{{$students->LRN}}</td>
                                            <td class="text-center">{{$students->lastname}} {{$students->firstname}}
                                            </td>
                                            <td class="text-center">{{$students->yearlevel}}</td>
                                            <td class="text-center">
                                                <div class="table-data-feature " style="text-align:center">
                                                    <button class="send_item" title="Send" data-toggle="modal"
                                                        data-target="#sendModal" data-id="{{$students->LRN}}">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <a href="{{route('admin.student_edit', $students->id)}}"
                                                        class="item" data-toggle="modal" data-placement="top"
                                                        title="Edit" data-target="#editstud">
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
                <h5 class="modal-title" id="staticModalLabel">Delete Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Do you wish to delete this applicant?
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
            <form action="{{route('admin.send_message')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">Send Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="LRN" id="LRN"/>
                    <textarea name="content" id="" cols="30" rows="5" placeholder="type your message here . . ."></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
