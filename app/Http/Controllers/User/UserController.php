<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardUser;
use App\Models\Stamp;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller {
	public function index() {

		$card_id = Cookie::get('card_id');

		$card = Card::find($card_id);
		if (Cookie::get('user_email') == null) {
			return Inertia::render('User/Card', [
				'card' => $card,
				'register' => true,
			]);
		}
		$card = Card::find($card_id);
		$user_stamps = Stamp::where([
			['user_id', Auth::user()->id],
			['card_id', $card_id],
		])->count();

		return Inertia::render('User/Card', [
			'card' => $card,
			'stamps' => $user_stamps,
		]);
	}

	public function card_region() {
		if (Auth::check() && Auth::user()->region != null) {
			$region = Auth::user()->region;
			$cards = Card::latest()->where('region', $region)->get(['id', 'logo']);
		} else {
			$cards = Card::latest()->get(['id', 'logo']);
		}

		return Inertia::render('User/CardRegion', [
			'cards' => $cards,
		]);
	}

	public function card_ads() {
		return abort(404);
	}

	public function stamp() {
		if (!Auth::check()) {
			return redirect(route('user.login'));
		}

		return Inertia::render('User/Stamp');
	}

	public function add_stamp(Request $request) {
		if (!Auth::check()) {
			return redirect(route('user.login'));
		}

		$user = Auth::user();
		$card_id = Cookie::get('card_id');
		$card = Card::find($card_id);
		$client = $card->client;
		$managers = $client->managers;
		$user_stamps = Stamp::where([
			['card_id', $card_id],
			['user_id', $user->id],
		])->count();
		foreach ($managers as $manager) {
			if ($manager->key == $request->key) {
				if ($user_stamps == 0) {
					CardUser::create([
						'user_id' => $user->id,
						'card_id' => $card_id,
					]);
					$user->update(['region' => $client->region]);
				}
				Stamp::create([
					'user_id' => $user->id,
					'manager_id' => $manager->id,
					'client_id' => $client->id,
					'card_id' => $card_id,
				]);

				return redirect(route('user.index'));
				break;
			}
		};
		return redirect(route('user.stamp'));
	}

	public function card_info() {
		$card_id = Cookie::get('card_id');
		$card = Card::find($card_id);

		return Inertia::render('User/CardInfo', [
			'card' => $card,
			'client' => $card->client,
		]);
	}

	public function profile() {
		if (!Auth::check()) {
			return redirect(route('user.login'));
		}
		$user = Auth::user();
		$cards = $user->cards;

		$created_at = Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('Y-m-d');

		return Inertia::render('User/Profile', [
			'user' => $user,
			'cards' => $cards,
			'created_at' => $created_at,
		]);
	}

	public function about($about) {
		return Inertia::render('User/About', [
			'show' => $about,
		]);
	}

	public function add_usercard($id) {
		Cookie::queue('card_id', $id, 200000);
		return redirect(route('user.index'));
	}
}
