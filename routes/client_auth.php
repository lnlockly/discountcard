<?php

use App\Http\Controllers\Client\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Client\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Client\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Client\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Client\Auth\NewPasswordController;
use App\Http\Controllers\Client\Auth\PasswordResetLinkController;
use App\Http\Controllers\Client\Auth\RegisteredClientController;
use App\Http\Controllers\Client\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'client', 'as' => 'client.'],
	function () {
		Route::get('/register', [RegisteredClientController::class, 'create'])
			->name('register');

		Route::post('/register', [RegisteredClientController::class, 'store']);

		Route::get('/login', [AuthenticatedSessionController::class, 'create'])
			->name('login');

		Route::post('/login', [AuthenticatedSessionController::class, 'store']);

		Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
			->middleware('guest')
			->name('password.request');

		Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
			->middleware('guest')
			->name('password.email');

		Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
			->middleware('guest')
			->name('password.reset');

		Route::post('/reset-password', [NewPasswordController::class, 'store'])
			->middleware('guest')
			->name('password.update');

		Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
			->middleware('auth:client')
			->name('verification.notice');

		Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
			->middleware(['auth:client', 'signed', 'throttle:6,1'])
			->name('verification.verify');

		Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
			->middleware(['auth:client', 'throttle:6,1'])
			->name('verification.send');

		Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
			->middleware('auth:client')
			->name('password.confirm');

		Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
			->middleware('auth:client');

		Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
			->middleware('auth:client')
			->name('logout');
	});
