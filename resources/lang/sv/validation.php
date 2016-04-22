gi<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute måste accepteras',
    'active_url'           => ':attribute är inte en giltig adress',
    'after'                => ':attribute måste vara ett datum efter :date.',
    'alpha'                => ':attribute får endast innehålla bokstäver',
    'alpha_dash'           => ':attribute får endast innehålla bokstäver, nummer och bindestreck.',
    'alpha_num'            => ':attribute får endast innehålla bokstäver och siffror',
    'array'                => ':attribute måste vara en lista.',
    'before'               => ':attribute måste vara ett datum före :date.',
    'between'              => [
        'numeric' => ':attribute måste vara mellan :min och :max.',
        'file'    => ':attribute måste vara mellan :min och :max kilobyte.',
        'string'  => ':attribute måste vara mellan :min och :max bokstäver.',
        'array'   => ':attribute måste vara mellan:min och :max objekt.',
    ],
    'boolean'              => ':attribute måste vara sant eller falskt.',
    'confirmed'            => ':attribute fälten matchar inte.',
    'date'                 => ':attribute felaktigt format på datum.',
    'date_format'          => ':attribute matchar inte formatet: :format.',
    'different'            => ':attribute och :other måste vara olika.',
    'digits'               => ':attribute måste vara :digits digits.',
    'digits_between'       => ':attribute måste vara mellan :min och :max.',
    'distinct'             => ':attribute har dubbla värden.',
    'email'                => ':attribute måste vara en giltig e-postadress.',
    'exists'               => 'valda :attribute är felaktigt.',
    'filled'               => ':attribute är obligatoriskt.',
    'image'                => ':attribute måste vara en bild.',
    'in'                   => 'valt :attribute är inte godkänt.',
    'in_array'             => ':attribute fältet existerar inte i :other.',
    'integer'              => ':attribute måste vara en siffra.',
    'ip'                   => ':attribute måste vara ett gokänt ip-nummer.',
    'json'                 => ':attribute måste vara en godkänd JSON.',
    'max'                  => [
        'numeric' => ':attribute får inte vara större än :max.',
        'file'    => ':attribute får inte vara större än :max kilobytes.',
        'string'  => ':attribute får inte vara större än :max characters.',
        'array'   => ':attribute may får inte vara större än :max .',
    ],
    'mimes'                => ':attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute must be at least :min.',
        'file'    => ':attribute must be at least :min kilobytes.',
        'string'  => ':attribute must be at least :min characters.',
        'array'   => ':attribute must have at least :min items.',
    ],
    'not_in'               => 'selected :attribute is invalid.',
    'numeric'              => ':attribute must be a number.',
    'present'              => ':attribute field must be present.',
    'regex'                => ':attribute format is invalid.',
    'required'             => ':attribute är obligatoriskt.',
    'required_if'          => ':attribute field is required when :other is :value.',
    'required_unless'      => ':attribute field is required unless :other is in :values.',
    'required_with'        => ':attribute field is required when :values is present.',
    'required_with_all'    => ':attribute field is required when :values is present.',
    'required_without'     => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same'                 => ':attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute must be :size.',
        'file'    => ':attribute must be :size kilobytes.',
        'string'  => ':attribute must be :size characters.',
        'array'   => ':attribute must contain :size items.',
    ],
    'string'               => ':attribute must be a string.',
    'timezone'             => ':attribute must be a valid zone.',
    'unique'               => ':attribute has already been taken.',
    'url'                  => ':attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
