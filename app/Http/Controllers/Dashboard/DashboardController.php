<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\Match;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function getIndex() {
        $im = Immigrant::orderBy('created_at')->get();
        $f = Friend::orderBy('created_at')->get();

        for($i = 0;$i<count($f); $i++) {
          $temp = Match::procent($f[$i], $im, $this->maxMatches, $this->lowestProcentage);
          $f[$i]["count"] = $temp["count"];
          $f[$i] = Parent::printable($f[$i]);
        }

        for($i = 0;$i < count($im); $i++) {
          $temp = Match::procent($im[$i], $f, $this->maxMatches, $this->lowestProcentage);
          $im[$i]["count"] = $temp["count"];
          $im[$i] = Parent::printable($im[$i]);
        }

        return view("dashboard.index", [
           'user' => Auth::user(),
            'immigrant' => $im,
            'friend' => $f,
        ]);
    }
}
