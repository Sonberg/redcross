<?php

namespace App\Http\Controllers\Dashboard;

use Auth;
use App\Match;
use App\Friend;
use Carbon\Carbon;
use App\Immigrant;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListviewController extends Controller {

    public function getIndex() {
        $i = Immigrant::all();
        $f = Friend::all();
      /* $t = Carbon::now()->'created_at'->diffForHumans(); */



        return view("dashboard.pages.listview", [
            'user' => Auth::user(),
            'immigrant' => $i,
            'friend' => $f
            /* 'timesince' =>$t, */
        ]);



    }
}
