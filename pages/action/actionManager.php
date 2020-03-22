<?php
session_start();
include("../../controller/getConnexionData.php");
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
	</head>

	<body id="body">

		<?php 
		include("../network.php");
		include("../navbar.php");
		include("../sideBar.php");
		?>

		<div class="container action-manager-container">

			<div class="panel panel-default">

				<div class="panel-body">

					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm">

						<div class="form-group">

							<label for="exampleInputFile">Image d'illustration *</label>
							<input type="file" id="exampleInputFile" name="files[]" accept="image/*">

							<p class="help-block">
								<span class="label label-info">Note :</span> Please select png, jpg or jpeg file(s).
							</p>

							<p>
								<label>Titre de l'action *</label><br> 
								<input class='champ' type='text' id='nom' name='nom' placeholder='Lindemans pomme' maxlength='25' size='30' required />
							</p>

							<p> 
								<label>Quantité *</label><span>en Cl</span><br>
								<input class='champ' list="quantites" type='number' id='quantite' name='quantite' maxlength='10' size='10' required />
								<datalist id="quantites">
								  <option value="25"> 
								  <option value="33">
								  <option value="75">
								</datalist>
							</p>

							<p> 
								<label>Prix de l'action *</label><br>
								<input class='champ' type='text' id='prix' name='prix' maxlength='10' size='10' required />
							</p>

							<p>
	                            <label>Date de lancement de l'action *</label> <br>
	                            <input class='champ' type='date' id='date' name='date' maxlength='25' size='45' required />
                        	</p>

							<p>
								<textarea rows="10" cols="100" id='description' name='description' placeholder='Petite description des familles'></textarea>
							</p>

                        	<span>* obligatoire</span>

                        	<br/>

							<p>
								<input type='submit' class='btn-form2 action-submit' name='eventform' value="Créer action de la semaine" />
							</p>

						</div>	

					</form>

					<br/>
					
				</div>

			</div>
			
			<?php include("../../controller/action/actionCreate.php"); ?>
			
			<div class="panel panel-default">

				<div class="panel-body">

					<div class="row">
						<h4 class="validation-row">En attente de validation</h4>
					</div>

					<?php 
					if(!empty($actionArray)){

						foreach($actionArray as list($id,$nom,$prix,$quantite,$date,$img,$description)){
						?>

							<div class="container action-details-container"> 

								<div class="col-sm-4">
									 <img class="action-image" src=<?= "'".$img."'" ?>> 
								</div>

								<div class="col-sm-4">
									<p>
				                    Nom de l'action : <?= $nom; ?>
				                    <br/><br/>
				                    Description : <?= $description; ?>
				                    <br/><br/>
				                    Valable à partir du <?= $date; ?>
				                    <br/><br/>
									</p>
								</div>

								<div class="col-sm-4">
									<btn class="btn-form2"><a href="../../controller/action/actionDelete.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
								</div>

							</div>

						<?php
						}
					}
					else{
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