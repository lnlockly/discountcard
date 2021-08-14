<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	use HasFactory;

	protected $fillable = ['name', 'logo', 'color_header', 'color_body', 'stamps', 'stamp_icon', 'gift_price', 'condition', 'condition', 'card_use', 'region', 'client_id'];

	public function client()
	{
		return $this->belongsTo(Client::class);
	}

	public function stamps()
	{
		return $this->hasMany(Stamp::class);
	}

	public function gifts()
	{
		return $this->hasMany(Gift::class);
	}
	
	public function users()
	{
		return $this->belongsToMany(User::class)->withTimestamps();
	}
}
