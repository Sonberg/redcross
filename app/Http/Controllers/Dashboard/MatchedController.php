<?php

namespace App\Http\Controllers\Dashboard;

use App\Immigrant;
use App\Friend;
use App\Match;
use App\MatchAlgoritm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class MatchedController extends Controller
{
    public function getIndex() {
      $matches = Match::paginate(2);
      for($i=0;$i<count($matches);$i++) {
        $matches[$i]->immigrant = Parent::printable(Immigrant::withTrashed()->find($matches[$i]->immigrant_match));
        $matches[$i]->friend = Parent::printable(Friend::withTrashed()->find($matches[$i]->friend_match));
        $matches[$i]->parameters =  str_replace("[", '', $matches[$i]->parameters);
        $matches[$i]->parameters =  str_replace("]", '', $matches[$i]->parameters);
        $matches[$i]->parameters = explode(',', $matches[$i]->parameters);
      }
      return view('dashboard.pages.matchedview', ['matches' => $matches]);
    }
}
