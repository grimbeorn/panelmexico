<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),
    'port' => env('MAIL_PORT', 2525),
    'from' => [
        'address' => 'contacto@panelmexico.com',
        'name' => 'Panelmexico',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => 'contacto@panelmexico.com',
    'password' => env('MAIL_PASSWORD', ''),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
];
