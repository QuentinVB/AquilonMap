<?php
//view

include("controlers/controler.php");
include("functions/toolbox.php");
?>
    <body>
		<nav id="data">
			<ul>
				<li><a href="backoffice/backoffice.php">Ajouter/Editer Marqueur</a></li>
				<li>Dernière mise à jour : <?php echo $date[0]; ?></li>
			</ul>	
			<h3>Legende</h3>
			<ul>
				<li><img src ="img/square-18.png"/>Lieu d'intéret</li>
				<li><img src ="img/monument-18.png"/>Ruines explorable</li>
				<li><img src ="img/park2-18.png"/> Biome ou lieu naturel </li>
				<li><img src ="img/star-18.png"/> Emplacement potentiel de construction</li>
				<li><img src ="img/circle-stroked-18.png"/>Tracé de fleuve ou lac</li>
				<li><img src ="img/limite.png"/>Limite de map</li>
				<li><img src ="img/route.png"/>Ouvrage civil (pont,tunnel...)</li>
				
			</ul>
			<h3>Où suis-je ?</h3>
			<p>
				Entrez vos coordonnés pour vous localiser sur la carte.<br/>
				<label>X</label> : <input type="number" name="xPosition" id="xPosition" placeholder="0" value="0"/><br/>
				<label>Z</label> : <input type="number" name="yPosition" id="yPosition" placeholder="0" value="0"/>
				
			</p>
			<p>
				<img src ="img/boussole.png"/><br/>
				http://tiny.cc/20rcky
			</p>
			<p>Aquilon, cartographie par Hamil Sambre <br/>aka KaentinWede, dessin par Asaric - 2017</p>
		</nav>
		<div id="mapid"></div>
        <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
        <script src="js/leafletManagment.js"></script>
		
		<script>
			var map = L.map('mapid', {
				crs: L.CRS.Simple,
				minZoom: -5
			});
			var north = L.imageOverlay('img/carte nord.jpg', mapBounds(3300,2470,[340,-1040])).setOpacity(1.0).addTo(map);
			var mult = 0.74;
			var south = L.imageOverlay('img/map_south.jpg', mapBounds(5000*mult,5833*mult,[-3960,-713])).setOpacity(1.0).addTo(map);
			map.fitBounds(mapBounds(5000*mult,5833*mult,[-3970,-700]));

			<?php
			$classes =["lieu","ruines","limite","biome","emplacement","fleuve"];
			foreach ($classes as $value){
				printMarker($value);
			}
			?>
			var overlays = {
				"Lieux": lieuX,
				"Ruines": ruinesX,
				"Limites": limiteX,
				"Nature": biomeX,
				"Emplacements":emplacementX,
				"Fleuves":fleuveX
			};
			L.control.layers(null,overlays).addTo(map);
			
			<?php
			foreach ($classes  as $value){
				echo $value."X.addTo(map);";
			}
			?>
			emplacementX.addTo(map);
			var pointer = L.marker([0,0],{icon: pointer}).addTo(map);
 
			//L.control.map.setView([0, 0], -1);
					
		</script>
		<script src="js/location2.js"></script>
    </body>
	
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
?>