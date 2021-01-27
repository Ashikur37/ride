<?php

namespace App\Http\Controllers;

use App\CarTrip;
use App\driver;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;

class CarController extends Controller
{
    public function startTrip(Request $request){
       $trip=  CarTrip::create([
            'lat1'=>$request->lat1,
            'lat2'=>$request->lat2,
            'lon1'=>$request->lon1,
            'lon2'=>$request->lon2,
            'mobile'=>$request->session()->get('userchklogin'),
            'amount'=>0,
         ]);
         return redirect(URL::to('/car/trip/'.$trip->id));

    }
    public function carTripStatus(CarTrip $carTrip){  
        return ["Waiting For Driver","On the pickup","ON going","Finished","Canceled"][$carTrip->status];
    }
    public function carTripSetRent(CarTrip $carTrip,$rent){
        $carTrip->update([
            "amount"=>$rent
        ]);
    }
    public function carTrip(CarTrip $carTrip){
        $ids=CarTrip::whereIn('status',[1,2])->pluck('car_id')->toArray();
         
        $drivers= driver::whereDriverType('Car')->where('approval',1)->whereNotIn('id',$ids)->get(); 
        return view('front.navbar.service.car-trip',compact('carTrip','drivers'));  

    } 
    public function cancelTrip(CarTrip $carTrip){  
        $carTrip->update([
            "status"=>4
        ]);
        return redirect('/car');
    }
    public function carTripPayment(CarTrip $carTrip){

        return view('front.navbar.service.car-trip-payment',compact('carTrip'));  
    }
    public function resetDriver(CarTrip $carTrip){
        $ids=CarTrip::whereIn('status',[1,2])->pluck('car_id')->toArray();
        
        $drivers= driver::whereDriverType('Car')->where('id','!=',$carTrip->car_id)->where('approval',1)->whereNotIn('id',$ids)->get(); 
        $carTrip->update([
            "status"=>0,
            "car_id"=>0
        ]);
        return view('front.navbar.service.car-trip',compact('carTrip','drivers'));
    }
    public function carTripCod(CarTrip $carTrip){
        $carTrip->update([
            "payment_method"=>"Cash On Delivery",
            "payment_status"=>1
        ]);
        return redirect('/car/trip/finished/'.$carTrip->id);
    }
    public function carTripBkash(CarTrip $carTrip){
        $carTrip->update([
            "payment_method"=>"Bkash",
            "payment_status"=>1,
            "payment_details"=>"Sender ".request()->sender."<br>Reference ".request()->ref
        ]);
        return redirect('/car/trip/finished/'.$carTrip->id); 
    }
    public function carTripFinished(CarTrip $carTrip){
        return view('front.navbar.service.car-trip-finished',compact('carTrip')); 
    }
    public function carTripDriver(CarTrip $carTrip,driver $driver){
          
        $carTrip->update([
            "car_id"=>$driver->id
        ]);
        return back(); 

    }
    public function carTripRating(CarTrip $carTrip,Request $request){
        $carTrip->update([
            "rating"=>$request->rating,
            "review"=>$request->review
        ]);
    return view('front.navbar.service.car-trip-complete',compact('carTrip')); 
    }
    //
}