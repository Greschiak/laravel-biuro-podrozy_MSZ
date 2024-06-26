<!-- Sekcja: Mapa Wycieczek -->
<section id="mapa">
    <div class="container">
        <h1>Mapa wycieczek</h1>
    </div>
    <div id="map" style="height: 400px;"></div>

    <!-- LEAFLET.JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([20, 0], 2); // ustawienie środka mapy i przybliżenia

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // zaznaczenia na mapie
        var markers = [
            { name: 'Pakiet polski', coords: [52.2297, 21.0122], tripId: 1 },
            { name: 'Pakiet japoński', coords: [37.5665, 137.4668], tripId: 3 },
            { name: 'Pakiet norweski', coords: [60.472, 8.4689], tripId: 4 },
            { name: 'Pakiet fiński', coords: [64.9631, 26.3994], tripId: 5 }
        ];

        markers.forEach(function(marker) {
            var popupContent = '<a href="/trips/' + marker.tripId + '">' + marker.name + '</a>';
            L.marker(marker.coords).addTo(map)
                .bindPopup(popupContent);
        });
    </script>
</section>
