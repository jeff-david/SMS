@extends('layout.principal')

@section('content')
<div class="page-content--bgf7">
            <!-- WELCOME-->
            <section class="welcome p-t-10" style="margin-top: 77px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                               
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{ $g7 }}</h2>
                                <span class="desc">Grade 7</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--yellow">
                                <h2 class="number">{{$g8}}</h2>
                                <span class="desc">Grade 8</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">{{$g9}}</h2>
                                <span class="desc">Grade 9</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">{{$g10}}</h2>
                                <span class="desc">Grade 10</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--purple">
                                <h2 class="number">{{$g11}}</h2>
                                <span class="desc">Grade 11</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{$g12}}</h2>
                                <span class="desc">Grade 12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">statistics</h3>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <!-- CHART PERCENT-->
                        <div class="chart-percent-2">
                            <h3 class="title-3 m-b-30">Overall Status</h3>
                            <div class="chart-wrap">
                                <canvas id="percent-chart2"></canvas>
                                <div id="chartjs-tooltip">
                                    <table></table>
                                </div>
                            </div>
                            <div class="chart-info">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>Passed</span>
                                </div>
                                <div class="chart-note">
                                    <span class="dot dot--red"></span>
                                    <span>Failed</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CHART PERCENT-->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Overall Ranking</h3>
                        </div>
                    </div>
                    <div class="row" id="rank">
                        <!-- tables for the ranking of all grade level -->
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- COPYRIGHT-->
            <!-- <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- END COPYRIGHT-->
        </div>
@endsection