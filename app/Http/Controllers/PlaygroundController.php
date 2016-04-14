<?php
namespace App\Http\Controllers;

use App\Match;
use App\Friend;
use App\immigrant;
use App\Http\Requests;
use Illuminate\Http\Request;

class PlaygroundController extends Controller {

    public function getIndex() {
      $i = immigrant::all()->first();
      $f = Friend::all();
      $match = Match::procent($i, $f, $this->maxMatches, $this->lowestProcentage);

      return view('playground', [
        'immigrants' => $i,
        'friends' => $match["result"]
      ]);
    }

}
