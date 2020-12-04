<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
	protected $table ='Rentals';
	protected $fillable = ['start_date', 'end_date', 'total', 'user_id', 'status_id'];
	protected $guarded = ['id'];
}
