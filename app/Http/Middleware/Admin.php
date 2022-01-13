<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{

    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();

        if($user -> rol ==='admin'){
            return $next($request);
        }
        else
        {
            Auth::guard('web')->logout();

            $request->session() -> invalidate();

            $request->session() -> regenerateToken();

            return redirect('/');
        }

    }
}
