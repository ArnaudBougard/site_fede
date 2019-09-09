<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<?php include("./eventDAO.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
	</head>

	<body id="body">
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<!-- HEADER -->

		<?php include("../navbar.php"); ?>

		<?php include ("../../controller/warningPopup.php");?>




		<div class="container">			
			<div class="page-header">
				<h1>Créer un événement</h1>
				<h2 >Tout membre d'un comité peut créer un evenement mais celui-ci doit être validé par la com web (mail de confirmation, lien vers page de confirmation etc))</h2>
				<h2 >attention img obligatoire de 300x200 minimmum et de qualité correcte. Pas de montage/collage dégueulasse sinon ce sera refusé </h2>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm">
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
	                            <input class='champ' type='date' id='date' name='date' maxlength='25' size='45' required />
                        	</p>
                        	<p>
								<label>Evénement ouvert à tous?</label> <br>
								<input type="radio" id='ouverture' name='ouverture' value='1' id='oui' /><label for='1'> Oui </label>
								<input type="radio" id='ouverture' name='ouverture' value='0' id='non' /><label for='0'> Non </label>
						
								<span style="font-size: 1rem"> * oui par défaut</span>
							</p>
							<p>
								<input style="margin-left: 0rem;" type='submit' class='btn-form' name='eventform' value="Submit" />
							</p>
						</div>	

					</form>
					<br/>
					
					
				</div>
			</div>
		

			<?php include("eventCreate.php"); ?>

			<div class="container">	
				<div class="page-header">
					<h1>mes événements </h1>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<br/>

						<?php 

							$eventsArray=selectMyEvents($bdd,$_SESSION['pseudo_utilisateur']);

							if(!empty($eventsArray)) {
		        				foreach ($eventsArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur)) {

		        					?> 
		        					<div class="container" style="margin-bottom: 5rem;"> 

		        						<div class="col-sm-4" >
											 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
			        					</div>
			        					<div class="col-sm-4" >
											<p>
					                        Nom de l'événement : <?php echo $nom; ?>
					                        <br /> <br />
					                        Description : <?php echo $description; ?>
					                        <br /> <br />
					                        Date : <?php echo $date; ?>
					                        <br /> <br />
											</p>
										</div>

										

										<div class="col-sm-4" >
											<btn class="btn-form2"> <a href="./eventDelete.php?id= <?php echo $id; ?> " class="gras btn btn-danger btn-xl"> <span class="glyphicon glyphicon-warning"></span> Supprimer <?php echo $nom; ?> </a> 
			        					</div>
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
		</div>


		<?php include("../footer.php"); ?>


	</body>


	

</html>

