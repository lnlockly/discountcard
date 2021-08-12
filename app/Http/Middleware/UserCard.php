<?php

namespace App\Http\Middleware;

use App\Models\Card;
use Closure;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCard {
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next) {
		if ($request->card_id != null) {
			if (Card::find($request->card_id)) {
				return redirect(route('user.card_add', [$request->card_id]));
			}
		}

		if ($request->hasCookie('user_email') && !Auth::check()) {
			Auth::guard('user')
				->attempt(['email' => $request->cookie('user_email'), 'password' => $request->cookie('user_password')]);
		}

		if (!$request->hasCookie('card_id') && !$request->hasCookie('user_email') && $request->url() != route('user.card_region')) {
			return redirect(route('user.card_region'));
		}

		return $next($request);
	}
}
