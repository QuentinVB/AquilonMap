<?php
//view

include("./functions/toolbox.php");
?>
    <body>
		<nav id="data" class="toggleableMenu">
			<span>&nbsp;	</span>
			<div>
				<ul>
					<li><a href="index.php">Retour</a></li>
				</ul>	
				
				<p>Aquilon, cartographie par Hamil Sambre <br/>aka KaentinWede, dessin par Asaric - 2017</p>
			</div>
		</nav>
		<h1>Login</h1>
		<section id="auth">
		<form method="post" action="index.php?page=auth">
			<p>				
				<label for="userName">Nom d'utilisateur</label> : <input type="text" name="userName" id="userName" placeholder="user" required/><br/>
				<label for="password">Mot de passe</label> : <input type="password" name="password" id="password"  placeholder="password" required/><br/>
				<input type="submit" value="connexion" />
			</p>	
		</form>		
		</section>
		<script src="./assets/js/toggle.js"></script>
    </body>
	