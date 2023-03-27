<?php

namespace App\Http\Middleware;

use Closure;
// use Auth;
use Illuminate\Support\Facades\Auth;
class programare 
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        if (url('/programare/{id}') && !Auth::user()) {
            return redirect('/medici');
        }
        return $next($request);
       
    }
}
