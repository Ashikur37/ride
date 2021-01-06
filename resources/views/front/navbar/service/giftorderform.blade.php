@extends('welcome')
@section('title','Gift')
@section('content')


 
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> Order Now </h2>
                        <p>  <strong> Fill out the receiver's information </strong> </p>                      

                        <div class="login-form clrbg-before">


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



                        <form action="{{route('giftinput')}}" method="post"  enctype="multipart/form-data" data-parsley-validate="">
                        {{csrf_field()}}

                            	<div class="form-group">
                            		<input type="text" name="product_type" id="product_type"  value="Gift" readonly="" class="form-control">
                            	</div>

                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Receiver's Full Name" class="form-control">
                                </div>

                            	<div class="form-group">
                            		<input type="text" name="receivers_mobile" id="receivers_mobile" placeholder="Receiver's Mobile No" class="form-control">
                            	</div>

                                <div class="form-group">
                                    <input type="text" name="address" id="address" placeholder="Receiver's Address" class="form-control">
                                </div>


                                <div class="form-group">
                                    <input type="text" name="weight" id="weight" placeholder="Product Weight" class="form-control">
                                </div>
 

                                 <div class="form-group">
                                    <input type="date" name="order_date" id="order_date" placeholder="Order Date" class="form-control">
                                </div>

                                <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <div class="col-sm-8"> <label class="title-2">  </label></div>
                                      <div class="col-sm-12"> 
                                        <div class="form-group">
                                            <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="select your Order Type" id="order_type" name="order_type">

                                              <option value="24-72 hrs">24-72 hrs</option>

                                              <option value=" 3-7 days"> 3-7 days</option>
                                              <option value="5-8 days">5-8 days</option>

                                              </select>
                                          </div>                                           
                                        </div>         
                                      </div> 

                                <div class="form-group">
                                    <input type="file" name="image" id="image" placeholder="Image" class="form-control">
                                </div>
                            	 

                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Submit </button>
                                </div>
                            </form>
                                                         
                        </div>                        
                    </div>
                    
                </div>
            </div>






            
       

 @endsection