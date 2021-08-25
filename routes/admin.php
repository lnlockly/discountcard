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
	});