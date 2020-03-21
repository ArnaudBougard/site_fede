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
					<h1>Événements en attente de validation (ou pas)</h1>
				</div>

				<div class="panel panel-default">

					<div class="panel-body">

						<br/>

						<?php 
						if(!empty($eventsArray)){

	        				foreach($eventsArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)){
	        					?>

	        					<div class="container" style="margin-bottom: 5rem;"> 

	        						<div class="col-sm-4">
										 <img style="width: 80%;" src=<?= "'".$img."'" ?>> 
		        					</div>

		        					<div class="col-sm-4">
		        						<p>
				                        Organisateur : <?= $organisateur; ?>
				                        <br/><br/>
				                        Nom de l'événement : <?= $nom; ?>
				                        <br/><br/>
				                        Description : <?= $description; ?>
				                        <br/><br/>
				                        Date : <?= $date; ?>
				                        <br/><br/>
				                        Lieu : <?= $lieu; ?>
				                        <br/><br/>

				                        <?php 
			                        	if(!empty($link)){
		                        		?>
					                        <a href="<?= $link; ?>">Event Facebook</a>
					                        <br/><br/>
				                        <?php
					                    } 
					                    ?>

				                        <?php if($ouverture==1){echo "ouvert à tous";}else{echo "Réservé aux baptisés";} ?>

				                        <br/>
				                        <br/>
										</p>
									</div>

									<div class="col-sm-4">
										<div class="row" style="margin-bottom: 5rem; margin-top: 2rem;">
											<btn class="btn-form2"><a href="../../controller/events/eventValidate.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Valider</a></btn>
										</div>
										<div class="row">
											<btn class="btn-form2"><a href="../../controller/events/eventDeleteModeration.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
										</div>
										
		        					</div>

	        					</div>

        					<?php
	        				}

	        			}
						else{
						?>
						<p>Il n'y a pas d'événements validés</p>
						<?php
						}	
						?>

					</div>

				</div>

			</div>

			<div class="container">

				<div class="page-header">
					<h1>Événements validés</h1>
				</div>

				<div class="panel panel-default">

					<div class="panel-body">

						<br/>

						<?php 

						if(!empty($validatedEventsArray)) {
	        				foreach ($validatedEventsArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {

	        					?> 
	        					<div class="container" style="margin-bottom: 5rem;"> 

	        						<div class="col-sm-4">
										 <img style=" width: 80%;" src=<?= "'".$img."'" ?>> 
		        					</div>

		        					<div class="col-sm-4">
		        						<p>
				                        Organisateur : <?= $organisateur; ?>
				                        <br/><br/>
				                        Nom de l'événement : <?= $nom; ?>
				                        <br/><br/>
				                        Description : <?= $description; ?>
				                        <br/><br/>
				                        Date : <?= $date; ?>
				                        <br/><br/>
				                        Lieu : <?= $lieu; ?>
				                        <br/><br/>
				                        <?php 
			                        	if(!empty($link)){
		                        		?>
					                        <a href="<?= $link; ?>">Event Facebook</a>
					                        <br/><br/>
				                        <?php
					                    }
					                    ?>
				                        <?php if($ouverture==1){echo "ouvert à tous";}else{echo "Réservé aux baptisés";} ?>
				                        <br/><br/>
										</p>
									</div>

									<div class="col-sm-4">

										<div class="row">
											<btn class="btn-form2"><a href="../../controller/events/eventDeleteModeration.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a> </btn>
										</div>
										
		        					</div>

	        					</div>

        					<?php
	        				}

	        			}
						else{
						?>
						<p>Il n'y a pas d'événements validés</p>
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