<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isOp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->rank < 2) {
            abort(403, 'Acesso não autorizado.');
        }

        return $next($request);
    }
}
