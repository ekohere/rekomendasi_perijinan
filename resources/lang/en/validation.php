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

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'Kolom :attribute harus diisi tanggal setelah :date.',
    'after_or_equal'       => 'Kolom :attribute harus diisi tanggal :date atau setelahnya.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'Kolom :attribute harus berupa tanggal :date.',
    'before_or_equal'      => 'Kolom :attribute harus berupa tanggal :date atau setelahnya.',
    'between'              => [
        'numeric' => 'Kolom :attribute harus berada di antara angka :min dan :max.',
        'file'    => 'Ukuran file pada kolom :attribute harus berada di antara :min dan :max kilobytes.',
        'string'  => 'Jumlah karakter pada kolom :attribute harus berada di antara :min dan :max karakter.',
        'array'   => 'Jumlah item array pada kolom :attribute harus berada di antara :min dan :max item.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'Kolom :attribute tidak cocok.',
    'date'                 => 'Kolom :attribute harus diisi dengan tanggal yang valid.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'Data pada kolom :attribute sudah terpakai.',
    'email'                => 'Kolom :attribute harus diisi dengan alamat email yang valid.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'Kolom :attribute harus berupa file.',
    'filled'               => 'Kolom :attribute harus diisi (nilai).',
    'image'                => 'Kolom :attribute harus diisi gambar.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'Kolom :attribute harus lebih kecil dari :max.',
        'file'    => 'Ukuran file pada kolom :attribute harus lebih kecil dari :max kilobytes.',
        'string'  => 'Jumlah karakter pada kolom :attribute harus lebih kecil dari :max karakter.',
        'array'   => 'Jumlah item array pada kolom :attribute harus lebih kecil dari :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'Kolom :attribute harus lebih besar dari :min.',
        'file'    => 'Ukuran file pada kolom :attribute harus lebih besar dari :min kilobytes.',
        'string'  => 'Jumlah karakter pada kolom :attribute harus lebih besar dari :min characters.',
        'array'   => 'Jumlah item array pada kolom :attribute harus lebih besar dari :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'Kolom :attribute harus diisi.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

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
