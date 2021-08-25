<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ManagerController;
use App\Http\Controllers\Client\StatisticGiftsController;
use App\Http\Controllers\Client\StatisticUsersController;
use Illuminate\Support\Facades\Route;

Route::group(
	['middleware' => ['auth:client', 'clientcard'], 'prefix' => 'client', 'as' => 'client.'],
	function () {
		Route::get('/', function () {
			return redirect(route('client.dashboard'));
		});

		Route::get('/dashboard', [ClientController::class, 'index'])
			->name('dashboard');

		Route::get('/settings', [ClientController::class, 'edit'])
			->name('edit');

		Route::post('/update', [ClientController::class, 'update'])
			->name('update');

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

		Route::post('/card/store', [CardController::class, 'store'])
			->name('card.store');

		Route::get('/card/edit', [CardController::class, 'edit'])
			->name('card.edit');

		Route::put('/card/update', [CardController::class, 'update'])
			->name('card.update');
	}
);
Route::get('/client/card', [CardController::class, 'create'])
	->middleware('auth:client')
	->name('client.card.create');