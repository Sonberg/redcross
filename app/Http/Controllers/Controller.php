<?php

namespace App\Http\Controllers;

use App\Profession;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $maxMatches = 10;
    public $lowestProcentage = 10;

    // Return list of languages
    public function languagesList() {
        $json = file_get_contents('data/languages.json');
        $obj = json_decode($json, true);
        $list = array();

        foreach($obj["lang"] as $j) {
            array_push($list, ["eng" => $j[0], "native" => $j[1]]);
        }

        return $list;
    }

    // Return list of countries
    public function countryList() {
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

    public function nameFromCode($code) {
      $list = $this->countryList();
      foreach($list as $l) {
        if ($l->short == $code) {
          return $l->name;
        }
      }
    }

    public function printable($master) {
      $master->country = $this->nameFromCode($master->orgin);
      $master->profession = Profession::find($master->profession)->title;
      $master->intrests = explode(",", $master->intrests);
      $master->language =  explode(",", $master->language);
      return $master;
    }

    // GPS Coord from Adress
    public function getCoordinates($address){
        $address = urlencode($address);
        $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
        $response = file_get_contents($url);
        $json = json_decode($response,true);

        $lat = $json['results'][0]['geometry']['location']['lat'];
        $lng = $json['results'][0]['geometry']['location']['lng'];

        return array($lat, $lng);
    }
}
