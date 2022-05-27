<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class middleware1
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
    //    echo "text from middleware";
        if($request->age && $request->age<18)
        {
            return redirect('middlewarenoaccess');
        }
        return $next($request);
    }
}
