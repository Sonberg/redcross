<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\MatchAlgoritm;
use App\Friend;
use App\Immigrant;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {

    public function getIndex() {
        $im = Immigrant::orderBy('created_at')->limit(20)->get();
        $f = Friend::orderBy('created_at')->limit(20)->get();

        for($i = 0;$i<count($f); $i++) {
          $temp = MatchAlgoritm::procent($f[$i], $im, $this->maxMatches, $this->lowestProcentage);
          $f[$i]["count"] = $temp["count"];
          $f[$i] = Parent::printable($f[$i]);
        }

        for($i = 0;$i < count($im); $i++) {
          $temp = MatchAlgoritm::procent($im[$i], $f, $this->maxMatches, $this->lowestProcentage);
          $im[$i]["count"] = $temp["count"];
          $im[$i] = Parent::printable($im[$i]);
        }

        return view("dashboard.index", [
           'user' => Auth::user(),
            'immigrant' => $im,
            'friend' => $f,
            'statistic' => Parent::statistic(),
        ]);
    }

    public function getInactive() {
      return view('dashboard.pages.inactive');
    }
}
