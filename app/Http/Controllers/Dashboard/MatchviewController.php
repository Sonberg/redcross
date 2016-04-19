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
      $m = Friend::all()->first();
      $s = Immigrant::all();
      $s = Match::procent($m, $s, $this->maxMatches, $this->lowestProcentage);
      $sm = reset($s["result"]);
      return view("dashboard.pages.matchview", [
        'master' => Parent::printable($m),
        'secondMaster' => Parent::printable($sm),
        'count' => $s["count"]]);
    }
}
