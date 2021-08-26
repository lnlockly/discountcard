<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

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

	public function edit() {
		return view('client.settings');
	}

	public function update(Request $request) {
		$request->validate([
			'first_name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
			'company' => 'required|string|max:255',
			'city' => 'required|string|max:255',
			'address' => 'required|string|max:255',
			'postcode' => 'required|numeric',
			'email' => 'string|email|max:255',
		]);
		$client = Auth::user();
		$client->update($request->except(['password', 'email', 'phone', 'website']));
		if ($request->website != null) {
			$request->validate(['website' => 'url']);
			$client->update(['website' => $request->website]);
		}
		if ($request->phone != null) {
			$request->validate(['phone' => 'string|max:20']);
			$client->update(['phone' => $request->phone]);
		}
		if ($request->email != $client->email) {
			$request->validate(['email' => 'unique:clients']);
			$client->update($request->email);
		}
		if ($request->password != null) {
			$request->validate(['password' => ['confirmed', Rules\Password::defaults()]]);
			$client->update(['password' => Hash::make($request->password)]);
			return redirect(route('client.logout'));
		}
		return redirect(route('client.dashboard'));
	}

	public function destroy() {
		$client = auth()->user();

		$path_logo = $client->card->logo;

		Storage::delete('image/card/' . $path_logo);

		$client->delete();

		return redirect(route('client.logout'));
	}
}
