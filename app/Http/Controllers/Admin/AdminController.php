<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;

class AdminController extends Controller {
	public function index() {
		$clients = Client::latest()->get();
		return view('admin.statistic', [
			'clients' => $clients,
		]);
	}

	public function destroy($id) {
		$client = Client::find($id);

		$path_logo = $client->card->logo;

		Storage::delete('image/card/' . $path_logo);

		$client->delete();

		return redirect()->back();
	}
}
