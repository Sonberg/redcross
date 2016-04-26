<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use App\MatchAlgoritm;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMatchRequest;


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
      $s = MatchAlgoritm::procent($m, $s, $this->maxMatches, $this->lowestProcentage);
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

    public function postIndex(CreateMatchRequest $request) {
      $input = $request->all();
      $type = array_get($input, 'master-type');
      $match = new Match;

      switch ($type) {
        case 'friend':
          $f = Friend::find(array_get($input, 'master'));
          $f->delete();

          $i = Immigrant::find(array_get($input, 'second'));
          $i->delete();

          $match->friend_match = array_get($input, 'master');
          $match->immigrant_match = array_get($input, 'second');
          break;

        case 'immigrant':
          $f = Friend::find(array_get($input, 'second'));
          $f->delete();

          $i = Immigrant::find(array_get($input, 'master'));
          $i->delete();

          $match->friend_match = array_get($input, 'second');
          $match->immigrant_match = array_get($input, 'master');
          $match->parameters = array_get($input, 'parameters');
          $match->procent = array_get($input, 'procent');
          break;

        default:
          break;
      }
      $match->save();
      return redirect('/dashboard');
    }
}
