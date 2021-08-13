<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CardUser;
use App\Models\Card;
use App\Models\Stamp;
use Cookie;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
	public function index()
	{

		$card_id = Cookie::get('card_id');

		$card = Card::find($card_id);
		if (Cookie::get('user_email') == null) {
			return Inertia::render('User/Card', [
				'card' => $card,
				'register' => true,
			]);
		}
		$card = Card::find($card_id);

		return Inertia::render('User/Card', [
			'card' => $card,
		]);
	}

	public function card_region()
	{
		if (Auth::check() && Auth::user()->region != null) {
			$region = Auth::user()->region;
			$cards = Card::where('region', $region)->get('id', 'logo');
		} else {
			$cards = Card::all();
		}

		return Inertia::render('User/CardRegion', [
			'cards' => $cards,
		]);
	}

	public function card_ads()
	{
		return abort(404);
	}

	public function stamp()
	{
		return Inertia::render('User/Stamp');
	}

	public function add_stamp(Request $request)
	{
		$user = Auth::user();
		$card_id = Cookie::get('card_id');
		$client = Card::find($card_id)->client;
		$managers = $client->managers;
		foreach ($managers as $manager) {
			if ($manager->key == $request->key) {
				Stamp::create([
					'user_id' => $user->id,
					'manager_id' => $manager->id,
					'card_id' => $card_id,
				]);
				if ($user->stamps->count() == 1) {
					CardUser::create([
						'user_id' => $user->id,
						'card_id' => $card_id,
					]);
					$user->update(['region' => $client->region]);
				}
				return redirect(route('user.index'));
				break;
			}
		};
		return redirect(route('user.stamp'));
	}

	public function card_info()
	{
		$card_id = Cookie::get('card_id');
		$card = Card::find($card_id);

		return Inertia::render('User/CardInfo', [
			'card' => $card,
			'client' => $card->client,
		]);
	}

	public function profile()
	{
		if (!Auth::check()) {
			return redirect(route('user.login'));
		}
		$user = Auth::user();
		$cards = $user->cards;

		$created_at = Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('Y-m-d');

		return Inertia::render('User/Profile', [
			'user' => $user,
			'cards' => $cards,
			'created_at' => $created_at
		]);
	}

	public function about($about)
	{
		return Inertia::render('User/About');
	}

	public function add_usercard($id)
	{
		Cookie::queue('card_id', $id, 200000);
		return redirect(route('user.index'));
	}
}
