<?php
//view
include("./views/include/header.php");
include("./views/include/button.php");
?>
<body>
	<nav>
		<ul>
			<li><a href="index.php">Retour</a></li>
			<li><a href="index.php?page=disconnect">Deconnexion</a></li>
		</ul>
		<p>Dernière mise à jour : <?php echo $date[0]; ?></p>
		<h2><?php echo $msg;?></h2>			
	</nav>
	<h1>Map Managment</h1>
	<div class="backofficeTools">
	<?php
		if($_SESSION['rightsLevel']>0)
		{
		?>
	<section id="EditMarkerPanel" class="popUp">
		<span>&nbsp; </span>
			<h2>Editer un marqueur</h2>
			<form method="post" action="index.php?page=marker&action=edit">
				<p>				
					<label for="name">Nom du lieu</label> : <input type="text" name="name" id="nameEdit" value="" required/><br/>
					<label for="x">Coordonnée X </label> : <input type="text" name="x" id="xEdit" size="9" placeholder="east/west" required/><br/>
					<label for="y">Coordonnée Y </label> : <input type="text" name="y" id="yEdit" size="9" placeholder="north/south" required/><br/>
					<label for="classes">Classe de lieu</label>
					<select name="classes" id="classesEdit">
						<option value="lieu">lieu</option>
						<option value="ruines">ruines</option>
						<option value="biome">biome</option>
						<option value="limite">limite</option>
						<option value="fleuve">fleuve</option>
						<option value="route">route</option>
						<option value="emplacement">emplacement</option>
					</select><br/>
					<p>Visibilité : <br />
						<label for="public">Public</label> : <input type="radio" name="isPrivate" id="public" value="0" checked/> / <label for="private">Privé</label> : <input type="radio" name="isPrivate" id="private" value="1" />
					</p>
					<input type="hidden" id="idEdit" name="id" value=""/>
					
					<input type="submit" value="sauvegarder" />
				</p>	
			</form>		
	</section>
		<?php
		}
		if($_SESSION['rightsLevel']>=0)
		{
		?>
	<section id="AddMarkerPanel" >
		<h2>Ajouter un marqueur</h2>
		<form method="post" action="index.php?page=marker&action=add">
			<p>
				<label for="name">Nom du lieu</label> : <input type="text" name="name" id="name" required/><br/>
				<label for="x">Coordonnée X </label> : <input type="text" name="x" id="x" size="9" placeholder="east/west" required/><br/>
				<label for="y">Coordonnée Y </label> : <input type="text" name="y" id="y" size="9" placeholder="north/south" required/><br/>
				<label for="classes">Classe de lieu</label>
				<select name="classes" id="classes">
					<option value="lieu" selected>lieu</option>
					<option value="ruines">ruines</option>
					<option value="biome">biome</option>
					<option value="limite">limite</option>
					<option value="fleuve">fleuve</option>
					<option value="route">route</option>
					<option value="emplacement">emplacement</option>
				</select><br/>
				<p>Visibilité : 
					<label for="public">Public</label> : <input type="radio" name="isPrivate" id="public" value="0" checked/> / <label for="private">Privé</label> : <input type="radio" name="isPrivate" id="private" value="1" />
				</p>
				<input type="submit" value="sauvegarder" />
			</p>	
		</form>
	</section>
	<?php
		}
		if($_SESSION['rightsLevel']>0)
		{
		?>
	<section id="EditAreaPanel" class="popUp">
		<span>&nbsp; </span>
			<h2>Editer une Zone</h2>
			<form method="post" action="index.php?page=area&action=edit">
				<p>			
					<label for="name">Nom de la zone</label> : <input type="text" name="name" id="areaNameEdit" required/><br/>
					<label for="flag">Drapeau </label> : <input type="text" name="flag" id="areaFlagEdit" required/><br/><small>(stocké dans /assets/img/flags/)</small><br/><br/>
					<label for="polygon">Coordonnées</label> : <br/>
					<textarea name="polygon" id="areaPolygonEdit" cols="35" placeholder="coordonnés de la zone sous la forme '0 1,1 1,0 1' "></textarea><br/>
					<label for="colorHexa">Couleur de la zone </label> : <input type="color" name="colorHexa" id="areaColorHexaEdit" required/><br/>
					<p>Visibilité : 
						<label for="public">Public</label> : <input type="radio" name="isPrivate" id="areaPublic" value="0" checked/> / <label for="private">Privé</label> : <input type="radio" name="isPrivate" id="areaPrivate" value="1" />
					</p>	
					<input type="hidden" id="areaIdEdit" name="id" value=""/>
					
					<input type="submit" value="sauvegarder" />
				</p>	
			</form>		
	</section>
	<section>
		<h2>Ajouter une zone</h2>
		<form method="post" action="index.php?page=area&action=add">
			<p>
				<label for="name">Nom de la zone</label> : <input type="text" name="name" id="name" required/><br/>
				<label for="flag">Drapeau </label> : <input type="text" name="flag" id="flag" required/><br/><small>(stocké dans /assets/img/flags/)</small><br/><br/>
				<label for="polygon">Coordonnées</label> : <br/>
				<textarea name="polygon" id="polygon" cols="35" placeholder="coordonnés de la zone sous la forme '0 1,1 1,0 1' "></textarea><br/>
				<label for="colorHexa">Couleur de la zone </label> : <input type="color" name="colorHexa" id="colorHexa" required/><br/>
				<p>Visibilité : 
					<label for="public">Public</label> : <input type="radio" name="isPrivate" id="public" value="0" checked/> / <label for="private">Privé</label> : <input type="radio" name="isPrivate" id="private" value="1" />
				</p>
				<input type="submit" value="sauvegarder" />
			</p>	
		</form>
	</section>
	<?php
		}
		if($_SESSION['rightsLevel']>0)
		{
		?><script src="./assets/js/editPanel.js"></script><?php } ?>
	</div>
	<div class="backofficeList">
	
	<section>
		<h2>Liste des Marqueurs</h2>
		<table>
			<thead>
				<tr>
					<td>Nom</td>
					<td>Type</td>
					<td>Coordonnées</td>
					<td>Visibilité</td>
					<?php
						if($_SESSION['rightsLevel']>0)
						{
					?>
					<td>Actions</td>
					<?php
						}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
				$reponse = getMarkers();
				while ($datamarker = $reponse->fetch())
				{
				?>
				<tr>
					<td><?php echo $datamarker['name']; ?></td>
					<td><?php echo $datamarker['classes']; ?></td>
					<td><em><?php echo $datamarker['x']; ?>:<?php echo $datamarker['y']; ?></em></td>
					<td class="privacy_<?php echo $datamarker['isPrivate']?>"><?php 
					switch($datamarker['isPrivate'])
					{
						case 0:
							echo "Public";
						break;
						case 1:
							echo "Privé";
						break;
						default;
							echo "Public";	
						break;
					}
					; ?></td>
					<?php
						if($_SESSION['rightsLevel']>0)
						{
					?>
					<td>	
						<a href="#EditMarkerPanel" onclick="showEditMarkerPanel(<?php echo $datamarker['id']; ?>,'<?php echo addslashes($datamarker['name']); ?>',<?php echo $datamarker['x']; ?>,<?php echo $datamarker['y']; ?>,'<?php echo addslashes($datamarker['classes']); ?>',<?php echo $datamarker['isPrivate']; ?>)" ><img src="./assets/img/pencil.png"/>modifier</a>
						&nbsp;
						<?php deleteMarkerButton($datamarker,"backoffice");?>
					</td>
					<?php
						}
					?>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</section>
	<section>
		<h2>Liste des Zones</h2>
		<table>
			<thead>
				<tr>
					<td>Nom</td>
					<td>Drapeau</td>
					<td>Couleur</td>
					<td>Coordonnées</td>
					<td>Visibilité</td>
					<?php
						if($_SESSION['rightsLevel']>0)
						{
					?>
					<td>Actions</td>
					<?php
						}
					?>
				</tr>
			</thead>
			<tbody>
				<?php
				$reponse = getAreas();
				while ($dataArea = $reponse->fetch())
				{
				?>
				<tr>
					<td><?php echo $dataArea['name']; ?></td>
					<td><?php echo $dataArea['flag']; ?></td>
					<td><span class="colorPick" style="background-color:<?php echo $dataArea['colorHexa']; ?>;">&nbsp;</span><?php echo $dataArea['colorHexa']; ?></td>
					<td><em><?php echo $dataArea['polygonwkt']; ?></em></td>
					<td class="privacy_<?php echo $dataArea['isPrivate']?>"><?php 
					switch($dataArea['isPrivate'])
					{
						case 0:
							echo "Public";
						break;
						case 1:
							echo "Privé";
						break;
						default;
							echo "Public";	
						break;
					}
					; ?></td>
					<?php
						if($_SESSION['rightsLevel']>0)
						{
					?>
					<td>
					<a href="#EditAreaPanel" onclick="showEditAreaPanel(
						<?php echo $dataArea['id']; ?>,
						'<?php echo addslashes($dataArea['name']); ?>',
						'<?php echo addslashes($dataArea['flag']); ?>',
						'<?php echo $dataArea['colorHexa']; ?>',
						'<?php echo addslashes($dataArea['polygonwkt']); ?>',
						<?php echo $dataArea['isPrivate']; ?>
						)"><img src="./assets/img/pencil.png"/>modifier</a><br/>
						<?php deleteAreaButton($dataArea,"backoffice");?>
					</td>
					<?php
						}
					?>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</section>
	</div>
	
</body>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
include("./views/include/footer.php");
?>
