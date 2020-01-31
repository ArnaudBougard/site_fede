<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<?php include("../../model/actionDAO.php"); ?>

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

							<label for="exampleInputFile">Image d'illustration *</label>
							<input type="file" id="exampleInputFile" name="files[]" accept="image/*">
							<p class="help-block"><span class="label label-info">Note:</span> Please, select png jpg or jpeg files</p>

							<p> 
								<label>Titre de l'action *</label><br> 
								<input class='champ' type='text' id='nom' name='nom' placeholder='Lindemans pomme' maxlength='25' size='30'  required />
							</p>

							<p> 
								<label>Quantité * </label> <span>en Cl</span><br>
								<input class='champ' list="quantites" type='number' id='quantite' name='quantite' maxlength='10' size='10' required />
								<datalist id="quantites">
								  <option value="25"> 
								  <option value="33">
								  <option value="75">
								</datalist>
							</p>

							<p> 
								<label>Prix de l'action *</label><br>
								<input class='champ' type='text' id='prix' name='prix'  maxlength='10' size='10' required />
							</p>

							<p>
	                            <label>Date de lancement de l'action*</label> <br>
	                            <input class='champ' type='date' id='date' name='date' maxlength='25' size='45' required />
                        	</p>

							<p>
								<textarea rows="10" cols="100" id='description' name='description' placeholder='Petite description des familles'></textarea>
							</p>

                        	<span>* obligatoire </span>
                        	</p>
                        	<br/>
							<p>
								<input style="margin-left: 0rem;" type='submit' class='btn-form2' name='eventform' value="Créer action de la semaine" />
							</p>
						</div>	

					</form>
					<br/>
					
					
				</div>
			</div>
			
			<?php include("actionCreate.php"); ?>
		
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row"> 
						<h4 style="margin-left:4vw;margin-bottom: 1.76vw;">En attente de validation</h4>
					</div>

					<?php 

						$actionArray=selectMyPendingActions($bdd,$_SESSION['pseudo_utilisateur']);

						
						if(!empty($actionArray)) {
								foreach ($actionArray as list($id,$nom,$prix,$quantite,$date,$img,$description)) {

									?> 
									<div class="container" style="margin-bottom: 5rem;"> 

										<div class="col-sm-4" >
											 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
										</div>
										<div class="col-sm-4" >
											<p>
						                    Nom de l'action : <?php echo $nom; ?>
						                    <br /> <br />
						                    Description : <?php echo $description; ?>
						                    <br /> <br />
						                    Valable à partir du <?php echo $date; ?>
						                    <br /> <br />
											</p>
										</div>

										

										<div class="col-sm-4" >

											<btn class="btn-form2"> <a href="./actionDelete.php?id= <?php echo $id; ?>&path=<?php echo $img; ?> " class="gras btn btn-xl"> Supprimer</a> </btn>
										</div>
									</div>
									<?php

								}
							}
							else
							{
						?>
							<p>Vous n'avez aucune action en attente de validation, la validation est automatique peceka on vous fait confiance ouesh.</p>
						<?php
							}

					?>					
				</div>
			</div>
		
		</div>


		<?php include("../footer.php"); ?>


	</body>


	

</html>

