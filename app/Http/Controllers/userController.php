<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        return view('front.index');
    }
 



  public function userprofile()
    {
         $value = session('userchklogin');

       if ($value!=0) {

 
          $userprofile = DB::select('select * from clientinfos where mobile=?', [$value]);
 


           return view ('front.userprofile.userprofile',compact('userprofile'));


       }

       else
 
       {
         return redirect ('/clientloginpage');
       }

       
      
    }



 

  public function profileeditreq($id)
    {

        $userprofile = DB::select('select * from  clientinfos where id=?',[$id]);
 
      return view('front.userprofile.profileedit',compact('userprofile'));
    }


//Edit From
     public function profileedit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update clientinfos set name=?,email=?,mobile=?,password=?, image=? where id=?',[$request->name,$request->email,$request->mobile,$request->password,$fileName,$request->id]);

            }else
            {
                $feedback=DB::update('update clientinfos set name=?,email=?,mobile=?,password=? where id=?',[$request->name,$request->email,$request->mobile,$request->password,$request->id]);

            }


          return redirect('/userprofile');
    }


//end





   






//Navbar
//Tracking
 public function tracking()
    {
        $tracking = DB::select('select * from parcels where id=0', []);

        return view('front.navbar.tracking',compact('tracking'));
    }

public function productsearch(Request $request)
        {

            $tracking = DB::select('select * from parcels where product_id=? and approval=1', [$request->tracking]);
    
         
            return view('front.navbar.tracking',compact('tracking'));

        }


//Service
 public function percel()
    {
        return view('front.navbar.service.percel');
    }


 public function food()
    {
        return view('front.navbar.service.food');
    }


 

 public function bike()
    {
        return view('front.navbar.service.bike');
    }


public function car()
    {
        return view('front.navbar.service.car');
    }


 public function courier()
    {
        return view('front.navbar.service.courier');
    }

 public function packaging()
    {
        return view('front.navbar.service.packaging');
    }


 public function garment()
    {
        return view('front.navbar.service.garment');
    }


public function bikeregistration()
    {
        return view('front.navbar.service.bikeregistration');
    }


public function carregistration()
    {
        return view('front.navbar.service.carregistration');
    }


public function bicycleregistration()
    {
        return view('front.navbar.service.bicycleregistration');
    }



public function vehicle()
    {
        return view('front.navbar.service.vehicle');
    }




public function vehiclelogin()
    {
        return view('front.navbar.service.vehiclelogin');
    }


public function referral()
    {
        return view('front.navbar.service.referral');
    }



public function location()
    {
        return view('front.navbar.service.location');
    }
 
 public function tea()
    {
        return view('front.navbar.service.fooditem.tea');
    }


 public function nfc()
    {
        return view('front.navbar.service.fooditem.nfc');
    }



//End Service




//Pricing
     public function pricing()
    {
        return view('front.navbar.pricing');
    }




//Contact
     public function contact()
    {
        return view('front.navbar.contact');
    }




//Order Details
   
         public function  orderdetails()
    {
        $value = session('userchklogin');

       if ($value!=0) {

          $approval= DB::select('select * from parcels where mobile=? and approval=1', [$value]);

          $pending= DB::select('select * from parcels where mobile=? and approval=0', [$value]);

        return view('front.navbar.order.orderdetails',compact('approval','pending'));

         }

       else
 
       {
         return redirect ('/clientloginpage');

    }
}
















//Start Technology
//Laptop
  public function laptop()
    {
        $laptop = DB::select('select * from laptops', []);

        return view('front.technology.laptop',compact('laptop'));

    }














    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
