<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute moet worden geaccepteerd.',
    'active_url'           => 'The :attribute is geen geldige URL.',
    'after'                => 'The :attribute moet een datum erna zijn :date.',
    'after_or_equal'       => 'The :attribute moet een datum na of gelijk aan zijn :date.',
    'alpha'                => 'The :attribute mag alleen letters bevatten.',
    'alpha_dash'           => 'The :attribute mag alleen letters, cijfers en streepjes bevatten.',
    'alpha_num'            => 'The :attribute mag alleen letters en cijfers bevatten.',
    'array'                => 'The :attribute moet een array zijn.',
    'before'               => 'The :attribute moet een datum ervoor zijn :date.',
    'before_or_equal'      => 'The :attribute moet een datum vóór of gelijk aan zijn :date.',
    'between'              => [
        'numeric' => 'The :attribute moet tussen :min and :max.',
        'file'    => 'The :attribute moet tussen :min and :max kilobytes.',
        'string'  => 'The :attribute moet tussen :min and :max tekens.',
        'array'   => 'The :attribute moet hebben tussen:min and :max items.',
    ],
    'boolean'              => 'De :attribute veld moet waar of onwaar zijn.',
    'confirmed'            => 'De :attribute bevestiging komt niet overeen.',
    'date'                 => 'De :attribute is geen geldige datum.',
    'date_format'          => 'De :attribute komt niet overeen met het formaat :format.',
    'different'            => 'De :attribute en :other moet anders zijn.',
    'digits'               => 'De :attribute must be :digits digits.',
    'digits_between'       => 'De :attribute must be between :min and :max digits.',
    'dimensions'           => 'De :attribute has invalid image dimensions.',
    'distinct'             => 'De :attribute field has a duplicate value.',
    'email'                => 'De :attribute Moet een geldig e-mail adres zijn.',
    'exists'               => 'De geselecteerde :attribute is ongeldig.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'De geselecteerde:attribute is ongeldig.',
    'numeric'              => 'De :attribute moet een nummer zijn.',
    'present'              => 'De :attribute veld moet aanwezig zijn.',
    'regex'                => 'De :attribute formaat is ongeldig.',
    'required'             => 'De :attribute veld is verplicht.',
    'required_if'          => 'De :attribute veld is verplicht wanneer :other is :value.',
    'required_unless'      => 'De :attribute veld is verplicht tenzij :other is in :values.',
    'required_with'        => 'De :attribute veld is vereist wanneer :values zijn aanwezig.',
    'required_with_all'    => 'De :attribute veld is vereist wanneer :values zijn aanwezig.',
    'required_without'     => 'De :attribute veld is vereist wanneer :values is not present.',
    'required_without_all' => 'De :attribute veld is verplicht wanneer geen van :values zijn aanwezig.',
    'same'                 => 'De :attribute en :other moet overeenkomen.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'De :attribute moet een tekenreeks zijn.',
    'timezone'             => 'De :attribute must be a valid zone.',
    'unique'               => 'De :attribute is al bezet.',
    'uploaded'             => 'De :attribute kan niet uploaden.',
    'url'                  => 'De :attribute formaat is ongeldig.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
