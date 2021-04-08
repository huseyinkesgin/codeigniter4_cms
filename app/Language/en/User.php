<?php
return [
    'model' => [
        'validation' => [
            'group_id'      => [
                'required'  => 'Grup Id zorunlu bir alandır. Lütfen tekrar deneyin',
                'numeric'   => 'Grup Id sadece rakamlardan oluşabilir'
            ],
            'first_name'       => [
                'required'     => 'İsim zorunlu bir alandır. Lütfen tekrar deneyin',
                'string'       => 'İsim sadece alfabetik karakterlerden oluşabilir.',
                'min_length'   => 'İsim en az 3 karakterden oluşmak zorundadır',
            ],
            'sur_name'       => [
                'required'     => 'Soyisim zorunlu bir alandır. Lütfen tekrar deneyin',
                'string'       => 'Soyisim sadece alfabetik karakterlerden oluşabilir.',
                'min_length'   => 'Soyisim en az 2 karakterden oluşmak zorundadır',
            ],

            'email' => [
                'required' => 'Eposta alanı zorunlu alandır, boş bırakılamaz',
                'valid_email' => 'Lütgen geçerli bir eposta adresi giriniz',
                'is_unique' => 'Eposta adresi başka bir kullanıcı tarafından kullanılıyor'
            ],
            'password' => [
                'required'=> 'şifre boş bırakılamaz'
            ],
            'verifiy_key' => [
                'required'=> 'Doğrulama anahtarı boş bırakılamaz',
                'alpha'=> 'Doğrulama amahtarı sadece alfabatik karakterlerden oluşabilir'
            ],
            'verifiy_code' => [
                'numeric'=> 'Doğrulama kodu sadece rakamlardan oluşabilir',
                'min_length' => 'doğrulama kodu en az 4 karakter olmalıdır'
            ],
            'status' => [
                'required' => 'Kullanıcı durumu zorunlu bir alandır'
            ]
        ]
    ]

];