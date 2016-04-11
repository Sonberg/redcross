<?php

namespace App;
use App\Distance;
use App\Formatter;
use App\Accommodation;

class Match {

    public static function procent($main, $second, $length, $procent) {

        
        for($i=0;$i<count($second);$i++) {
            $gender = Match::matchGender($main->gender, $second[$i]->meet_gender);
            $intrest = Match::matchIntrest($main->intrests, $second[$i]->intrests);
            $language = Match::matchLanguage($main->language, $second[$i]->language);
            $dist = Match::matchDistance($main, $second[$i]);
            $profession = Match::matchProfession($main, $second[$i]);
            $age = Match::matchAge($main, $second[$i]);
            $family = Match::matchFamily($main, $second[$i]);


            // Total procentage
            $procent = 100 *
              ($gender * 0.01) *
              ($intrest * 0.01 * 1.5) *
              ($language * 0.01) *
              ($dist * 0.01) *
              ($profession * 0.01);

            // Remove if its 0 or set max to 100
            if (floor($procent) >= 100) {
              $s["match"] = 100;
            } else {
              $s["match"] = floor($procent);
            }

            $s["result"] = json_encode(array(
              "gender" => $gender,
              "intrest" => $intrest,
              "language" => $language,
              "dist" => $dist,
              "profession" => $profession,
            ));
        }

        return Formatter::filter($second, $length, $procent);
    }

    /* Match intrest -> % */
    public static function matchIntrest($main, $second) {
        $main = json_decode($main);
        $second = json_decode($second);
        $match = 100;

        /* Different length of arrays | Determent highest count */

        if (count($main) >= count($second)) {
            $count = count($main);
        } else if (count($main) < count($second)) {
            $count = count($second);
        }

        $parts = 100/$count;
        for($i=0;$i<$count;$i++) {

            /* Intrest is not matching */
            if(key($main[$i]) != key($second[$i])) {
              if ($second[key($main[$i])] != null) {
                $m = get_object_vars($main[$i]);
                $s = get_object_vars($second[key($main[$i])]);
                $diff = (self::difference($m[key($main[$i])], $s[key($second[$i])]));

                $match -= ($parts * ($diff/4)/$match)*100;
              }

            /* Intrest is matching */
            } else {
                $m = get_object_vars($main[$i]);
                $s = get_object_vars($second[$i]);
                $diff = (self::difference($m[key($main[$i])], $s[key($second[$i])]));

                $match -= ($parts * ($diff/4)/$match)*100;
            }
        }

        return $match;
    }

    /* Match known languages -> % */
    public static function matchLanguage($main, $second) {
        $main = explode(",", $main);
        $second = explode(",", $second);

        foreach($main as $lang) {
            if (in_array($lang, $second)) {
                return 100;
            }
        }

        return 0;
    }

    /* Match gender -> % */
    public static function matchGender($main, $second) {
        switch ($second) {
            case "0" :
                return 100;
                break;
            default:
                if($main == $second) { return 140; } else { return 0; }
                break;

        }
    }

    /* Match distance -> % */

    public static function matchDistance($main, $second) {
        $m = Formatter::coordinates($main);
        $s = Formatter::coordinates($second);
        $d = Distance::coordinates($m[0], $m[1], $s[0], $s[1], "K");

        if($main->has_car == 1 || $second->has_car == 1) {

            // $d = distance in KM
            if($d > 50) {
              return 0;
            } elseif ($d < 50 && $d > 20) {
              return 80;
            } elseif ($d < 20 && $d > 10) {
              return 90;
            } elseif ($d < 10) {
              return 100;
            } else {
              return 0;
            }
        } else {

          // $d = distance in KM
          if($d > 5 && $d < 10) {
            return 0;
          } elseif ($d < 5 && $d > 5) {
            return 80;
          } elseif ($d < 3 && $d > 1) {
            return 90;
          } elseif ($d < 1) {
            return 100;
          } else {
            return 0;
          }
        }
    }

    public static function matchProfession($main, $second) {
      $bool = Formatter::profession($main);
      $attribute = "meet_profession";
      $obj = Formatter::masterPreference($main, $second, $attribute);

      if($obj[0][$attribute] == true) {
        return Match::compereValue($obj[0]->profession, $obj[1]->profession);
      } else {
        return 100;
      }
    }

    public static function matchFamily($main, $second) {
      $attribute = "meet_family";
      $obj = Formatter::masterPreference($main, $second, $attribute);

      // No preference
      if ($obj[0][$attribute] == 0) {
        return 100;
      }

      if ($obj[0][$attribute] == 1) {
        $diff = self::difference(Formatter::avarageAge($main->kids_age), Formatter::avarageAge($second->kids_age));
        if ($diff < 3) { return 120; }
        if ($diff < 8) { return 50; }
        return 30;
      }

      return 100;
    }

    public static function matchAge($main, $second) {
      if($main->age == $second->age) { return 100; }
      $diff = self::difference(Formatter::avarageAge($main->age), Formatter::avarageAge($second->age));

      if ($diff < 5) { return 150; }
      if ($diff < 10) { return 50; }
      return 30;
    }


    public static function difference($n1, $n2) {
        if ($n1 <= $n2) {
            $result = $n2 - $n1;
        } elseif ($n1 > $n2) {
            $result = $n1 - $n2;
        }
        return $result;
    }

    // Compere if the value is the same -> Bool
    public static function compereValue ($main, $second) {
      if($main == $second) {
        return 150;
      } else {
        return 60;
      }
    }
}
