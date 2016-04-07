<?php

namespace App;
use App\Accommodation;

class Formatter {

  public static function coordinates($obj) {
    if ($obj->latitude == NULL) {
        $a = Accommodation::find($obj->accommodation);
        return array($a->latitude, $a->longitude);
    } else {
      return array($obj->latitude, $obj->longitude);
    }
  }

  public static function filter ($obj, $length, $procent) {

    $order = function ($obj) {
      $arr = array();
      foreach ($obj as $o) {
        array_push($arr, $o);
      }

      $sort = usort($arr, function($a, $b) {
            return strcmp($a->match, $b->match);
        });

        return $arr;
    };

    $count = function ($obj, $length) {
        if (count($obj) > $length) {
          return array_slice($obj, 0, $length);
        } else {
          return $obj;
      }
    };

    return $count($order($obj), $length);
  }

  // Sort functions
  private static function sortDesc($a, $b)
{
    return strcmp($a->match, $b->match);
}

}
