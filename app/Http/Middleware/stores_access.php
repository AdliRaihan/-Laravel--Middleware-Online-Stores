<?php

namespace App\Http\Middleware;

use Closure;


class stores_access
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
        $cNames = $request->cookie('nama');
        if(empty($cNames)){
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
