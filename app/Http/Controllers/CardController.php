<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CardController extends Controller {

	public function create() {
		return view('client.card-create');
	}

	public function store(Request $request) {
		$request->validate([
			'name' => 'required|string|max:30',
			'logo' => 'required|mimes:png',
			'color_header' => 'required|string|max:10',
			'color_body' => 'required|string|max:10',
			'stapms' => 'required|integer|min:1|max:30',
			'stamp_icon' => 'required|string',
			'gift_price' => 'required|integer',
			'condition' => 'required|string|max:500',
			'desctiption' => 'required|string|max:500',
			'card_use' => 'required|string|max:500',
			'contact' => 'required|string|max:500',
		]);


		
		Card::create([
			'name' => $request->name,
			'logo' => ,
			'color_header' => $request->color_header,
			'color_body' => $request->color_body,
			'stamps' => $request->stamps,
			'stamp_icon' => $request->stamp_icon,
			'gift_price' => $request->gift_price,
			'condition' => $request->condition,
			'desctiption' => $request->desctiption,
			'card_use' => $request->card_use,
			'contact' => $request->contact
		]); 

		return route('client.dashboard');
	}

}
