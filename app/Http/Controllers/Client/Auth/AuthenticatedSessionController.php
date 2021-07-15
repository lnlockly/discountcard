<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller {
	/**
	 * Display the login view.
	 *
	 * @return \Illuminate\View\View
	 */
	public function create() {
		return view('client.auth.login');
	}

	/**
	 * Handle an incoming authentication request.
	 *
	 * @param  \App\Http\Requests\Auth\LoginRequest  $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request) {
		if (Auth::guard('client')
			->attempt($request->only(['email', 'password']))) {
			return redirect()
				->route('client.dashboard');
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
		Auth::guard('client')->logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect('/');
	}
}
