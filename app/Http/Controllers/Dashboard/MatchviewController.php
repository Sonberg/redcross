<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class MatchviewController extends Controller
{
    public function getindex(){
        return view("dashboard.pages.matchview");
    }
}

