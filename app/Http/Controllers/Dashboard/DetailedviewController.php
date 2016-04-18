<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use Input;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Profession;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DetailedviewController extends Controller {

    public function getindex() {
        $m = Friend::all()->first();
        $s = Immigrant::all();
        $s = Match::procent($m, $s, $this->maxMatches, $this->lowestProcentage);
        return view("dashboard.pages.detailedview", ['master' => Parent::printable($m), 'count' => $s["count"]]);
    }

    public function postNote() {
      $input = Input::all();
      switch (array_get($input, "type")) {
        case "friend" :
          $person = Friend::find(array_get($input, "person"));
        break;
        case "immigrant":
          $person = immigration::find(array_get($input, "person"));
        break;
        default:
          return "";
        break;
      }

      $person->notes = array_get($input, "notes");
      $person->save();
      return redirect()->back();
    }
}
