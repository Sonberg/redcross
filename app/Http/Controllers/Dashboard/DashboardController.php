<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function getIndex() {
        $i = Immigrant::all();
        $f = Friend::find(11);
      //  $i = Match::procent($f, $i, $this->maxMatches, $this->lowestProcentage);

        return view("dashboard.index", [
           'user' => Auth::user(),
            'immigrant' => $i,
            'friend' => $f,
        ]);
    }
}
