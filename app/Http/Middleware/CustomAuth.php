<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      $path = $request->path();
      if(($path == "login" || $path=="register" ) && (Session::get('user') ))
      {
        return  redirect('/');
        //  return redirect()->route('studentlist' );
      }
      else if ($path !=="login" && Session::get('student') && $path !== "register" && !Session ::get('student'))
      {
        return redirect('/register');
      
      }

      
        return $next($request);
    }
}
