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

    public function getindex(){
      $i = Immigrant::all();
      $f = Friend::find(1);
      $match = Match::procent($f, $i, $this->maxMatches, $this->lowestProcentage);
      return view('dashboard.pages.detailedview', [
        'immigrants' => $match["matches"],
        'friends' => $f,
      ]);
    }
}
