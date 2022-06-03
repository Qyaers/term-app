<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
	use HasFactory;

	public $fillable = ["text","term_id"];
	public $timestamps = false;

	public function term()
	{
		return $this->belongsTo(Term::class);
	}
}
