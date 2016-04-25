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
    public function getindex($type, $id){
      if($type == 'immigrant') {
        $m = Immigrant::find($id);
        $s = Friend::all();
      } else {
        $m = Friend::find($id);
        $s = Immigrant::all();
      }
      $s = Match::procent($m, $s, $this->maxMatches, $this->lowestProcentage);
      $sm = $s["result"];

      for($i=0; $i<count($sm);$i++) {
        $sm[$i] = Parent::printable($sm[$i]);
      }
      return view("dashboard.pages.matchview", [
        'master' => Parent::printable($m),
        'second' => $sm,
        'i' => 0,
        'count' => $s["count"]]);
    }
}
