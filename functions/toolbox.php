<?php
function convert_month($m)
{
	switch ($m)
	{
	case 1:$m='janvier';
	break;
	case 2:$m='février';
	break;
	case 3:$m='mars';
	break;
	case 4:$m='avril';
	break;
	case 5:$m='mai';
	break;
	case 6:$m='juin';
	break;
	case 7:$m='juillet';
	break;
	case 8:$m='août';
	break;
	case 9:$m='septembre';
	break;
	case 10:$m='octobre';
	break;
	case 11:$m='novembre';
	break;
	case 12:$m='décembre';
	break;
	}
	return $m ;
}
function printMarker($classe)
{
	?>
		var <?php echo $classe . "X"; ?> = L.layerGroup([
		<?php
		$reponse = getMarkersByClasses($classe);
		$number = count($reponse->fetchAll());
		$reponse = getMarkersByClasses($classe);
		$i = 0;
		while ($datamarker = $reponse->fetch())
		{
			if(($datamarker['isPrivate']==FALSE))
			{
				writeMarker($datamarker);
			}
			else if(($datamarker['isPrivate']==TRUE) && !empty($_SESSION['userName']))
			{
				if($_SESSION['rightsLevel']>=0)
				{
					writeMarker($datamarker);
				}
			}
			if ($i < $number-1)
			{
				echo ',';
			}
			$i ++;
		}
		?>
		]);
	<?php 
}
function writeMarker($datamarker)
{
?>L.marker(leafConvert([<?php 
echo $datamarker['x']; 
?>,<?php 
echo $datamarker['y']; 
?>]),{icon: <?php 
echo $datamarker['classes']; 
?>}).bindPopup('<?php 
echo addslashes($datamarker['name']);
?><br/><em><?php 
echo $datamarker['x']; 
?>:<?php 
echo $datamarker['y']; 
?></em><br/><?php
//Deletemarker HERE 
deleteMarkerButton($datamarker,"map");
//editButton($datamarker,"map");
?>')
<?php
}
function printArea()
{
	?>
	var areaX = L.layerGroup([
	<?php
	$sqlresponse = getAreas();
	$number = count($sqlresponse->fetchAll());
	$sqlresponse = getAreas();
	$i = 0;

	while ($dataArea = $sqlresponse->fetch())
	{
		if($dataArea['isPrivate']==FALSE)
		{
			writeArea($dataArea);
		}
		else if(($dataArea['isPrivate']==TRUE) && !empty($_SESSION['userName']))
		{
			if($_SESSION['rightsLevel']>=0)
			{
				writeArea($dataArea);
			}
		}
		
		if ($i < $number-1)
		{
			echo ',';
		}
		$i ++;
	}
	?>
	]);
	<?php
}
function writeArea($dataarea)
{
?>	
L.polygon
(
	<?php echo wkt_to_json($dataarea['polygonwkt']) ;?>
	,
{
	color: '<?php echo $dataarea['colorHexa'];?>',
	fillColor: '<?php echo $dataarea['colorHexa'];?>',
	fillOpacity: 0.08
}
).bindPopup('<?php 
echo addslashes($dataarea['name']);
?><br/><?php
//DeleteArea
deleteAreaButton($dataarea,"map");
//editButton($datamarker,"map");
?>')
<?php
}
?>