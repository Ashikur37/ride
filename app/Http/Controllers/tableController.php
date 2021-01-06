<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class tableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  //Showing data from database

   public function Alaptop()
    {
        $laptop = DB::select('select * from laptops', []);

        return view('admin.laptop.laptop',compact('laptop'));

    }


public function Alaptopsearch(Request $request)
        {

            $laptop = DB::select('select * from laptops where brand=?', [$request->laptopsearch]);
    
         
            return view('admin.laptop.laptop',compact('laptop'));

        }




//Table Data Edit & Delete Start
    //Edit Req

           public function laptopeditreq($id)
    {

        $laptop = DB::select('select * from  laptops where id=?',[$id]);
 
      return view('admin.laptop.laptopeditform',compact('laptop'));
    }




//Edit From
     public function laptopedit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update laptops set name=?,brand=?,features=?,code=?,price=?, image=? where id=?',[$request->name,$request->brand,$request->features,$request->code,$request->price,$fileName,$request->id]);

            }else
            {
                $feedback=DB::update('update laptops set name=?,brand=?,features=?,code=?,price=? where id=?',[$request->name,$request->brand,$request->features,$request->code,$request->price,$request->id]);

            }


          return redirect('/Alaptop');
    }


//Delete From

   public function laptopdelete($id)
    {

        $product = DB::delete('delete from laptops where id=?',[$id]);

      return redirect('/Alaptop');

    }




public function Adriver()
    {
        $driver = DB::select('select * from drivers', []);

        return view('admin.driver.driver',compact('driver'));

    }


public function Adriversearch(Request $request)
        {

            $driver = DB::select('select * from drivers where mobile_number=?', [$request->driversearch]);
    
         
            return view('admin.driver.driver',compact('driver'));

        }


 public function driverapproval($mobile_number)
    {
         $driver = DB::update('update drivers set approval=1  where mobile_number=?',[$mobile_number]);

        
      return redirect ('/Adriver');   
}







//Parcels

  //Showing data from database

   public function Aparcel()
    {
        $parcel = DB::select('select * from parcels', []);

        return view('admin.navbar.service.parcel',compact('parcel'));

    }


public function Aparcelsearch(Request $request)
        {

            $parcel = DB::select('select * from parcels where product_id=?', [$request->parcelsearch]);
    
         
            return view('admin.navbar.service.parcel',compact('parcel'));

        }



//Table Data Edit & Delete Start
    //Edit Req

           public function parceleditreq($id)
    {

        $parcel = DB::select('select * from  parcels where id=?',[$id]);
 
      return view('admin.navbar.service.parceleditform',compact('parcel'));
    }




//Edit From
     public function parceledit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update parcels set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=?, image=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$fileName,$request->id]);

            }else
            {
                $feedback=DB::update('update parcels set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$request->id]);

            }


          return redirect('/Aparcel');
    }


//Delete From

   public function parceldelete($id)
    {

        $parcel = DB::delete('delete from parcels where id=?',[$id]);

      return redirect('/Aparcel');

    }


  public function parcelapproval($mobile)
    {
      
        
        $parcel = DB::update('update parcel set approval=1  where mobile=?',[$mobile]);

         
      return redirect ('/Aparcel');   
        
    }








//documents

  //Showing data from database

   public function Adocument()
    {
        $document = DB::select('select * from documents', []);

        return view('admin.navbar.service.document',compact('document'));

    }


public function Adocumentsearch(Request $request)
        {

            $document = DB::select('select * from documents where mobile=?', [$request->documentsearch]);
    
         
            return view('admin.navbar.service.document',compact('document'));

        }



//Table Data Edit & Delete Start
    //Edit Req

           public function documenteditreq($id)
    {

        $document = DB::select('select * from  documents where id=?',[$id]);
 
      return view('admin.navbar.service.documenteditform',compact('document'));
    }




//Edit From
     public function documentedit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update documents set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=?, image=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$fileName,$request->id]);

            }else
            {
                $feedback=DB::update('update documents set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$request->id]);

            }


          return redirect('/Adocument');
    }


//Delete From

   public function documentdelete($id)
    {

        $product = DB::delete('delete from documents where id=?',[$id]);

      return redirect('/Adocument');

    }







