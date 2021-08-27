<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller {
	public function index() {
		$clients = Client::latest()->get();
		return view('admin.statistic', [
			'clients' => $clients,
		]);
	}

	public function destroy_firm($id) {
		$client = Client::find($id);

		$path_logo = $client->card->logo;

		Storage::delete('image/card/' . $path_logo);

		$client->delete();

		return redirect()->back();
	}

	public function help() {

	}

	public function store_question(Request $request) {

	}

	public function store_model(Request $request) {

	}
}
