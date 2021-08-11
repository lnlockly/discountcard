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
<<<<<<< HEAD
		if ($request->card_id != null) {
			if (Card::find($request->card_id)) {
				return redirect(route('user.cardadd', [$request->card_id]));
			}
=======
		if ($request->route('card_id') != null) {
			if (Card::find($request->route('card_id')) != null) {
				Cookie::forever('card_id', $request->card_id);
			}
		}
		if ($request->hasCookie('card_id')) {
			return redirect(route('user.index'));
>>>>>>> 3cf8dfcc976b3c553ef8f677ba320ad8edd88355
		}

		if ($request->hasCookie('user_email') && !Auth::check()) {
			Auth::guard('user')
				->attempt($request->cookie(['user_email', 'user_password']));
		}
		return $next($request);
	}
}