//packages

  //Showing data from database

   public function Apackage()
    {
        $package = DB::select('select * from packages', []);

        return view('admin.navbar.service.package',compact('package'));

    }


public function Apackagesearch(Request $request)
        {

            $package = DB::select('select * from packages where mobile=?', [$request->packagesearch]);
    
         
            return view('admin.navbar.service.package',compact('package'));

        }



//Table Data Edit & Delete Start
    //Edit Req

           public function packageeditreq($id)
    {

        $package = DB::select('select * from  packages where id=?',[$id]);
 
      return view('admin.navbar.service.packageeditform',compact('package'));
    }




//Edit From
     public function packageedit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update packages set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=?, image=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$fileName,$request->id]);

            }else
            {
                $feedback=DB::update('update packages set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$request->id]);

            }


          return redirect('/Apackage');
    }


//Delete From

   public function packagedelete($id)
    {

        $product = DB::delete('delete from packages where id=?',[$id]);

      return redirect('/Apackage');

    }









    //medicines

  //Showing data from database

   public function Amedicine()
    {
        $parcel = DB::select('select * from medicines', []);

        return view('admin.navbar.service.medicine',compact('medicine'));

    }


public function Amedicinesearch(Request $request)
        {

            $medicine = DB::select('select * from medicines where mobile=?', [$request->medicinesearch]);
    
         
            return view('admin.navbar.service.medicine',compact('medicine'));

        }



//Table Data Edit & Delete Start
    //Edit Req

           public function medicineeditreq($id)
    {

        $parcel = DB::select('select * from  medicines where id=?',[$id]);
 
      return view('admin.navbar.service.medicineeditform',compact('medicine'));
    }




//Edit From
     public function medicineedit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update medicines set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=?, image=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$fileName,$request->id]);

            }else
            {
                $feedback=DB::update('update medicines set name=?,mobile=?,address=?,weight=?,order_date=?,order_type=?,starting_place=?,order_status=?,product_id=? where id=?',[$request->name,$request->mobile,$request->address,$request->weight,$request->order_date,$request->order_type,$request->starting_place,$request->order_status,$request->product_id,$request->id]);

            }


          return redirect('/Amedicine');
    }


//Delete From

   public function medicinedelete($id)
    {

        $product = DB::delete('delete from medicines where id=?',[$id]);

      return redirect('/Amedicine');

    }







//bike registration


     //Showing data from database

   public function Abike()
    {
        $bike = DB::select('select * from bikes', []);

        return view('admin.navbar.service.bike',compact('bike'));

    }


public function Abikesearch(Request $request)
        {

            $bike = DB::select('select * from bikes where brand=?', [$request->bikesearch]);
    
         
            return view('admin.bike.bike',compact('bike'));

        }




//Table Data Edit & Delete Start
    //Edit Req

           public function bikeeditreq($id)
    {

        $bike = DB::select('select * from  bikes where id=?',[$id]);
 
      return view('admin.bike.bikeeditform',compact('bike'));
    }




//Edit From
     public function bikeedit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update bikes set firstname=?,lastname=?,nidpassport=?,number=?,gender=?,dateofbirth=?,mobilenumber=?,image=?,city=?,vehicleregistration=?,vehiclenumber=?,licensedocument=?, referralcode=? where id=?',[$request->image,$request->firstname,$request->lastname,$request->nidpassport,$request->number,$request->gender,$request->dateofbirth,$request->image,$request->city,$request->vehicleregistration,$request->vehiclenumber,$request->licensedocument,$request->referralcode,$fileName,$request->id]);

            }else
            {
                 $feedback=DB::update('update bikes set firstname=?,lastname=?,nidpassport=?,number=?,gender=?,dateofbirth=?,mobilenumber=?,image=?,city=?,vehicleregistration=?,vehiclenumber=?,licensedocument=?, referralcode=? where id=?',[$request->image,$request->firstname,$request->lastname,$request->nidpassport,$request->number,$request->gender,$request->dateofbirth,$request->image,$request->city,$request->vehicleregistration,$request->vehiclenumber,$request->licensedocument,$request->referralcode,$fileName,$request->id]);

            }



          return redirect('/Abike');
    }


