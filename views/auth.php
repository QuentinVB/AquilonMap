<?php
//view
?>
<body>
	<nav class="toggleableMenu">
		<span>&nbsp;	</span>
		<div>
			<ul>
				<li><a href="index.php">Retour</a></li>
			</ul>	
			<p>Aquilon, cartographie par Hamil Sambre <br/>aka KaentinWede, dessin par Asaric - 2017</p>			
			<h2><?php echo $msg; ?></h2>
		</div>
	</nav>
	<h1>Login</h1>
		<section id="auth">
		<form method="post" action="index.php?page=auth">
			
			<p>				
				<label for="username">Nom d'utilisateur</label> : <input type="text" name="username" id="username" placeholder="user" required/><br/>
				<label for="password">Mot de passe</label> : <input type="password" name="password" id="password" placeholder="password" required/><br/>
				<input type="submit" value="connexion" />
			</p>	
		</form>		
	</section>
	<script src="./assets/js/toggle.js"></script>
</body>
	