var editPanel = document.getElementById("EditPanel");
var trigger = editPanel.getElementsByTagName("span")[0];

function showEdit(id,name,x,y,classes,isPrivate)
{
     editPanel.style.display="block";
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
     
     console.log(id,name,x,y,classes,isPrivate);
    /*
     document.getElementById("public").value = y;
     document.getElementById("private").value = y;
     */
}

trigger.addEventListener("click", function (e) {       
    //TODO : purge formulaire      
        editPanel.style.display="none";
    }
);

