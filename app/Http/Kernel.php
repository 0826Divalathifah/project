<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Middleware global
    ];

    /**
     * The middleware groups applied to your application.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Middleware grup web
        ],
        'api' => [
            // Middleware grup api
        ],
    ];

    /**
     * The route middleware assigned to your application.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'isAdmin' => \App\Http\Middleware\IsAdmin::class,  // Menambahkan middleware isAdmin
        'role' => \App\Http\Middleware\IsAdminRole::class,
        // Middleware lain...
    ];
}
