<?php

namespace App\Http\Middleware;

use Closure;
use SSO\SSO;

class TestMiddleware
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
        if (session('npm')) {
          return $next($request);
        }

        return redirect('/');
    }
}
