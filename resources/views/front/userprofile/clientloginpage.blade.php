@extends('welcome')
@section('title','Login')
@section('content')


 
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> SIGN IN </h2>
                        <p> Sign in to <strong> Delivery Service Provider </strong> for getting all details </p>                        


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




    <form action="{{route('clientlogin')}}" method="post"  enctype="multipart/form-data" data-parsley-validate="">
    {{csrf_field()}}
                            	 

                            	<div class="form-group">
                            		<input type="text" name="mobile" id="mobile" placeholder="Mobile No" class="form-control">
                            	</div>

                            	<div class="form-group">
                            		<input type="password" name="password" id="password" placeholder="Password" class="form-control">
                            	</div>


                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in</button>
                                </div>
                                 @if (Session('userchklogin')!='0')
      <p>
          {{Session::get('userchklogin')}}
          </p>
    
    @endif

                            </form>
                                                         
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="#" class="white-clr"> Don’t have an account? 

                        </a>  
                        <h2 class="title-2"> <a data-toggle="modal" href="{{url('/clientregister')}}" class="green-clr under-line">CREATE A FREE ACCOUNT</a> </h2>

                        
                    </div>
                </div>
            </div>
       

 @endsection