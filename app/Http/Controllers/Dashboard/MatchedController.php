<?php

namespace App\Http\Controllers\Dashboard;

use Input;
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
      $matches = Match::orderBy('created_at', 'desc')->paginate(4);
      for($i=0;$i<count($matches);$i++) {
        $matches[$i]->immigrant = Parent::printable(Immigrant::withTrashed()->find($matches[$i]->immigrant_match));
        $matches[$i]->friend = Parent::printable(Friend::withTrashed()->find($matches[$i]->friend_match));
        $matches[$i]->parameters =  str_replace("[", '', $matches[$i]->parameters);
        $matches[$i]->parameters =  str_replace("]", '', $matches[$i]->parameters);
        $matches[$i]->parameters = explode(',', $matches[$i]->parameters);
      }
      return view('dashboard.pages.matchedview', ['matches' => $matches]);
    }

    public function postRemove() {
      $input = Input::all();
      Immigrant::withTrashed()->where('id', array_get($input, "immigrant"))->restore();
      Friend::withTrashed()->where('id', array_get($input, "friend"))->restore();
      Match::destroy(array_get($input, "id"));
      return redirect()->back();
    }
}
