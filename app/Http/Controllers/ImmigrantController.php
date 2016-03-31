<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ImmigrantController extends Controller
{
    public function getIndex() {
        return view('immigrant', ['countries' => $this->countryList()]);
    }
    
    public function getLanguage($country) {
        foreach($this->countryList() as $c) {
            if($c->short == $country) {   
                    return $c->lang[0];
            }
        }
        return null;
    }
    
    public function postIndex() {
        
    }
    
    private function countryList() {
        //https://restcountries.eu/rest/v1/all
        $json = file_get_contents('data/countries.json');
        $obj = json_decode($json);
        $list = array();
        
        foreach($obj as $c) {
            $list[$c->altSpellings[0]] = [
                "name" => $c->name,
                "short" => $c->altSpellings[0],
                "lang" => [
                    $c->languages
                ]
              
          ];
        }
        return json_decode (json_encode ($list), FALSE);
    }
}
