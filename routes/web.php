<?php

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ManagerController;
use App\Http\Controllers\Client\StatisticGiftsController;
use App\Http\Controllers\Client\StatisticUsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth:client', 'prefix' => 'client', 'as' => 'client.'],
	function () {
		Route::get('/dashboard', [ClientController::class, 'index'])
			->name('dashboard');

		Route::get('/users', [StatisticUsersController::class, 'index'])
			->name('statistic.users');

		Route::get('/users/{id}', [StatisticUsersController::class, 'show'])
			->name('statistic.users.show');

		Route::get('/statistic', [StatisticGiftsController::class, 'index'])
			->name('statistic.card');

		Route::get('/managers', [ManagerController::class, 'index'])
			->name('managers');

		Route::post('/managers/store', [ManagerController::class, 'store'])
			->name('managers.store');

	});
