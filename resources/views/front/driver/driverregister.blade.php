@extends('welcome')
@section('title','Vehicle Registration')
@section('content')

<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> Vehicle Registration</h2>
                                    <p class="fs-16 no-margin"> Please fill up the form</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Vehicle Registration </li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->



                <!-- Quote -->
                <section class="pt-80 quote-wrap">    
                    <div class="theme-container container ">  
                        <div class="row"> 
                            <div class="col-md-12">   
    


                              @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))

  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert">×</button>
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif


<form action="{{route('driverinput')}}" method="post"  enctype="multipart/form-data" data-parsley-validate="">
                        {{csrf_field()}}
  
    <div class="form-group col-md-6">
                <label for="driver_type">Vehicle Type <span class="required-star">*</span></label>
                <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                     data-toggle="tooltip" title="Vehicle Type" id="driver_type" name="driver_type">

                      <option value="Bike">Bike</option>
                      <option value="Car"> Car</option>
                                                        
                </select>
    </div>

<div class="form-row">
      <div class="form-group col-md-6">
                <label for="first_name"> First Name(same as NID/Lincense) <span class="required-star">*</span></label>
                <input type="text" class="form-control required" id="first_name" name="first_name" placeholder="Enter your first name" data-errorm="This field is required" maxlength="20" required>
      </div>
      <div class="form-group col-md-6">
                <label for="last_name">Last Name(same as NID/Lincense) <span class="required-star">*</span></label>
                <input type="text" class="form-control required" id="last_name" name="last_name" placeholder="Enter your last name" data-errorm="This field is required" maxlength="20" required>
      </div>
</div>



<div class="form-row">
      <div class="form-group col-md-6">
                <label for="nidpassport">Select Document Type <span class="required-star">*</span></label>
               <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                     data-toggle="tooltip" title="NID/Passport Number" id="nidpassport" name="nidpassport">

                      <option value="NID">NID</option>
                      <option value=" Passport"> Passport</option>
                                        
                </select>
      </div>

      <div class="form-group col-md-6">
          <label for="np_number">NID/Passport Number</label>
             <input type="text" class="form-control" id="np_number" name="np_number" placeholder="Enter your NID/Passport Number" maxlength="20">
     </div>
</div>




<div class="form-row">
      <div class="form-group col-md-6">
                <label for="first_name">Gender <span class="required-star">*</span></label>
                <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                     data-toggle="tooltip" title="Gender" id="gender" name="gender">

                      <option value="Male">Male</option>
                      <option value="Female"> Female</option>
                      <option value="Others">Others</option>
                                        
                </select>
      </div>
      <div class="form-group col-md-6">
          <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter your Number" maxlength="20">
     </div>

     <div class="form-row">
      <div class="form-group col-md-6">
          <label for="image">Image</label>
             <input type="file" class="form-control" id="image" name="image" placeholder="Enter your Number" maxlength="20">
     </div>
</div>

      <div class="form-group col-md-6">
          <label for="mobile_number">Mobile Number</label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile Number" maxlength="20">
     </div>
     
     <div class="form-group col-md-6">
                <label for="city">City <span class="required-star">*</span></label>
                <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                     data-toggle="tooltip" title="City" id="city" name="city">

                      <option value="Dhaka">Dhaka</option>
                      <option value="Comilla"> Comilla</option>
                     
                                        
                </select>
      </div>

</div>




<div class="form-row">
      <div class="form-group col-md-6">
                <label for="document_type">Vehicle Registration Type<span class="required-star">*</span></label>
               <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                     data-toggle="tooltip" title="Vehicle Registration Type" id="vehicle_registration" name="vehicle_registration">

                       <option value="DHK METRO">DHK METRO</option>
                      <option value=" CTG METRO"> CTG METRO</option>
                      <option value=" SYL METRO"> SYL METRO</option>
                                        
                </select>
      </div>

      <div class="form-group col-md-6">
          <label for="vehicle_number">Vehicle Number</label>
             <input type="text" class="form-control" id="vehicle_number" name="vehicle_number" placeholder="Enter your Number" maxlength="20">
     </div>
</div>


<div class="form-row">
      <div class="form-group col-md-6">
          <label for="license_document">License Document</label>
             <input type="file" class="form-control" id="license_document" name="license_document" placeholder="Enter your Number" maxlength="20">
     </div>
</div>

<div class="form-row">
      <div class="form-group col-md-6">
          <label for="password">Password</label>
             <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" maxlength="20">
     </div>
</div>




<div class="form-row">

      <div class="form-group col-md-12">
        <div >
          <button class="btn-1 " type="submit" style="width: 100%"> 
          AGREE & SIGNUP</button>
          </div>
     </div>
</div>




 
                 

           


 

      
</form>
    

 
           



   </div>
  </div>
</div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->



@endsection