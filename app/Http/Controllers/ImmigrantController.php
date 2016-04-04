<?php

namespace App\Http\Controllers;

use App\Profession;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\newImmigrantRequest;

class ImmigrantController extends Controller
{
    public function getIndex() {
        return view('immigrant', [
            'countries' => $this->countryList(),
            'languages' => $this->languagesList(),
            'professions' => Profession::all(),
        ]);
    }
    
    public function getLanguage($country) {
        foreach($this->countryList() as $c) {
            if($c->short == $country) {   
                    return $c->lang[0];
            }
        }
        return null;
    }
    
    public function postIndex(newImmigrantRequest $request) {
        var_dump($request->all());
    }
    
    private function languagesList() {
        $json = file_get_contents('data/languages.json');
        $obj = json_decode($json, true);
        $list = array();
        
        foreach($obj["lang"] as $j) {
            array_push($list, ["eng" => $j[0], "native" => $j[1]]);
        }
        
        return $list;
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
                "shortSmall" => strtolower($c->altSpellings[0])
          ];
        }
        return json_decode (json_encode ($list), FALSE);
    }
}
