<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware{
    protected function redirectTo(Request $request): ?string{
        if ($request->is('api/*') || $request->is('api'))
            return route('api.unauthenticated');
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
