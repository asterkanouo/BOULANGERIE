<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Other
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
       return redirect('connexion')->withErrors([
        'compte'=>'vous devez être connectés',
    ]) ;
    
    
    // dump('other middlleware');
    // die;
        return $next($request);
    }
}
