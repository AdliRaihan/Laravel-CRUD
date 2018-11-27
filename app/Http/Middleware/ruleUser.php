<?php

namespace App\Http\Middleware;

use Validator;
use Closure;
use Cookie;
class ruleUser
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
        
        $validator = $request->validate([
            'Nama' => 'required|min:4|max:25',
            'Nick' => 'required|min:4|max:12',
            'igNick' => 'required',
        ]);
        return $next($request);
    
    }
}
