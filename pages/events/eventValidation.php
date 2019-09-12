<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<?php include("../events/eventDAO.php"); ?>

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




		<div class="container">			
			
			<div class="container">	
				<div class="page-header">
					<h1>Événements en attente de validation ( ou pas ) </h1>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<br/>

						<?php 

							$eventsArray=selectAllPendingEvents($bdd);

							if(!empty($eventsArray)) {
		        				foreach ($eventsArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {

		        					?> 
		        					<div class="container" style="margin-bottom: 5rem;"> 

		        						<div class="col-sm-4" >
											 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
			        					</div>
			        					<div class="col-sm-4" >
			        						<p>
					                        Organisateur : <?php echo $organisateur; ?>
					                        <br /> <br />
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
											<div class="row" style="margin-bottom: 5rem;margin-top: 2rem;">
												<btn class="btn-form2" > <a href="./eventValidate.php?id= <?php echo $id; ?> " class="gras btn btn-xl"> Valider l'event</a> </btn>
											</div>
											<div class="row">
												<btn class="btn-form2" > <a href="./eventDeleteModeration.php?id= <?php echo $id; ?>&path=<?php echo $img; ?> " class="gras btn btn-xl"> Supprimer</a> </btn>
											</div>
											
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
		</div>


		<?php include("../footer.php"); ?>


	</body>


	

</html>

