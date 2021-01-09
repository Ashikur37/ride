@extends('layouts.app')
@section('title','Driver Edit ')
@section('content')


      

<form action="/driveredit" method="post"  enctype="multipart/form-data" class="col-md-10 mx-auto">
        {{csrf_field()}}

               @foreach($driver as $driver)
<div class="form-group">
                      <label for="id">ID</label>
                      <div>
                        <input type="text" class="form-control" id="id"
                        name="id" placeholder="id" readonly="" value="{{$driver->id}}"/>
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label for="driver_type">driver_type</label>
                      <div>
                        <input type="text" class="form-control" id="driver_type"
                        name="driver_type" placeholder="driver_type name" value="{{$driver->driver_type}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="first_name">first_name</label>
                      <div>
                        <input type="text" class="form-control" id="first_name"
                        name="first_name" placeholder="first_name" value="{{$driver->first_name}}"/>
                      </div>
                    </div>
 

                    <div class="form-group">
                      <label for="last_name">last_name</label>
                      <div>
                        <input type="text" class="form-control" id="last_name"
                        name="last_name" placeholder="last_name" value="{{$driver->last_name}}"/>
                      </div>
                  </div>

                    <div class="form-group">
                      <label for="np_number">np_number</label>
                      <div>
                        <input type="text" class="form-control" id="np_number"
                        name="np_number" placeholder="np_number" value="{{$driver->np_number}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="gender">gender</label>
                      <div>
                        <input type="text" class="form-control" id="gender"
                        name="gender" placeholder="gender" value="{{$driver->gender}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="dob">dob</label>
                      <div>
                        <input type="text" class="form-control" id="dob"
                        name="dob" placeholder="dob" value="{{$driver->dob}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="mobile_number">mobile number</label>
                      <div>
                        <input type="text" class="form-control" id="mobile_number"
                        name="mobile_number" readonly="" placeholder="mobile_number" value="{{$driver->mobile_number}}"/>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="city">city</label>
                      <div>
                        <input type="text" class="form-control" id="city"
                        name="city" readonly="" placeholder="city" value="{{$driver->city}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="vehicle_registration">vehicle_registration</label>
                      <div>
                        <input type="text" class="form-control" id="vehicle_registration"
                        name="vehicle_registration" readonly="" placeholder="vehicle_registration" value="{{$driver->vehicle_registration}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="vehicle_number">vehicle_number</label>
                      <div>
                        <input type="text" class="form-control" id="vehicle_number"
                        name="vehicle_number" placeholder="vehicle_number" value="{{$driver->vehicle_number}}"/>
                      </div>
                    </div>

            

                    <div class="form-group">
                      <label for="license_document">license_document</label>
                      <div>
                        <input type="text" class="form-control" id="license_document"
                        name="license_document" placeholder="vehicle number" value="{{$driver->license_document}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="image">image</label>
                      <div>
                        <input type="text" class="form-control" id="image"
                        name="image"  placeholder="image" value="{{$driver->image}}"/>
                      </div>
                    </div>

                    
                     <div class="form-group">
                      <label for="approval">approval</label>
                      <div>
                        <input type="text" class="form-control" id="approval"
                        name="approval"  placeholder="approval" value="{{$driver->approval}}"/>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="referral_code">referral_code</label>
                      <div>
                        <input type="text" class="form-control" id="referral_code"
                        name="referral_code"  placeholder="referral_code" value="{{$driver->referral_code}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="password">password</label>
                      <div>
                        <input type="text" class="form-control" id="password"
                        name="password"  placeholder="password" value="{{$driver->password}}"/>
                      </div>
                    </div>




                    <div class="form-group">
                      <button type="submit" id="" name="" value="" class="btn btn-primary">Save</button>
                  </div>
 @endforeach
 
                </form>

                 

@endsection