<?php

namespace App\Http\Controllers;

use App;
use App\Http\Requests;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex() {
        return view('index');
    }
}
