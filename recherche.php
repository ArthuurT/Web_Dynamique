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
					 										<option value="01" selected="selected">jeux de société</option>
					 										<option value="02">jeux d'exterieur</option>
					 										<option value="03">jeux de ?</option>
														</select><br/><br/>

							Nombre de joueur minimum:	<select name="-nb_joueur" size="1">
					 										<option value="01" selected="selected"> 1 </option>
					 										<option value="02"> 2 </option>
					 										<option value="03"> 3 </option>
					 										<option value="04"> 4 </option>
					 										<option value="05"> 5 </option>
														</select><br/><br/>

							Nombre de joueur maximum:	<select name="+nb_joueur" size="1">
					 										<option value="01"> 1 </option>
					 										<option value="02"> 2 </option>
					 										<option value="03"> 3 </option>
					 										<option value="04"> 4 </option>
					 										<option value="05" selected="selected"> 5 </option>
														</select><br/><br/>

							Age minimum:	<select name="age" size="1">
					 										<option value="03" selected="selected"> 3 </option>
					 										<option value="05"> 5 </option>
					 										<option value="07"> 7 </option>
					 										<option value="09"> 9 </option>
					 										<option value="012"> 12 </option>
					 										<option value="016"> 16 </option>
					 										<option value="018"> 18 </option>
														</select><br/><br/>
						</div>

						<div class="droit">
							<input type="radio" name="trier" value="1"/>: Titre = A->Z  <br/><br/>
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
				</form>
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
