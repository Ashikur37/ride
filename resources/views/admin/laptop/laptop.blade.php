@extends('layouts.app')
@section('title','Laptop')
@section('content')





<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0"> Laptop </h5>
			 
		</div>
		<div class="card-body">
			<div class="table-responsive">

			<form action="{{route('Alaptopsearch')}}" method="post"  enctype="multipart/form-data" id="basicform" data-parsley-validate="">
				{{csrf_field()}}

				<div id="custom-search" class="top-search-bar">
                       <input class="form-control" type="text" id="laptopsearch" name="laptopsearch"  placeholder="Search..">
                </div>

                <button type="Submit" class="btn btn-primary">Submit</button>
             </form>



			<table id="example4" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Name</th>
							<th>Brand</th>
							<th>Features</th>
							<th>Product Code</th>
							<th>Price</th>
							<th>Image</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>



@foreach($laptop as $laptop) 
					<tbody>
						<tr>
							<td>{{$laptop->name}}</td>
							<td>{{$laptop->brand}}</td>
							<td>{!!$laptop->features!!}</td>
							<td>{{$laptop->code}}</td>
							<td>{{$laptop->price}}</td>
							<td><img style="width: 100px" class="img-responsive" src="image/{{$laptop->image}}" alt=""></td>

							<td>
					          <a href="{{url('/laptopeditreq',$laptop->id)}}" class="btn btn-success">Edit</a>
					      	</td>

					        <td>
					          <a href="{{url('/laptopdelete',$laptop->id)}}" class="btn btn-danger">Delete</a>
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