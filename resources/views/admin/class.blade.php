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
                                    <button style="margin-top: 25px;" data-toggle="modal" data-target="#addModal"
                                        class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add class
                                    </button>
                                </div>
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
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($class as $classes)
                                        <tr>
                                            <td class="text-center">{{$classes->id}}</td>
                                            <td class="text-center">{{$classes->class_name}}
                                            </td>
                                            <td class="text-center">
                                                <div class="table-data-feature " style="text-align:center">
                                                    <a href="" class="item" data-toggle="modal" data-placement="top"
                                                        title="Edit" data-target="#editstud">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <button class="item" title="Delete" data-toggle="modal"
                                                        data-target="#deleteModal">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <a href="{{route('admin.view_section',$classes->id)}}" class="item"
                                                        data-toggle="tooltip" data-placement="top" title="View Section">
                                                        <i class="zmdi zmdi-view-list"></i>
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

@endsection
