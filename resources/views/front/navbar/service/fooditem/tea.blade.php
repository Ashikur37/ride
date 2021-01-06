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
    




<h2>Tea & Juice Bar</h2>

  
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Lacchi  700ml</th>
        <th>Lacchi  500ml</th>
        <th>Coffee Cappuccino</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>900 tk    <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>70 tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>60  tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>



      </tr>

    </tbody>
  </table>



  <h2>Special Tanduri</h2>

            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Beef Achari</th>
        <th>Chicken Achari</th>
        <th>Brain Masala(Beef)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>300 tk    <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>300 tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>200  tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>



      </tr>

    </tbody>
  </table>
</div>


        <h2>Grill</h2>

            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Chicken Grill Full</th>
        <th>Chicken Grill Half</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>320 tk    <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>160 tk  <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>


      </tr>

    </tbody>
  </table>



   <h2>Naan</h2>

            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Plain Naan</th>
        <th>Butter Naan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>40 tk    <div class="form-group">
                                    <button class="btn-1 " type="add"> Add </button>
                                </div></td>
        <td>45 tk  <div class="form-group">
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