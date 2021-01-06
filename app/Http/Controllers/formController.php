<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\laptop;
class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function __construct()
    {
        $this->middleware('auth');
    }






  public function laptopform()
    {
        return view('admin.laptop.laptopform');
    }



     public function laptopinput(Request $request)
     {
         $this->validate($request, ['name'=>'required'
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


        $laptops = new laptop;
        $laptops->name = $request->input('name');
        $laptops->brand = $request->input('brand');
        $laptops->features = $request->input('features');
        $laptops->code = $request->input('code');
        $laptops->price = $request->input('price');
         
        $laptops->image = $fileName;
        $laptops->save();

        return redirect('laptopform')->with('success', 'Insert successfully');
    }




     public function laptopinput(Request $request)
     {
         $this->validate($request, ['name'=>'required'
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


        $laptops = new laptop;
        $laptops->name = $request->input('name');
        $laptops->brand = $request->input('brand');
        $laptops->features = $request->input('features');
        $laptops->code = $request->input('code');
        $laptops->price = $request->input('price');
         
        $laptops->image = $fileName;
        $laptops->save();

        return redirect('laptopform')->with('success', 'Insert successfully');
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
