<!DOCTYPE html>
<html>

<head>
  <title>Leaflet Web Map</title>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />

  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
  <style>
    #map {
      width: 960px;
      height: 500px;
    }
  </style>
</head>

<body>
  <h1>Peta Leaflet Pertama ku</h1>
  <div id="map"></div>
  <script>
    var map = L.map("map", {
      center: [-7.575905, 110.819903],
      zoom: 17,
      // renderer: L.canvas(),
    });

    var myIcon = L.icon({
      iconUrl: 'http://localhost:8000/images/gamer.png',
    });

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);
    L.marker([-7.575905, 110.819903]).addTo(map).bindPopup('<b>Alona (Toko Petra Baru) Solo</b>')
      .openPopup();
    L.marker([-7.574283537863934, 110.81869882473609], {
        icon: myIcon
      }).addTo(map).bindPopup('<b>User Position</b>')
      .openPopup();
  </script>
</body>

</html>
