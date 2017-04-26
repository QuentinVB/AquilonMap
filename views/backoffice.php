<?php
//view
?>
<body>
	<nav id="data">
		<ul>
			<li><a href="index.php">Retourner à la carte</a></li>
			<li>Dernière mise à jour : <?php echo $date[0]; ?></li>
		</ul>	
		<?php 
			if(isset($_GET['succes']) && $_GET['succes'] == 0)
			{
				?><h2><?php
				switch ($_GET['succes']) {
					case 'add':
						echo "Ajout réussi !";
						break;					
					case 'delete':
						echo "Suppression réussie !";
						break;
					case 'edit':
						echo "Edition réussie !";
						break;
					default:
						echo "yup !";
						break;
				}
				
				?></h2><?php
			} ?>	
			
	</nav>
	<h1>Map Managment</h1>
	<section id="EditPanel" class="popUp">
		<span>&nbsp; </span>
		<h2>Editer un lieu</h2>
		<form method="post" action="index.php?page=edit">
			<p>				
				<label for="name">Nom du lieu</label> : <input type="text" name="name" id="nameEdit" value="" required/><br/>
				<label for="x">Coordonné X </label> : <input type="text" name="x" id="xEdit" size="9" placeholder="east/west" required/><br/>
				<label for="y">Coordonné Y </label> : <input type="text" name="y" id="yEdit" size="9" placeholder="north/south" required/><br/>
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
				<input type="hidden" id="idEdit" name="id" value=""/>
				<input type="submit" value="sauvegarder" />
			</p>	
		</form>		
	<script src="./assets/js/editPanel.js"></script>
	</section>
	<section>
		<h2>Ajouter un lieu</h2>
		<form method="post" action="index.php?page=add">
			<p>
				<label for="name">Nom du lieu</label> : <input type="text" name="name" id="name" required/><br/>
				<label for="x">Coordonné X </label> : <input type="text" name="x" id="x" size="9" placeholder="east/west" required/><br/>
				<label for="y">Coordonné Y </label> : <input type="text" name="y" id="y" size="9" placeholder="north/south" required/><br/>
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
				<input type="submit" value="sauvegarder" />
			</p>	
		</form>
	</section>
	<section>
		<h2>Liste des Marqueurs</h2>
		<table>
			<thead>
				<tr>
					<td>Nom</td>
					<td>Type</td>
					<td>Coordonnés</td>
					<td>Actions</td>
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
					<td>
						<a href="#" onclick="showEdit(<?php echo $datamarker['id']; ?>,'<?php echo addslashes($datamarker['name']); ?>',<?php echo $datamarker['x']; ?>,<?php echo $datamarker['y']; ?>,'<?php echo addslashes($datamarker['classes']); ?>')" ><img src="./assets/img/pencil.png"/>modifier</a>
						&nbsp;
						<a href="index.php?page=delete&amp;id=<?php echo $datamarker['id']; ?>&amp;x=<?php echo $datamarker['x']; ?>&amp;y=<?php echo $datamarker['y']; ?>" onclick="return confirm('Confirmer suppression ?')"><img src="./assets/img/delete.png"/> effacer</a>
					</td>
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
?>
