var editMarkerPanel = document.getElementById("EditMarkerPanel");
var trigger = editMarkerPanel.getElementsByTagName("span")[0];

function showEditMarkerPanel(id,name,x,y,classes,isPrivate)
{
    editMarkerPanel.style.display="block";
     document.getElementById("idEdit").value = id;
     document.getElementById("nameEdit").value = name;
     document.getElementById("xEdit").value = x;
     document.getElementById("yEdit").value = y;
     var mySelect = document.getElementById('classesEdit');
     for(var i, j = 0; i = mySelect.options[j]; j++) 
     {
        if(i.value == classes) 
        {
            mySelect.selectedIndex = j;
            break;
        }
     }
     if(isPrivate == true)
     {
        document.getElementById("private").checked = true;
     }
     else if(isPrivate == false)
     {
        document.getElementById("public").checked = true;         
     }
     
     //console.log(id,name,x,y,classes,isPrivate);
    /*
     document.getElementById("public").value = y;
     document.getElementById("private").value = y;
     */
}

trigger.addEventListener("click", function (e) {       
    //TODO : purge formulaire      
    editMarkerPanel.style.display="none";
    }
);


var editAreaPanel = document.getElementById("EditAreaPanel");
var trigger2 = editAreaPanel.getElementsByTagName("span")[0];
//console.log(editAreaPanel);

function showEditAreaPanel(id,name,colorHexa,polygon,isPrivate)
{
    //console.log("ping");
    editAreaPanel.style.display="block";
    document.getElementById("areaIdEdit").value = id;
    document.getElementById("areaNameEdit").value = name;
    document.getElementById("areaColorHexaEdit").value = colorHexa;
    document.getElementById("areaPolygonEdit").value = polygon.substr(9, polygon.length-11);
    if(isPrivate == true)
    {
       document.getElementById("areaPrivate").checked = true;
    }
    else if(isPrivate == false)
    {
       document.getElementById("areaPublic").checked = true;         
    }
    //console.log(id,name,colorHexa,polygon,isPrivate);
}

trigger2.addEventListener("click", function (e) {       
    //TODO : purge formulaire      
    editAreaPanel.style.display="none";
    }
);

