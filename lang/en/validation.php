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
    'accepted' => 'Atributul :attribute trebuie acceptat.',
    'accepted_if' => 'Atributul :attribute trebuie acceptat când  :other este :value.',
    'active_url' => 'Atributul :attribute nu este o adresă URL validă.',
    'after' => 'Atributul :attribute trebuie să fie o dată după :date.',
    'after_or_equal' => 'Atributul :attribute trebuie să fie o dată după sau egală cu :date.',
    'alpha' => ' Atributul :attribute trebuie să conțină numai litere.',
    'alpha_dash' => 'Atributul :attribute trebuie să conțină numai litere, cifre, liniuțe și litere de subliniere.',
    'alpha_num' => 'Atributul :attribute trebuie să conțină numai litere și cifre.',
    'array' => 'Atributul :attribute trebuie să fie o matrice.',
    'before' => 'Atributul :attribute trebuie să fie o dată înainte de :date.',
    'before_or_equal' => 'Atributul :attribute trebuie să fie o dată anterioară sau egală cu :date.',
    'between' => [
        'numeric' => 'Atributul :attribute trebuie să fie între :min și :max.',
        'file' => ' Atributul :attribute trebuie să fie între :min și :max kilobytes.',
        'string' => 'Atributul :attribute trebuie să aibă între :min and :max caractere.',
        'array' => 'Atributul :attribute trebuie să aibă între :min and :max elemente.',
    ],
    'boolean' => 'Câmpul :attribute trebuie să fie adevărat sau fals.',
    'confirmed' => 'Confirmarea :attribute nu se potrivește.',
    'current_password' => 'Parola este incorectă.',
    'date' => 'Atributul :attribute nu este o dată validă.',
    'date_equals' => 'Atributul :attribute trebuie să fie o dată egală cu :date.',
    'date_format' => 'Atributul :attribute nu se potrivește cu formatul :format.',
    'declined' => 'Atributul :attribute trebuie refuzat.',
    'declined_if' => 'Atributul :attribute trebuie refuzat când :other este :value.',
    'different' => 'Atributul :attribute și :other trebuie să fie diferite.',
    'digits' => 'Atributul :attribute trebuie să fie :digits. cifre',
    'digits_between' => 'Atributul :attribute trebuie să fie între :min și :max cifre.',
    'dimensions' => 'Atributul :attribute nu are dimensiuni valide.',
    'distinct' => 'Câmpul :attribute are o valoare duplicată.',
    'email' => 'Atributul :attribute trebuie să fie o adresă de e-mail validă.',
    'ends_with' => 'Atributul :attribute trebuie să se încheie cu una dintre următoarele: :values.',
    'enum' => 'Atributul :attribute selectat nu este valid.',
    'exists' => 'Atributul :attribute selectat nu este valid.',
    'file' => 'Atributul :attribute trebuie să fie un fișier.',
    'filled' => 'Câmpul :attribute trebuie completat.',
    'gt' => [
        'numeric' => 'Atributul :attribute trebuie să fie mai mare decât :value.',
        'file' => 'Atributul :attribute rebuie să fie mai mare decât :value kilobytes.',
        'string' => 'Atributul :attribute trebuie să fie mai mare decât :value caractere.',
        'array' => 'Atributul :attribute trebuie să aibă mai multe de :value elemente.',
    ],
    'gte' => [
        'numeric' => 'Atributul:attribute trebuie să fie mai mare sau egal cu :value.',
        'file' => 'Atributul :attribute trebuie să fie mai mare sau egal cu :value kilobytes.',
        'string' => 'Atributul:attribute trebuie să fie mai mare sau egal cu :value caractere.',
        'array' => 'Atributul :attribute trebuie să aibă :value sau mai multe elemente.',
    ],
    'image' => 'Atributul :attribute trebuie să fie o imagine.',
    'in' => 'Atributul :attribute selectat nu este valid.',
    'in_array' => 'Câmpul :attribute nu există în :other.',
    'integer' => 'Atributul :attribute trebuie să fie un număr întreg.',
    'ip' => 'Atributul :attribute trebuie să fie o adresă IP validă.',
    'ipv4' => 'Atributul :attribute trebuie să fie o adresă IPv4 validă.',
    'ipv6' => 'Atributul :attribute trebuie să fie o adresă IPv6 validă.',
    'mac_address' => 'Atributul :attribute trebuie să fie o adresă MAC validă.',
    'json' => 'Atributul :attribute trebuie să fie un șir JSON valid.',
    'lt' => [
        'numeric' => 'Atributul :attribute trebuie să fie mai mic decât :value.',
        'file' => 'Atributul :attribute trebuie să fie mai mic de :value kilobytes.',
        'string' => 'Atributul :attribute trebuie să aibă mai puțin de :value caractere.',
        'array' => 'Atributul :attribute trebuie să aibă mai puțin de :value elemente.',
    ],
    'lte' => [
        'numeric' => 'Atributul :attribute trebuie să fie mai mic sau egal cu :value.',
        'file' => 'Atributul :attribute trebuie să fie mai mic sau egal cu :value kilobytes.',
        'string' => 'Atributul :attribute trebuie să fie mai mic sau egal cu :value caractere.',
        'array' => 'Atributul :attributenu trebuie să aibă mai mult de :value elemente.',
    ],
    'max' => [
        'numeric' => 'Atributul :attribute nu trebuie să fie mai mare decât :max.',
        'file' => 'Atributul :attribute nu trebuie să fie mai mare de :max kilobytes.',
        'string' => 'Atributul :attribute nu trebuie să fie mai mare decât :max caractere.',
        'array' => 'Atributul :attribute nu trebuie să aibă mai mult de :max elemente.',
    ],
    'mimes' => 'Atributul :attribute trebuie să fie un fișier de tip: :values.',
    'mimetypes' => 'Atributul :attribute trebuie să fie un fișier de tip: :values.',
    'min' => [
        'numeric' => 'Atributul :attribute trebuie să fie cel puțin :min.',
        'file' => 'Atributul :attribute trebuie să fie de cel puțin :min kilobytes.',
        'string' => 'Atributul :attribute trebuie să aibă cel puțin :min caractere.',
        'array' => 'Atributul :attribute trebuie să aibă cel puțin :min elemente.',
    ],
    'multiple_of' => 'Atributul :attribute trebuie sa fie multiplu de :value.',
    'not_in' => 'Atributul selectat :attribute nu este valid.',
    'not_regex' => 'Formatul atributului :attribute nu este valid.',
    'numeric' => 'Atributul :attribute trebuie sa fie un numar.',
    'password' => 'Parola este incorecta.',
    'present' => 'Campul :attribute trebuie sa fie prezent.',
    'prohibited' => 'Campul :attribute este interzis.',
    'prohibited_if' => 'Campul :attribute este interzis cand :other este :value.',
    'prohibited_unless' => 'Campul :attribute este interzis daca :other este in :values.',
    'prohibits' => 'Campul :attribute interzice :other de a fi prezent.',
    'regex' => 'Formatul :attribute nu este valid.',
    'required' => 'Campul :attribute este obligatoriu.',
    'required_if' => 'Campul :attribute este obligatoriu cand :other este :value.',
    'required_unless' => 'Campul :attribute este obligatoriu cu exceptia cazului in care :other se afla in :values.',
    'required_with' => 'Campul :attribute este obligatoriu cand :values este prezent.',
    'required_with_all' => 'Campul :attribute este obligatoriu cand :values sunt prezente.',
    'required_without' => 'Campul :attribute este obligatoriu cand :values nu este prezent.',
    'required_without_all' => 'Campul :attribute este obligatoriu cand niciuna dintre :values nu sunt prezente.',
    'same' => 'Atributul :attribute si :other trebuie sa se potriveasca.',
    'size' => [
        'numeric' => 'Atributul :attribute trebuie sa fie :size.',
        'file' => 'Atributul :attribute trebuie sa aiba :size kilobytes.',
        'string' => 'Atributul :attribute trebuie sa aiba :size caractere.',
        'array' => 'Atributul :attribute trebuie sa contina :size obiecte.',
    ],
    'starts_with' => 'Atributul :attribute trebuie sa inceapa cu una dintre urmatoarele: :values.',
    'string' => 'Atributul :attribute trebuie sa fie un sir.',
    'timezone' => 'Atributul :attribute trebuie sa aiba un fus orar valid.',
    'unique' => 'Atributul :attribute este deja folosit.',
    'uploaded' => 'Atributul :attribute nu s-a putut incarca.',
    'url' => 'Atributul :attribute trebuie sa fie o adresa URL valida.',
    'uuid' => 'Atributul :attribute trebuie sa fie un UUID valid.',
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
