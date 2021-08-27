<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\User;
use Cookie;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

class RegisteredUserController extends Controller {
	public function create() {
		return Inertia::render('User/Register');
	}
	/**
	 * Handle an incoming registration request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\RedirectResponse
	 *
	 * @throws \Illuminate\Validation\ValidationException
	 */
	public function store(Request $request) {
		$request->validate([
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => ['required', Rules\Password::defaults()],
		]);

		$card = Card::find($request->cookie('card_id'));

		$user = User::create([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'webpush' => false,
			'card_id' => $card->id,
		]);

		event(new Registered($user));

		Auth::guard('user')
			->attempt($request->only(['email', 'password']));

		Cookie::queue(Cookie::forever('user_email', $request->email));
		Cookie::queue(Cookie::forever('user_password', $request->password));

		return redirect()->route('user.index');
	}
}
