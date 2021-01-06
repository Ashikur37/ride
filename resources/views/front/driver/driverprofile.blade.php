@extends('welcome')
@section('title','Profile')
@section('content')




<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    @foreach($driverprofile as $driverprofile)
                                    <h2 class="section-title no-margin"> {{$driverprofile->first_name}} {{$driverprofile->last_name}} </h2>
                                    
                                    <p class="fs-16 no-margin"> {{$driverprofile->mobile_number}}</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Profile </li>

                                    <li class="active"><a href="{{url('/driverprofileeditreq',$driverprofile->id)}}" class=""><b>Edit</b></a> </li>
                                     
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
            <div class="col-md-6">   
        
                <img style="width: 180px; height: 200px" class="img-responsive" src="image/{{$driverprofile->image}}" alt=""></td>





                <table border="1" width="100%">
                    <tr>
                       <td>{{$driverprofile->nidpassport}}</td>
                       <td>{{$driverprofile->np_number}}</td>
                    </tr>     
                </table>
                @endforeach
                 <br>

                 <br>
 
            </div>
            
        </div>
    </div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->



@endsection