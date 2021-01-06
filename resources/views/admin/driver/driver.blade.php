 @extends('layouts.app')
@section('title','Parcel')
@section('content')





<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0"> Parcel </h5>
			 
		</div>
		<div class="card-body">
			<div class="table-responsive">

			<form action="{{route('Adriversearch')}}" method="post"  enctype="multipart/form-data" id="basicform" data-parsley-validate="">
				{{csrf_field()}}

				<div id="custom-search" class="top-search-bar">
                       <input class="form-control" type="text" id="parcelsearch" name="parcelsearch"  placeholder="Search..">
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
							<th>Approval</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>



@foreach($driver as $driver) 
					<tbody>
						<tr>
							<td>{{$driver->driver_type}}</td>
							<td>{{$driver->first_name}}</td>
							<td>{{$driver->last_name}}</td>
							<td>{!!$driver->nidpassport!!}</td>
							<td>{{$driver->np_number}}</td>
							<td>{{$driver->gender}}</td>
							<td>{{$driver->dob}}</td>
							<td>{{$driver->mobile_number}}</td>
							<td>{{$driver->city}}</td>
							<td>{{$driver->vehicle_registration}}</td>
							<td><img style="width: 100px" class="img-responsive" src="image/{{$driver->image}}" alt=""></td>


							<td> 
 
            @php
            {{
              $chk=DB::select('select IFNULL(approval,0)approval  from drivers c where  c.mobile_number=?',[$driver->mobile_number]);
            }}
            @endphp

            @foreach($chk as $chk)
            @if($chk->approval!=1)
            <a href="{{url('/driverapproval',$driver->mobile_number)}}"  class="btn btn-danger">Approve</a>
            @else
            <a href="{{url('/driverapproval',$driver->mobile_number)}}"  class="btn btn-success">Approved</a>
            @endif
            @endforeach
            
          </td>

							<td>
					          <a href="{{url('/drivereditreq',$driver->id)}}" class="btn btn-success">Edit</a>
					      	</td>

					        <td>
					          <a href="{{url('/driverdelete',$driver->id)}}" class="btn btn-danger">Delete</a>
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