<?php

namespace App\Http\Controllers;

use App\Match;
use App\Friend;
use Carbon\Carbon;
use App\Immigrant;
use App\Profession;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $maxMatches = 10;
    public $lowestProcentage = 60;

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
      if($master->adress != null) {
        $master->type = "friend";
      } else {
        $master->type = "immigrant";
      }
      $dt = new \DateTime($master->created_at);
      $master->human = Carbon::instance($dt)->diffForHumans();
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

    public function friends ($limit) {

    }

    public function immigrants ($limit) {
      if(gettype($limit) == "integer") {
        $i = Immigrant::limit($limit)->orderBy('created_at')->get();
      } else {
        $i = Immigrant::orderBy('created_at')->get();
      }

      $new = $i->filter(function($m) {
        $c = Match::where('immigrant_match', '=', $m->id)->count();
        if($c == 0) {
          return true;
        } else {
          return false;
        }
      });
      return($new);
    }

    public function subObject($c) {
      for($i=0;$i<count($c);$i++) {
        $c[$i] = (object) $c[$i];
      }
      return $c;
    }


    public function statistic() {
      $day = Carbon::now()->format('y-m-d');
      return array("today" => $this->countToday($day), "matchMonth" => $this->matchMonth($day), "immigrants" => immigrant::count(), "friends" => Friend::count());
    }

    public function countToday($today) {
      $start = $today . ' 00:00:00';
      $end = $today . ' 23:59:59';

      $iToday = Immigrant::whereBetween('created_at', array($start, $end))->count();
      $fToday = Friend::whereBetween('created_at', array($start, $end))->count();

      return $iToday + $fToday;
    }

    public function matchMonth($today) {
      $end = $today . ' 23:59:59';
      $start = Carbon::parse()->addMonth(-1)->format('y-m-d');
      $start = $start . ' 23:59:59';
      return Match::whereBetween('created_at', array($start, $end))->count();
    }
  }
