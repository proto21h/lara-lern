<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckAge
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
        $d = Carbon::parse($request->user_age)->diff(Carbon::now())->y;
        if ($d < 18) {
            //return redirect('/');
            return view('accessDenided', $d);
        }
 
        return $next($request);
    }
}
