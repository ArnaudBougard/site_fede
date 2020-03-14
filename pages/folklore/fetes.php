<?php
session_start();
include("../../model/connexionDAO.php");
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

		   		<?php
		   		include ("../../model/cercleDAO.php");
		   		$cercle=selectByName($bdd,'Cercle des Fêtes');
				?>

				<div class="row">
				
						<div class=" col-xs-12" >

							<p>
								<?php echo $cercle['description_cercle']; ?> 
								<b><a href="../../assets/files/charte2019.pdf" download>

							  		Charte de baptême de l'UMons 2019

								</a></b>
								<br>
								<br/> 
							</p>

						</div>
					
				</div>

				<div class="row ">
					<div class="col col-sm-3 col-sm-offset-2 center" style="padding-bottom: 20px;">
						<img src="<?php echo $cercle['logo_cercle']; ?> ">

					</div>

					<div class="col col-sm-3 col-sm-offset-1 center" >
						<ul class="horizontal">	

						<?php

							$annee= lastPromo($bdd);

							$comitardsArray=selectLastComite($bdd,'Cercle des Fêtes',$annee);
							foreach ($comitardsArray as list($nom_poste,$firstname,$lastname)) {

								?> 
								<li >
									
									<?php echo " $nom_poste: $firstname $lastname";?>
									<br>
									
								</li>

								<?php

							} ?>
				    	</ul>
						
					</div>
				</div>

				
		</div>

		<?php 
		include("../footer.php");
		include("../../scripts/toggle.php"); 
		?>

	</body>
</html>

