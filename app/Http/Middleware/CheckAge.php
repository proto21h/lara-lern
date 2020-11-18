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
        // if ($request->user_age == '2020-11-01') {
        //     return redirect('/');
        // }
        $d = Carbon::createFromFormat('d-m-Y', $request->user_age);
        dd($d);
        return $next($request);
    }
}
