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
                                                <select name="Gradelevel" id="gradelevel" class="myselect">
                                                    @foreach($yearlevel as $yearlevels)
                                                        <option value={{$yearlevels->id}}>{{$yearlevels->yearlevel}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button class="au-btn-filter" id="filter">
                                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                                        </div>
                                    </div>
                                    <div class="page-content--bgf7">
                                        <section class="statistic statistic2">
                                            <div class="container">
                                                <div class="row" id="classes">
                                                    
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