//Delete From

   public function bikedelete($id)
    {

        $product = DB::delete('delete from bikes where id=?',[$id]);

      return redirect('/Abike');

    }







//car registration


     //Showing data from database

   public function Acar()
    {
        $car = DB::select('select * from cars', []);

       return view('admin.navbar.service.car',compact('car'));

    }


public function Acarsearch(Request $request)
        {

            $car = DB::select('select * from cars where brand=?', [$request->carsearch]);
    
         
            return view('admin.car.car',compact('car'));

        }




//Table Data Edit & Delete Start
    //Edit Req

           public function careditreq($id)
    {

        $bike = DB::select('select * from  cars where id=?',[$id]);
 
      return view('admin.car.careditform',compact('car'));
    }




//Edit From
     public function caredit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                  $feedback=DB::update('update cars set firstname=?,lastname=?,nidpassport=?,number=?,gender=?,dateofbirth=?,mobilenumber=?,image=?,city=?,vehicleregistration=?,vehiclenumber=?,licensedocument=?, referralcode=? where id=?',[$request->image,$request->firstname,$request->lastname,$request->nidpassport,$request->number,$request->gender,$request->dateofbirth,$request->image,$request->city,$request->vehicleregistration,$request->vehiclenumber,$request->licensedocument,$request->referralcode,$fileName,$request->id]);


            }else
            {
                $feedback=DB::update('update bikes set firstname=?,lastname=?,nidpassport=?,number=?,gender=?,dateofbirth=?,mobilenumber=?,image=?,city=?,vehicleregistration=?,vehiclenumber=?,licensedocument=?, referralcode=? where id=?',[$request->image,$request->firstname,$request->lastname,$request->nidpassport,$request->number,$request->gender,$request->dateofbirth,$request->image,$request->city,$request->vehicleregistration,$request->vehiclenumber,$request->licensedocument,$request->referralcode,$fileName,$request->id]);

            }



          return redirect('/Acar');
    }


//Delete From

   public function cardelete($id)
    {

        $product = DB::delete('delete from cars where id=?',[$id]);

      return redirect('/Acar');

    }






//bicycle registration


     //Showing data from database

   public function Abicycle()
    {
        $laptop = DB::select('select * from bicycles', []);

        return view('admin.bicycle.bicycle',compact('bicycle'));

    }


public function Abicyclesearch(Request $request)
        {

            $car = DB::select('select * from bicycles where brand=?', [$request->carsearch]);
    
         
            return view('admin.bicycle.bicycle',compact('bicycle'));

        }




//Table Data Edit & Delete Start
    //Edit Req

           public function bicycleeditreq($id)
    {

        $bike = DB::select('select * from  bicycles where id=?',[$id]);
 
      return view('admin.bicycle.bicycleeditform',compact('bicycle'));
    }




//Edit From
     public function bicycleedit(Request $request)
   {
            
            if ($request->hasFile('image'))
     {  

        $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);
 // for convert  image to text

                 $feedback=DB::update('update bicycles set firstname=?,lastname=?,nidpassport=?,number=?,gender=?,dateofbirth=?,mobilenumber=?,image=?,city,filedocument=?, referralcode=? where id=?',[$request->firstname,$request->lastname,$request->nidpassport,$request->number,$request->gender,$request->dateofbirth,$request->mobilenumber,$request->image,$request->city,$request->filedocument,$request->referralcode,$fileName,$request->id]);

            }else
            {
                  $feedback=DB::update('update bicycles set firstname=?,lastname=?,nidpassport=?,number=?,gender=?,dateofbirth=?,mobilenumber=?,image=?,city,filedocument=?, referralcode=? where id=?',[$request->firstname,$request->lastname,$request->nidpassport,$request->number,$request->gender,$request->dateofbirth,$request->mobilenumber,$request->image,$request->city,$request->filedocument,$request->referralcode,$fileName,$request->id]);

            }



          return redirect('/Abicycle');
    }


//Delete From

   public function bicycledelete($id)
    {

        $product = DB::delete('delete from bicycles where id=?',[$id]);

      return redirect('/Abicycle');

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
