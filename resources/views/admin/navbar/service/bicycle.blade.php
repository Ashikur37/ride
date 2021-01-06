 @extends('layouts.app')
@section('title','bicycle')
@section('content')





<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0"> bicycle </h5>
			 
		</div>
		<div class="card-body">
			<div class="table-responsive">

			<form action="{{route('Abicyclesearch')}}" method="post"  enctype="multipart/form-data" id="basicform" data-parsley-validate="">
				{{csrf_field()}}

				<div id="custom-search" class="top-search-bar">
                       <input class="form-control" type="text" id="parcelsearch" name="bicyclesearch"  placeholder="Search..">
                </div>

                <button type="Submit" class="btn btn-primary">Submit</button>
             </form>



			<table id="example4" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>Image</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>NID Passport</th>
							<th>Number</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Mobile Number</th>
							<th>Image</th>
							<th>City</th>
							<th>File Document</th>
							<th>Referral Code</th>
							<th>Approval</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>



@foreach($bicycle as $bicycle) 
					<tbody>
						<tr>
							<td>{{$bike->image}}</td>
							<td>{{$bike->first_name}}</td>
							<td>{{$bike->last_name}}</td>
							<td>{!!$bike->nid_passport!!}</td>
							<td>{{$bike->number}}</td>
							<td>{{$bike->gender}}</td>
							<td>{{$bike->date_of_birth}}</td>
							<td>{{$bike->mobile_number}}</td>
							<td>{{$bike->image}}</td>
							<td>{{$bike->city}}</td>
							<td>{{$bike->file_document}}</td>
							<td>{{$bike->referral_code}}</td>
							<td><img style="width: 100px" class="img-responsive" src="image/{{$bicycle->image}}" alt=""></td>


							<td> 

            @php
            {{
              $chk=DB::select('select IFNULL(approval,0)approval  from parcels c, clientinfos a where a.mobile=c.mobile and c.mobile=? order by a.mobile',[$bicycle->mobile]);
            }}
            @endphp

            @foreach($chk as $chk)
            @if($chk->approval!=1)
            <a href="{{url('/orderapproval',$bicycle->mobile)}}"  class="btn btn-danger">Approve</a>
            @else
            <a href="{{url('/orderapproval',$bicycle->mobile)}}"  class="btn btn-success">Approved</a>
            @endif
            @endforeach
            
          </td>

							<td>
					          <a href="{{url('/bicycleeditreq',$bicycle->id)}}" class="btn btn-success">Edit</a>
					      	</td>

					        <td>
					          <a href="{{url('/bicycledelete',$bicycle->id)}}" class="btn btn-danger">Delete</a>
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