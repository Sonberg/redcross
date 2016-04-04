<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class newImmigrantRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'language' => 'required',
            'accommodation' => 'required|numeric',
            'profession' => 'required|numeric',
            'arrived' => 'required',
            'number_members' => 'required|numeric',
            'age_kids' => 'required|numeric',
            'sport' => 'required|numeric',
            'meet_family' => 'required|boolean',
            'meet_gender' => 'required|boolean',
            'meet_profession' => 'required|boolean',
        ];
    }
}
