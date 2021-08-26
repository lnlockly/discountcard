<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthenticatedSessionController extends Controller {
	public function create() {
		return Inertia::render('User/Login');
	}
	/**
	 * Handle an incoming authentication request.
	 *
	 * @param  \App\Http\Requests\Auth\LoginRequest  $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request) {
		if (Auth::guard('user')
			->attempt($request->only(['email', 'password']))) {

			return redirect()
				->route('user.index');
		}

		return redirect()
			->back()
			->withErrors(["Login error" => "Invalid Credentials"]);
	}

	/**
	 * Destroy an authenticated session.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy(Request $request) {
		Auth::guard('user')->logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect('/login');
	}
}
