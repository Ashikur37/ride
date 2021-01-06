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

			<form action="{{route('Aparcelsearch')}}" method="post"  enctype="multipart/form-data" id="basicform" data-parsley-validate="">
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



@foreach($parcel as $parcel) 
					<tbody>
						<tr>
							<td>{{$parcel->product_type}}</td>
							<td>{{$parcel->name}}</td>
							<td>{{$parcel->mobile}}</td>
							<td>{!!$parcel->address!!}</td>
							<td>{{$parcel->weight}}</td>
							<td>{{$parcel->order_date}}</td>
							<td>{{$parcel->order_type}}</td>
							<td>{{$parcel->starting_place}}</td>
							<td>{{$parcel->order_status}}</td>
							<td>{{$parcel->product_id}}</td>
							<td><img style="width: 100px" class="img-responsive" src="image/{{$parcel->image}}" alt=""></td>


							<td> 
 
            @php
            {{
              $chk=DB::select('select IFNULL(approval,0)approval  from parcels c, clientinfos a where a.mobile=c.mobile and c.mobile=? order by a.mobile',[$parcel->mobile]);
            }}
            @endphp

            @foreach($chk as $chk)
            @if($chk->approval!=1)
            <a href="{{url('/orderapproval',$parcel->mobile)}}"  class="btn btn-danger">Approve</a>
            @else
            <a href="{{url('/orderapproval',$parcel->mobile)}}"  class="btn btn-success">Approved</a>
            @endif
            @endforeach
            
          </td>

							<td>
					          <a href="{{url('/parceleditreq',$parcel->id)}}" class="btn btn-success">Edit</a>
					      	</td>

					        <td>
					          <a href="{{url('/parceldelete',$parcel->id)}}" class="btn btn-danger">Delete</a>
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