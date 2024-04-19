const map = L.map('mapid').setView([60.16128226805153, 24.94212223853186], 18);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

L.marker([60.16128226805153, 24.94212223853186]).addTo(map)
    .bindPopup('Wild West Clothing Oy')
    .openPopup();