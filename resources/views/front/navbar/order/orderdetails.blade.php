@extends('welcome')
@section('title','Order Details')
@section('content')




<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> My Order Details </h2>
                                    <p class="fs-16 no-margin"> Title Info</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Order Details </li>
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
    

 


<h1>Complete Order List</h1>

  
  <table class="table ">
  <thead>
    <tr>
    <th>Product Type</th>
    <th>Weight</th>
     <th>Date</th> 
     <th>Order Type</th>
     <th>Status</th>
     <th>Product ID</th>
  </tr>
  </thead>

@foreach($approval as $approval)
<tbody>
    <tr>
        <td>{{$approval->product_type}}</td>
        <td>{{$approval->weight}}</td>
        <td>{{$approval->order_date}}</td>
        <td>{{$approval->order_type}}</td>

        <td>{{$approval->order_status}}</td>
        <td>{{$approval->product_id}}</td>
    </tr>
  </tbody>
  @endforeach
</table>


@foreach($pending as $pending)
<h1 style="color: red">Pending Order List</h1>
<h4 style="color: red">Please clear you payment first</h4>
  
  <table class="table ">
  <thead>
    <tr>
    <th>Product Type</th>
    <th>Weight</th>
     <th>Date</th> 
     <th>Order Type</th>
     <th>Status</th>
     <th>Product ID</th>
  </tr>
  </thead>


<tbody>
    <tr>
        <td>{{$pending->product_type}}</td>
        <td>{{$pending->weight}}</td>
        <td>{{$pending->order_date}}</td>
        <td>{{$pending->order_type}}</td>

        <td>{{$pending->order_status}}</td>
        <td>{{$pending->product_id}}</td>
    </tr>
  </tbody>
  @endforeach
</table>

           



   </div>
  </div>
</div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->



@endsection