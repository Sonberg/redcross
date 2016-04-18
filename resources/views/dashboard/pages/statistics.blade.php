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
                <select class="ui dropdown">
                    <option value="">Idag</option>
                    <option value="3">Senaste veckan</option>
                    <option value="2">Senaste månaden</option>
                    <option value="1">Senaste året</option>
                    <option value="0">Valfri period</option>
                </select>
            </div>
            <div class="row center">
         <div class="col-md-12">< <canvas id="c" width="800" height="200"></canvas></div>
            </div>
         </div>

    </div>


</div>

<script src="/js/matches_charts.js"></script>
<script src="/js/daterangepicker.js"></script>

@endsection
