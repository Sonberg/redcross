<?php
namespace App;

class Distance {


    /*
        Calculate distance
    */
    public static function coordinates($lat1, $lon1, $lat2, $lon2, $unit) {
          $theta = $lon1 - $lon2;
          $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
          $dist = acos($dist);
          $dist = rad2deg($dist);
          $miles = $dist * 60 * 1.1515;
          $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }

    /*
        Sort and return by distance
    */
    public static function sortByDistance($collection, $latitude, $longitude) {
        if (count($collection) > 1) {
            for($i=0;$i<count($collection); $i++) {
                $collection[$i]["distance"] = self::coordinates($latitude, $longitude, $collection[$i]["latitude"], $collection[$i]["longitude"], "k");
            }

            usort($collection, 'self::invenDescSort');
            return $collection;
        } else {
            return $collection;
        }
    }

    /*
        Return closest Event
    
    public static function calcClosestEvent($events, $latitude, $longitude) {

        // Calc distance
        for($i=0;$i<count($events); $i++) {
            $events[$i]["distance"] = self::coordinates($latitude, $longitude, $events[$i]["latitude"], $events[$i]["longitude"], "k");
        }
        // Sort events after distance
        usort($events, 'self::invenDescSort');
        if($events[0]["distance"] < 0.3) {
            return Watermark::where('owner_event', '=', $events[0]["id"])
                ->where('isVisible', '=', '1')
                ->orderBy('created_at', 'desc')
                ->limit(2)
                ->get();
        } else {
            return array();
        }
    }
    */

    /*
        Get short name for current country
    */
    public static function getCurrentCountry ($latitude, $longitude) {
        $googleKey = "AIzaSyAgfKY3KlVQ_Vw2-8Kbqy6lo3khDiJEcls";
        $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=".$latitude.",".$longitude."&key=".$googleKey;
        $shortName = json_decode(file_get_contents($url), true)["results"][0]["address_components"][5]["short_name"];
        return $shortName;
    }

    /*
        HELPER FUNCTION
    */

    // Sort function
    private static function invenDescSort($item1,$item2)
    {
        if ($item1['distance'] == $item2['distance']) return 0;
        return ($item1['distance'] > $item2['distance']) ? 1 : -1;
    }

}
