@extends('layouts.app')
@section('title','Car Edit Form')
@section('content')


<form action="/caredit" method="post"  enctype="multipart/form-data" class="col-md-10 mx-auto">
        {{csrf_field()}}

         @foreach($car as $car)

                    <div class="form-group">
                      <label for="id">ID</label>
                      <div>
                        <input type="text" class="form-control" id="id"
                        name="id" placeholder="id" readonly="" value="{{$car->id}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="image">image</label>
                      <div>
                        <input type="text" class="form-control" id="image"
                        name="image" readonly="" placeholder="image" value="{{$car->image}}"/>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="firstname">first name</label>
                      <div>
                        <input type="text" class="form-control" id="firstname"
                        firstname="firstname" placeholder="first name" value="{{$car->firstname}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="lastname">last name</label>
                      <div>
                        <input type="text" class="form-control" id="lastname"
                        name="mobile" placeholder="last name" value="{{$car->lastname}}"/>
                      </div>
                    </div>
 

                    <div class="form-group">
                      <label for="nidpassport">nid passport</label>
                      <div>
                        <input type="text" class="form-control" id="nidpassport"
                        name="nidpassport" placeholder="nid passport" value="{{$car->nidpassport}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="number">number</label>
                      <div>
                        <input type="text" class="form-control" id="number"
                        name="number" placeholder="number" value="{{$car->number}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="gender">gender</label>
                      <div>
                        <input type="text" class="form-control" id="gender"
                        name="gender" placeholder="gender" value="{{$car->gender}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="dateofbirth">date of birth</label>
                      <div>
                        <input type="text" class="form-control" id="dateofbirth"
                        name="dateofbirth" placeholder="date of birth" value="{{$car->dateofbirth}}"/>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="mobilenumber">mobile number</label>
                      <div>
                        <input type="text" class="form-control" id="mobilenumber"
                        name="mobilenumber" readonly="" placeholder="mobile number" value="{{$car->mobilenumber}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="image">image</label>
                      <div>
                        <input type="text" class="form-control" id="image"
                        name="image" readonly="" placeholder="image" value="{{$car->image}}"/>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="city">city</label>
                      <div>
                        <input type="text" class="form-control" id="city"
                        name="city" readonly="" placeholder="city" value="{{$car->city}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="vehicleregistration">vehicle registration</label>
                      <div>
                        <input type="text" class="form-control" id="vehicleregistration"
                        name="vehicleregistration" placeholder="vehicle registration" value="{{$car->vehicleregistration}}"/>
                      </div>
                    </div>

            

                    <div class="form-group">
                      <label for="vehiclenumber">vehicle number</label>
                      <div>
                        <input type="text" class="form-control" id="vehiclenumber"
                        name="order_status" placeholder="vehicle number" value="{{$car->vehiclenumber}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="licensedocument">license document</label>
                      <div>
                        <input type="text" class="form-control" id="licensedocument"
                        name="licensedocument"  placeholder="license document" value="{{$car->licensedocument}}"/>
                      </div>
                    </div>

                      <div class="form-group">
                      <label for="referralcode">referral code</label>
                      <div>
                        <input type="file" class="form-control" id="referralcode"
                        name="referralcode" placeholder="referral code" value="{{$car->referralcode}}"/>
                      </div>
                    </div>





                    <div class="form-group">
                      <button type="submit" id="" name="" value="" class="btn btn-primary">Save</button>
                  </div>
 @endforeach
 
                </form>

                 <script>
                  CKEDITOR.replace( 'features' );
                 </script>

@endsection