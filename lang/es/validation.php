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

    'accepted' => 'El :attribute debe ser aceptado.',
    'accepted_if' => 'El :attribute debe ser aceptado cuando :otro es :valor.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior a :fecha.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :fecha.',
    'alpha' => 'El :attribute solo debe contener letras.',
    'alpha_dash' => 'El :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo debe contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'ascii' => 'El :attribute solo debe contener símbolos y caracteres alfanuméricos de un solo byte.',
    'before' => 'El :attribute debe ser una fecha anterior a :fecha.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :fecha.',
    'between' => [
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'string' => 'El :attribute debe estar entre :min y :max caracteres.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La :confirmación del atributo no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :fecha.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'decimal' => 'El :attribute debe tener :decimales decimales.',
    'declined' => 'El :attribute debe ser rechazado.',
    'declined_if' => 'El :attribute debe rechazarse cuando :otro es :valor.',
    'different' => 'El :attribute y :otro deben ser diferentes.',
    'digits' => 'El :attribute debe ser :digits digits.',
    'digits_between' => 'El :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El :attribute no puede terminar con uno de los siguientes: :valores.',
    'doesnt_start_with' => 'El :attribute no puede comenzar con uno de los siguientes: :valores.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes: :valores.',
    'enum' => 'El :attribute seleccionado no es válido.',
    'exists' => 'El :attribute seleccionado no es válido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'array' => 'El :attribute debe tener más de :elementos de valor.',
        'file' => 'El :attribute debe ser mayor que :valor en kilobytes.',
        'numeric' => 'El :attribute debe ser mayor que :valor.',
        'string' => 'El :attribute debe ser mayor que :caracteres de valor.',
    ],
    'gte' => [
        'array' => 'El :attribute debe tener :elementos de valor o más.',
        'file' => 'El :attribute debe ser mayor o igual que :valor en kilobytes.',
        'numeric' => 'El :attribute debe ser mayor o igual que :valor.',
        'string' => 'El :attribute debe ser mayor o igual que :valor caracteres.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado no es válido.',
    'in_array' => 'El campo :attribute no existe en :otro.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El :attribute debe tener menos de :elementos de valor.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'numeric' => 'El :attribute debe ser menor que :valor.',
        'string' => 'El :attribute debe ser menor que :caracteres de valor.',
    ],
    'lte' => [
        'array' => 'El :attribute no debe tener más de :elementos de valor.',
        'archivo' => 'El :attribute debe ser menor o igual que :valor en kilobytes.',
        'numeric' => 'El :attribute debe ser menor o igual que :valor.',
        'string' => 'El :attribute debe ser menor o igual que :caracteres de valor.',
    ],
    'mac_address' => 'El :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El :attribute no debe tener más de :máx. elementos.',
        'file' => 'El :attribute no debe ser mayor que :max kilobytes.',
        'numeric' => 'El :attribute no debe ser mayor que :max.',
        'string' => 'El :attribute no debe ser mayor que :max caracteres.',
    ],
    'max_digits' => 'El :attribute no debe tener más de :máx dígitos.',
    'mimes' => 'El :attribute debe ser un archivo de tipo: :valores.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :valores.',
    'min' => [
        'array' => 'El :attribute debe tener al menos :min elementos.',
        'file' => 'El :attribute debe tener al menos :min kilobytes.',
        'numeric' => 'El :attribute debe ser al menos :min.',
        'string' => 'El :attribute debe tener al menos :min caracteres.',
    ],
    'min_digits' => 'El :attribute debe tener al menos :min dígitos.',
    'missing' => 'El campo :attribute debe faltar.',
    'missing_if' => 'El campo :attribute debe faltar cuando :otro es :valor.',
    'missing_unless' => 'El campo :attribute debe faltar a menos que :otro sea :valor.',
    'missing_with' => 'El campo :attribute debe faltar cuando :values está presente.',
    'missing_with_all' => 'El campo :attribute debe faltar cuando :valores están presentes.',
    'multiple_of' => 'El :attribute debe ser un múltiplo de :valor.',
    'not_in' => 'El :attribute seleccionado no es válido.',
    'not_regex' => 'El :formato del atributo no es válido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => [
        'letters' => 'El :attribute debe contener al menos una letra.',
        'mixed' => 'El :attribute debe contener al menos una letra mayúscula y una minúscula.',
        'numbers' => 'El :attribute debe contener al menos un número.',
        'symbols' => 'El :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El :attribute proporcionado ha aparecido en una fuga de datos. Elija un :attribute diferente.',
    ],
    'present' => 'El :campo de atributo debe estar presente.',
    'prohibited' => 'El campo :attribute está prohibido.',
    'prohibited_if' => 'El campo :attribute está prohibido cuando :otro es :valor.',
    'prohibited_unless' => 'El campo :attribute está prohibido a menos que :otro esté en :valores.',
    'prohibits' => 'El campo :attribute prohíbe que :other esté presente.',
    'regex' => 'El :formato de atributo no es válido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener entradas para: :valores.',
    'required_if' => 'El campo :attribute es obligatorio cuando :otro es :valor.',
    'required_if_accepted' => 'El campo :attribute es obligatorio cuando se acepta :otro.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :otro esté en :valores.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :valores están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de los :valores está presente.',
    'same' => 'El :attribute y :otro deben coincidir.',
    'size' => [
        'array' => 'El :attribute debe contener :elementos de tamaño.',
        'file' => 'El :attribute debe ser :tamaño en kilobytes.',
        'numeric' => 'El :attribute debe ser :tamaño.',
        'string' => 'El :attribute debe ser :caracteres de tamaño.',
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes: :valores.',
    'string' => 'El :attribute debe ser una cadena.',
    'timezone' => 'El :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya ha sido tomado.',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'uppercase' => 'El :attribute debe estar en mayúsculas.',
    'url' => 'El :attribute debe ser una URL válida.',
    'ulid' => 'El :attribute debe ser un ULID válido.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
    'attributes' => [],
];
