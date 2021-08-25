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
}
