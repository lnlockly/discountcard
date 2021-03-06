<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
	use HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'password',
		'region',
		'webpush',
		'card_id',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */

	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function stamps() {
		return $this->hasMany(Stamp::class);
	}

	public function gifts() {
		return $this->hasMany(Gift::class);
	}

	public function cards() {
		return $this->belongsToMany(Card::class);
	}

}
