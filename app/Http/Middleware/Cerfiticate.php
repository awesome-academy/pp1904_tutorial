<?php

namespace App\Http\Middleware;

use Closure;

class Cerfiticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->cer != 'ok') {
            return redirect('/');
        }

        return $next($request);
    }
}
