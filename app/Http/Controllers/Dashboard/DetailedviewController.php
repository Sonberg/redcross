<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DetailedviewController extends Controller
{

    public function getindex() {
        $f = Friend::all()->first();
        $f->country = Parent::nameFromCode($f->orgin);
        return view("dashboard.pages.detailedview", ['master' => $f]);
    }
}
