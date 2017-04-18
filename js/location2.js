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