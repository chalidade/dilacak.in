<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src='Assets/mapbox-gl.js'></script>
    <link href='Assets/mapbox-gl.css' rel='stylesheet' />
  </head>
  <body>
    <div id='map' style='width: 400px; height: 300px;'></div>

    <script src="//d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script>
	  mapboxgl.accessToken = 'pk.eyJ1IjoiY2hhbGlkYWRlcmFobWFuIiwiYSI6ImNrNHRneGc4dzA4YmIza25vdnd1cGQxNmUifQ.3TJcDhIyugJL7V2F111tHQ';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    zoom: 0
    });

    var url = 'http://localhost/uapi/map';
    map.on('load', function() {
    var request = new XMLHttpRequest();
    window.setInterval(function() {
    // make a GET request to parse the GeoJSON at the url
    request.open('GET', url, true);
    request.onload = function() {
    if (this.status >= 200 && this.status < 400) {
    // retrieve the JSON from the response
    var json = JSON.parse(this.response);

    // update the drone symbol's location on the map
    map.getSource('drone').setData(json);

    // fly the map to the drone's current location
    map.flyTo({
    center: json.geometry.coordinates,
    speed: 0.5,
    zoom: 14
    });
    }
    };
    request.send();
    }, 2000);

    map.addSource('drone', { type: 'geojson', data: url });
    map.addLayer({
    'id': 'drone',
    'type': 'symbol',
    'source': 'drone',
    'layout': {
    'icon-image': 'rocket-15'
    }
    });
    });
    </script>
  </body>
</html>
