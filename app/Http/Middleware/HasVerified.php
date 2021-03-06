<?php

namespace App\Http\Middleware;

use Closure;

class HasVerified
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
			{
				if (Auth::user()->role == 1) {
					return $next($request);
				}
				if ($request->ajax()) {
					return response()->json(['message' => 'unauthorised.'], 401);
				}
				return redirect('public');
			}
    }
}
