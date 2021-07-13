<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model {
	use HasFactory;

	protected $fillable = ['name', 'key', 'client_id'];
	public function stamps() {
		return $this->hasMany(Stamp::class);
	}
}
