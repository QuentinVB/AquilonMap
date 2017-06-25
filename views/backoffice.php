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
	<?php
		if($_SESSION['rightsLevel']>0)
		{
		?>
	<section id="EditPanel" class="popUp">
		<span>&nbsp; </span>
			<h2>Editer un lieu</h2>
			<form method="post" action="index.php?page=edit">
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
		<script src="./assets/js/editPanel.js"></script>
	</section>
		<?php
		}
		if($_SESSION['rightsLevel']>=0)
		{
		?>
	<section>
		<h2>Ajouter un lieu</h2>
		<form method="post" action="index.php?page=add">
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
				<p>Visibilité : <br />
					<label for="public">Public</label> : <input type="radio" name="isPrivate" id="public" value="0" checked/> / <label for="private">Privé</label> : <input type="radio" name="isPrivate" id="private" value="1" />
				</p>
				<input type="submit" value="sauvegarder" />
			</p>	
		</form>
	</section>
	<?php
		}
	?>
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
						<a href="#EditPanel" onclick="showEdit(<?php echo $datamarker['id']; ?>,'<?php echo addslashes($datamarker['name']); ?>',<?php echo $datamarker['x']; ?>,<?php echo $datamarker['y']; ?>,'<?php echo addslashes($datamarker['classes']); ?>',<?php echo $datamarker['isPrivate']; ?>)" ><img src="./assets/img/pencil.png"/>modifier</a>
						&nbsp;
						<?php deleteButton($datamarker,"backoffice");?>
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
	
</body>
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
include("./views/include/footer.php");
?>
