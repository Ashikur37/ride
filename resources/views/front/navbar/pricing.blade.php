@extends('welcome')
@section('title','Pricing')
@section('content')




<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> PRICING & PLANS </h2>
                                    <p class="fs-16 no-margin"> Know about our pricing & plans</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">PRICING </li>
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
                                 
                     
    <h2>Same City Delivery</h2>

  
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Delivery Time</th>
        <th>upto 500gm</th>
        <th>500gm to 1 kilo</th>
        <th>1kilo to 2 kilo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>24 Hours</td>
        <td>BDT 50</td>
        <td>BDT 60</td>
        <td>BDT 80</td>
      </tr>
    </tbody>
  </table>
</div>


 
      <h2>Outside City Delivery</h2>

  
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Delivery Time</th>
        <th>upto 500gm</th>
        <th>500gm to 1 kilo</th>
        <th>1kilo to 2 kilo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>72 Hours</td>
        <td>BDT 100</td>
        <td>BDT 120</td>
        <td>BDT 150</td>
      </tr>
    </tbody>
  </table>
</div>




  
                                
                            </div>
                        </div>

                    </div>
                </section>
                <!-- /.Quote -->


            </article>
            <!-- /.Content Wrapper -->



@endsection