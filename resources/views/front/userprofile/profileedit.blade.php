@extends('welcome')
@section('title','Profile Update')
@section('content')




<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> Profile Update</h2>
                                    <p class="fs-16 no-margin"> Update your Profile</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Profile </li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->
 





<form action="/profileedit" method="post"  enctype="multipart/form-data" class="col-md-10 mx-auto">
        {{csrf_field()}}

         @foreach($userprofile as $userprofile)

                    <div class="form-group">
                      <label for="id">ID</label>
                      <div>
                        <input type="text" class="form-control" id="id"
                        name="id" placeholder="ID" readonly="" value="{{$userprofile->id}}"/>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="name">Name</label>
                      <div>
                        <input type="text" class="form-control" id="name"
                        name="name" placeholder="Name" value="{{$userprofile->name}}"/>
                      </div>
                    </div>

                      <div class="form-group">
                      <label for="email">Email</label>
                      <div>
                        <input type="text" class="form-control" id="email"
                        name="email" placeholder="Email" value="{{$userprofile->email}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <div>
                        <input type="text" class="form-control" id="mobile"
                        name="mobile" placeholder="Mobile" value="{{$userprofile->mobile}}"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <div>
                        <input type="password" class="form-control" id="password"
                        name="password" placeholder="Password" value="{{$userprofile->password}}"/>
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="image">Image</label>
                      <div>
                        <input type="file" class="form-control" id="image"
                        name="image" placeholder="Image" value="{{$userprofile->image}}"/>
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





                <!-- Quote -->
                <section class="pt-80 quote-wrap">    
                    <div class="theme-container container ">  
                        <div class="row"> 
                            <div class="col-md-12">   
    















           



   </div>
  </div>
</div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->



@endsection