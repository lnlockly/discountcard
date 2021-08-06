<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Cookie;
use Inertia\Inertia;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller {
	public function create($card_id) {
		return Inertia::render('User/Login', [
			'card_id' = $card_id
		]);
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
			'password' => ['required', 'confirmed', Rules\Password::defaults()],
		]);

		$card = Card::find($request->card_id);

		if ($card == null) {
			return redirect()
				->back()
				->withErrors(["Card error" => "This card not found"]);
		}

		$user = User::create([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'card_id' => null,
		]);

		event(new Registered($user));

		Auth::guard('user')
			->attempt($request->only(['email', 'password']));

		Cookie::forever('user_email', $request->email);
		Cookie::forever('user_password', $request->password);

		Cookie::make('card_id', $request->card_id, 43200);	

		return redirect()->route('client.dashboard');
	}
}
