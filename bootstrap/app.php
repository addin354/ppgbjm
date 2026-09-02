<?php

if (! file_exists(dirname(__DIR__) . '/.env')) {
    if (file_exists(dirname(__DIR__) . '/.env.hostinger')) {
        @copy(dirname(__DIR__) . '/.env.hostinger', dirname(__DIR__) . '/.env');
    } elseif (file_exists(dirname(__DIR__) . '/.env.example')) {
        @copy(dirname(__DIR__) . '/.env.example', dirname(__DIR__) . '/.env');
    }
}

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
