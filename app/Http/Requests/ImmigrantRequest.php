<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ImmigrantRequest extends Request
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
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'language' => 'required',
            'area' => 'required',
            'profession' => 'required',
            'number_members' => 'required',
        ];
    }
}
