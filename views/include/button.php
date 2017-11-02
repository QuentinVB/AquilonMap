<?php 

function deleteMarkerButton($datamarker,$pageToRedirect)
{
    if(!empty($_SESSION['userName']) && ($_SESSION['rightsLevel']>0))
    {
        $onclick="";
        switch ($pageToRedirect) 
        {
            case 'map':
               $onclick="return confirm(\'Confirmer suppression ?\')";
                break;
            case 'backoffice':
               $onclick="return confirm('Confirmer suppression ?')";
                break;
            default:
                $onclick="";
                break;
        }
        ?><a href="index.php?page=deleteMarker&amp;redirect=<?php 
        echo $pageToRedirect ;
        ?>&amp;id=<?php 
        echo $datamarker['id']; 
        ?>&amp;x=<?php
        echo $datamarker['x']; 
        ?>&amp;y=<?php
        echo $datamarker['y'];
        ?>" onclick="<?php
        echo $onclick;
        ?>"><img src="./assets/img/delete.png"/> effacer</a><?php
    }
}
function editButton($datamarker,$pageToRedirect)
{
   if(!empty($_SESSION['userName']) && ($_SESSION['rightsLevel']>0))
    {
        ?><a href="index.php?page=edit&amp;redirect=<?php 
        echo $pageToRedirect ;
        ?>&amp;id=<?php 
        echo $datamarker['id']; 
        ?>&amp;x=<?php
        echo $datamarker['x']; 
        ?>&amp;y=<?php
        echo $datamarker['y'];
        ?>"><img src="./assets/img/edit.png"/> editer</a><?php
    }
}
?>