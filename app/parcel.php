<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parcel extends Model
{
    protected $table = 'parcels';
	public $timestamps = true;
	protected $fillable = ['product_type', 'name', 'mobile', 'address','weight','order_date','order_type','starting_place','order_status','product_id','image','approval'];
}
