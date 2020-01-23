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
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select name="gradelevel" id="gradelevel" class="myselect">
                                            @foreach($yearlevel as $yearlevels)
                                                <option value="{{$yearlevels->id}}"{{old('gradelevel') == $yearlevels->id ? 'selected' : ''}} >{{$yearlevels->yearlevel}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="au-btn-filter" id="filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters
                                    </button>
                                </div>
                            </div>
                            <div class="page-content--bgf7">
                                <section class="statistic statistic2">
                                    <div class="container">
                                        <div class="row" id="classes">
                                            @foreach($section as $sections)
                                            <div class="col-md-6 col-lg-2">
                                                <div class="statistic__item statistic__item text-center"
                                                    style="background-color:{{$sections->color}}">
                                                    <h3 class="number" style="color:white;">
                                                        <small>{{$sections->yearlevel}}</small>
                                                    </h3>
                                                    <span class="desc">{{$sections->section_name}}</span>
                                                    <br>
                                                    <a href="{{route('admin.assign_teacher',$sections->id)}}"
                                                        class="btn btn-secondary btn-sm">Enter</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
