@extends('layout.parent')

@section('content')

<div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <section class="p-t-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr style="font-size: 12px">
                                                    <th>Subjects</th>
                                                    <th class="text-center">1st</th>
                                                    <th class="text-center">2nd</th>
                                                    <th class="text-center">3rd</th>
                                                    <th class="text-center">4th</th>
                                                    <th class="text-center">Average</th>
                                                </tr>
                                            </thead>
                                            <tbody id="allgrades">
                                                <!--  -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <center><button class="btn btn-primary" onclick="window.print()">Print</button></center>
                        </div>
                    </section>
                </div>
            </div> 
        </div>
        
        
    </div>