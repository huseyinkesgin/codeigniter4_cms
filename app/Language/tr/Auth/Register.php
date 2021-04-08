<?php

return [
    'view' => [
        'title' => 'Kayıt Ol',
        'first_name' => 'Adınız',
        'sur_name' => 'Soyadınız',
        'email' => 'Eposta Adresiniz',
        'password' => 'Şifre',
        'password2' => 'Şifre Tekrar',
        'agree' => 'Şartları ve Koşulları kabul ediyorum',
        'button' => 'Kayıt Ol',
        'bottom_text' => 'Kayıtlı Kullanıcı mısın? ',
        'sign_in' =>'Giriş Yap'
    ],
    'controller' => [
        'validation' => [
            'first_name' => [
                'required' => 'İsim alanı zorunlu bir alandır. Lütfen tekrar deneyin.',
                'string' => 'İsim alanı sadece alfabetik karakterlerden oluşabilir. Lütfen tekrar deneyin.',
                'min_length' => 'İsim en az 3 karakterden oluşmalıdır.'
            ],
            'sur_name' => [
                'required' => 'Soyisim alanı zorunlu bir alandır. Lütfen tekrar deneyin.',
                'string' => 'Soyisim alanı sadece alfabetik karakterlerden oluşabilir. Lütfen tekrar deneyin.',
                'min_length' => 'Soyisim en az 2 karakterden oluşmalıdır.'
            ],
            'email' => [
                'required' => 'Eposta alanı zorunlu bir alandır. Lütfen tekrar deneyin.',
                'valid_email' => 'Eposta adresiniz kurallara uygun değil. Lütfen tekrar deneyin.'
            ],
            'password' => [
                'required' => 'Şifre alanı zorunlu bir alandır. Lütfen tekrar deneyin.',
                'min_length' => 'Şifre en az 3 karakterden oluşmalıdır. Lütfen tekrar deneyin.'
            ],
            'password2' => [
                'required' => 'Şifre alanı zorunlu bir alandır. Lütfen tekrar deneyin.',
                'min_length' => 'Şifre en az 3 karakterden oluşmalıdır. Lütfen tekrar deneyin.',
                'matches' => 'Girmiş olduğunuz şifreler eşleşmiyor. Lütfen tekrar deneyin.'
            ]
        ],
        'success_register' => 'Kayıt işlemi başarılı bir şekilde tamamlandı. Doğrulama maili tarafınıza gönderildi.',
        'error_email' => 'Email gönderimi esnasında bir hata meydana geldi.'
    ],
];