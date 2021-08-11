<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
use App\Models\Card;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserCard
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
		if ($request->card_id != null) {
			if (Card::find($request->card_id)) {
				return redirect(route('user.cardadd', [$request->card_id]));
			}
		}

		if ($request->hasCookie('user_email') && !Auth::check()) {
			Auth::guard('user')
				->attempt($request->cookie(['user_email', 'user_password']));
		}
		return $next($request);
	}
}
