<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;
use App\Models\Stamp;
use Cookie;


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
		return Inertia::render('User/Card', [
			'card' => $card
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
		$card_id = Cookie::get('card_id');
		$managers = Card::find($card_id)->managers;
		$request_code = $request->code;
		foreach ($managers as $manager) {
			if ($manager->code == $request_code) {
				Stamp::create([
					'user_id' => Auth::user()->id,
					'manager_id' => $manager->id,
					'card_id' => $card_id
				]);
				break;
			}
		};
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

	public function add_usercard($id) {
		Cookie::queue('card_id', $id, 200000);
		return redirect(route('user.index'));
	}
}
