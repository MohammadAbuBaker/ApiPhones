<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    protected $fillable = [
		'phoneName', 'phoneBrand', 'phonePrice',

	];
}
