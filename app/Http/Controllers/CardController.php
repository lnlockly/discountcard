<?php

namespace App\Http\Controllers;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class CardController extends Controller {
	public function create() {
		if (Auth::user()->card != null) {
			return redirect(route('client.dashboard'));
		}
		$icons = $this->get_icons();
		return Inertia::render('Client/Card/Create', [
			'stamp_icons' => $icons,
		]);
	}

	public function store(Request $request) {
		$request->validate([
			'name' => 'required|string|max:30',
			'logo' => 'required',
			'color_header' => 'required|string|max:10',
			'color_body' => 'required|string|max:10',
			'stamps' => 'required|integer|min:1|max:30',
			'stamp_icon' => 'required|string',
			'gift_price' => 'required|numeric',
			'condition' => 'required|string|max:500',
			'card_description' => 'required|string|max:500',
			'card_use' => 'required|string|max:500',
			'gift_description' => 'required|string|max:500',
		]);

		$logo = $request->logo;
		$client_id = Auth::user()->id;
		$image_name = $client_id . '.png';
		$logo->move(Storage::path('public/image/'), $image_name);

		Card::create([
			'name' => $request->name,
			'logo' => $image_name,
			'color_header' => $request->color_header,
			'color_body' => $request->color_body,
			'stamps' => $request->stamps,
			'stamp_icon' => $request->stamp_icon,
			'gift_price' => $request->gift_price,
			'condition' => $request->condition,
			'card_description' => $request->card_description,
			'card_use' => $request->card_use,
			'gift_description' => $request->gift_description,
			'region' => Auth::user()->city,
			'client_id' => $client_id,
		]);
		return Inertia::location(route('client.dashboard'));

	}

	public function edit() {
		$client = Auth::user();
		$card = $client->card;
		$icons = $this->get_icons();
		return Inertia::render('Client/Card/Edit', [
			'card' => $card,
			'stamp_icons' => $icons,
		]);
	}

	public function update(Request $request) {
		$request->validate([
			'name' => 'required|string|max:30',
			'logo' => 'required',
			'color_header' => 'required|string|max:10',
			'color_body' => 'required|string|max:10',
			'stamps' => 'required|integer|min:1|max:30',
			'stamp_icon' => 'required|string',
			'gift_price' => 'required|numeric',
			'condition' => 'required|string|max:500',
			'card_description' => 'required|string|max:500',
			'card_use' => 'required|string|max:500',
			'gift_description' => 'required|string|max:500',
		]);
		$client = Auth::user();
		$card = $client->card;
		if ($request->hasFile('logo')) {
			$logo = $request->logo;
			$client_id = Auth::user()->id;
			$image_name = $client_id . '.png';
			$logo->move(Storage::path('public/image/'), $image_name);
			$card->update($request->all());
		} else {
			$card->update($request->except('logo'));
		}

		return Inertia::location(route('client.dashboard'));
	}
	private function get_icons() {
		$stamp_icons = Storage::files('public/image/stamps');
		$icons = [];
		foreach ($stamp_icons as $icon) {
			array_push($icons, basename($icon));
		}

		return $icons;
	}
}
