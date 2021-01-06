<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parcel;

use Illuminate\Support\Facades\DB;

class userForm extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */




  //Order Form


  public function gift()
  {

    $value = session('userchklogin');

    if ($value != 0) {

      return view('front.navbar.service.giftorderform');
    } else {
      return redirect('/clientloginpage');
    }
  }




  public function giftinput(Request $request)

  {

    $value = session('userchklogin');

    if ($value != 0) {


      $this->validate($request, [
        'name' => 'required',
        'receivers_mobile' => 'required',
        'address' => 'required',
        'weight' => 'required',
        'order_date' => 'required',

      ]);



      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image/', $fileName);

        $Generator = "ABCDEFGHIJKLPMNOPQRSTUVWXYZ1234567890";
        $token = substr(str_shuffle($Generator), 0, 10);

        $data = DB::insert('insert into parcels(product_type,name,mobile,receivers_mobile,address,weight,order_date,order_type,product_id,approval,image) values (?,?,?,?,?,?,?,?,?,0,?)', [$request->product_type, $request->name, session('userchklogin'), $request->receivers_mobile, $request->address, $request->weight, $request->order_date, $request->order_type, $token, $request->approval, $fileName]);
      } else {
        $Generator = "ABCDEFGHIJKLPMNOPQRSTUVWXYZ1234567890";
        $token = substr(str_shuffle($Generator), 0, 10);

        $data = DB::insert('insert into parcels(product_type,name,mobile,receivers_mobile,address,weight,order_date,order_type,product_id,approval) values (?,?,?,?,?,?,?,?,?,0)', [$request->product_type, $request->name, session('userchklogin'), $request->receivers_mobile, $request->address, $request->weight, $request->order_date, $request->order_type, $token, $request->approval]);
      }



      return redirect('gift')->with('success', 'Insert successfully');
    } else {
      return redirect('/clientloginpage');
    }
  }







  //Order Form


  public function document()
  {

    $value = session('userchklogin');

    if ($value != 0) {

      return view('front.navbar.service.documentorderform');
    } else {
      return redirect('/clientloginpage');
    }
  }


  public function documentinput(Request $request)
  {

    $value = session('userchklogin');

    if ($value != 0) {



      $this->validate($request, [
        'name' => 'required'
      ]);

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image/', $fileName);
      } else {
        $fileName = 'no_image.png';
      }


      $parcels = new parcel;
      $parcels->product_type = $request->input('product_type');
      $parcels->name = $request->input('name');
      $parcels->mobile = $request->input('mobile');
      $parcels->address = $request->input('address');
      $parcels->weight = $request->input('weight');
      $parcels->order_date = $request->input('order_date');
      $parcels->order_type = $request->input('order_type');
      $parcels->starting_place = $request->input('starting_place');
      $parcels->order_status = $request->input('order_status');
      $parcels->product_id = $request->input('product_id');

      $parcels->image = $fileName;
      $parcels->save();

      return redirect('document')->with('success', 'Insert successfully');
    } else {
      return redirect('/clientloginpage');
    }
  }




  //Order Form


  public function package()
  {

    $value = session('userchklogin');

    if ($value != 0) {

      return view('front.navbar.service.packageorderform');
    } else {
      return redirect('/clientloginpage');
    }
  }


  public function packageinput(Request $request)
  {

    $value = session('userchklogin');

    if ($value != 0) {



      $this->validate($request, [
        'name' => 'required'
      ]);

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image/', $fileName);
      } else {
        $fileName = 'no_image.png';
      }


      $parcels = new parcel;
      $parcels->product_type = $request->input('product_type');
      $parcels->name = $request->input('name');
      $parcels->mobile = $request->input('mobile');
      $parcels->address = $request->input('address');
      $parcels->weight = $request->input('weight');
      $parcels->order_date = $request->input('order_date');
      $parcels->order_type = $request->input('order_type');
      $parcels->starting_place = $request->input('starting_place');
      $parcels->order_status = $request->input('order_status');
      $parcels->product_id = $request->input('product_id');

      $parcels->image = $fileName;
      $parcels->save();

      return redirect('package')->with('success', 'Insert successfully');
    } else {
      return redirect('/clientloginpage');
    }
  }




  //Order Form


  public function medicine()
  {

    $value = session('userchklogin');

    if ($value != 0) {

      return view('front.navbar.service.medicineorderform');
    } else {
      return redirect('/clientloginpage');
    }
  }


  public function medicineinput(Request $request)
  {

    $value = session('userchklogin');

    if ($value != 0) {



      $this->validate($request, [
        'name' => 'required'
      ]);

      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image/', $fileName);
      } else {
        $fileName = 'no_image.png';
      }


      $parcels = new parcel;
      $parcels->product_type = $request->input('product_type');
      $parcels->name = $request->input('name');
      $parcels->mobile = $request->input('mobile');
      $parcels->address = $request->input('address');
      $parcels->weight = $request->input('weight');
      $parcels->order_date = $request->input('order_date');
      $parcels->order_type = $request->input('order_type');
      $parcels->starting_place = $request->input('starting_place');
      $parcels->order_status = $request->input('order_status');
      $parcels->product_id = $request->input('product_id');

      $parcels->image = $fileName;
      $parcels->save();

      return redirect('medicine')->with('success', 'Insert successfully');
    } else {
      return redirect('/clientloginpage');
    }
  }


  //Order Form bike registration


  public function bike()
  {

    $value = session('userchklogin');
    if ($value != 0) {

      return view('front.navbar.service.bikeregistration');
    } else {
      return redirect('/clientloginpage');
    }
  }




  public function bikeinput(Request $request)

  {

    $value = session('userchklogin');

    if ($value != 0) {


      $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'nidpassport' => 'required',
        'number' => 'required',
        'gender' => 'required',
        'dateofbirth' => 'required',
        'mobilenumber' => 'required',
        'image' => 'required',
        'city' => 'required',
        'vehicleregistration' => 'required',
        'vehiclenumber' => 'required',
        'licensedocument' => 'required',
        'referralcode' => 'required',

      ]);


      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image/', $fileName);

        $data = DB::insert('insert into bikes(firstname,lastname,nidpassport,number,gender,dateofbirth,mobilenumber,image,city,vehicleregistration,vehiclenumber,licensedocument,referralcode) values (?,?,?,?,?,?,?,?,?,?,?,?,?)', [$request->firstname, $request->lastname, $request->nidpassport, $request->number, $request->gender, $request->dateofbirth, $request->mobilenumber, $request->image, $request->city, $request->vehicleregistration, $request->vehiclenumber, $request->licensedocument, $request->referralcode, $fileName, session('userchklogin')]);
      } else {
        $data = DB::insert('insert into bikes(firstname,lastname,nidpassport,number,gender,dateofbirth,mobilenumber,image,city,vehicleregistration,vehiclenumber,licensedocument,referralcode) values (?,?,?,?,?,?,?,?,?,?,?,?,?)', [$request->firstname, $request->lastname, $request->nidpassport, $request->number, $request->gender, $request->dateofbirth, $request->mobilenumber, $request->image, $request->city, $request->vehicleregistration, $request->vehiclenumber, $request->licensedocument, $request->referralcode, $fileName, session('userchklogin')]);
      }



      return redirect('bike')->with('success', 'Insert successfully');
    } else {
      return redirect('/clientloginpage');
    }
  }




  //Order Form car registration


  public function car()
  {

    $value = session('userchklogin');

    if ($value != 0) {

      return view('front.navbar.service.bikeregistration');
    } else {
      return redirect('/clientloginpage');
    }
  }




  public function carinput(Request $request)

  {

    $value = session('userchklogin');

    if ($value != 0) {


      $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'nidpassport' => 'required',
        'number' => 'required',
        'gender' => 'required',
        'dateofbirth' => 'required',
        'mobilenumber' => 'required',
        'image' => 'required',
        'city' => 'required',
        'vehicleregistration' => 'required',
        'vehiclenumber' => 'required',
        'licensedocument' => 'required',
        'referralcode' => 'required',

      ]);


      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image/', $fileName);

        $data = DB::insert('insert into bikes(firstname,lastname,nidpassport,number,gender,dateofbirth,mobilenumber,image,city,vehicleregistration,vehiclenumber,licensedocument,referralcode) values (?,?,?,?,?,?,?,?,?,?,?,?,?)', [$request->firstname, $request->lastname, $request->nidpassport, $request->number, $request->gender, $request->dateofbirth, $request->mobilenumber, $request->image, $request->city, $request->vehicleregistration, $request->vehiclenumber, $request->licensedocument, $request->referralcode, $fileName, session('userchklogin')]);
      } else {
        $data = DB::insert('insert into bikes(firstname,lastname,nidpassport,number,gender,dateofbirth,mobilenumber,image,city,vehicleregistration,vehiclenumber,licensedocument,referralcode) values (?,?,?,?,?,?,?,?,?,?,?,?,?)', [$request->firstname, $request->lastname, $request->nidpassport, $request->number, $request->gender, $request->dateofbirth, $request->mobilenumber, $request->image, $request->city, $request->vehicleregistration, $request->vehiclenumber, $request->licensedocument, $request->referralcode, $fileName, session('userchklogin')]);
      }



      return redirect('car')->with('success', 'Insert successfully');
    } else {
      return redirect('/clientloginpage');
    }
  }








  //Order Form bicycle registration


  public function bicycle()
  {

    $value = session('userchklogin');

    if ($value != 0) {

      return view('front.navbar.service.bicycleregistration');
    } else {
      return redirect('/clientloginpage');
    }
  }




  public function bicycleinput(Request $request)

  {

    $value = session('userchklogin');

    if ($value != 0) {


      $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'nidpassport' => 'required',
        'number' => 'required',
        'gender' => 'required',
        'dateofbirth' => 'required',
        'mobilenumber' => 'required',
        'image' => 'required',
        'city' => 'required',
        'filedocument' => 'required',
        'referralcode' => 'required',

      ]);


      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('image/', $fileName);

        $data = DB::insert('insert into bicycles(firstname,lastname,nidpassport,number,gender,dateofbirth,mobilenumber,image,city,filedocument,referralcode) values (?,?,?,?,?,?,?,?,?,?,?)', [$request->image, $request->firstname, $request->lastname, $request->nidpassport, $request->number, $request->gender, $request->dateofbirth, $request->mobilenumber, $request->image, $request->city, $request->filedocument, $request->referralcode, $fileName, session('userchklogin')]);
      } else {
        $data = DB::insert('insert into bicycles(firstname,lastname,nidpassport,number,gender,dateofbirth,mobilenumber,image,city,filedocument,referralcode) values (?,?,?,?,?,?,?,?,?,?,?)', [$request->image, $request->firstname, $request->lastname, $request->nidpassport, $request->number, $request->gender, $request->dateofbirth, $request->mobilenumber, $request->image, $request->city, $request->filedocument, $request->referralcode, $fileName, session('userchklogin')]);
      }



      return redirect('bicycle')->with('success', 'Insert successfully');
    } else {
      return redirect('/clientloginpage');
    }
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
