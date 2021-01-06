@extends('layouts.app')
@section('title','bike Edit Form')
@section('content')


<form action="/bikeedit" method="post"  enctype="multipart/form-data" class="col-md-10 mx-auto">
        {{csrf_field()}}

         @foreach($bike as $bike)

                    <div class="form-group">
                      <label for="id">ID</label>
                      <div>
                        <input type="text" class="form-control" id="id"
                        name="id" placeholder="id" readonly="" value="{{$bike->id}}"/>
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label for="firstname">first name</label>
                      <div>
                        <input type="text" class="form-control" id="firstname"
                        firstname="firstname" placeholder="first name" value="{{$bike->firstname}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="lastname">last name</label>
                      <div>
                        <input type="text" class="form-control" id="lastname"
                        name="mobile" placeholder="last name" value="{{$bike->lastname}}"/>
                      </div>
                    </div>
 

                    <div class="form-group">
                      <label for="nidpassport">nid passport</label>
                      <div>
                        <input type="text" class="form-control" id="nidpassport"
                        name="nidpassport" placeholder="nid passport" value="{{$bike->nidpassport}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="number">number</label>
                      <div>
                        <input type="text" class="form-control" id="number"
                        name="number" placeholder="number" value="{{$bike->number}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="gender">gender</label>
                      <div>
                        <input type="text" class="form-control" id="gender"
                        name="gender" placeholder="gender" value="{{$bike->gender}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="dateofbirth">date of birth</label>
                      <div>
                        <input type="text" class="form-control" id="dateofbirth"
                        name="dateofbirth" placeholder="date of birth" value="{{$bike->dateofbirth}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="mobilenumber">mobile number</label>
                      <div>
                        <input type="text" class="form-control" id="mobilenumber"
                        name="mobilenumber" readonly="" placeholder="mobile number" value="{{$bike->mobilenumber}}"/>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="image">image</label>
                      <div>
                        <input type="text" class="form-control" id="image"
                        name="image" readonly="" placeholder="image" value="{{$bike->image}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="city">city</label>
                      <div>
                        <input type="text" class="form-control" id="city"
                        name="city" readonly="" placeholder="city" value="{{$bike->city}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="vehicleregistration">vehicle registration</label>
                      <div>
                        <input type="text" class="form-control" id="vehicleregistration"
                        name="vehicleregistration" placeholder="vehicle registration" value="{{$bike->vehicleregistration}}"/>
                      </div>
                    </div>

            

                    <div class="form-group">
                      <label for="vehiclenumber">vehicle number</label>
                      <div>
                        <input type="text" class="form-control" id="vehiclenumber"
                        name="order_status" placeholder="vehicle number" value="{{$bike->vehiclenumber}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="licensedocument">license document</label>
                      <div>
                        <input type="text" class="form-control" id="licensedocument"
                        name="licensedocument"  placeholder="license document" value="{{$bike->licensedocument}}"/>
                      </div>
                    </div>

                      <div class="form-group">
                      <label for="referralcode">referral code</label>
                      <div>
                        <input type="file" class="form-control" id="referralcode"
                        name="referralcode" placeholder="referral code" value="{{$bike->referralcode}}"/>
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