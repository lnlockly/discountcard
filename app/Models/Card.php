<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model {
	use HasFactory;

	protected $fillable = ['name', 'logo', 'color_header', 'color_body', 'stamps', 'stamp_icon', 'gift_price', 'condition', 'condition', 'description', 'card_use', 'contact'];

	public function users() {
		return $this->hasMany(User::class);
	}

	public function stamps() {
		return $this->hasMany(Stamp::class);
	}

	public function gifts() {
		return $this->hasMany(Gift::class);
	}

}
