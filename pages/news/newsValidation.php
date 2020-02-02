<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<?php include("../../model/newsDAO.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
	</head>

	<body id="body">
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<!-- HEADER -->

		<?php include("../navbar.php");
		include("../sideBar.php"); ?>




		<div class="container">			
			
			<div class="container">	
				<div class="page-header">
					<h1>News en attente de validation ( ou pas ) </h1>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<br/>

						<?php 

							$eventsArray=selectAllPendingNews($bdd);

							if(!empty($eventsArray)) {
	        				foreach ($eventsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)) {

	        					?> 
	        					<div class="container" style="margin-bottom: 5rem;"> 

	        						<div class="col-sm-4" >
										 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
		        					</div>
		        					<div class="col-sm-4" >
										<p>
				                        Nom de l'événement : <?php echo $nom; ?>
				                        <br /> <br />
				                        Description : <?php echo $article; ?>
				                        <br /> <br />
				                        Publié le: <?php echo $dateCreation; ?>
				                        <br /> <br />
										</p>
									</div>

									

									<div class="col-sm-4" >
										<div class="row" style="margin-bottom: 2rem;margin-top: 2rem;">
												<btn class="btn-form2" > <a href="./newsValidate.php?id= <?php echo $id; ?>&path=<?php echo $img; ?> " class="gras btn btn-xl"> Valider</a> </btn>
										</div>
										<div class="row">
											<btn class="btn-form2" > <a href="./newsDeleteModeration.php?id= <?php echo $id; ?>&path=<?php echo $img; ?> " class="gras btn btn-xl"> Supprimer</a> </btn>
										</div>
		        					</div>
	        					</div>
	        					<?php

	        				}
	        			}
						else
						{
					?>
						<p>Vous n'avez aucune news en attente de validation</p>
					<?php
						}
						?>					
					</div>
				</div>
			</div>

			<div class="container">	
				<div class="page-header">
					<h1>News validées</h1>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<br/>

						<?php 

							$eventsArray=selectAllNews($bdd);

							if(!empty($eventsArray)) {
	        				foreach ($eventsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)) {

	        					?> 
	        					<div class="container" style="margin-bottom: 5rem;"> 

	        						<div class="col-sm-4" >
										 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
		        					</div>
		        					<div class="col-sm-4" >
										<p>
				                        Nom de l'événement : <?php echo $nom; ?>
				                        <br /> <br />
				                        Description : <?php echo $article; ?>
				                        <br /> <br />
				                        Publié le: <?php echo $dateCreation; ?>
				                        <br /> <br />
										</p>
									</div>

									

									<div class="col-sm-4" >
										<div class="row" style="margin-bottom: 2rem;margin-top: 2rem;">
												
										</div>
										<div class="row">
											<btn class="btn-form2" > <a href="./newsDeleteModeration.php?id= <?php echo $id; ?>&path=<?php echo $img; ?> " class="gras btn btn-xl"> Supprimer</a> </btn>
										</div>
										
		        					</div>
	        					</div>
	        					<?php

	        				}
	        			}
						else
						{
					?>
						<p>Vous n'avez aucune news en attente de validation</p>
					<?php
						}
						?>					
					</div>
				</div>
			</div>
		</div>


		<?php include("../footer.php"); ?>
		<?php include("../../controller/toggle.php"); ?>


	</body>


	

</html>

