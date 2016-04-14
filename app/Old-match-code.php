/*

Match intrests 1-5

if (count($main) >= count($second)) {
    $count = count($main);
} else if (count($main) < count($second)) {
    $count = count($second);
}

$parts = 100/$count;
for($i=0;$i<$count;$i++) {


    if(key($main[$i]) != key($second[$i])) {
      if ($second[key($main[$i])] != null) {
        $m = get_object_vars($main[$i]);
        $s = get_object_vars($second[key($main[$i])]);
        $diff = (self::difference($m[key($main[$i])], $s[key($second[$i])]));

        $match -= ($parts * ($diff/4)/$match)*100;
      }


    } else {
        $m = get_object_vars($main[$i]);
        $s = get_object_vars($second[$i]);
        $diff = (self::difference($m[key($main[$i])], $s[key($second[$i])]));
        if ($diff < 1) {
          array_push($good, $s);
        }
        $match -= ($parts * ($diff/4)/$match)*100;
    }
}
return array("procent" => $match, "good" => $good);
*/

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
