<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller {

	/**
	 * Display the login view.
	 *
	 * @return \Illuminate\View\View
	 */
	public function create() {
		return view('admin.auth.login');
	}

	/**
	 * Handle an incoming authentication request.
	 *
	 * @param  \App\Http\Requests\Auth\LoginRequest  $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request) {
		if (Auth::guard('admin')
			->attempt($request->only(['email', 'password']))) {
			return redirect()
				->route('admin.dashboard');
		}

		return redirect()
			->back()
			->withErrors(["Login error" => "Invalid Credentials"]);
	}

}
