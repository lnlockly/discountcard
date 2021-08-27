<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
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

		Route::get('/create_question', [AdminController::class, 'create_question'])
			->name('question.create');

		Route::post('/store_question', [AdminController::class, 'store_question'])
			->name('question.store');

		Route::delete('/destroy_question/{id}', [AdminController::class, 'destroy_question'])
			->name('question.destroy');

		Route::get('/create_model', [AdminController::class, 'create_model'])
			->name('model.create');

		Route::post('/store_model', [AdminController::class, 'store_model'])
			->name('store.model');

		Route::delete('/destroy_model/{id}', [AdminController::class, 'destroy_model'])
			->name('model.destroy');

	});