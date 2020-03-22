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

		<div class="container">			
			
			<div class="container">	

				<div class="page-header">
					<h1>Action en attente de validation (ou pas)</h1>
				</div>

				<div class="panel panel-default">

					<div class="panel-body">
						<br/>

						<?php 
						if(!empty($pendingActionArray)){

	        				foreach ($pendingActionArray as list($id,$nom,$prix,$quantite,$date,$img,$description)){
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

										<div class="row">
											<btn class="btn-form2"><a href="../../controller/action/actionValidate.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Valider</a></btn>
										</div>

										<div class="row">
											<btn class="btn-form2"><a href="../../controller/action/actionDeleteModeration.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
										</div>

		        					</div>

	        					</div>

        					<?php

	        				}
	        			}
						else{
						?>
						<p>Vous n'avez aucune action en attente de validation</p>
						<?php
						}
						?>

					</div>

				</div>

			</div>

			<div class="container">	

				<div class="page-header">
					<h1>Actions validées</h1>
				</div>

				<div class="panel panel-default">

					<div class="panel-body">

						<br/>
						
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

										<div class="row" class="button-row">
											<btn class="btn-form2"><a href="../../controller/action/actionDeleteModeration.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
										</div>

		        					</div>

	        					</div>

        					<?php

	        				}
	        			}
						else{
						?>
						<p>Il n'y a aucune action déjà validée</p>
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