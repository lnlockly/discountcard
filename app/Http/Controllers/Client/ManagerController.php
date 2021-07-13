<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller {
	public function index() {
		$client = Auth::user();
		$managers = $client->managers;
		return view('client.managers', [
			'managers' => $managers,
		]);
	}

	public function store(Request $request) {
		$client = $request->user();
		$key = rand(1000, 9999);

		$request->validate([
			'name' => 'required|string|max:30',
		]);

		Manager::create([
			'name' => $request->name,
			'key' => $key,
			'client_id' => $client->id,
		]);

		return back();

	}
}
