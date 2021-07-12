<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Client;

class StatisticUsersController extends Controller
{
    public function index() {
    	$client = Auth::user();
    	$users = $client->card->users;
    	return view('client.statistic.users', [
    		'users' => $users
    	]);
    }
}
