<!--Formulaire d'inscription-->
<?php
session_start();
include("../../controller/getConnexionData.php");
include("../../controller/mailinit.php");
include("mailSender.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="./users.css" rel="stylesheet">
	</head>

	<body class="bg1">
		
		<?php 
		include("../network.php");
		include("../navbar.php");
		include("../sideBar.php"); 
		?>

		<div class="container" style="padding-top: 2rem; padding-bottom: 15rem;">

			<div class = "row">

				<div class="col-md-7">

					<div class="col-md-10 hidden-xs" style="padding-top: 6rem;">

                    <img class="logo" src='../../assets/img/logoFede.png' style="width:61.76%;display: block; margin: 0 auto;" alt='Logo du site !'/>

                	</div>
                	
				</div>	

				<div class='col-md-5 inscription' style="float:left;">

					<br/>
					<h2>Inscription</h2>
					<br/>

					<form class='formulaire' method='post' enctype="multipart/form-data">
					 
						<!-- ajouter action='uploadfiles.php'  pour upload photo et le fichier  uploadfiles.php aussi.-->

						<!--<p> 
							<br>
							<label>Prénom : </label>
							<input class='champ' type='text' id='prenom_utilisateur'  name='prenom_utilisateur' placeholder='Prénom' maxlength='25' size='45' required />
						</p>
						<p>
							<label>Nom : </label>
							<input class='champ' type='text' id='nom_utilisateur' name='nom_utilisateur' placeholder='Nom' maxlength='25' size='45' required />
						</p>
						<p>
							<label>Sexe : </label>
							<input type="radio" id='sexe_utilisateur' name='sexe_utilisateur' value='1' id='homme' required /><label for='1'> Homme </label>
							<input type="radio" id='sexe_utilisateur' name='sexe_utilisateur' value='0' id='femme' required /><label for='0'> Femme </label>
						</p> -->
						<!--<p>
							<ul style="list-style-type: none; text-align: center;">
								<li> <label style="text-align: center;">Photo de profil : </label> </li>
								<li> <input type="file" id="photo_utilisateur" name="photo_utilisateur"> </li>
							</ul>	
	            		</p> -->
	            		<!--
						<p>
							<label>Date de naissance : </label>
							<input class='champ' type='date' id='date_naissance_utilisateur' name='date_naissance_utilisateur' maxlength='25' size='45' required />
						</p> -->

						<div class="input-group">
							<input class='champ' type='text' id='pseudo_utilisateur' name='pseudo_utilisateur' autofocus placeholder='PSEUDO' maxlength='25' size='40'  required />
						</div>

						<div class="input-group">
							<input class='champ' type='email' id='email_utilisateur' name='email_utilisateur' placeholder='E-MAIL' maxlength='40' size='40' required />
						</div>

						<div class="input-group">
							<input class='champ' type='email' id='email' name='email' placeholder="CONFIRMATION E-MAIL" maxlength='40' size='40' required />
						</div>

						<!--<input class='champ' id='promotion_utilisateur' type='number' name='promotion_utilisateur' placeholder='Ex : 176' maxlength='25' size='45' />-->

						<div class="input-group">
							<input class='champ' type='password' id='password_utilisateur' name='password_utilisateur' placeholder='MOT DE PASSE' minlength="6" maxlength='25' size='40' required />
						</div>
						
						<div class="input-group">
							<input class='champ' type='password' id='password' name='password' placeholder='CONFIRMATION MOT DE PASSE' minlength='6' maxlength='25' size='40' required />
						</div>

						<!--
						<p>
							<label>S'abonner à la newsletter ? </label>
							<input type="radio" id='spam_utilisateur' name='spam_utilisateur' value='1' id='oui' required /><label for='1'> Oui </label>
							<input type="radio" id='spam_utilisateur' name='spam_utilisateur' value='0' id='non' required /><label for='0'> Non </label>
							<br> 
							<span style="font-size: 1rem"> * champ facultatif</span>
						</p> 
						-->

						<?php 
						//connexion à la BDD

						//Vérification des données 
						if(isset($_POST['forminscription'])){
							//htmlspecialchars : pour que l'utilisateur n'entre pas de la merde
							//$prenom = htmlspecialchars($_POST['prenom_utilisateur']);
							//$nom = htmlspecialchars($_POST['nom_utilisateur']);
							//$sexe = $_POST['sexe_utilisateur'];
							//$date = htmlspecialchars($_POST['date_naissance_utilisateur']);
							$mail = htmlspecialchars($_POST['email_utilisateur']);
							$mail2 = htmlspecialchars($_POST['email']);
							$pseudo = htmlspecialchars($_POST['pseudo_utilisateur']); 
							//$mdp = password_hash($_POST['password_utilisateur'], PASSWORD_DEFAULT);
							//$mdp2 = password_hash($_POST['password'], PASSWORD_DEFAULT);
							$mdp = sha1($_POST['password_utilisateur']);
							$mdp2 = sha1($_POST['password']);
							//$spam = $_POST['spam_utilisateur'];
							//$promotion = htmlspecialchars($_POST['promotion_utilisateur']);
							//move_uploaded_file($_FILES['photo_utilisateur']['tmp_name'],"../resources/photos/utilisateur/".$_FILES['photo_utilisateur']['name']);
							//$photo=$_FILES['photo_utilisateur']['name'];
							
							/* if(!empty($_POST['sexe_utilisateur']) AND !empty($_POST['prenom_utilisateur']) AND !empty($_POST['nom_utilisateur']) AND !empty($_POST['date_naissance_utilisateur']) AND !empty($_POST['email_utilisateur']) AND !empty($_POST['email']) AND !empty($_POST['pseudo_utilisateur']) AND !empty($_POST['password_utilisateur']) AND !empty($_POST['password']) AND !empty($_POST['spam_utilisateur']))
							*/

							if(!empty($_POST['email_utilisateur']) AND !empty($_POST['email']) AND !empty($_POST['pseudo_utilisateur']) AND !empty($_POST['password_utilisateur']) AND !empty($_POST['password']) ){	
								
								//Vérification adresse mail 
								if($mail == $mail2){

									if(filter_var($mail,FILTER_VALIDATE_EMAIL)){

										//On vérifie si le mail existe déjà : 
										$reqmail = $bdd -> prepare('SELECT * FROM utilisateur WHERE email_utilisateur = ?');
										$reqmail -> execute(array($mail));
										//On compte le nombre de colonnes contenant le même mail :
										$mailexist = $reqmail->rowCount();

										if($mailexist == 0){

											//On fait le même avec le pseudo
											$reqpseudo = $bdd -> prepare('SELECT * FROM utilisateur WHERE pseudo_utilisateur=?');
											$reqpseudo -> execute(array($pseudo));
											$pseudoexist = $reqpseudo -> rowCount();
											if($pseudoexist == 0){

												if($mdp == $mdp2){
													//Pour rentrer les données dans la BDD 
													$req = $bdd -> prepare('INSERT INTO utilisateur(email_utilisateur, pseudo_utilisateur, password_utilisateur, statut_utilisateur) VALUES(?,?,?,?)');
													
													$pass=$req->execute(array($mail,$pseudo,$mdp,0));
													$req->closeCursor(); // Termine le traitement de la requête

													if($pass){
														// echo "la requête ";
														sendMail($bdd,$transport,$mail,$pseudo);

														//redirect("./mailConfirm.php");
													}
													else{
														echo "la requête a échoué, contactez votre administrateur";
													}
												
												}
												else{
													echo '<p class="erreur">Vos mots de passe ne correspondent pas !</p>';
												}
											}
											else{
											echo '<p class="erreur">Ce pseudo est déjà utilisé !</p>';
											}
										}
										else{
											echo '<p class="erreur">Cette adresse mail est déjà utilisée !</p>';
										}
									}
									else{
										echo '<p class="erreur">L\'adresse mail est invalide.</p>';
									}	
								}
								else{
									echo '<p class="erreur">Vos adresses mail ne correspondent pas !</p>';
								}
							}
						}
						?>

						<div class="btn-form-group">
							<input type='submit' class='btn-form2' name='forminscription' value="S'inscrire" />
						</div>

					</form>

				</div>

			</div>

		</div>

	<?php include("../footer.php"); ?>

	</body>

</html>