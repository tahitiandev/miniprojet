var map;
function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     center: {lat: 47, lng: 1},
     zoom: 5
   });
 }