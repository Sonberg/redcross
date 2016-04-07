<?php

namespace App\Http\Controllers;

use Input;
use App\Friend;
use App\Intrest;
use App\Profession;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\FriendRequest;

class FriendController extends Controller
{
    public function getIndex() {
        return view('friend', [
            'countries' => parent::countryList(),
            'languages' => parent::languagesList(),
            'professions' => Profession::all(),
            'intrests' => Intrest::all(),
        ]);
    }
    
    public function postIndex(FriendRequest $request) {
        $input = $request->all();
        $intrests = Intrest::all();
        
        $firstName = array_get($input, 'first_name');
        $lastName = array_get($input, 'last_name');
        $age = array_get($input, 'age');
        $gender = array_get($input, 'gender');
        $phone = array_get($input, 'phone');
        $email = array_get($input, 'email');
        $country = array_get($input, 'country');
        $language = array_get($input, 'language');
        $adress =  array_get($input, 'adress');
        $city =  array_get($input, 'city');
        $zip =  array_get($input, 'zip');
        $car = array_get($input, 'has_car');
        $profession = Profession::where('title', '=', array_get($input, 'profession'))->first();
        $number_members = array_get($input, "number_members");
        $kids_age = array_get($input, 'kids_age');
        
        $coordinates = parent::getCoordinates($adress . " " . $city . " " . $zip);
        
        // Intrests
        $c = array();
        for($i=0;$i<count($intrests);$i++) {
            array_push($c, [$intrests[$i]->category => array_get($input, $intrests[$i]->category)]);
        }
        
        $f = new Friend();
        $f->first_name = $firstName;
        $f->last_name = $lastName;
        $f->age = $age;
        $f->gender = $gender;
        $f->phone = $phone;
        $f->email = $email;
        $f->orgin = $country;
        $f->language = $language;
        $f->profession = $profession->id;
        $f->adress = $adress;
        $f->city = $city;
        $f->zipcode = $zip;
        $f->has_car = $car;
        $f->latitude = $coordinates[0];
        $f->longitude = $coordinates[1];
    
        $f->family_members = $number_members;
        $f->kids_age = $kids_age;
        $f->intrests = json_encode($c);
        $f->save();
        
        return redirect("/");
    }
}
