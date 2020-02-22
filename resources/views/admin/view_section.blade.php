@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <section class="p-t-20">
                <div class="container">
                    @if (Session::has('failed'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ Session::get('failed') }}</strong>
                    </div>
                    @endif
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
                                    <button style="margin-top: 25px;" id="add" data-id="{{$id}}" data-toggle="modal"
                                        data-target="#addModal" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add section
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table" id="section">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">View Student</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach($section as $sections)
                                        <tr>
                                            <td class="text-center">{{$i++}}</td>
                                            <td class="text-center">{{$sections->section_name}}
                                            </td>
                                            <td class="text-center"><button  class="item view_student" data-class="{{$sections->class_id}}" data-section="{{$sections->section_id}}" data-toggle="modal"
                                                    data-placement="top" data-target="#view_studentModal">
                                                    <i class="zmdi zmdi-view-list" style="color:orange"> View Student</i>
                                                </button></td>
                                            <td class="text-center">
                                                <div class="table-data-feature " style="text-align:center">
                                                    <button class="item editSection" data-toggle="modal" data-classes="{{$sections->class_id}}" data-id="{{$sections->id}}"  data-name="{{$sections->section_name}}" data-placement="top"
                                                        title="Edit" data-target="#editSectionModal">
                                                        <i class="zmdi zmdi-edit" style="color:green"></i>
                                                    </button>
                                                    <button class="item delete_section" title="Delete" data-toggle="modal"
                                                        data-target="#deleteSectionModal" data-section="{{$sections->id}}">
                                                        <i class="zmdi zmdi-delete" style="color:red"></i>
                                                    </button>
                                                    <a href="{{route('admin.assign_teacher',$sections->year_level_id)}}"
                                                        class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Assign Teacher">
                                                        <i class="zmdi zmdi-assignment" style="color:skyblue"></i>
                                                    </a>
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

<!-- add section -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.add_section')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">ADD SECTION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="slname" name="add_section" type="text" class="form-control"
                                    placeholder="Enter Section Name" value="{{old('lastname')}}">
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

<!-- modal view student -->
<div class="modal fade" id="view_studentModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.add_section')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">VIEW STUDENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">    
                    <p class="nodata"></p>
                    <p class="details"></p>
                </div>
                <div class="modal-footer">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="editSectionModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.edit_section')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">EDIT SECTION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="id" name="id" type="hidden" class="form-control" value="{{old('id')}}">
                                <input id="cllasses_id" name="class_id" type="hidden" class="form-control" value="{{old('id')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="section_name" name="section_name" type="text" class="form-control class_name"
                                    placeholder="Enter Class Name" value="{{old('class_name')}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">EDIT</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal delete -->
<div class="modal fade" id="deleteSectionModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.delete_section')}}" method="post">
                @csrf   
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">DELETE SECTION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="id" name="id" type="hidden" class="form-control" value="{{old('id')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <label for="lrn" class="control-label mb-1"><small>Are you sure you want to delete this Section</small></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">DELETE</button>
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal"
                        style="margin-top: 0rem;">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
