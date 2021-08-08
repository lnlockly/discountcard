<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;
use Cookie;


class UserController extends Controller
{
	public function index()
	{
		if (Cookie::get('card_id') != null) {
			$card_id = Cookie::get('card_id');
		} else {
			return abort(404);
		}
		$user = Auth::user();
		$cards = Card::all();
		$current_card = $cards->find($card_id);
		$user_cards = $user->cards;

		return Inertia::render('User/Home', [
			'users_cards' => $user_cards,
			'cards' => $cards,
		]);
	}

	public function card_region()
	{
		$region = Auth::user()->region;
		$cards = Card::where('region', $region)->get();

		return Inertia::render('User/CardRegion', [
			'cards' => $cards
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
		// todo
		$code = $request->code;
	}

	public function card_info()
	{
		$card_id = Cookie::get('card_id');
		$card = Card::find($card_id);

		return Inertia::render('User/CardInfo', [
			'card' => $card,
			'client' => $card->client
		]);
	}

	public function profile()
	{
		$user = Auth::user();
		$cards = $user->cards;

		return Inertia::render('User/Profile', [
			'user' => $user,
			'cards' => $cards
		]);
	}
}
