<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Stamp;
use Illuminate\Support\Facades\Auth;

class StatisticUsersController extends Controller
{
	public function index()
	{
		$client = Auth::user();
		$card_id = $client->card->id;
		$stamps = Stamp::where('card_id', $card_id)->count();
		$users = $client->card->users;
		return view('client.statistic.users', [
			'users' => $users,
			'card_id' => $card_id
		]);
	}

	public function show($id)
	{
		$user = User::find($id);
		$card_id = Auth::user()->card->id;
		$stamps = Stamp::where([
			['card_id', $card_id],
			['user_id', $user->id],
		])->get();
		return view('client.statistic.stamps', [
			'user' => $user,
			'stamps' => $stamps,
		]);
	}
}
