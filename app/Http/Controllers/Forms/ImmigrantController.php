<?php

namespace App\Http\Controllers\Forms;

use Input;
use App\Area;
use App\Intrest;
use App\Immigrant;
use App\Profession;
use App\Accommodation;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImmigrantRequest;


class ImmigrantController extends Controller
{
    public function getIndex() {
        return view('immigrant', [
            'countries' => parent::countryList(),
            'languages' => parent::languagesList(),
            'professions' => Profession::orderBy('title')->get(),
            'areas' => Area::all(),
            'intrests' => Intrest::all(),
        ]);
    }

    public function postIndex(ImmigrantRequest $request) {
        $intrests = Intrest::all();
        $input = $request->all();

        $firstName = array_get($input, 'first_name');
        $lastName = array_get($input, 'last_name');
        $age = array_get($input, 'age');
        $gender = array_get($input, 'gender');
        $phone = array_get($input, 'phone');
        $email = array_get($input, 'email');
        $country = array_get($input, 'country');
        $language = array_get($input, 'language');
        $area =  Area::where('title', '=', array_get($input, 'area'))->get()->first();
        $profession = Profession::where('title', '=', array_get($input, 'profession'))->first();
        $number_members = array_get($input, "number_members");
        $kids_age = array_get($input, 'age_kids');

        // Intrests
        $intrest = array_get($input, 'intrest');

        $meet_family = array_get($input, 'meet_family');
        $meet_gender = array_get($input, 'meet_gender');
        $meet_profession = array_get($input, 'meet_profession');

        $coordinates = parent::getCoordinates($area->title. " " . $area->city);

        $i = new Immigrant();
        $i->first_name = $firstName;
        $i->last_name = $lastName;
        $i->age = $age;
        $i->gender = $gender;
        $i->phone = $phone;
        $i->email = $email;
        $i->orgin = $country;
        $i->language = $language;
        $i->profession = $profession->id;
        $i->area = $area->id;
        $i->latitude = $coordinates[0];
        $i->longitude = $coordinates[1];
        $i->family_members = $number_members;
        $i->kids_age = $kids_age;
        $i->intrests = $intrest;
        $i->meet_family = $meet_family;
        $i->meet_gender = $meet_gender;
        $i->meet_profession = $meet_profession;
        $i->save();

        return redirect("/");
    }

}
