<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserCard {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next) {
		if ($request->hasCookie('card_id')) {
			return redirect(route('user.card.show', [$request->cookie('card_id')]));
		}
		if (!$request->hasCookie('user_email')) {
			return redirect(route('user.register', [$request->route('card_id')]));
		}
		if (!Auth::check()) {
			Auth::guard('user')
				->attempt($request->cookie(['user_email', 'user_password']));
		}
		return $next($request);
	}
}
