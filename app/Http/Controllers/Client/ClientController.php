<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller {
	public function index() {
		/*QrCode::generate('Make me into a QrCode!', '../public/qrcodes/qrcode.svg');*/
		$client = Auth::user();
		$card = $client->card;
		if ($card == null) {
			return view('client.dashboard');
		}
		$users = $card->users;
		$users_count = $users->count();
		$stamps_sum = $card->stamps()->count();
		$gifts_sum = $users->sum('nof_gifts');
		$gifts_amount = $card->gift_price * $gifts_sum;

		return view('client.dashboard', [
			'client' => $client,
			'users_count' => $users_count,
			'stamps_sum' => $stamps_sum,
			'gifts_sum' => $gifts_sum,
			'gifts_amount' => $gifts_amount,
		]);
	}
}
