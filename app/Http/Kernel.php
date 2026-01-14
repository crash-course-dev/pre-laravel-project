<?php

namespace App\Http\Middleware;

protected $middlewareGroups = [
    'web' => [
        \App\Http\Middleware\SetLocale::class,
    ],
];

