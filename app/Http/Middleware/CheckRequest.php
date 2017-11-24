<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckRequest
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
//        if($request->user() === null) {
//            return redirect('/register');
//        }
//        $actions = $request->route()->getAction();
//        $roles = isset($actions['roles']) ? $actions['roles'] : null;
//
//            if ($request->user()->hasAnyRole($roles) || !$roles) {
//                return $next($request);
//            }
//            return redirect('/deny');


        if (Auth::check() && Auth::user()->admin === 1) {
            return $next($request);
        }

        return redirect('/register');

    }


}
