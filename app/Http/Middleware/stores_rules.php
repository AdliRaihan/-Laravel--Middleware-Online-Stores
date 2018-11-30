<?php

namespace App\Http\Middleware;

use Closure;

class stores_rules
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
        /*
        echo " WLDJAIWDJLIAJWDLIJAWLFJAWIGJLAWG";
        $vel = $request->cookie('nama');
        echo $vel;
        return redirect('/');
       // return $next($request);
        */
    }
}
