@extends('welcome')
@section('title','Food')
@section('content')




<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> Page Title </h2>
                                    <p class="fs-16 no-margin"> Title Info</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Title name </li>
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
    





<!-- <div class="form-row">
      <div class="form-group col-md-6">
                <label for="first_name">Kolapata Resturant <span class="required-star">*</span></label>
                <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                     data-toggle="tooltip" title="Food Type" id="foodtype" name="foodtype">                    
                </select>
      </div>    
</div> -->

<button class="btn-1 " type="submit"><a href="{{url('tea')}}" class="gray-clr">Kolapata Resturant</a></button>


<!-- <div class="form-row">
      <div class="form-group col-md-6">
                <label for="first_name">NFC Resturant <span class="required-star">*</span></label>
                <select data-bind="in:value" data-name="package" class="selectpicker form-control" data-live-search="true" data-width="100%"
                     data-toggle="tooltip" title="Food Type" id="foodtype" name="foodtype">

                      <option value="Tea"><a href="{{url('')}}" class="gray-clr"></a>Menu</option>
                                        
                </select>
      </div>     
</div> -->
<button class="btn-1 " type="submit"><a href="{{url('nfc')}}" class="gray-clr">NFC Resturant</a></button>



           



   </div>
  </div>
</div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->



@endsection