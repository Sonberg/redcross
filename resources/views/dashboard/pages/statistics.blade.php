@extends('app') @section('content') @include('dashboard.navbar')

<div class="ui page grid main" id="dashboard">

    <div class="ui statistics center">
        <div class="statistic">
            <div class="value">
                22
            </div>
            <div class="label">
                Faves
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                31,200
            </div>
            <div class="label">
                Views
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                22
            </div>
            <div class="label">
                Members
            </div>
        </div>
        <div class="statistic">
            <div class="value">
                22
            </div>
            <div class="label">
                Members
            </div>
        </div>
    </div>

    <div class="row center">



        <div class="col-xs-12 col-sm-12 col-md-12">
<div class="col-md-4"><h2>Antal matchningar</h2></div><div class="col-md-8">

                <div id="reportrange" class="pull-right chart-range ui button">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                    <span></span> <b class="caret"></b>
                </div>

            </div>
            <div class="row center">
         <div class="col-md-12 center"><canvas id="c" style="max-width:80em; max-height:10em; width:100%; height:5%;"></canvas></div>
            </div>
         </div>

    </div>


</div>

<script src="/js/matches_charts.js"></script>
<script src="/js/selection_button.js"></script>



@endsection
