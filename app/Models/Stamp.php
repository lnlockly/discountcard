<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stamp extends Model {
	use HasFactory;

	protected $fillable = ['user_id', 'manager_id', 'card_id'];
	
	public function manager() {
		return $this->belongsTo(Manager::class);
	}
}
