<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use Input;
use App\MatchAlgoritm;
use App\Friend;
use App\Immigrant;
use App\Profession;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class DetailedviewController extends Controller {

    public function getindex($type, $id) {
      if($type == 'immigrant') {
        $m = Immigrant::find($id);
        $s = Friend::all();
      } else {
        $m = Friend::find($id);
        $s = Immigrant::all();
      }

        $s = MatchAlgoritm::procent($m, $s, $this->maxMatches, $this->lowestProcentage);
        return view("dashboard.pages.detailedview", ['master' => Parent::printable($m), 'count' => $s["count"]]);
    }

    public function postNote($type, $id) {
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
