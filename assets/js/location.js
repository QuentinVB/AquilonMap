var xSend = document.getElementById("xPosition").value;
var ySend = document.getElementById("yPosition").value;

function setPosition(x,y)
{
    if(x==undefined) {x=0;}
    if(y==undefined) {y=0;}
    x=x-7;
    y=y-7;
    pointer.setLatLng(leafConvert([x,y]));   
}
document.getElementById("xPosition").addEventListener("input", function (e) { 
        xSend = document.getElementById("xPosition").value;
        setPosition(xSend,ySend);
    }
);
document.getElementById("yPosition").addEventListener("input", function (e) { 
        ySend = document.getElementById("yPosition").value;
        setPosition(xSend,ySend);
    }
);

map.on("contextmenu", function (event) {
    console.log("user right-clicked on map coordinates: " + event.latlng.toString());
    lat = ev.latlng.lat;
    lng = ev.latlng.lng;
  });

/*
var lat, lng;

map.addEventListener('mousemove', function(ev) {
   lat = ev.latlng.lat;
   lng = ev.latlng.lng;
});

document.getElementById("transitmap").addEventListener("contextmenu", function (event) {
    // Prevent the browser's context menu from appearing
    event.preventDefault();

    // Add marker
    // L.marker([lat, lng], ....).addTo(map);
    alert(lat + ' - ' + lng);

    return false; // To disable default popup.
});*/