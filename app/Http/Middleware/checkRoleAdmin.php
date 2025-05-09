<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class checkRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request  $request,$next)
    {
        if (!Auth::check()) {
            return redirect('/'); 
        }else{
            if(Auth::user()->role_id!==1){
                if(Auth::user()->role_id==3){
                    return redirect('/'); 
                }else if(Auth::user()->role_id==2){
                    return redirect('/coach'); 
                }else{
                    return redirect('/'); 
                }
            }
            return $next($request); 
        }
    }
}
