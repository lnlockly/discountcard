<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller {

	public function create() {
		return view('admin.template.create');
	}

	public function store(Request $request) {
		$preview = $request->preview;
		$file = $request->file;

		$image_name = $preview->getClientOriginalName();
		$preview->move(Storage::path('image/help/preview'), $image_name);

		$file_name = $file->getClientOriginalName();
		$file->move(Storage::path('file/help/template'), $file_name);

		Template::create([
			'preview' => $image_name,
			'file_path' => $file_name,
		]);

		return redirect(route('admin.help'));
	}

	public function download($id) {
		$template = Template::find($id);

		$file = Storage::path('file/help/template/' . $template->file_path);

		return response()->download($file);

	}

	public function destroy($id) {
		$template = Template::find($id);

		$image_name = $template->preview;
		$file_name = $template->file_path;

		Storage::delete('image/help/preview/' . $image_name);
		Storage::delete('file/help/template/' . $file_name);

		$template->delete();

		return redirect()->back();
	}
}
