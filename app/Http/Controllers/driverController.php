<?php

namespace App\Http\Controllers;

use App\BikeTrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\driver;
use App\CarTrip;
use Illuminate\Support\Facades\Session;

class driverController extends Controller
{
     




public function driverregister()
    {
        return view('front.driver.driverregister');
    }



      public function driverinput(Request $request)
     {
         $this->validate($request, [
            'mobile_number'=>'required',
            'password'=>'required',
             
             ]);
         

        if($request->hasFile('license_document'))
        {
            $file=$request->file('license_document');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('pdf/',$fileName);

        }

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
        $fileNam=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileNam);

        }

        else
        {
            $fileName = 'no_image.png';
        }



        $drivers = new driver;
        $drivers->driver_type = $request->input('driver_type');
        $drivers->first_name = $request->input('first_name');
        $drivers->last_name = $request->input('last_name');
        $drivers->nidpassport = $request->input('nidpassport');
        $drivers->np_number = $request->input('np_number');
        $drivers->gender = $request->input('gender');
        $drivers->dob = $request->input('dob');
        $drivers->mobile_number = $request->input('mobile_number');
        $drivers->city = $request->input('city');
        $drivers->vehicle_registration = $request->input('vehicle_registration');
        $drivers->vehicle_number = $request->input('vehicle_number');
        $drivers->license_document = $fileName; 
         $drivers->image = $fileNam; 
        $drivers->password = $request->input('password');
 
        $drivers->save();


        return redirect('driverregister')->with('success', 'Insert successfully');
    }



  


    // Client Login

 public function driverloginpage()
    {
        return view('front.driver.driverloginpage');
    }









public function pendingBike(){ 
    $id=driver::where('mobile_number','=',Session::get('driverchklogin'))->first()->id;
    $trips=BikeTrip::whereStatus(0)->where('bike_id',$id)->latest()->get();

    return view ('front.driver.bikeTrips',compact('trips'));
}
public function viewBikeTrip(BikeTrip $bikeTrip){
    return view ('front.driver.bikeTrip',compact('bikeTrip'));
}
public function cancelBikeTrip(BikeTrip $bikeTrip){
    $bikeTrip->update([
        "status"=>4
    ]);
    return redirect('/bike/pending');
}
public function confirmBikeTrip(BikeTrip $bikeTrip){
    $bikeTrip->update([
        "status"=>1,
    ]);
    return view('front.driver.runningBikeTrip',compact('bikeTrip'));
    
}
public function finishBikeTrip(BikeTrip $bikeTrip){
    $bikeTrip->update([
        "status"=>3,
    ]);
    return view('front.driver.finishBikeTrip',compact('bikeTrip')); 
    //12
    
}

public function confirmPickupBike(BikeTrip $bikeTrip){ 
    $bikeTrip->update([
        "status"=>2,
    ]);
    return view('front.driver.onGoingBikeTrip',compact('bikeTrip'));
    
}




public function pendingCar(){ 
    $id=driver::where('mobile_number','=',Session::get('driverchklogin'))->first()->id;
    $trips=CarTrip::whereStatus(0)->where('car_id',$id)->latest()->get();

    return view ('front.driver.carTrips',compact('trips'));
}
public function viewCarTrip(CarTrip $carTrip){
    return view ('front.driver.carTrip',compact('carTrip'));
}
public function cancelCarTrip(CarTrip $carTrip){
    $carTrip->update([
        "status"=>4
    ]);
    return redirect('/car/pending');
}
public function confirmCarTrip(CarTrip $carTrip){
    $carTrip->update([
        "status"=>1,
    ]);
    return view('front.driver.runningCarTrip',compact('carTrip'));
    
}
public function finishCarTrip(CarTrip $carTrip){
    $carTrip->update([
        "status"=>3,
    ]);
    return view('front.driver.finishCarTrip',compact('carTrip')); 
    //12
    
}

public function confirmPickupCar(CarTrip $carTrip){ 
    $carTrip->update([
        "status"=>2,
    ]);
    return view('front.driver.onGoingCarTrip',compact('carTrip'));
    
}




public function driverlogin(Request $request)
    {

        $driverlogin= DB::select('select count(*) chk from drivers where mobile_number=? and password=? and approval=1', [$request->mobile_number,$request->password,$request->approval]);
        foreach ($driverlogin as $key ) {


            if ($key->chk==1) {
                 

                 session(['driverchklogin' => $request->mobile_number]);
                 session(['type' => DB::select('select * from drivers where mobile_number=? and password=? and approval=1', [$request->mobile_number,$request->password,$request->approval])[0]->driver_type]);
             return redirect  ('/driverprofile');

         }else
         {
             
            session(['driverchklogin' => 0]);
             session()->flash('driverchklogin','Login Faild');

           return view ('front.driver.driverloginpage');
       }

   }


}





public function driverlogout()
{
    session(['driverchklogin' => 0]);
    return redirect('/');
}


public function updatePosition(){
    $driver=driver::where('mobile_number',Session::get('driverchklogin'))->first();
    $driver->update([
        "lat"=>request()->lat,
        "lon"=>request()->lon,
    ]);
}


 public function driverprofile() 
    {
         $value = session('driverchklogin');

       if ($value!=0) {

 
          $driverprofile = DB::select('select * from drivers where mobile_number=?', [$value]);
 


           return view ('front.driver.driverprofile',compact('driverprofile'));


       }

       else
 
       {
         return redirect ('/clientloginpage');
       }

       
      
    }



















}
