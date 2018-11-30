<?php

namespace App\Http\Middleware;

use Closure;

class storeRouteMiddleware
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
        if((empty($request->username)) || (empty($request->namaLengkap))){
            $validate = $request->validate([
                'username' => 'required',
                'namaLengkap' => 'required',
            ]);
        }else{
            return $next($request);
        }
        return $validate;
    }
}
