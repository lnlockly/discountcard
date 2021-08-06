<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use Cookie;


class UserController extends Controller
{
    public function index() {
    	$card_id = Cookie::get('card_id');
    	$current_card = Card::find($card_id);
    	$user = Auth::user();
    	$cards = Card::all();
    	$user_cards = $user->cards;

    	return Inertia::render('User/Home', [
    		'users_cards' => $user_cards,
    		'cards' => $cards,
    	])
    }
}
