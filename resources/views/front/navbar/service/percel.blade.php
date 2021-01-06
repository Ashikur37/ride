@extends('welcome')
@section('title','Parcel')
@section('content')




<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> Parcel</h2>
                                    <p class="fs-16 no-margin"> Title Info</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Parcel </li>
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
                                    <h2 class="title-1">Gift</h2>
                                    <div class="pad-10"></div>
                                    
                                    <a href="{{url('gift')}}"><img class="" alt="" src="front/assets/img/parcel/gift.png" /></a>

                                </div>
                            </div>

                            <div class="col-md-2 col-sm-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Document</h2>
                                    <div class="pad-10"></div>
                                    <a href="{{url('document')}}">
                                    <img class="" alt="" src="front/assets/img/parcel/doc.png" />
                                </a>
                                </div>
                            </div>

                            <div class="col-md-2  col-sm-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Package</h2>
                                    <div class="pad-10"></div>
                                <a href="{{url('package')}}">
                                    <img class="" alt="" src="front/assets/img/parcel/package.png" />
                                </a>

                                </div>
                            </div>

                            <div class="col-md-2  col-sm-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Medicine</h2>
                                    <div class="pad-10"></div>
                                    
                                    <img class="" alt="" src="front/assets/img/parcel/accessories.png" />

                                </div>
                            </div>

                            <div class="col-md-2  col-sm-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="more-about clrbg-before">
                                    <h2 class="title-1">Electronics</h2>
                                    <div class="pad-10"></div>
                                    
                                    <img class="" alt="" src="front/assets/img/parcel/electronics.png" />

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