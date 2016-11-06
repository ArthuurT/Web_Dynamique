<?php session_start(); ?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_panier.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


	</head>

	<body>

		<header>

			<div class="entete">
			<div class="slogan">
				La ludothèque libre pour tous !
			</div>
			<div class="conecter">
				<?php if(isset($_SESSION['prenom'])){ echo 'Bonjour '.$_SESSION['nom'].' '.$_SESSION['prenom'].'';}?>
			</div>
		</div>

			<a href="main.php"><div id="logo"></div></a>
			<a <?php if(isset($_SESSION['prenom'])){ echo 'href="mon_compte.php"';}else{echo 'href="connexion.php"';}?> ><div id="connec"></div></a>
			<a href="panier.php"><div id="panier"></div></a>
			<nav>

				<ul>

					<li class = "menu"><a class="lien_menu" href="main.php">Acceuil</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href="catalogue.php">Catalogue</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href="recherche.php">Recherche</a></li>

				</ul>

		</nav>

		</header>

			<section class="intro">

				<h1 class="panier"> PANIER </h1>
				<div> Mes articles: 
									<?php
										
				 							echo $_SESSION["Nom"];
				 							echo "<br/>";
										
									?>
				</div>

			</section>

	</body>
	<footer>
				<ul>
					<li class="menu_logo_gauche">MineTek - 2016</a></li>
					<li class="menu_footer"> <a class="lien_footer" href="contact.php">Nous contacter</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#>Adresse</a></li>
					<li class="menu_footer"> <a class="lien_footer" href="reglement.php">Règlement</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#>Personnel</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#>Actualité</a></li>
					<li class="menu_logo_droit">Tous droits reservés</li>
				</ul>
	</footer>
</html>
