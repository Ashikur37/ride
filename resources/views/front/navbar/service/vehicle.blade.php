@extends('welcome')
@section('title','vehicle')
@section('content')




<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> vehicle</h2>
                                    <p class="fs-16 no-margin"> Title Info</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">vehicle </li>
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
    




 <!-- More About Us -->
                <section class="pad-30 more-about-wrap">
                    <div class="theme-container container pb-100">               
                        <div class="row">
                            <div class="col-md-2 col-sm-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Bike</h2>
                                    <div class="pad-10"></div>
                                    
                                   <a href="{{url('bikeregistration')}}"><img class="" alt="" src="front/assets/img/vehicle/vehicle.png" /></a>

                                </div>
                            </div>

                            <div class="col-md-2 col-sm-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Car</h2>
                                    <div class="pad-10"></div>
                                    <a href="{{url('carregistration')}}">
                                    <img class="" alt="" src="front/assets/img/vehicle/car1.jpg" />
                                </a>
                                </div>
                            </div>

                            <div class="col-md-2  col-sm-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Bicycle</h2>
                                    <div class="pad-10"></div>
                                <a href="{{url('bicycleregistration')}}">
                                    <img class="" alt="" src="front/assets/img/vehicle/bicycle.jpg" />
                                </a>

                                </div>
                            </div>

                            

                          




                        </div>
                        
                    </div>
                </section>
                <!-- /.More About Us -->

           



   </div>
  </div>
</div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->





     

@endsection