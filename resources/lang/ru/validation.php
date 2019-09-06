<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute должен быть принятым.',
    'active_url' => ':attribute недопустимый URL-адрес.',
    'after' => ':attribute должен быть дата после :date.',
    'after_or_equal' => ':attribute должен быть дата после или равен :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должен быть дата перед :date.',
    'before_or_equal' => ':attribute должен быть дата перед или равна :date.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайтов.',
        'string' => ':attribute должен быть между :min и :max символов.',
        'array' => ':attribute должен иметь между :min и :max элементов.',
    ],
    'boolean' => ':attribute поле должно быть true ли false.',
    'confirmed' => ':attribute подтверждение не подходит.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => ':attribute должен быть равен :date.',
    'date_format' => ':attribute не подходит под формат :format.',
    'different' => ':attribute и :other должны быть разными.',
    'digits' => ':attribute должен быть :digits цифрой.',
    'digits_between' => ':attribute должен быть между :min и :max.',
    'dimensions' => ':attribute имеет недопустимые размеры изображения.',
    'distinct' => ':attribute имеет дублированные значения.',
    'email' => 'Введите :attribute в правильном формате.',
    'exists' => 'Выбранный :attribute не существует в бд.',
    'file' => ':attribute должен быть файлом.',
    'filled' => ':attribute должно иметь значения.',
    'gt' => [
        'numeric' => ':attribute должен содержать не более чем :value символов.',
        'file' => ':attribute должен быть больше чем :value килобайт.',
            'string' => ':attribute должен быть больше чем :value символов.',
            'array' => ':attribute должен иметь больше чем :value элементов.',
    ],
    'gte' => [
    'numeric' => ':attribute должен быть больше или равен :value.',
        'file' => ':attribute должен быть больше или равен :value килобайт.',
        'string' => ':attribute должен быть больше или равен :value символов.',
        'array' => ':attribute должен иметь :value элементов или более.',
    ],
    'image' => ':attribute должен быть изображением.',
    'in' => 'Выбранный :attribute явялется недопустимым.',
    'in_array' => ':attribute это поле не существует в :other.',
    'integer' => ':attribute должно быть целым числом.',
    'ip' => ':attribute должен быть допустимый IP - адрес.',
    'ipv4' => ':attribute должен быть допустимый IPv4 - адрес.',
    'ipv6' => ':attribute должен быть допустимый IPv6 - адрес.',
    'json' => ':attribute должен быть допустимой JSON строкой.',
    'lt' => [
    'numeric' => ':attribute должен быть меньше чем :value.',
        'file' => ':attribute должен быть меньше чем :value килобайт.',
        'string' => ':attribute должен быть меньше чем :value символов.',
        'array' => ':attribute должен быть меньше чем :value элементов.',
    ],
    'lte' => [
    'numeric' => ':attribute должен быть меньше или равен :value.',
        'file' => ':attribute должен быть меньше или равен :value килобайт.',
        'string' => ':attribute должен быть меньше или равен :value символов.',
        'array' => ':attribute не должно быть больше чем :value элементов.',
    ],
    'max' => [
    'numeric' => ':attribute не может быть больше чем :max.',
        'file' => ':attribute не может быть больше чем :max килобайт.',
        'string' => ':attribute не может быть больеш чем :max символов.',
        'array' => ':attribute не может иметь больше чем :max элементов.',
    ],
    'mimes' => ':attribute должен быть файл type: :values.',
    'mimetypes' => ':attribute должен быть файл type: :values.',
    'min' => [
    'numeric' => ':attribute должен быть как минимум :min.',
        'file' => ':attribute должен быть как минимум :min килобайт.',
        'string' => ':attribute должен быть как минимум :min символов.',
        'array' => ':attribute должен быть как миниум :min элементов.',
    ],
    'not_in' => 'выбранный :attribute является недопустимым.',
    'not_regex' => ':attribute недопустимый формат.',
    'numeric' => ':attribute должен быть номером.',
    'present' => ':attribute это поле должно присутствовать.',
    'regex' => ':attribute недопустимый формат.',
    'required' => 'Поле :attribute является обязательным.',
    'required_if' => ':attribute поле требуется когда :other это :value.',
    'required_unless' => ':attribute поле требуется если :other есть в :values.',
    'required_with' => ':attribute поле требуется когда :values присутствует.',
    'required_with_all' => ':attribute поле требуется когда :values присутствует.',
    'required_without' => ':attribute поле требуется кгда :values не присутствует.',
    'required_without_all' => ':attribute поле требуется когда когда ничего из :values присутствует.',
    'same' => ':attribute и :other должны подходить.',
    'size' => [
    'numeric' => ':attribute должен быть :size.',
        'file' => ':attribute должен быть :size килобайт.',
        'string' => ':attribute должен быть :size символов.',
        'array' => ':attribute должен содержать :size элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих: :values',
    'string' => ':attribute должна быть строка.',
    'timezone' => ':attribute должна быть доступная зона.',
    'unique' => ':attribute которое вы ввели уже используется',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute формат недоступен.',
    'uuid' => ':attribute должен быть допустимым UUID.',

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
