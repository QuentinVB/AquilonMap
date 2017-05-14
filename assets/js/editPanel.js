var editPanel = document.getElementById("EditPanel");
var trigger = editPanel.getElementsByTagName("span")[0];

function showEdit(id,name,x,y,classes)
{
     editPanel.style.display="block";
     document.getElementById("idEdit").value = id;
     document.getElementById("nameEdit").value = name;
     document.getElementById("xEdit").value = x;
     document.getElementById("yEdit").value = y;
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
     //console.log(id,name,x,y,classes);
}

trigger.addEventListener("click", function (e) {       
    //TODO : purge formulaire      
        editPanel.style.display="none";
    }
);

