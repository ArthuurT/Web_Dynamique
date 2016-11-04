<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_main.css" media="all" />
		<link rel="shortcut icon" href="Images/logo_blue_onglet.ico">


	</head>

	<body>

		<header>

			<p class="slogan"> La ludothèque libre pour tous ! </p>
			<a href="main.php"><div id="logo"></div></a>
			<a href="connexion.php"><div id="connec"></div></a>
			<a href="panier.php"><div id="panier"></div></a>
			<nav>

				<ul>

					<li class = "menu"><a class="lien_menu" href="main.php">Acceuil</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href=#>Produits</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href="recherche.php">Recherche</a></li>

				</ul>

		</nav>

		</header>

			<section class="intro">

				<p> Bonjour et bienvenue sur le site de la ludothèque par kirozz et WarNN <br/> <br/> <br/><br/>
					Le site est vide, veuillez patientez </p>

			</section>


		<section class="fond">

				<table>

					<tr class="entete">

						<td>
							Nouveautés
						</td>

						<td>
							Populaires
						</td>

						<td>
							Disponible Maintenant
						</td>

					</tr>

					<tr class="zone">

						<td class="contenu">
							<p> </p>
						</td>

						<td class="contenu">
							<p>	</p>
						</td>

						<td class="contenu">
							<p>
							<?php

								require 'config.php';
								$Requete = "SELECT * FROM `FC_grp3_Jeux`;";
								$Reponse = mysql_query($Requete);
							
								while ($donnees = mysql_fetch_array($Reponse))
								{
								echo $donnees['Nom']." ";
								echo "<br/>";

							}
							?>
							</p>
						</td>

					</tr>

				</table>

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
</html>.
