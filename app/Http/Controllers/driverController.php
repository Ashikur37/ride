<?php

namespace App\Http\Controllers;

use App\BikeTrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\driver;
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
    $trips=BikeTrip::whereStatus(0)->latest()->get();

    return view ('front.driver.bikeTrips',compact('trips'));
}
public function viewBikeTrip(BikeTrip $bikeTrip){
    return view ('front.driver.bikeTrip',compact('bikeTrip'));
}
public function confirmBikeTrip(BikeTrip $bikeTrip){
    $bikeTrip->update([
        "status"=>1,
        "bike_id"=>Session::get('driverchklogin')
    ]);
    return view('front.driver.runningBikeTrip',compact('bikeTrip'));
    
}

public function driverlogin(Request $request)
    {

        $driverlogin= DB::select('select count(*) chk from drivers where mobile_number=? and password=? and approval=1', [$request->mobile_number,$request->password,$request->approval]);

        foreach ($driverlogin as $key ) {


            if ($key->chk==1) {
                 

                 session(['driverchklogin' => $request->mobile_number]);


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
