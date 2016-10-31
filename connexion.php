<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_connexion.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">

	</head>

	<body>

		<header>

			<p class="slogan"> La ludothèque libre pour tous ! </p>
			<a id=logo href="main.php"> <img src="Images/logo_blue.svg"/> </a> 
			<nav>

				<ul>

					<li class = "menu"><a class="lien_menu" href="main.php">Acceuil</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href=#>Produits</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href=#>Contact</a></li>

				</ul>

		</nav>

		</header>
		
			<section class="intro">

				<form class="login" method="post">
					<h1 class ="connec"> CONNEXION </h1><br/><br/>
					 Indentifiant:  <input name="ident" class="envoyer"/><br/><br/>
					 Mot de Passe: 	<input type="password" name="passwd" class="envoyer" /><br/><br/><br/>
					<input type="submit" value="Se connecter" name="Envoyer" class="envoyer" /></h1><br/></br>

					<?php 
					if(isset($_POST["Envoyer"])) 
					{
						if(!empty($_POST["ident"])&&!empty($_POST["passwd"]))
						{

						}
						else 
						{
							echo '<p class="commentaire">';
							echo 'Veuillez remplir tous les champs';
							echo '<br/>';
							echo '</p>';
						}
					}
					?>
					<a class="anc_ins" href="inscription.php"> Pas encore inscrit ? Cliquez ici ! </a>
				</form>
			</section>
	</body>




	<footer>
				<ul>
					<li class="menu_logo_gauche"> MineTek - 2016  </a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Nous contacter</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Adresse</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Règlement</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Personnel</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Actualité</a></li>
					<li class="menu_logo_droit"> Tous droits reservés</li>
				</ul>
	</footer>
</html>
