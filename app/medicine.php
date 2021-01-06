<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
     protected $table = 'medicines';
	public $timestamps = true;
	protected $fillable = ['product_type', 'name', 'mobile', 'address','weight','order_date','order_type','starting_place','order_status','product_id','image'];
}
