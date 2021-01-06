@extends('welcome')
@section('title','Bike')
@section('content')

<div style="height:400px;padding:20px;margin:30px" id="map"></div>






@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function initMap(position) {
      const myLatlng = { lat: position.coords.latitude , lng: position.coords.longitude };
      const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: myLatlng,
      });
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
          pickupWindow.close();
          pickupWindow = new google.maps.InfoWindow({
          position: mapsMouseEvent.latLng,
          });
          pickupWindow.setContent(
            "Pickup Point"
          // JSON.stringify(mapsMouseEvent.latLng.toJSON(), null, 2)
          );
          pickupWindow.open(map);
        } else if (result.isDenied) {
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