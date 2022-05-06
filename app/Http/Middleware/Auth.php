<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()){
            $info ='vous devez être connectés';
           return back()->withErrors([
               'email'=>'vous devez être connectés',
           ]) ;
        }
        else if(auth()->check()){
                if(auth()->user()->is_admin)
                return response()->view('welcome');
                  if(auth()->user()->is_vendeur)
                return response()->view('dashbord'); 
            
        }
    
        return $next($request);
    }
}
