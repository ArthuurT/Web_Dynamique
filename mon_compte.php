<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<head>

		<meta charset="UTF-8"/>
		<title>MineTek</title>
		<link rel="stylesheet" href="style_mon_compte.css" media="all" />
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

				<p>
						<h1 class="contact"> MON COMPTE </h1>  <br/><br/>
				</p>

				<form method="post">
				<div class="total">

					<div class="coordonnee">
						<p>
						<p class="ad">
							mon adresse mail     : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="ident" value="'.$_SESSION["adresse_mail"].'">';
														}else{
																echo ' '.$_SESSION['adresse_mail'].'';
														} 
													?> <br/><br/>

							mon mot de passe     : <?php if(isset($_POST["modifier"])){
															echo'<input type="password" name="passwd" value="'.$_SESSION["motdepasse"].'">';

														}else{
																echo ' '.$_SESSION['motdepasse'].'';
														} 
													?> <br/><br/>
							mon prenom           : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="prenom" value="'.$_SESSION["prenom"].'">';
														}else{
																echo ' '.$_SESSION['prenom'].'';
														} 
													?> <br/><br/>
							mon nom              : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="nom" value="'.$_SESSION["nom"].'">';
														}else{
																echo ' '.$_SESSION['nom'].'';
														} 
													?> <br/><br/>
							ma date de naissance : <?php if(isset($_POST["modifier"])){
															echo " a copier se qu'il y a inscription";
														}else{
																echo ' '.$_SESSION['date_de_naissance'].'';
														} 
													?> <br/>
						</p>
							mon adresse est :<br/>
							
							<?php if(isset($_POST["modifier"])){
											echo"<p class='ad_modif'>";
											echo"rue : ";
											echo'<input type="text" name="rue" value="'.$_SESSION["adresse_rue"].'"><br/>';
										}else{
											echo"<p class='ad'>";
											echo"rue : ";
											echo ' '.$_SESSION['adresse_rue'].'';
										} 
									?> <br/>
							code postale : <?php if(isset($_POST["modifier"])){
													echo'<input type="text" name="cp" value="'.$_SESSION["adresse_cp"].'"><br/>';
												}else{
													echo ' '.$_SESSION['adresse_cp'].'';
												} 
											?><br/>
							ville : <?php if(isset($_POST["modifier"])){
												echo'<input type="text" name="ville" value="'.$_SESSION["adresse_ville"].'"><br/>';
												}else{
													echo ' '.$_SESSION['adresse_ville'].'';
												} 
									?> <br/>
							pays : <?php if(isset($_POST["modifier"])){
											echo'<input type="text" name="pays" value="'.$_SESSION["adresse_pays"].'"><br/>';
											}else{
												echo ' '.$_SESSION['adresse_pays'].'';
											} 
									?> <br/><br/>
							
							mon téléphone est    : <?php if(isset($_POST["modifier"])){
															echo'<input type="text" name="phone" value="'.$_SESSION["phone"].'">';
														}else{
															echo ' 0'.$_SESSION['phone'].'';
														} 
													?> <br/><br/>
							</p>
						</p>
						
						  <?php if(isset($_POST["modifier"])){
														echo '<input type="submit" value="Envoyer" name="envoyer"/>';
													}else{
														echo'<p class="modif">';
														echo '<input type="submit" value="Modifier" name="modifier"/>';
												}?>
						</p>
					</div>

					<div class="deconexion">
						<p>
							bonjour,<br/><br/>si vous voulez vous déconecter il vous siffut de mettre la main<br/> sur souris oui je que vous avez deja sous la main ou si vous <br/> êtes sur unordinateur portable utiliser le trackpad qui se situe <br/>sous vaux doights.<br/><br/>Ensuite diriger la sourie sur le bouton deconexion qui se situe <br/>juste sous se texte allez-si.<br/><br/>Ensuite vous avez presque fini vous pouvez maintenant<br/> appuier dessus et vous serrez directement rediriger vers la <br/>page principale tout en étant déconecter !
						</p>
						<p class="deco">
						<input type="submit" value="Déconexion" name="deconexion"/>
						</p>
					</div>
				</div>
					<?php

						require 'config.php';
						if(isset($_POST["deconexion"])){

							session_destroy();

							echo "<script type='text/javascript'>document.location.replace('main.php');</script>";
						}
						if(isset($_POST["envoyer"])){
							
                            mysql_query ( " UPDATE FC_grp3_Clients SET
										adresse_mail='".$_POST["ident"]."',
										motdepasse='".$_POST["passwd"]."',
										prenom='".$_POST["prenom"]."',
										nom='".$_POST["nom"]."',
										adresse_rue='".$_POST["rue"]."',
										adresse_cp ='".$_POST["cp"]."',
										adresse_ville='".$_POST["ville"]."',
										adresse_pays='".$_POST["pays"]."',
										phone='".$_POST["phone"]."'
										WHERE id='".$_SESSION["id"]."'");


							// date_de_naissance = '".$_POST["jour"]."/".$_POST["mois"]."/".$_POST["an"]."',
							//a rajouter apres nom dans la requete si besoin


							session_destroy();

							echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";
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