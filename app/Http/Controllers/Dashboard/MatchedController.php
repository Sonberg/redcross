<?php

namespace App\Http\Controllers\Dashboard;

use App\Immigrant;
use App\Friend;
use App\Match;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class MatchedController extends Controller
{
    public function getIndex() {
      $matches = Match::paginate(2);
      for($i=0;$i<count($matches);$i++) {
        $matches[$i]->immigrant_match = Immigrant::withTrashed()->find($matches[$i]->immigrant_match);
        $matches[$i]->friend_match = Immigrant::withTrashed()->find($matches[$i]->friend_match);
      }
      return view('dashboard.pages.matchedview', ['matches' => $matches]);
    }
}
