var mymap = L.map('mapid').setView([-7.75339031418964, 110.50959474974502], 14);


var circle = L.circle([-7.753381126065101, 110.50959349546763], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 150
}).addTo(mymap);


L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoiZmVyaTIzIiwiYSI6ImNra25qMGJwbTFsb2Uyb216a2p3N2FrcHMifQ.N5V3oRHDzWcBHuFL_Yt4Xw'
}).addTo(mymap);