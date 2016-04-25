<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\MatchAlgoritm;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StatisticsController extends Controller
{
    public function getindex(){
        return view("dashboard.pages.statistics");
    }
}
