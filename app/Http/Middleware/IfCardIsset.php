<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class IfCardIsset
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
        if (Auth::user()->card == null && $request->url() != route('client.card.create') && $request->url() != route('client.card.store')) {
            return redirect(route('client.card.create'));
        }
        if ($request->url() == 'client') {
            return redirect(route('client.login'));
        }
        return $next($request);
    }
}
