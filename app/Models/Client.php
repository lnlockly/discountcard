<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable {
	use HasFactory, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name',
		'last_name',
		'company',
		'city',
		'address',
		'website',
		'postcode',
		'email',
		'password',
	];
	public function card() {
		return $this->hasOne(Card::class);
	}

	public function managers() {
		return $this->hasMany(Manager::class);
	}
	protected $guard = 'clients';
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];
}
