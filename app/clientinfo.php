<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientinfo extends Model
{
     protected $table = 'clientinfos';
	public $timestamps = true;
	protected $fillable = ['name', 'email', 'mobile','image', 'password'];
}
