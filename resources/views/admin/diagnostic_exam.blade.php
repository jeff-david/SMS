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
                    @if($exam == 0)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <button style="margin-top: 25px;" id="done"
                                        class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-archive"></i>DONE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row">

                        <div class="col-md-12">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="exam">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">LRN</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">English</th>
                                            <th class="text-center">Filipino</th>
                                            <th class="text-center">Math</th>
                                            <th class="text-center">Science</th>
                                            <th class="text-center">Aral-Pan</th>
                                            <th class="text-center">Average</th>
                                            <th class="text-center">Assign Section</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach($diagnostic as $diagnostics)
                                        <tr>
                                            <td class="text-center">{{$i++}}</td>
                                            <td class="text-center">{{$diagnostics->LRN}}</td>
                                            <td class="text-center">{{$diagnostics->lastname}} ,
                                                {{$diagnostics->firstname}}
                                            </td>
                                            <td class="text-center editExam" id="eng" contenteditable=true data-id="1"
                                                data-lrn="{{$diagnostics->LRN}}">{{$diagnostics->English}}
                                            </td>
                                            <td class="text-center editExam" id="fil" contenteditable=true data-id="2"
                                                data-lrn="{{$diagnostics->LRN}}">{{$diagnostics->Filipino}}
                                            </td>
                                            <td class="text-center editExam" id="mat" contenteditable=true data-id="3"
                                                data-lrn="{{$diagnostics->LRN}}">{{$diagnostics->Math}}</td>
                                            <td class="text-center editExam" id="sci" contenteditable=true data-id="4"
                                                data-lrn="{{$diagnostics->LRN}}">{{$diagnostics->Science}}
                                            </td>
                                            <td class="text-center editExam" id="ara" contenteditable=true data-id="5"
                                                data-lrn="{{$diagnostics->LRN}}">{{$diagnostics->Aral_Pan}}</td>
                                            <td class="text-center average" data-average="{{$diagnostics->Average}}"
                                                data-lrn="{{$diagnostics->LRN}}">{{$diagnostics->Average}}</td>
                                            @if($diagnostics->section_id == 0)
                                            <td class="text-center sections_assign"
                                                data-section="{{$diagnostics->section_id}}"
                                                data-class="{{$diagnostics->class_id}}"
                                                data-level="{{$diagnostics->year_level_id}}">Not Yet Assign</td>
                                            @else
                                            @foreach($section as $sections)
                                            @if($diagnostics->section_id == $sections->id)
                                            <td class="text-center sections_assign"
                                                data-section="{{$diagnostics->section_id}}"
                                                data-class="{{$diagnostics->class_id}}"
                                                data-level="{{$diagnostics->year_level_id}}">{{$sections->section_name}}
                                            </td>
                                            @endif
                                            @endforeach
                                            @endif
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
