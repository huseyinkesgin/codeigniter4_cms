<?php

return [
    'view' => [
        'title' => 'Register',
        'first_name' => 'First Name',
        'sur_name' => 'Last Name',
        'email' => 'Email',
        'password' => 'Password',
        'password2' => 'Password Confirmation',
        'agree' => 'I agree with the terms and conditions',
        'button' => 'Register',
        'bottom_text' => 'Already a user? Sign in',
        'sign_in' =>'Sign In'
    ],
    'controller' => [
        'validation' => [
            'first_name' => [
                'required' => 'Name is a required field. Please try again.',
                'string' => 'Name can only contain alphabetic characters. Please try again.',
                'min_length' => 'The name must contain at least 3 characters.'
            ],
            'sur_name' => [
                'required' => 'Last name field is a required field. Please try again.',
                'string' => 'Last name field can only contain alphabetic characters. Please try again.',
                'min_length' => 'The surname must contain at least 2 characters.'
            ],
            'email' => [
                'required' => 'Email field is a required field. Please try again.',
                'valid_email' => 'Your e-mail address is not legal. Please try again.'
            ],
            'password' => [
                'required' => 'The password field is a required field. Please try again.',
                'min_length' => 'Password must be at least 3 characters. Please try again.'
            ],
            'password2' => [
                'required' => 'Password field is a required field. Please try again.',
                'min_length' => 'Password must be at least 3 characters. Please try again.',
                'matches' => 'Passwords you entered do not match. Please try again.'
            ]
        ],
        'success_register' => 'Registration has been completed successfully. The verification mail has been sent to you.',
        'error_email' => 'Email gönderimi esnasında bir hata meydana geldi.'
    ]
];