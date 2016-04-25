<?php

namespace App;
use App\Distance;
use App\Formatter;

class MatchAlgoritm {

    public static function procent($main, $second, $length, $maxProcent) {
        for($i=0;$i<count($second);$i++) {
            $gender = MatchAlgoritm::matchGender($main, $second[$i]);
            $intrest = MatchAlgoritm::matchIntrest($main->intrests, $second[$i]->intrests);
            $language = MatchAlgoritm::matchLanguage($main->language, $second[$i]->language);
            $dist = MatchAlgoritm::matchDistance($main, $second[$i]);
            $profession = MatchAlgoritm::matchProfession($main, $second[$i]);
            $age = MatchAlgoritm::matchAge($main, $second[$i]);
            $family = MatchAlgoritm::matchFamily($main, $second[$i]);

            // Total procentage
            $procent = ($gender + $intrest["procent"] + $language["procent"] + $dist + $profession) / 5;
            /*
            $procent = 100 *
              ($gender * 0.01) *
              ($intrest["procent"] * 0.01) *
              ($language["procent"] * 0.01) *
              ($dist * 0.01) *
              ($profession * 0.01);
            */

            // Remove if its 0 or set max to 100
            if (floor($procent) >= 100) {
              $second[$i]["match"] = 100;
            } else {
              $second[$i]["match"] = floor($procent);
            }

            $second[$i]["result"] = array(
              "gender" => $gender,
              "intrest" => $intrest,
              "language" => $language,
              "dist" => $dist,
              "profession" => $profession,
              "matches" => array_merge($intrest["matches"], $language["matches"])
            );
          }

        $return["result"] = Formatter::filter($second, $length, $maxProcent);
        $return["count"] = count($return["result"]);
        return $return;
    }

    /* Match intrest -> % */
    public static function matchIntrest($main, $second) {
        if (gettype($main) == 'string') {
          $main = explode(",", $main);
        }

        if (gettype($second) == 'string') {
          $second = explode(",", $second);
        }

        $items = count($main);
        $matches = array();

        foreach($main as $m) {
            if (in_array($m, $second)) {
                array_push($matches, $m);
            }
        }

        switch (count($matches)) {
          case 1:
            return array("procent" => 80, "matches" => $matches);
            break;
          case 2:
            return array("procent" => 90, "matches" => $matches);
            break;

          case 3:
            return array("procent" => 100, "matches" => $matches);
            break;

          case 4:
            return array("procent" => 120, "matches" => $matches);
            break;

          case 5:
              return array("procent" => 150, "matches" => $matches);
            break;

          default:
              return array("procent" => 20, "matches" => $matches);
            break;
        }
    }

    /* Match known languages -> % */
    public static function matchLanguage($main, $second) {
      if (gettype($main) == 'string') {
        $main = explode(",", $main);
      }

      if (gettype($second) == 'string') {
        $second = explode(",", $second);
      }

        $matches = array();

        foreach($main as $lang) {
            if (in_array($lang, $second)) {
                array_push($matches, $lang);
            }
        }

        if(count($matches) > 0) {
          return array("procent" => 100, "matches" => $matches);
        } else {
          return array("procent" => -50, "matches" => $matches);
        }
    }

    /* Match gender -> % */
    public static function matchGender($main, $second) {
        switch ($main->meet_gender) {
            case "0" :
                return 100;
                break;
            default:
                if($main == $second) { return 140; } else { return 80; }
                break;

        }
    }

    /* Match distance -> % */

    public static function matchDistance($main, $second) {
        $m = Formatter::coordinates($main);
        $s = Formatter::coordinates($second);
        $d = Distance::coordinates($m[0], $m[1], $s[0], $s[1], "K");

        if($main->radius != null) {
          $radius = $main->radius;
        } else {
          $radius = $second->radius;
        }

        if($d <= $radius) {
          return 100;
        } else {
          return 60;
        }
    }

    public static function matchProfession($main, $second) {
      $bool = Formatter::profession($main);
      $attribute = "meet_profession";
      $obj = Formatter::masterPreference($main, $second, $attribute);

      if($obj[0][$attribute] == true) {
        return MatchAlgoritm::compereValue($obj[0]->profession, $obj[1]->profession);
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
