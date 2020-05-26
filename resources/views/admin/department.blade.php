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
                                    <button style="margin-top: 3px;" data-toggle="modal" data-target="#addDepart"
                                        class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-home"></i>add department
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table" id="department">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Department Name</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Number of Teacher</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach($department as $departments)
                                        <tr>
                                            <td class="text-center">{{$i++}}</td>
                                            <td class="text-center">{{$departments->department_name}}</td>
                                            <td class="text-center">{{$departments->description}}
                                            </td>
                                            <td class="text-center">{{$departments->total}}
                                            </td>
                                            <td class="text-center">
                                                <div class="table-data-feature " style="text-align:center">
                                                    <button class="item editDepart" data-toggle="modal" data-placement="top"
                                                        title="Edit" data-id="{{$departments->id}}"
                                                        data-name="{{$departments->department_name}}"
                                                        data-description="{{$departments->description}}" data-target="#editDepart">
                                                        <i class="zmdi zmdi-edit" style="color:green"></i>
                                                    </button>
                                                    <button class="item deleteDepart"
                                                        title="Delete" data-id="{{$departments->id}}" >
                                                        <i class="zmdi zmdi-archive" style="color:red"></i>
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

<div class="modal fade" id="addDepart" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 50%;">
            <form id="departForm" action="{{route('admin.addDepartment')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">ADD DEPARTMENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="slname" name="add_department" type="text" class="form-control"
                                    placeholder="Enter Department Name" value="{{old('lastname')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <textarea name="description" class="form-control" id="" cols="30" rows="2"
                                    placeholder="Enter Description . . ."></textarea>
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

<div class="modal fade" id="editDepart" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form id="editForm" action="{{route('admin.editDepartment')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">EDIT DEPARTMENT</h5>
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
                                <input id="department_name" name="depart_name" type="text" class="form-control class_name"
                                    placeholder="Enter Department Name" value="{{old('class_name')}}">
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
@endsection