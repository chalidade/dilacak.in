if (id !== '') {
  var json = [
    {
      lat : "112.752165",
      lon : "-7.257113"
    }
  ];
} else {
  var json = [
    {
      lat : "112.752165",
      lon : "-7.257113"
    },
    {
      lat : "112.750928",
      lon : "-7.258753"
    },
    {
      lat : "112.751266",
      lon : "-7.260921"
    }
  ];
}

mapboxgl.accessToken = 'pk.eyJ1IjoiY2hhbGlkYWRlcmFobWFuIiwiYSI6ImNrNHRneGc4dzA4YmIza25vdnd1cGQxNmUifQ.3TJcDhIyugJL7V2F111tHQ';
var map = new mapboxgl.Map({
container: 'map-single',
style: 'mapbox://styles/mapbox/streets-v11',
center: [112.752165,-7.257113],
zoom: 14
});

for (var i = 0; i < json.length; i++) {
  new mapboxgl.Marker()
  .setLngLat([json[i].lat,json[i].lon])
  .addTo(map);
}
