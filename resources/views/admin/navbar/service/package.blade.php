 @extends('layouts.app')
@section('title','Package')
@section('content')





<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0"> Package </h5>
			 
		</div>
		<div class="card-body">
			<div class="table-responsive">

			<form action="{{route('Apackagesearch')}}" method="post"  enctype="multipart/form-data" id="basicform" data-parsley-validate="">
				{{csrf_field()}}

				<div id="custom-search" class="top-search-bar">
                       <input class="form-control" type="text" id="packagesearch" name="packagesearch"  placeholder="Search..">
                </div>

                <button type="Submit" class="btn btn-primary">Submit</button>
             </form>



			<table id="example4" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Product Type</th>
							<th>Receiver's Name</th>
							<th>Mobile</th>
							<th>Address</th>
							<th>Weight</th>
							<th>Order Date</th>
							<th>Order Type</th>
							<th>Starting Place</th>
							<th>Order Status</th>
							<th>Product ID</th>
							<th>Image</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>



@foreach($package as $package) 
					<tbody>
						<tr>
							<td>{{$package->product_type}}</td>
							<td>{{$package->name}}</td>
							<td>{{$package->mobile}}</td>
							<td>{!!$package->address!!}</td>
							<td>{{$package->weight}}</td>
							<td>{{$package->order_date}}</td>
							<td>{{$package->order_type}}</td>
							<td>{{$package->starting_place}}</td>
							<td>{{$package->order_status}}</td>
							<td>{{$package->product_id}}</td>
							<td><img style="width: 100px" class="img-responsive" src="image/{{$package->image}}" alt=""></td>

							<td>
					          <a href="{{url('/packageeditreq',$package->id)}}" class="btn btn-success">Edit</a>
					      	</td>

					        <td>
					          <a href="{{url('/packagedelete',$package->id)}}" class="btn btn-danger">Delete</a>
					      	</td>
						</tr>
					</tbody>
@endforeach


					 
				</table>
			</div>
		</div>
	</div>
</div>





@endsection