<?php
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Client\PushController;
use Illuminate\Support\Facades\Route;

Route::group(
	['middleware' => 'usercard', 'as' => 'user.'],
	function () {
		Route::get('/', [UserController::class, 'index'])
			->name('index');
		Route::get('/cards', [UserController::class, 'card_region'])
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
		Route::get('/push', [PushController::class, 'index'])
			->name('push');
		Route::post('/push/store', [PushController::class, 'store'])
			->name('push.store');
		Route::get('/{about}', [UserController::class, 'about'])
			->name('about');

	}
);
Route::get('/add_usercard/{id}', [UserController::class, 'add_usercard'])
	->name('user.card_add');
