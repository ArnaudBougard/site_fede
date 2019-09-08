<?php
session_start();
?>

<?php include("../../model/dao/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
	</head>










	<?php 

		//Vérification des données 
		if(isset($_POST['forminscription']))
		{
			
			$nom = htmlspecialchars($_POST['nom']);
			$date = htmlspecialchars($_POST['date']);
			$description = htmlspecialchars($_POST['description']); 
			$ouverture = sha1($_POST['ouverture']);
			$organisateur = $userinfo['pseudo_utilisateur'];
			

			if(!empty($nom) AND !empty($date) AND !empty($organisateur) )
			{	
				
				//Vérification adresse mail 
				if($mail == $mail2)
				{
					if(filter_var($mail,FILTER_VALIDATE_EMAIL))
					{
						//On vérifie si le mail existe déjà : 
						$reqmail = $bdd -> prepare('SELECT * FROM utilisateur WHERE email_utilisateur = ?');
						$reqmail -> execute(array($mail));
						//On compte le nombre de colonnes contenant le même mail :
						$mailexist = $reqmail->rowCount();
						if($mailexist == 0)
						{
							//On fait le même avec le pseudo
							$reqpseudo = $bdd -> prepare('SELECT * FROM utilisateur WHERE pseudo_utilisateur=?');
							$reqpseudo -> execute(array($pseudo));
							$pseudoexist = $reqpseudo -> rowCount();
							if($pseudoexist == 0)
							{
								if($mdp == $mdp2)
								{	
									//Pour rentrer les données dans la BDD 

									$req = $bdd -> prepare('INSERT INTO utilisateur(email_utilisateur, pseudo_utilisateur, password_utilisateur) VALUES(?,?,?)');
									
									$req->execute(array($mail,$pseudo,$mdp));

									echo"Inscription validée!";
									// header( "Refresh:1; ./connexion.php", true, 303);

									/*
									$req = $bdd -> prepare('INSERT INTO utilisateur(prenom_utilisateur, nom_utilisateur, sexe_utilisateur, date_naissance_utilisateur, email_utilisateur, pseudo_utilisateur, password_utilisateur, spam_utilisateur,promotion_utilisateur) VALUES(?,?,?,?,?,?,?,?,?)');
									echo"ici";
									$req->execute(array($prenom,$nom,$sexe,$date,$mail,$pseudo,$mdp,$spam,$promotion));
									echo"ici";
									*/

									//On crée une variable de session 
									//$_SESSION['comptecree'] = '<p class="reussi">Votre compte a bien été créé !</p>'; 
									
									//header('Location: ../index/index.php'); 

									/*if (!empty($photo))
									{
										  $req=$bdd -> prepare("UPDATE utilisateur SET photo_utilisateur = ? WHERE pseudo_utilisateur = ? ");
										  $req->execute(array($photo,$pseudo));
									}*/
								}
								else
								{
									echo '<p class="erreur">Vos mots de passe ne correspondent pas !</p>';
								}
							}
							else
							{
							echo '<p class="erreur">Ce pseudo est déjà utilisé !</p>';
							}
						}
						else
						{
							echo '<p class="erreur">Cette adresse mail est déjà utilisée !</p>';
						}
					}
					else
					{
						echo '<p class="erreur">L\'adresse mail est invalide.</p>';
					}	
				}
				else
				{
					echo '<p class="erreur">Vos adresses mail ne correspondent pas !</p>';
				}
			}
		}
	?>











	<body id="body">
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<!-- HEADER -->

		<?php include("../navbar.php"); ?>

		
		<div class="container"> <!-- upload files -->
			<div class="container">			
				<div class="page-header">
					<h1>Créer un événement</h1>
					<h2 >Tout membre d'un comité peut créer un evenement mais celui-ci doit être validé par la com web (mail de confirmation, lien vers page de confirmation etc))</h2>
					<h2 >attention img obligatoire de 300x200 minimmum et de qualité correcte. Pas de montage/collage dégueulasse sinon ce sera refusé </h2>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="uploadimg.php">
							<div class="form-group">
								<label for="exampleInputFile">Selectionnez une image pour l'événement qui défilera sur la page d'accueil:</label>
								<input type="file" id="exampleInputFile" name="files[]" >
								<p class="help-block"><span class="label label-info">Note:</span> Please, select png jpg or jpeg files</p>

								<p> 
									<label>Nom</label><br>
									<input class='champ' type='text' id='nom' name='nom' placeholder='Soirée Mousse' maxlength='25' size='30'  required />
								</p>

								<p> 
									<label>Description </label><br>
									<input class='champ' type='text' id='description' name='description' placeholder='si nécessaire' maxlength='50' size='60'  required />
								</p>

								<p>
		                            <label>Date </label> <br>
		                            <input class='champ' type='date' id='date' maxlength='25' size='45' required />
	                        	</p>
	                        	<p>
									<label>Evénement ouvert à tous?</label> <br>
									<input type="radio" id='ouverture' name='ouverture' value='1' id='oui' required /><label for='1'> Oui </label>
									<input type="radio" id='ouverture' name='ouverture' value='0' id='non' required /><label for='0'> Non </label>
							
									<span style="font-size: 1rem"> * oui par défaut</span>
								</p>
							</div>	
	
							<button type="submit" class="btn btn-primary" name="btnSubmit" >Submit</button>
						</form>
						<br/>
						
						
					</div>
				</div>
			</div>

		</div>




		<div class="container">			
			<div class="page-header">
				<h1>Tous les événements </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","bdd_site_fede");
						
						$query = "SELECT * FROM evenement ORDER BY `nom_evenement` DESC";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($event = mysqli_fetch_assoc($result))
							{
								
								?>	
								<div >
									<p>
			                        Nom : <?php echo $event["nom_evenement"]; ?>
			                        <br /> <br />
			                        Description : <?php echo $event["description_evenement"]; ?>
			                        <br /> <br />
			                        Date : <?php echo $event["date_evenement"]; ?>
			                        <br /> <br />
									 <img style="height:98%; width: 97%;" src=<?php echo "'".$event["img_evenement"]."'" ?>> 
									</p>
								</div>
								<?php
							}
						}
						else
						{
					?>
						<p>Il n'y a pas de PV enregistré</p>
					<?php
						}
					?>					
				</div>
			</div>
		</div>


		<?php include("../footer.php"); ?>


	</body>


	

</html>

