<?php 

function deleteButton($datamarker,$pageToRedirect)
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
        ?><a href="index.php?page=delete&amp;redirect=<?php 
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
?>