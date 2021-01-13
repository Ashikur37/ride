@extends('welcome')
@section('title','Bike')
@section('content')

<center>
    <h4 id="from"></h4>
    To
    <h4 id="to"></h4>
    <h4 id="distance"></h4>
    @if(!$bikeTrip->bike_id)
    <h4>Available Drivers</h4>
    @else
    <h4>Waiting For Driver</h4>
    <h4>{{$bikeTrip->driver->first_name." ".$bikeTrip->driver->last_name}}</h4>
    <h4>Call now: {{$bikeTrip->driver->mobile_number}}</h4>
    @endif
</center>
@if(!$bikeTrip->bike_id)
<div class="container">
  <table class="table table-striped table-bordered">
    <thead>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($drivers as $driver)
      <tr>
        <td>{{$driver->first_name." ".$driver->last_name}}</td>
        <td>{{$driver->mobile_number}}</td>
        <td>
          <a class="btn btn-info btn-block" style="color:#fff" href="{{URL::to('bike/trip/'.$bikeTrip->id.'/'.$driver->id)}}">Send Ride Request</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endif
<div style="height:400px;padding:20px;margin:30px" id="map"></div>






@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
<script>
  function calcCrow() 
    {
      lat1="{{$bikeTrip->lat1}}"
      lon1="{{$bikeTrip->lon1}}"
      lat2="{{$bikeTrip->lat2}}"
      lon2="{{$bikeTrip->lon2}}"
      var R = 6371; // km
      var dLat = toRad(lat2-lat1);
      var dLon = toRad(lon2-lon1);
      var lat1 = toRad(lat1);
      var lat2 = toRad(lat2);

      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
      var d = R * c;
      return d.toFixed(2);
    }

    // Converts numeric degrees to radians
    function toRad(Value) 
    {
        return Value * Math.PI / 180;
    }
    document.getElementById('distance').innerHTML="Total distance "+calcCrow()+"KM"
  var pickupPoint=false;
  var destinationPoint=false;
  function codeLatLng(lat, lng,id) {
    geocoder = new google.maps.Geocoder();
var latlng = new google.maps.LatLng(lat, lng);
geocoder.geocode({'latLng': latlng}, function(results, status) {
  if (status == google.maps.GeocoderStatus.OK) {
  console.log(results)
    if (results[1]) {
     //formatted address
     document.getElementById(id).innerHTML=results[1].formatted_address+','+results[0].formatted_address;
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
      alert("No results found");
    }
  } else {
    alert("Geocoder failed due to: " + status);
  }
});
}





    function initMap(position) {
      const myLatlng = { lat: {{$bikeTrip->lat1}} , lng: {{$bikeTrip->lon1}} };
      pickupPoint={
        lat: position.coords.latitude,
        lng: position.coords.longitude
      }
      const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: myLatlng,
      });
      codeLatLng({{$bikeTrip->lat1}}, {{$bikeTrip->lon1}},'from');
      codeLatLng({{$bikeTrip->lat2}}, {{$bikeTrip->lon2}},'to');
      var display = new google.maps.DirectionsRenderer();
        var services = new google.maps.DirectionsService();
      map.setMapTypeId(google.maps.MapTypeId.HYBRID);
      display.setMap(map);
        var start = new google.maps.LatLng({{$bikeTrip->lat1}},{{$bikeTrip->lon1}});
        var end = new google.maps.LatLng({{$bikeTrip->lat2}},{{$bikeTrip->lon2}});
          var request ={
                origin : start,
                destination:end,
                travelMode: 'DRIVING'
            };
            services.route(request,function(result,status){
                if(status =='OK'){
                    display.setDirections(result);
                }
            });
      // Create the initial InfoWindow.
      let pickupWindow = new google.maps.InfoWindow({
          content: "Pickup Point",
          position: myLatlng,
      });
      pickupWindow.open(map);
      // Configure the click listener.

      }

  if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(initMap);
} else {
  x.innerHTML = "Geolocation is not supported by this browser.";
}
      function showPosition(position) {
var latlon = position.coords.latitude + "," + position.coords.longitude;

var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyCz2V7sDSQ1u-u2viJJwpMhdWVGotTheC8";

document.getElementById("map").innerHTML = "<img src='"+img_url+"'>";
}
</script>
@endsection