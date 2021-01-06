 @extends('layouts.app')
@section('title','car')
@section('content')





<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0"> car </h5>
			 
		</div>
		<div class="card-body">
			<div class="table-responsive">

			<form action="{{route('Acarsearch')}}" method="post"  enctype="multipart/form-data" id="basicform" data-parsley-validate="">
				{{csrf_field()}}

				<div id="custom-search" class="top-search-bar">
                       <input class="form-control" type="text" id="parcelsearch" name="carsearch"  placeholder="Search..">
                </div>

                <button type="Submit" class="btn btn-primary">Submit</button>
             </form>



			<table id="example4" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>NID Passport</th>
							<th>Number</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Mobile Number</th>
							<th>Image</th>
							<th>City</th>
							<th>Vehicle Registration</th>
							<th>Vehicle Number</th>
							<th>License Document</th>
							<th>Referral Code</th>
							<th>Approval</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>



@foreach($car as $car) 
					<tbody>
						<tr>
							<td>{{$car->image}}</td>
							<td>{{$car->first_name}}</td>
							<td>{{$car->last_name}}</td>
							<td>{!!$car->nid_passport!!}</td>
							<td>{{$car->number}}</td>
							<td>{{$car->gender}}</td>
							<td>{{$car->date_of_birth}}</td>
							<td>{{$car->mobile_number}}</td>
							<td>{{$car->image}}</td>
							<td>{{$car->city}}</td>
							<td>{{$car->vehicle_registration}}</td>
							<td>{{$car->vehicle_number}}</td>
							<td>{{$car->license_document}}</td>
							<td>{{$car->referral_code}}</td>
							<td><img style="width: 100px" class="img-responsive" src="image/{{$car->image}}" alt=""></td>


							<td> 

            @php
            {{
              $chk=DB::select('select IFNULL(approval,0)approval  from parcels c, clientinfos a where a.mobile=c.mobile and c.mobile=? order by a.mobile',[$car->mobile]);
            }}
            @endphp

            @foreach($chk as $chk)
            @if($chk->approval!=1)
            <a href="{{url('/orderapproval',$car->mobile)}}"  class="btn btn-danger">Approve</a>
            @else
            <a href="{{url('/orderapproval',$car->mobile)}}"  class="btn btn-success">Approved</a>
            @endif
            @endforeach
            
          </td>

							<td>
					          <a href="{{url('/careditreq',$car->id)}}" class="btn btn-success">Edit</a>
					      	</td>

					        <td>
					          <a href="{{url('/cardelete',$car->id)}}" class="btn btn-danger">Delete</a>
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