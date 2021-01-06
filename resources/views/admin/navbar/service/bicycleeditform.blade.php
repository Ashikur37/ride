@extends('layouts.app')
@section('title','bicycle Edit Form')
@section('content')


<form action="/bicycleedit" method="post"  enctype="multipart/form-data" class="col-md-10 mx-auto">
        {{csrf_field()}}

         @foreach($bicycle as $bicycle)

                    <div class="form-group">
                      <label for="id">ID</label>
                      <div>
                        <input type="text" class="form-control" id="id"
                        name="id" placeholder="id" readonly="" value="{{$bicycle->id}}"/>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="firstname">firstname</label>
                      <div>
                        <input type="text" class="form-control" id="firstname"
                        firstname="firstname" placeholder="firstname" value="{{$bicycle->firstname}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="lastname">lastname</label>
                      <div>
                        <input type="text" class="form-control" id="lastname"
                        name="mobile" placeholder="lastname" value="{{$bicycle->lastname}}"/>
                      </div>
                    </div>
 

                    <div class="form-group">
                      <label for="nidpassport">nidpassport</label>
                      <div>
                        <input type="text" class="form-control" id="nidpassport"
                        name="nidpassport" placeholder="nidpassport" value="{{$bicycle->nidpassport}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="number">number</label>
                      <div>
                        <input type="text" class="form-control" id="number"
                        name="number" placeholder="number" value="{{$bicycle->number}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="gender">gender</label>
                      <div>
                        <input type="text" class="form-control" id="gender"
                        name="gender" placeholder="gender" value="{{$bicycle->gender}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="dateofbirth">dateofbirth</label>
                      <div>
                        <input type="text" class="form-control" id="dateofbirth"
                        name="dateofbirth" placeholder="dateofbirth" value="{{$bicycle->dateofbirth}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="mobilenumber">mobile number</label>
                      <div>
                        <input type="text" class="form-control" id="mobilenumber"
                        name="mobilenumber" readonly="" placeholder="mobile_number" value="{{$bicycle->mobilenumber}}"/>
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="image">image</label>
                      <div>
                        <input type="text" class="form-control" id="image"
                        name="image" readonly="" placeholder="image" value="{{$bicycle->image}}"/>
                      </div>
                    </div>




                     <div class="form-group">
                      <label for="city">city</label>
                      <div>
                        <input type="file" class="form-control" id="city"
                        name="city" placeholder="city" value="{{$bicycle->city}}"/>
                      </div>
                    </div>



                     <div class="form-group">
                      <label for="filedocument">file document</label>
                      <div>
                        <input type="text" class="form-control" id="filedocument"
                        name="filedocument" readonly="" placeholder="file_document" value="{{$bicycle->filedocument}}"/>
                      </div>
                    </div>

                   

                      <div class="form-group">
                      <label for="referralcode">referral code</label>
                      <div>
                        <input type="file" class="form-control" id="referralcode"
                        name="referralcode" placeholder="referral_code" value="{{$bicycle->referralcode}}"/>
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