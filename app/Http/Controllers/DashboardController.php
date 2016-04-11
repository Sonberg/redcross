<?php

namespace App\Http\Controllers;

use Auth;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    private $maxMatches = 5;
    private $lowestProcentage = 60;

    public function getIndex() {
        $i = Immigrant::all();
        $f = Friend::find(11);
        $i = Match::procent($f, $i, $this->maxMatches, $this->lowestProcentage);

        return view("dashboard.index", [
           'user' => Auth::user(),
            'immigrant' => $i,
            'friend' => $f,
        ]);
    }
}
