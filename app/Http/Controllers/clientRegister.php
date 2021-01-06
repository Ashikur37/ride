<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\clientinfo;
use Response;
class clientRegister extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


      public function clientregister()
    {
        return view('front.userprofile.clientregister');
    }



     public function clientinput(Request $request)
     {
         $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'password'=>'required',
             
             ]);
         

        if($request->hasFile('image'))
        {
            $file=$request->file('image');
        $fileName=time().'.'.$file->getClientOriginalExtension();
        $file->move('image/',$fileName);

        }

        else
        {
            $fileName = 'no_image.png';
        }



        $clientinfos = new clientinfo;
        $clientinfos->name = $request->input('name');
        $clientinfos->email = $request->input('email');
        $clientinfos->mobile = $request->input('mobile');
        $clientinfos->password = $request->input('password');

        $clientinfos->image = $fileName;  
        $clientinfos->save();


        return redirect('clientregister')->with('success', 'Insert successfully');
    }



  


    // Client Login

 public function clientloginpage()
    {
        return view('front.userprofile.clientloginpage');
    }




public function clientlogin(Request $request)
    {

        $clientlogin= DB::select('select count(*) chk from clientinfos where mobile=? and password=?', [$request->mobile,$request->password]);


        foreach ($clientlogin as $key ) {


            if ($key->chk==1) {
                 

                 session(['userchklogin' => $request->mobile]);


             return redirect  ('/userprofile');

         }else
         {
             
            session(['userchklogin' => 0]);
             session()->flash('userchklogin','Login Faild');

           return view ('front.userprofile.clientloginpage');
       }

   }


}






public function clientlogout()
{
    session(['userchklogin' => 0]);
    return redirect('/');
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
