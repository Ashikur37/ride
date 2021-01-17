 @extends('layouts.app')
@section('title','Driver')
@section('content')





<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0"> Driver </h5>
			 
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
							<th>Driver Type</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>NID/Passport</th>
							<th>NID/Passport Number</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Mobile No</th>
							<th>City</th>
							<th>Vehicle Registration Type</th>
							<th>Vehicle Registration No</th>
							<th>License Document</th>
							<th>Password</th>
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
							<td>{{$driver->vehicle_number}}</td>
							<td> <a class="viewer" href="pdf/{{$driver->license_document}}" style="text-decoration: none;"> {{$driver->license_document}}</a>

                			</td>
                			<td>{{$driver->password}}</td>
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