<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller {
	public function index() {
		$client = Auth::user();
		$card = $client->card;
		if ($card == null) {
			return view('client.dashboard');
		}
		$users = $card->users;
		$users_count = $users->count();
		$stamps_sum = $users->stamps->count();
		$gifts_sum = $users->sum('nof_gifts');

		return view('client.dashboard', [
			'client' => $client,
			'users_count' => $users_count,
			'stamps_sum' => $stamps_sum,
			'gifts_sum' => $gifts_sum,
		]);
	}
}
