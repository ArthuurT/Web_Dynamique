<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_catalogue.css" media="all" />
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
					<li class = "menu"><a class="lien_menu" href="catalogue.php">Catalogue</a></li>
					<div class="separateur"> | </div>
					<li class = "menu"><a class="lien_menu" href="recherche.php">Recherche</a></li>

				</ul>

		</nav>

		</header>

			<section class="intro">


				
					<?php
								require 'config.php';
								$Requete = "SELECT * FROM `FC_grp3_Jeux`;";
								$Reponse = mysql_query($Requete);
							
								while ($donnees = mysql_fetch_array($Reponse))
								{
								echo '<h2>'.$donnees[0].'</h2>';
								echo '<div class="carac">';
								echo '<span class="souligne">Age minimum requis:</span> '.$donnees[1].' ans';
								echo '<br/><br/>';
								echo '<span class="souligne"> Type de jeux:</span> '.$donnees[2].'';
								echo '<br/><br/>';
								echo '<span class="souligne"> Nombre de joueurs (min-max):</span> '.$donnees[3].'-'.$donnees[4].'';
								echo '<br/><br/>';
								echo'<form class="reserv" method="post">';
								echo'<input type="submit" value="Reserver" name="Reservation"/>';
								echo'</form>';
								echo '</div>';
								echo '<div class= "descr"> <span class="souligne"> Description:</span> ';
								if($donnees[0] == 'Monopoly'){
									echo "Le Monopoly est un jeu de société américain édité par Hasbro. Le but du jeu consiste à ruiner ses concurrents par des opérations immobilières. Il symbolise les aspects apparents et spectaculaires du capitalisme, les fortunes se faisant et se défaisant au fil des coups de dés. Ce jeu de société est mondialement connu, et il en existe de multiples versions.";
								}else if($donnees[0] == 'Trivial Pursuit'){
									echo"Trivial Pursuit (connu au Québec sous le nom de « Quelques arpents de pièges », mais désormais commercialisé sous son nom anglophone Trivial Pursuit) est un jeu de société dont la progression dépend de la capacité du joueur à répondre à des questions de culture générale, éventuellement dans un domaine plus précis pour des versions plus ciblées du jeu.";
								}else if($donnees[0] == 'Trampoline'){
									echo"Toile tendue sur des ressorts d'acier, sur laquelle on effectue des figures en sautant et en rebondissant, sport ainsi pratiqué.";
								}

								echo'</div>';
								echo'<br/>';
								echo'<br/>';
								echo '<p><img class="img_cata" src="'.$donnees[5].'"/></p>';
								echo '<br/>';

								echo '<hr/>';
								
								}
					?>
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
