<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StatisticUsersController extends Controller {
	public function index() {
		$client = Auth::user();
		$users = $client->card->users;
		return view('client.statistic.users', [
			'users' => $users,
		]);
	}

	public function show($id) {
		$user = User::find($id);
		return view('client.statistic.stamps', [
			'user' => $user,
		]);
	}
}
