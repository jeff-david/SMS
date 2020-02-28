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
                                    <button style="margin-top: 3px;" data-toggle="modal" data-target="#addModal"
                                        class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add class
                                    </button>
                                   
                                </div>
                                <input style="width:175px " class="form-control" type="text" placeholder="LRN" aria-label="Search" >
                                <input style="width:175px" class="form-control" type="text" placeholder="Name" aria-label="Search" >
                                <input style="width:175px" class="form-control" type="text" placeholder="Grade Level" aria-label="Search" >  
                                <button class="btn btn-success form-control "  type="submit" style="margin-right:225px;width:100px">Search</button>                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">

                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table" id="class">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Id</th>
                                            <th class="text-center" style="display:none"></th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Number of Section</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach($class as $classes)
                                        <tr>
                                            <td class="text-center">{{$i++}}</td>
                                            <td class="text-center" style="display:none">{{$classes->id}}</td>
                                            <td class="text-center">{{$classes->class_name}}
                                            </td>
                                            <td class="text-center">{{$classes->num_section}}</td>
                                            <td class="text-center">
                                                <div class="table-data-feature " style="text-align:center">
                                                    <button class="item" data-toggle="modal" data-placement="top"
                                                        title="Edit" data-target="#editModal"  data-id="{{$classes->id}}" data-name="{{$classes->class_name}}">
                                                        <i class="zmdi zmdi-edit" style="color:green"></i>
                                                    </button>
                                                    <button class="item delete" data-id="{{$classes->id}}" title="Delete" data-toggle="modal"
                                                        data-target="#deleteModal">
                                                        <i class="zmdi zmdi-delete" style="color:red"></i>
                                                    </button>
                                                    <a href="{{route('admin.view_section',$classes->id)}}" class="item"
                                                        data-toggle="tooltip" data-placement="top" title="View Section">
                                                        <i class="zmdi zmdi-view-list" style="color:blue"></i>
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


<!-- modal add -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.add_class')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">ADD CLASS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group has-success">
                                <input id="slname" name="add_class" type="text" class="form-control"
                                    placeholder="Enter Class Name" value="{{old('lastname')}}">
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

<!-- modal edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.edit_class')}}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">EDIT CLASS</h5>
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
                                <input id="class_name" name="class_name" type="text" class="form-control class_name"
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
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="sendModalLabel" aria-hidden="true"
    data-backdrop="send">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content text-center" style="margin-top: 85%;">
            <form action="{{route('admin.delete_class')}}" method="post">
                @csrf   
                <div class="modal-header">
                    <h5 class="modal-title" id="staticModalLabel">DELETE CLASS</h5>
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
                                <label for="lrn" class="control-label mb-1"><small>Are you sure you want to delete this Class</small></label>
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
