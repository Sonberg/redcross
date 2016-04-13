<?php

namespace App;
use App\Accommodation;

class Formatter {

  // -> coordinates
  public static function coordinates ($obj) {
    if ($obj->latitude == NULL) {
        $a = Accommodation::find($obj->accommodation);
        return array($a->latitude, $a->longitude);
    } else {
      return array($obj->latitude, $obj->longitude);
    }
  }

  // Determinate master
  public static function masterPreference($main, $second, $attribute) {
    if ($main->$attribute != null) { return array($main, $second); }
    if ($second->$attribute != null) { return array($second, $main); }
    return false;
  }

  // -> profession
  public static function profession ($main) {
    if ($main->meet_profession != null) {
      if($main->meet_profession == true) {
        return true;
      } else {
        return false;
      }
    } else { // Main == Friend
      return null;
    }
  }


  // Age splitter
  public static function avarageAge($age) {
    $age =  explode("-", $age);
    if(count($age) == 2) {
      return ($age[0] + $age[1]) / 2;
    } else {
      return $age[0];
    }
  }

  // Filter inactive & bad matches
  public static function filter ($obj, $length, $procent) {
    // Order, highest score first
    $order = function ($obj) {
      $arr = array();
      foreach ($obj as $o) { array_push($arr, $o); }

      $sort = usort($arr, function($a, $b) {
            return strcmp($a->match, $b->match);
        });
        var_dump(count($arr));
        return $arr;
    };

    // Remove if its over max count
    $count = function ($obj, $length) {
        if (count($obj) > $length) {
          return array_slice($obj, 0, $length);
        } else { return $obj; }
    };

    // Remove 0% from array
    $filter = function ($obj) {
        for($i=0;$i<count($obj);$i++) {
          if ($obj[$i]["match"] == 0) {
            unset($obj[$i]);
            $i = 0;
          }
        }
        return $obj;
    };

    return $filter($count($order($obj),$length));
  }

  // Sort functions
  private static function sortDesc($a, $b)
{
    return strcmp($a->match, $b->match);
}

}
