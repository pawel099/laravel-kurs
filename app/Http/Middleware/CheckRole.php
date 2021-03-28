<?php

namespace App\Http\Middleware;

use Closure;
 
class CheckRole
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
		echo "msjsjjsjsjjjs";
		
        return $next($request);
    }
}
