<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
     protected $table = 'drivers';
	public $timestamps = true;
	protected $fillable = ['driver_type', 'first_name', 'last_name', 'nidpassport','np_number','gender','dob','mobile_number','city','vehicle_registration','vehicle_number','license_document','image','password','referral_code','lat','lon'];
}
