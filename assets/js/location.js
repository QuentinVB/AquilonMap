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
    //console.log("user right-clicked on map coordinates: " + event.latlng.toString());
    xSend = Math.ceil(event.latlng.lng+3);
    ySend = Math.ceil(-event.latlng.lat+3);
    document.getElementById("xPosition").value = xSend;
    document.getElementById("yPosition").value = ySend;
    setPosition(xSend,ySend);
    
  });