@extends('welcome')
@section('title','Car')
@section('content')

<center>
    <h4 id="from"></h4>
    To
    <h4 id="to"></h4>
    <h4 id="distance"></h4>
    <h4>Your Trip has been finsihed</h4>
    <h4 id="cost"></h4>
    <h4>
        Pay with 
    </h4>
    <a class="btn btn-warning" href="{{URL::to('car/trip/cod/'.$carTrip->id)}}">
      Cash On Delivery
    </a>
    <button class="btn btn-info" onclick="document.getElementById('bkash-form').style.display='block'">
      Bkash
    </button>
      <div class="container">
        <form id="bkash-form" style="display: none" method="post" action="{{URL::to('car/trip/pay-with-bkash/'.$carTrip->id)}}">
          @csrf
          <input type="hidden" name="amount" >
          <h4>Send Money to <u>{{$carTrip->driver->mobile_number}}</u></h4>
          <div class="form-group">
            <label for="">Send From</label>
            <input name="sender" required type="text" placeholder="Send from" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Referance</label>
          <input name="ref" required type="text" placeholder="Referance" class="form-control">
          </div>
          <button class="btn btn-danger btn-block">Pay</button>
        </form>
      </div>
</center>
@if(!$carTrip->car_id)
<div class="container">
  <table class="table table-striped table-bordered">
    <thead>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Distance</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach($drivers as $driver)
      <tr>
        <td>{{$driver->first_name." ".$driver->last_name}}</td>
        <td>{{$driver->mobile_number}}</td>
        <td class="distance" lat="{{$driver->lat}}" lon="{{$driver->lon}}"></td>
        <td>
          <a class="btn btn-info btn-block" style="color:#fff" href="{{URL::to('car/trip/'.$carTrip->id.'/'.$driver->id)}}">Send Ride Request</a>
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
   function getDistance(lat2,lon2) 
    {
      lat1="{{$carTrip->lat1}}"
      lon1="{{$carTrip->lon1}}"
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
  function calcCrow() 
    {
      lat1="{{$carTrip->lat1}}"
      lon1="{{$carTrip->lon1}}"
      lat2="{{$carTrip->lat2}}"
      lon2="{{$carTrip->lon2}}"
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
    document.getElementById('cost').innerHTML="Total Cost "+Math.floor(calcCrow()*30)+"TK"
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
      const myLatlng = { lat: {{$carTrip->lat1}} , lng: {{$carTrip->lon1}} };
      pickupPoint={
        lat: position.coords.latitude,
        lng: position.coords.longitude
      }
      const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: myLatlng,
      });
      codeLatLng({{$carTrip->lat1}}, {{$carTrip->lon1}},'from');
      codeLatLng({{$carTrip->lat2}}, {{$carTrip->lon2}},'to');
      var display = new google.maps.DirectionsRenderer();
        var services = new google.maps.DirectionsService();
      map.setMapTypeId(google.maps.MapTypeId.HYBRID);
      display.setMap(map);
        var start = new google.maps.LatLng({{$carTrip->lat1}},{{$carTrip->lon1}});
        var end = new google.maps.LatLng({{$carTrip->lat2}},{{$carTrip->lon2}});
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
$(document).ready(function(){

  $(".distance").each(function(){
      $(this).html(getDistance($(this).attr('lat'),$(this).attr('lon'))+"km")
  })
})
</script>
@endsection