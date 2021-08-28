<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Question;
use App\Models\Template;
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
		$questions = Question::all();
		$templates = Template::latest()->get();

		return view('admin.help', [
			'questions' => $questions,
			'templates' => $templates,
		]);
	}

}
