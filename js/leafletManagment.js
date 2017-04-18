var lieu = L.icon({
    iconUrl: 'img/square-18.png',
    iconSize:     [18, 18], 
    iconAnchor:   [10, 10], 
    popupAnchor:  [0,0] 
});

var biome = L.icon({
    iconUrl: 'img/park2-18.png',
    iconSize:     [18, 18], 
    iconAnchor:   [10, 10], 
    popupAnchor:  [0, 0] 
});

var emplacement = L.icon({
    iconUrl: 'img/star-18.png',
    iconSize:     [18, 18], 
    iconAnchor:   [10, 10], 
    popupAnchor:  [0, 0] 
});

var fleuve = L.icon({
    iconUrl: 'img/circle-stroked-18.png',
    iconSize:     [18, 18], 
    iconAnchor:   [10, 10], 
    popupAnchor:  [0, 0] 
});

var limite = L.icon({
    iconUrl: 'img/limite.png',
    iconSize:     [18, 18], 
    iconAnchor:   [10, 10], 
    popupAnchor:  [0, 0] 
});

var route = L.icon({
    iconUrl: 'img/route.png',
    iconSize:     [18, 18], 
    iconAnchor:   [10, 10], 
    popupAnchor:  [0, 0] 
});

var ruines = L.icon({
    iconUrl: 'img/monument-18.png',
    iconSize:     [18, 18], 
    iconAnchor:   [10, 10], 
    popupAnchor:  [0, 0] 
});

var pointer = L.icon({
    iconUrl: 'img/location.gif',
    iconSize:     [15, 15], 
    iconAnchor:   [0, 0], 
    popupAnchor:  [9, 9] 
});

function leafConvert([x,y])
{
    return [-y,x];
}
function mapBounds(width, height, [x,y])
{
    return [[x,y],[x+height,y+width]];
}

/*

var marker2 = L.marker(leafConvert([-122,890]),{icon: lieuIcon}).bindPopup("Camp de l'Ordre");
var marker9 = L.marker(leafConvert([-70,1520]),{icon: lieuIcon}).bindPopup("Camp Gobelin");


var lieux = L.layerGroup([marker, marker2]);

var overlays = {
    "Lieux": lieux
};

L.control.layers(null,overlays).addTo(map);
lieux.addTo(map);
L.control.
map.setView( [0, 0], -1);

var circle = L.circle([51.18, -0.11], {
    color: 'red',
    fillColor: '#f09',
    fillOpacity: 0.5,
    radius: 500
}).addTo(mymap);

var polygon = L.polygon([
    [51.509, -0.08],
    [51.509, -0.018],
    [51.51, -0.047]
]).addTo(mymap);

var littleton = L.marker([99.181, -105.02]).bindPopup('This is Littleton, CO.'),
    denver = L.marker([99.74, -104.99]).bindPopup('This is Denver, CO.'),
    aurora  = L.marker([99.79, -104.8]).bindPopup('This is Aurora, CO.'),
    golden = L.marker([99.77, -105.29]).bindPopup('This is Golden, CO.');

var cities = L.layerGroup([littleton, denver, aurora, golden]);

var overlayMaps = {
    "Marqueurs": cities
};
L.control.layers(overlayMaps).addTo(mymap);*/