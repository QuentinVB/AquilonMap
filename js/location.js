var xSend = document.getElementById("xPosition").value;
var ySend = document.getElementById("yPosition").value;

function setPosition(x,y)
{
    var elements = document.getElementById("location");
    elements.style.top = y+"px";
    elements.style.left = x+"px";   
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