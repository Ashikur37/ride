@extends('welcome')
@section('title','Bike')
@section('content')
@if(Session::has('userchklogin'))
<center>
  <button onclick="confirm()" id="trip-button" disabled class="btn btn-info">Confirm Trip</button>

</center>
@else
<center>
  <h4>Please Login To continue</h4>
</center>
@endif
<h4 id="distance">

</h4>
<div style="height:400px;padding:20px;margin:30px" id="map"></div>






@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  var pickupPoint=false;
  var destinationPoint=false;
  function confirm(){
    window.location.href=`{{URL::to('/bike/start-trip')}}?lat1=${pickupPoint.lat}&lon1=${pickupPoint.lng}&lat2=${destinationPoint.lat}&lon2=${destinationPoint.lng}`
  }
  function calcCrow() 
    {
      lat1=pickupPoint.lat
      lon1=pickupPoint.lng;
      lat2=destinationPoint.lat
      lon2=destinationPoint.lng
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
  function updateDistance(){
    if(destinationPoint){
      document.getElementById("distance").innerHTML="Trip distance "+calcCrow()+" KM";
    }
  }
    function initMap(position) {
      const myLatlng = { lat: position.coords.latitude , lng: position.coords.longitude };
      pickupPoint={
        lat: position.coords.latitude,
        lng: position.coords.longitude
      }
      const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: myLatlng,
      });
      var display = new google.maps.DirectionsRenderer();
        var services = new google.maps.DirectionsService();
      map.setMapTypeId(google.maps.MapTypeId.HYBRID);
      // Create the initial InfoWindow.
      let pickupWindow = new google.maps.InfoWindow({
          content: "Pickup Point",
          position: myLatlng,
      });
      pickupWindow.open(map);
      // Configure the click listener.
      map.addListener("click", (mapsMouseEvent) => {
        Swal.fire({
        title: 'Confirm Pickup/destination.',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Pickup Point`,
        denyButtonText: `Destination Point`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          pickupPoint={
            lat:mapsMouseEvent.latLng.lat(),
            lng:mapsMouseEvent.latLng.lng()
          };
         // console.log(mapsMouseEvent.latLng.lat())
       
          
          pickupWindow.close();
          pickupWindow = new google.maps.InfoWindow({
          position: mapsMouseEvent.latLng,
          });
          pickupWindow.setContent(
            "Pickup Point"
          // JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
          );
          pickupWindow.open(map);
          updateDistance()
          if(destinationPoint){
            display.setMap(map);
        var start = new google.maps.LatLng(pickupPoint.lat,pickupPoint.lng);
        var end = new google.maps.LatLng(destinationPoint.lat,destinationPoint.lng);
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
          }
        } else if (result.isDenied) {
          document.getElementById("trip-button").disabled=false;
          destinationPoint={
            lat:mapsMouseEvent.latLng.lat(),
            lng:mapsMouseEvent.latLng.lng()
          };
          if(typeof destinationWindow !== 'undefined'){
            destinationWindow.close();
          }
          destinationWindow = new google.maps.InfoWindow({
          position: mapsMouseEvent.latLng,
          });
          destinationWindow.setContent(
            "Destination Point"
          // JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
          );
          destinationWindow.open(map);
          updateDistance()
          
        
        display.setMap(map);
        var start = new google.maps.LatLng(pickupPoint.lat,pickupPoint.lng);
        var end = new google.maps.LatLng(destinationPoint.lat,destinationPoint.lng);
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
        }
      })
         
          
      });
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