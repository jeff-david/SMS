@extends('layout.admin')

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a style="margin-top: 25px;" href="{{route('admin.register_student')}}"
                                        class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add class
                                    </a>
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
                                                    <a href="{{route('admin.view_section',$classes->id)}}" class="item" data-toggle="tooltip" data-placement="top"
                                                        title="View Section">
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
@endsection
