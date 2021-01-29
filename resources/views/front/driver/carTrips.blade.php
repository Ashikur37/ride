@extends('welcome')
@section('title','Profile')
@section('content')



<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>User</th>
            <th>Phone</th>
            <th>From</th>
            <th>To</th>
            <th>Rent</th>
            <th>Applied At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trips as $trip)
            <tr>
                <td>{{$trip->client->name}}</td>
                <td>{{$trip->client->mobile}}</td>
                <td data-id="from{{$trip->id}}" id="from{{$trip->id}}" class="position" lat="{{$trip->lat1}}" lon="{{$trip->lon1}}"></td>
                <td data-id="to{{$trip->id}}" id="to{{$trip->id}}" class="position" lat="{{$trip->lat2}}" lon="{{$trip->lon2}}"></td>
                <td>{{$trip->amount}}TK</td>
                <td>{{$trip->created_at->diffForHumans()}}</td>
                <td>
                    <a class="btn btn-primary" style="color:#fff" href="{{URL::to('/car/trip/view/'.$trip->id)}}">View</a>
                    <a class="btn btn-danger" style="color:#fff" href="{{URL::to('/car/trip/cancel/'.$trip->id)}}">
                        Cancel
                    </a>
                </td> 

 
            </tr>
        @endforeach
    </tbody>
</table>



@endsection
@section('script')

<script>
      function codeLatLng(lat, lng,id) {
    geocoder = new google.maps.Geocoder();
var latlng = new google.maps.LatLng(lat, lng);
geocoder.geocode({'latLng': latlng}, function(results, status,cb) {
  if (status == google.maps.GeocoderStatus.OK) {
  console.log(results)
    if (results[1]) {
     //formatted address
     document.getElementById(id).innerHTML=results[1].formatted_address+','+results[0].formatted_address ;
    //find country name
         for (var i=0; i<results[0].address_components.length; i++) {
        for (var b=0;b<results[0].address_components[i].types.length;b++) {

        //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
            if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                //this is the object you are looking for
                city= results[0].address_components[i];
                break;
            }
        }
    }
    //city data



    } else {
      //alert("No results found");
    }
  } else {
   // alert("Geocoder failed due to: " + status);
  }
});
}
$(document).ready(function(){
    $(".position").each(function(){
        that=$(this)
        codeLatLng(that.attr('lat'),that.attr('lon'),that.attr('data-id'))
    })
})

</script>
@endsection