<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>

	</head>

	<body id="body">
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>


		<div class="container"> 

		   		<?php

		   		include ("../../model/cercleDAO.php");
		   		$cercle=selectByName($bdd,'Cercle des Fêtes');

				?>

				<div class="row">
				
				<div class="container">
					<div class=" col-md-12" >

						<p>
							<?php echo $cercle['description_cercle']; ?> <br>
							<br/> 
						</p>

					</div>
				</div>
				</div>

				<div class="row">
					<div class="col-md-3 col-md-offset-2">
						<img src="<?php echo $cercle['logo_cercle']; ?> ">

					</div>

					<div class="col-md-1"></div>
					<div class="col-md-3">
						<div class="container">

							<ul >	

							<?php

								$annee= 181;

								$comitardsArray=selectLastComite($bdd,'Cercle des Fêtes',$annee);
								foreach ($comitardsArray as list($nom_poste,$firstname,$lastname)) {

									?> 
									<li >
										
										<?php echo " $nom_poste: $firstname $lastname";?>
										
									</li>

									<?php

								} ?>
					    	</ul>
						</div>	
					</div>
				</div>

				
		    </div>


		<?php include("../footer.php"); ?>

	</body>
</html>

