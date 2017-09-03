@extends('layouts.master')
  @section('title', 'Talleresamoros')
  @section('style')
    @parent
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeDpSO1yuMFBZyjfHLRcWXuJRLi1syUIM&libraries=places"></script>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:

      var amoros = {lat: 41.158881, lng: 1.114358};
      function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: amoros,
            zoom: 15
          });

          var infowindow = new google.maps.InfoWindow();
          var service = new google.maps.places.PlacesService(map);

          service.getDetails({
            placeId: 'ChIJUYWEIx9RoRIRipCGnrut9GA'
          }, function(place, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
              var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
              });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
                  'Place ID: ' + place.place_id + '<br>' +
                  place.formatted_address + '</div>');
                infowindow.open(map, this);
              });
            }
          });
        }
    </script>
  @endsection

	@section('header')
    @parent
  @endsection
  @section('body')
      <section class="main special">
        <div class="inner">
          <header class="major">
            <span class="category">Talleres amoros</span>
            {{-- <h1>Contacto - {{request()->route('itemShortName')}}</h1> --}}
            <h2>
              <a>
                  Dónde nos encontrarás
              </a>
            </h2>
            <ul class="meta">
                <li><a>Carrer del Roser, 112</a></li>
                <li><a>43203 Reus</a></li>
                <li><a>Tarragona</a></li>
            </ul>
          </header>
            <div id="map"></div>
      </section>
  @endsection

  @section('javascript')
      @parent
      <script>
        // function initMap() {
        //   var amoros = {lat: 41.158881, lng: 1.114358};
        //   var map = new google.maps.Map(document.getElementById('map'), {
        //     zoom: 8,
        //     center: amoros
        //   });
        //   var marker = new google.maps.Marker({
        //     position: amoros,
        //     map: map
        //   });
        // }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeDpSO1yuMFBZyjfHLRcWXuJRLi1syUIM&libraries=places&callback=initMap">
    //   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeDpSO1yuMFBZyjfHLRcWXuJRLi1syUIM&callback=initMap">
      </script>
  @endsection
