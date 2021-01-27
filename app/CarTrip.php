<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarTrip extends Model
{
    protected $guarded=[];
    public function client(){
        return $this->belongsTo(clientinfo::class,'mobile','mobile');
    }
    public function driver(){
        return $this->belongsTo(driver::class,'car_id');
    }

}
