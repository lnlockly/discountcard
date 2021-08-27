<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Question;
use Illuminate\Http\Request;
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

		return view('admin.help', [
			'questions' => $questions,
		]);
	}

	public function create_question() {
		return view('admin.question_create');
	}

	public function store_question(Request $request) {
		Question::create([
			'name' => $request->name,
			'text' => $request->text,
		]);

		return redirect(route('admin.help'));
	}

	public function create_model() {
		return view('admin.model_create');
	}

	public function destroy_question($id) {
		Question::destroy($id);

		return redirect()->back();
	}

	public function store_model(Request $request) {

	}

	public function destroy_model($id) {

	}
}
