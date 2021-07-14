<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StatisticGiftsController extends Controller {
	public function index() {
		$client = Auth::user();
		$gifts = $client->card->gifts;
		return view('client.statistic.card', [
			'gifts' => $gifts,
		]);
	}
}
