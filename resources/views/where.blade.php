
@extends('layouts._layout')

@section('title', 'Đăng lộ trình')

@section('content')

	<div class="container-fluid" id="grad1">
      <div class="row justify-content-center mt-0">
        <div class="map_content">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

            <div class="row">
              <div class="col-md-12 mx-0">
                <form id="msform" action="{{ url('/phuong-tien-thoi-gian.html') }}" method="POST" role="form">
                  <!-- progressbar -->
                  {{ csrf_field() }}
                  <ul id="progressbar">
                    <li class="active" id="account"><strong>Đi đến đâu?</strong></li>
                    <li id="personal"><strong>Phương tiện & thời gian </strong></li>
                    <li id="payment"><strong>Thông tin & giá</strong></li>
                    <li id="confirm"><strong>Hoàn thành</strong></li>
                  </ul> <!-- fieldsets -->
                  <div style="display: none">
                    <div class="col-md-4">
                       <input id="origin-input" name="pointStart" class="controls" type="text" placeholder="Nhập điểm xuất phát..."
                       style="width: 25%; margin: 10px; left: 0px" >
                    </div>
                    <div class="col-md-4">
                      <input id="destination-input" name="pointEnd" class="controls" type="text" placeholder="Nhập điểm đích đến..."
                      style="width: 25%; margin: 10px; left: 0px">
                    </div>
                    <input type="radio" name="type" id="changemode-walking" checked="checked" style="display: none;">
                  </div>

                 <div id="directions-panel" style="display: none;">
                 </div>
                 <input type="hidden" name="distance" id="distance" value="">
                  <div id="map" style="width: 1345px; height: 500px"></div>
                  <div class="col-md-12" style="background-color: #EFFBFB;">
                    <a href="/dixechung/" style="padding-right: 25px"><i class="glyphicon glyphicon-triangle-left"></i>Trở lại</a>
                    <button type="submit" id="nextVehicle" class="btn btn-success" name=""> Tiếp theo<i class="glyphicon glyphicon-triangle-right" style="padding-left: 5px"></i></button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection


@section('jsScript')
    <script type="text/javascript">
    	$(document).ready(function(){

        //validate form
        $("#msform").validate({
            rules: {
                pointStart: "required",
                pointEnd: "required"
            },
            messages: {
                pointStart: "Vui lòng nhập điểm xuất phát",
                pointEnd: "Vui lòng nhập điểm đến"
            }
        });
    })
    </script>

    <script>
// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    mapTypeControl: false,
    center: {lat: 14.402583, lng: 107.791370},
    zoom: 6
  });

  new AutocompleteDirectionsHandler(map);
}

/**
 * @constructor
 */
 function AutocompleteDirectionsHandler(map) {
  this.map = map;
  this.originPlaceId = null;
  this.destinationPlaceId = null;
  this.travelMode = 'WALKING';
  this.directionsService = new google.maps.DirectionsService;
  this.directionsRenderer = new google.maps.DirectionsRenderer;
  this.directionsRenderer.setMap(map);

  var originInput = document.getElementById('origin-input');
  var destinationInput = document.getElementById('destination-input');
  var modeSelector = document.getElementById('mode-selector');

  var originAutocomplete = new google.maps.places.Autocomplete(originInput);
  // Specify just the place data fields that you need.
  originAutocomplete.setFields(['place_id']);

  var destinationAutocomplete =
  new google.maps.places.Autocomplete(destinationInput);
  // Specify just the place data fields that you need.
  destinationAutocomplete.setFields(['place_id']);

  this.setupClickListener('changemode-walking', 'WALKING');

  this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
  this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

  this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
  this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
    destinationInput);
  this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);



}

// Sets a listener on a radio button to change the filter type on Places
// Autocomplete.
AutocompleteDirectionsHandler.prototype.setupClickListener = function(
  id, mode) {
  var radioButton = document.getElementById(id);
  var me = this;

  radioButton.addEventListener('click', function() {
    me.travelMode = mode;
    me.route();
  });
};

AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(
  autocomplete, mode) {
  var me = this;
  autocomplete.bindTo('bounds', this.map);

  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();

    if (!place.place_id) {
      window.alert('Please select an option from the dropdown list.');
      return;
    }
    if (mode === 'ORIG') {
      me.originPlaceId = place.place_id;
    } else {
      me.destinationPlaceId = place.place_id;
    }
    me.route();
  });
};

AutocompleteDirectionsHandler.prototype.route = function() {
  if (!this.originPlaceId || !this.destinationPlaceId) {
    return;
  }
  var me = this;

  this.directionsService.route(
  {
    origin: {'placeId': this.originPlaceId},
    destination: {'placeId': this.destinationPlaceId},
    travelMode: this.travelMode
  },
  function(response, status) {
    if (status === 'OK') {
      me.directionsRenderer.setDirections(response);

      var route = response.routes[0];
      var summaryPanel = document.getElementById('directions-panel');
      summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
              summaryPanel.innerHTML += route.legs[i].distance.text;
              document.getElementById('distance').value = summaryPanel.innerHTML;
              var str = $('#distance').val();
              str = str.replace(",", "");
              str = str.replace(" km", "");
              $('#distance').val(str);
          }

    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });


//   directionsService.route({
//       origin: document.getElementById('origin-input').value,
//       destination: document.getElementById('destination-input').value,
//       travelMode: 'DRIVING'
//   }, function(response, status) {
//       if (status === 'OK') {
//         directionsRenderer.setDirections(response);
//         var route = response.routes[0];
//         var summaryPanel = document.getElementById('directions-panel');
//         summaryPanel.innerHTML = '';
//             // For each route, display summary information.
//             for (var i = 0; i < route.legs.length; i++) {
//               var routeSegment = i + 1;
//               summaryPanel.innerHTML += route.legs[i].distance.text;
//               document.getElementById('distance').value = summaryPanel.innerHTML;
//           }

//       } else {
//         window.alert('Directions request failed due to ' + status);
//     }
// });


};
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5vFoI26szymMYCBXEnWGugmMt2hJUBsM&libraries=places&callback=initMap"
async defer></script>
@endsection
