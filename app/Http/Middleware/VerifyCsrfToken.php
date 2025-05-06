<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'delhivery-webhook',
        'payment-success',
        'payment-failure',
        'payment-webhook',
        'payment-success-by-user',
        'payment-failed',
        'order-tracking',
        'delivery-webhook',
    ];
}
