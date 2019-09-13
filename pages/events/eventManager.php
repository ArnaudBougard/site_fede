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

		<?php include("../navbar.php"); ?>

		<div class="container" style="margin-top: 3vw;">

			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm">
						<div class="form-group">
							<label for="exampleInputFile">Selectionnez une image pour l'événement qui défilera sur la page d'accueil:</label>
							<input type="file" id="exampleInputFile" name="files[]" accept="image/*">
							<p class="help-block"><span class="label label-info">Note:</span> Please, select png jpg or jpeg files</p>

							<p> 
								<label>Nom</label><br>
								<input class='champ' type='text' id='nom' name='nom' placeholder='Soirée Mousse' maxlength='25' size='30'  required />
							</p>

							<p> 
								<label>Description </label><br>
								<input class='champ' type='text' id='description' name='description' placeholder='si nécessaire' maxlength='80' size='82'  />
							</p>

							<p>
	                            <label>Date </label> <br>
	                            <input class='champ' type='date' id='date' name='date' maxlength='25' size='45' required />
                        	</p>
                        	<p>
	                            <label>Lieu </label> <br>
	                            <input class='champ' type='text' id='lieu' name='lieu' placeholder='Mons, Boulevard Dolez 69, Bar Polytech'  maxlength='40' size='45' required />
                        	</p>
                        	<p>
								<label>Evénement ouvert à tous?</label> <br>
								<input type="radio" id='ouverture' name='ouverture' value='1' id='oui' required/><label for='1'> Oui </label>
								<input type="radio" id='ouverture' name='ouverture' value='0' id='non' required/><label for='0'> Non </label>
							</p>
							<p>
	                            <label>Lien événement facebook </label> <br>
	                            <input class='champ' type='text' id='link' name='link' placeholder='copier/coller' maxlength='40' size='45'/> * facultatif
                        	</p>
							<p>
								<input style="margin-left: 0rem;" type='submit' class='btn-form2' name='eventform' value="Créer un événement" />
							</p>
						</div>	

					</form>
					<br/>
					
					
				</div>
			</div>
			
			<?php include("eventCreate.php"); ?>
		
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row"> 
						<h4 style="margin-left:4vw;margin-bottom: 1.76vw;">En attente de validation</h4>
					</div>

					<?php 

						$eventsArray=selectMyPendingEvents($bdd,$_SESSION['pseudo_utilisateur']);

						if(!empty($eventsArray)) {
	        				foreach ($eventsArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {

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
				                        Lieu : <?php echo $lieu; ?>
				                        <br /> <br />
				                        <?php 
				                        	if(!empty($link)){
				                        		?>
						                        <a href="<?php echo $link; ?>" > Event Facebook </a>
						                        <br /> <br />
						                        <?php
						                    } ?>
				                        <?php if($ouverture==1){echo "ouvert à tous";}else{echo "Réservé aux baptisés";} ?>
				                        <br /> <br />
										</p>
									</div>

									

									<div class="col-sm-4" >

										<btn class="btn-form2"> <a href="./EventDelete.php?id= <?php echo $id; ?>&path=<?php echo $img; ?> " class="gras btn btn-xl"> Supprimer</a> </btn>
		        					</div>
	        					</div>
	        					<?php

	        				}
	        			}
						else
						{
					?>
						<p>Vous n'avez aucun événement en attente de validation</p>
					<?php
						}
					?>					
				</div>
			</div>
		
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row"> 
						<h4 style="margin-left:4vw; margin-bottom: 1.76vw;" >Événements publiés</h4>
					</div>

					<?php 

						$eventsArray=selectMyEvents($bdd,$_SESSION['pseudo_utilisateur']);

						if(!empty($eventsArray)) {
	        				foreach ($eventsArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {

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
				                        Lieu : <?php echo $lieu; ?>
				                        <br /> <br />
				                        <?php 
				                        	if(!empty($link)){
				                        		?>
						                        <a href="<?php echo $link; ?>" > Event Facebook </a>
						                        <br /> <br />
						                        <?php
						                    } ?>
				                        <?php if($ouverture==1){echo "ouvert à tous";}else{echo "Réservé aux baptisés";} ?>
				                        <br /> <br />
										</p>
									</div>

									

									<div class="col-sm-4" >

										<btn class="btn-form2"> <a href="./eventDelete.php?id= <?php echo $id; ?>&path=<?php echo $img; ?> " class="gras btn btn-xl"> Supprimer</a> </btn>
		        					</div>
	        					</div>
	        					<?php

	        				}
	        			}
						else
						{
					?>
						<p>Vous n'avez créé aucun événement (la création doit être validée par un admin)</p>
					<?php
						}
					?>					
				</div>
			</div>
		
		</div>


		<?php include("../footer.php"); ?>


	</body>


	

</html>

