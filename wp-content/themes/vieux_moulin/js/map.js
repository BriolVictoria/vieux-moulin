document.addEventListener('DOMContentLoaded', function () {
    if (typeof acfMapData !== 'undefined') {
        const map = L.map('map').setView(
            [acfMapData.lat, acfMapData.lng],
            acfMapData.zoom
        );

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors',
        }).addTo(map);

        L.marker([acfMapData.lat, acfMapData.lng])
            .addTo(map)
            .bindPopup(acfMapData.address)
            .openPopup();
    }
});
