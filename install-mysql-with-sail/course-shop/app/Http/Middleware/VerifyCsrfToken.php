<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Support\Facades\Log;
use Closure;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'payment/callback*',
    ];

    public function handle($request, Closure $next)
    {
        Log::info('🔥 CSRF Middleware 處理路徑：' . $request->path());
        return parent::handle($request, $next);
    }
}
