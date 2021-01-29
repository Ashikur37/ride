@extends('welcome')
@section('title','Car')
@section('content')

<center>
    <h4>Your Trip has been finished</h4>

    <h4>Do you want to give a rating to <b>{{$carTrip->driver->first_name." ".$carTrip->driver->last_name}}</b>?</h4>
    <form action="{{URL::to('/car/trip/rating/'.$carTrip->id)}}" method="post">
    @csrf
    
    <div class="form-group">
      <label for="">Review</label>
      <textarea  name="review" id="" cols="30" rows="3"></textarea>
    </div>
        <div class="form-group">
          <label for="">Rating</label>
          <select required name="rating" id="" >
            <option value="">Choose Rating</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        </div>
        <button class="btn btn-success">
          Submit
        </button>
    </form>

    <h4 id="status" class="text text-warning">
      @if($carTrip->status==0)
        Waiting For Driver
      @endif
    </h4>
</center>

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
  setInterval(function(){
    $("#status").load("{{URL::to('/car/trip/getStatus/'.$carTrip->id)}}",function(data){
      if(data=="Finished"){
      // window.location.href="{{URL::to('/car/trip/payment/'.$carTrip->id)}}"
      }
    })
  },2000)
  $(".distance").each(function(){
      $(this).html(getDistance($(this).attr('lat'),$(this).attr('lon'))+"km")
  })
})
</script>
@endsection