<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class professor
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
      if (Auth::user() &&  (Auth::user()->rank == 'professor' || Auth::user()->rank == 'admin')) {
             return $next($request);
      }
      return view('professorOnly');
    }
}
