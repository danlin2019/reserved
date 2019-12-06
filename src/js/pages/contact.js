var map;

function initMap() {
  var position = {
    // 25.0334608,121.3007899
    lat: 25.0334608,
    lng: 121.3007899,
  };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 17,
    center: position
  });
  var marker = new google.maps.Marker({
    position: position,
    map: map,
    icon:'files/img/contact/map_icon.png'
  });
}