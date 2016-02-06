<?php include "_include/classes.php"; include "_include/theme/head.php";  ?>
  
    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>BE A HERO.</h1>
                    <a class="btn btn-default page-scroll" href="#info">Down</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section id="info" class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Info</h1>
                </div>
            </div>
        </div>
    </section>

<!-- Map Section -->
<section id="map" class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Map</h1>
                    <div id="map"></div>
    <script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 6
  });
  var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJwwNTTFGz7GqqTQWhZGmrru1ZJcQvtB8&signed_in=true&callback=initMap"
        async defer>
    </script>
                </div>
            </div>
        </div>
    </section>

<?php include "_include/theme/foot.php"; ?>