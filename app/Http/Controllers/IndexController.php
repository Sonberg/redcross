<?php

namespace App\Http\Controllers;

use App;
use Validator;
use Input; 
use Redirect; 
use Session; 
use App\Form;
use LaravelLocalization;
use App\Http\Requests;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex() {
        return view('index', []);
    }
}
