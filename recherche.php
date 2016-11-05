<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_recherche.css" media="all" />
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

				<form class="login" method="post">
					<h1 class ="recherche"> RECHERCHE </h1><br/><br/>

					<div class="option_rech">

						<div class="gauche">
							Type de jeux:				<select name="type_jeu" size="1">
					 										<option value="Société" selected="selected">jeux de société</option>
					 										<option value="exterieur">jeux d'exterieur</option>
					 										<option value="Réflexion">jeux de réflexion</option>
					 										<option value="04">jeux de ?</option>
														</select><br/><br/>

							Nombre de joueur minimum:	<select name="-nb_joueur" size="1">
					 										<option value="01" selected="selected"> 1 </option>
					 										<option value="2"> 2 </option>
					 										<option value="3"> 3 </option>
					 										<option value="4"> 4 </option>
					 										<option value="5"> 5 </option>
														</select><br/><br/>

							Nombre de joueur maximum:	<select name="+nb_joueur" size="1">
					 										<option value="1"> 1 </option>
					 										<option value="2"> 2 </option>
					 										<option value="3"> 3 </option>
					 										<option value="4"> 4 </option>
					 										<option value="5" selected="selected"> 5 </option>
														</select><br/><br/>

							Age minimum:	<select name="age" size="1">
					 										<option value="03" selected="selected"> 3 </option>
					 										<option value="5"> 5 </option>
					 										<option value="7"> 7 </option>
					 										<option value="9"> 9 </option>
					 										<option value="12"> 12 </option>
					 										<option value="16"> 16 </option>
					 										<option value="18"> 18 </option>
														</select><br/><br/>
						</div>

						<div class="droit">
							<input type="radio" name="trier" value="1" checked="checked"/>: Titre = A->Z  <br/><br/>
							<input type="radio" name="trier" value="2"/>: Nouveauté <br/><br/>
							<input type="radio" name="trier" value="3"/>: Note des utilisateurs <br/><br/>
							<input type="radio" name="trier" value="4"/>: Par disponibilité <br/><br/>
						</div>
						<br/><br/><br/><br/><br/><br/><br/>
						<div>
							<input type="submit" value="rechercher" name="Recherhcer" class="envoyer" /></h1>
						</div>
					</div>

					<?php 
					if(isset($_POST["Recherhcer"])) 
					{
				
						require 'config.php';

						$type = $_POST["type_jeu"];
						$nb_inf = $_POST["-nb_joueur"];
						$nb_sup = $_POST["+nb_joueur"];
						$age = $_POST["age"];
						$trier = $_POST["trier"];
						echo ' '.$type.' '.$nb_inf.' '.$nb_sup.' '.$age.' '.$trier.'';
						echo '<br/><br/><br/><br/>';

						//$Requete = "SELECT * FROM FC_grp3_Jeux WHERE" "TypeJeux = '" . $type . "'" " AND " "nombre de joueur min = '" . $nb_inf . "'" " AND " "nombre de joueur max = '" . $nb_sup . "'" " AND " "age = '" . $age . "'";

						//$Reponse = mysql_query($Requete);
						
						//while ($donnees = mysql_fetch_array($Reponse))
						//{
						//echo $donnees['Nom']." ";
						//echo "<br/>";
						//}

					}
					?>
			</section>
	</body>




	<footer>
				<ul>
					<li class="menu_logo_gauche"> MineTek - 2016  </a></li>
					<li class="menu_footer"> <a class="lien_footer" href="contact.php"> Nous contacter</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Adresse</a></li>
					<li class="menu_footer"> <a class="lien_footer" href="reglement.php"> Règlement</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Personnel</a></li>
					<li class="menu_footer"> <a class="lien_footer" href=#> Actualité</a></li>
					<li class="menu_logo_droit"> Tous droits reservés</li>
				</ul>
	</footer>
</html>
