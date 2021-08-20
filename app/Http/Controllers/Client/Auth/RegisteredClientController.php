<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredClientController extends Controller {
	/**
	 * Display the registration view.
	 *
	 * @return \Illuminate\View\View
	 */
	public function create() {
		return view('client.auth.register');
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
			'company' => 'required|string|max:255',
			'city' => 'required|string|max:255',
			'address' => 'required|string|max:255',
			'postcode' => 'required|numeric',
			'email' => 'required|string|email|max:255|unique:clients',
			'password' => ['required', 'confirmed', Rules\Password::defaults()],
		]);

		$client = new Client;

		$client->fill([
			'first_name' => $request->first_name,
			'last_name' => $request->last_name,
			'company' => $request->company,
			'city' => $request->city,
			'address' => $request->address,
			'postcode' => $request->postcode,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		if ($request->website != null) {
			$request->validate(['website' => 'url']);
			$client->fill(['website' => $request->website]);
		}

		if ($request->phone != null) {
			$request->validate(['phone' => 'string|max:20']);
			$client->fill(['phone' => $request->phone]);
		}

		$client->save();

		event(new Registered($client));

		Auth::guard('client')
			->attempt($request->only(['email', 'password']));

		return redirect()->route('client.dashboard');
	}
}
