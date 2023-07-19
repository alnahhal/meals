<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EditUser
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
        // dd($request->route());
        if (auth()->user()->id == $request->route('user')->id)
        return $next($request);
        return abort(403);
    }
}
