<?php

$routes->group('auth', function ($routes) {
    $routes->match(['get', 'post'], 'register', 'Auth\Register::index', ['as' => 'auth_register']);
    $routes->match(['get', 'post'], 'password-forgot', 'Auth\Forgot::index', ['as' => 'auth_password_forgot']);
    $routes->group('verification', function ($routes) {
        $routes->get('account/(:segment)', 'Auth\Verification::account/$1', ['as' => 'auth_account_verify']);
        $routes->get('password-forgot/(:segment)', 'Auth\Verification::forgot/$1', ['as' => 'auth_forgot_verify']);
    });
});





