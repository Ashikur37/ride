<?php

namespace App\Http\Controllers;

use App\BikeTrip;
use App\driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class BikeController extends Controller
{
    public function startTrip(Request $request){
       $trip=  BikeTrip::create([
            'lat1'=>$request->lat1,
            'lat2'=>$request->lat2,
            'lon1'=>$request->lon1,
            'lon2'=>$request->lon2,
            'mobile'=>$request->session()->get('userchklogin'),
            'amount'=>0,
         ]);
         return redirect(URL::to('/bike/trip/'.$trip->id));

    }
    public function bikeTrip(BikeTrip $bikeTrip){    
        $drivers= driver::whereDriverType('Bike')->get();
        return view('front.navbar.service.bike-trip',compact('bikeTrip','drivers')); 

    }
    public function bikeTripDriver(BikeTrip $bikeTrip,driver $driver){
          
        $bikeTrip->update([
            "bike_id"=>$driver->id
        ]);
        return back(); 

    }
}