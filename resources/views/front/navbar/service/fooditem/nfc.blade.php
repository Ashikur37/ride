@extends('welcome')
@section('title','tea & juice bar ')
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
    




<h2>Drinks</h2>

  
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Coca-Cola/Pepsi/7up/Sprite</th>
        <th>Minarel Water 500ml</th>
        <th>Minarel Water 1.5Liter</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>25 tk    <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>20 tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>30  tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>



      </tr>

    </tbody>
  </table>



  <h2>Coffe Itam</h2>

            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Black Coffee</th>
        <th>Cold Coffee</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>50 tk    <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>90 tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        



      </tr>

    </tbody>
  </table>
</div>


        <h2>Milk Sheke Item</h2>

            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Bannana Milk Sheke</th>
        <th>Oryou Milk Shake</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>80 tk    <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>130 tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>


      </tr>

    </tbody>
  </table>



   

           



   </div>
  </div>
</div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->



@endsection