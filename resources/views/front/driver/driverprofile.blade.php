@extends('welcome')
@section('title','Profile')
@section('content')


 

<!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    @foreach($driverprofile as $driverprofile)
                                    <h2 class="section-title no-margin"> {{$driverprofile->first_name}} {{$driverprofile->last_name}} </h2>
                                    
                                    <p class="fs-16 no-margin"> {{$driverprofile->mobile_number}}</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="{{url('/')}}" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Profile </li>

                                    <li class="active"><a href="{{url('/driverprofileeditreq',$driverprofile->id)}}" class=""><b>Edit</b></a> </li>
                                     
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->




                <!-- Quote -->
<section class="pt-80 quote-wrap">    
   <div class="theme-container container ">  
        <div class="row"> 
            <div class="col-md-6">   
        
                <img style="width: 180px; height: 200px" class="img-responsive" src="image/{{$driverprofile->image}}" alt=""></td>





                <table border="1" width="100%">
                    <tr>
                       <td>{{$driverprofile->nidpassport}}</td>
                       <td>{{$driverprofile->np_number}}</td>
                    </tr>     
                </table>
                @endforeach
                 <br>

                 <br>
 
            </div>
            
        </div>
    </div>
</section>
<!-- /.Quote -->

</article>
 <!-- /.Content Wrapper -->



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
      var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            
        };
        xhttp.open("GET", "{{URL::to('/update-position')}}?lat="+myLatlng.lat+"&lon="+myLatlng.lng, true);
        xhttp.send();
      return ;
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