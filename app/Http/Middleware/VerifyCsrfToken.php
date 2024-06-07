<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'http://127.0.0.1:8000/buy-credits',
        'http://localhost:8000/buy-credits/webhook',
        'http://localhost:8000/buy-credits',
        'localhost:4242/webhook',
        'http://127.0.0.1:8000/buy-credits/webhook',
        'stripe/*',
        'http://example.com/foo/bar',
        'http://example.com/foo/*',

    ];
}
