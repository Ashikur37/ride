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
                                    @foreach($userprofile as $userprofile)
                                    <h2 class="section-title no-margin"> {{$userprofile->name}} </h2>
                                    
                                    <p class="fs-16 no-margin"> {{$userprofile->mobile}}</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Profile </li>

                                    <li class="active"><a href="{{url('/profileeditreq',$userprofile->id)}}" class=""><b>Edit</b></a> </li>
                                     
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
        
                <img style="width: 180px; height: 200px" class="img-responsive" src="image/{{$userprofile->image}}" alt=""></td>




                <table border="1">
                    <tr>
                       
                    </tr>     
                </table>
                @endforeach
                 <br>

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