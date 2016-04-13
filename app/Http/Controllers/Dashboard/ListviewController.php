<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListviewController extends Controller {

    private $maxMatches = 5;
    private $lowestProcentage = 60;

    public function getIndex($type) {
        $i = Immigrant::all();
        $f = Friend::find(11);
        $i = Match::procent($f, $i, $this->maxMatches, $this->lowestProcentage);

        return view("dashboard.pages.listview", [
            'user' => Auth::user(),
            'immigrant' => $i,
            'friend' => $f,
        ]);
    }
}
