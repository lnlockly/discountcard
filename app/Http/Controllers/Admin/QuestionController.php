<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller {
	public function create() {
		return view('admin.question.create');
	}

	public function store(Request $request) {
		Question::create([
			'name' => $request->name,
			'text' => $request->text,
		]);

		return redirect(route('admin.help'));
	}

	public function destroy($id) {
		Question::destroy($id);

		return redirect()->back();
	}
}
