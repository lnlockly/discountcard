<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\TemplateController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])
	->name('admin.login');

Route::post('/admin/login', [AuthenticatedSessionController::class, 'store']);

Route::group(
	['middleware' => 'auth:admin', 'prefix' => 'admin', 'as' => 'admin.'],
	function () {

		Route::get('/', function () {
			return redirect(route('admin.statistic'));
		});

		Route::get('/statistic', [AdminController::class, 'index'])
			->name('statistic');

		Route::delete('/destroy_firm/{id}', [AdminController::class, 'destroy_firm'])
			->name('destroy_firm');

		Route::get('/help', [AdminController::class, 'help'])
			->name('help');

		Route::get('/question/create', [QuestionController::class, 'create'])
			->name('question.create');

		Route::post('/question/store', [QuestionController::class, 'store'])
			->name('question.store');

		Route::delete('/question/destroy/{id}', [QuestionController::class, 'destroy'])
			->name('question.destroy');

		Route::get('/template/create', [TemplateController::class, 'create'])
			->name('template.create');

		Route::post('/template/store', [TemplateController::class, 'store'])
			->name('template.store');

		Route::delete('/template/destroy/{id}', [TemplateController::class, 'destroy'])
			->name('template.destroy');

	});