<?php
//view
include("./functions/toolbox.php");
include("./views/include/header.php");
include("./views/include/button.php");
?>
    <body>
		<nav class="toggleableMenu">
			<span>&nbsp;</span>
			<div>
				<ul>
					<li><a href="index.php?page=backoffice"><?php echo $backofficeAcces;?></a></li>	
				</ul>
				<p>Dernière mise à jour : <?php echo $date[0]; ?></p>
				<h2><?php echo $msg;?></h2>	
				<h3>Legende</h3>
				<ul>
					<li><img src ="./assets/img/square-18.png"/>Lieu d'intéret</li>
					<li><img src ="./assets/img/monument-18.png"/>Ruines explorable</li>
					<li><img src ="./assets/img/park2-18.png"/> Biome ou lieu naturel </li>
					<li><img src ="./assets/img/star-18.png"/> Emplacement potentiel de construction</li>
					<li><img src ="./assets/img/circle-stroked-18.png"/>Tracé de fleuve ou lac</li>
					<li><img src ="./assets/img/limite.png"/>Limite de map</li>
					<li><img src ="./assets/img/road.png"/>Ouvrage civil (pont,tunnel...)</li>				
				</ul>
				<h3>Où suis-je ?</h3>
				<p>
					Entrez vos coordonnés pour vous localiser sur la carte.<br/>
					<label>X</label> : <input type="number" name="xPosition" id="xPosition" placeholder="0" value="0"/><br/>
					<label>Z</label> : <input type="number" name="yPosition" id="yPosition" placeholder="0" value="0"/>	
				</p>
				<p>
					<img src ="./assets/img/boussole.png"/><br/>
					http://tiny.cc/20rcky
				</p>
				<p>Aquilon, cartographie par Hamil Sambre <br/>aka KaentinWede, dessin par Asaric - 2017</p>
			</div>
		</nav>
		<div id="mapid"></div>
        <script src="./assets/js/leaflet-1-0-3-min.js"></script>
        <!--<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>-->
        <script src="./assets/js/leafletManagment.js"></script>
		
		<script>
			var map = L.map('mapid', {
				crs: L.CRS.Simple,
				minZoom: -5
			});
			var mult = 0.74;
			var north = L.imageOverlay('./assets/img/north.jpg', mapBounds(5000*mult,3353*mult,[356,-713])).setOpacity(1.0).addTo(map);			
			var south = L.imageOverlay('./assets/img/south.jpg', mapBounds(5000*mult,5833*mult,[-3960,-713])).setOpacity(1.0).addTo(map);
			var extnorth = L.imageOverlay('./assets/img/ex-north.jpg', mapBounds(5000*mult,3358*mult,[1670,-713])).setOpacity(1.0).addTo(map);
			map.fitBounds(mapBounds(5000*mult,5833*mult,[-3970,-700]));

			<?php
			$classes =["lieu","ruines","limite","biome","emplacement","fleuve","route"];
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
				"Fleuves":fleuveX,
				"Route":routeX
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
		<script src="./assets/js/location.js"></script>
		<script src="./assets/js/toggle.js"></script>
    </body>
	
<?php
$reponse->closeCursor(); // Termine le traitement de la requête
include("./views/include/footer.php");
?>
