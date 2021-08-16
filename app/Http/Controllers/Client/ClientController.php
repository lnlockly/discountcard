<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller {
	public function index() {
		$client = Auth::user();
		$card = $client->card;
		$users = $card->users;
		$users_count = $users->count();
		$stamps_sum = $card->stamps()->count();
		$gifts_sum = $card->gifts()->count();
		$gifts_amount = $card->gift_price * $gifts_sum;

		return view('client.dashboard', [
			'client' => $client,
			'card_id' => $card->id,
			'users_count' => $users_count,
			'stamps_sum' => $stamps_sum,
			'gifts_sum' => $gifts_sum,
			'gifts_amount' => $gifts_amount,
		]);
	}

	public function edit()
	{
		return view('client.settings');
	}

	public function update(Request $request)
	{	
		$request->validate([
			'first_name' => 'string|max:255',
			'last_name' => 'string|max:255',
			'company' => 'string|max:255',
			'city' => 'string|max:255',
			'website' => 'url',
			'phone' => 'string|max:20',
			'address' => 'string|max:255',
			'postcode' => 'numeric',
			'email' => 'string|email|max:255|unique:clients',
			'password' => ['confirmed', Rules\Password::defaults()],
		]);
		$client = Auth::user();
		$client->update($request->except('password'));
		if ($request->password != null) {
			$client->update(['password' => Hash::make($request->password)]);
			return redirect('client.logout');
		}
		return redirect(route('client.dashboard'));
	}
}
