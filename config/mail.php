<?php

return [
    'driver' => 'smtp',
    'host' => 'smtp.mailgun.org',
    'port' => 587,
    'from' => [
        'address' => 'contacto@panelmexico.com',
        'name' => 'Panelmexico',
    ],
    'encryption' => 'tls',
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
