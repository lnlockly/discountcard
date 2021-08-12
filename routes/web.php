<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ManagerController;
use App\Http\Controllers\Client\StatisticGiftsController;
use App\Http\Controllers\Client\StatisticUsersController;
use App\Http\Controllers\User\UserController;
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

require __DIR__ . '/client_auth.php';
require __DIR__ . '/user_auth.php';

Route::group(
	['middleware' => ['auth:client', 'clientcard'], 'prefix' => 'client', 'as' => 'client.'],
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

Route::group(
	['middleware' => 'usercard', 'as' => 'user.'],
	function () {
		Route::get('/', [UserController::class, 'index'])
			->name('index');
		Route::get('/card_region', [UserController::class, 'card_region'])
			->name('card_region');
		Route::get('/card_ads', [UserController::class, 'card_ads'])
			->name('card_ads');
		Route::get('/stamp', [UserController::class, 'stamp'])
			->name('stamp');
		Route::post('/stamp', [UserController::class, 'add_stamp'])
			->name('add_stamp');
		Route::get('/card_info', [UserController::class, 'card_info'])
			->name('card_info');
		Route::get('/profile', [UserController::class, 'profile'])
			->name('profile');

	}
);
Route::get('/add_usercard/{id}', [UserController::class, 'add_usercard'])
->name('cardadd');
