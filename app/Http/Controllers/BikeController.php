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
    public function bikeTripStatus(BikeTrip $bikeTrip){  
        return ["Driver","On the pickup","ON going","Finished"][$bikeTrip->status];
    }
    public function bikeTripSetRent(BikeTrip $bikeTrip,$rent){
        $bikeTrip->update([
            "amount"=>$rent
        ]);
    }
    public function bikeTrip(BikeTrip $bikeTrip){
        $ids=BikeTrip::whereIn('status',[1,2])->pluck('bike_id')->toArray();
         
        $drivers= driver::whereDriverType('Bike')->where('approval',1)->whereNotIn('id',$ids)->get(); 
        return view('front.navbar.service.bike-trip',compact('bikeTrip','drivers'));  

    } 
    public function cancelTrip(BikeTrip $bikeTrip){  
        $bikeTrip->update([
            "status"=>-1
        ]);
        return redirect('/bike');
    }
    public function bikeTripPayment(BikeTrip $bikeTrip){

        return view('front.navbar.service.bike-trip-payment',compact('bikeTrip'));  
    }
    public function bikeTripCod(BikeTrip $bikeTrip){
        $bikeTrip->update([
            "payment_method"=>"Cash On Delivery",
            "payment_status"=>1
        ]);
        return redirect('/bike/trip/finished/'.$bikeTrip->id);
    }
    public function bikeTripBkash(BikeTrip $bikeTrip){
        $bikeTrip->update([
            "payment_method"=>"Bkash",
            "payment_status"=>1,
            "payment_details"=>"Sender ".request()->sender."<br>Reference ".request()->ref
        ]);
        return redirect('/bike/trip/finished/'.$bikeTrip->id); 
    }
    public function bikeTripFinished(BikeTrip $bikeTrip){
        return view('front.navbar.service.bike-trip-finished',compact('bikeTrip')); 
    }
    public function bikeTripDriver(BikeTrip $bikeTrip,driver $driver){
          
        $bikeTrip->update([
            "bike_id"=>$driver->id
        ]);
        return back(); 

    }
    public function bikeTripRating(BikeTrip $bikeTrip,Request $request){
        $bikeTrip->update([
            "rating"=>$request->rating,
            "review"=>$request->review
        ]);
    return view('front.navbar.service.bike-trip-complete',compact('bikeTrip')); 
    }
    //
}