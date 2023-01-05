<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // userın type eşit deilse admine return dashboard
        if (auth()->user()->type !== 'admin') {
            return redirect()->route('/');
        }
        return $next($request);
    }
}
