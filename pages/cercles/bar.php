<?php
session_start();
?>

<?php include("../../model/dao/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>

	</head>

	<body>
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>


		<div class="container"> 

		   		<?php

		   		include ("../../model/dao/cercleDAO.php");
		   		$cercle=selectByName($bdd,'Bar Polytech');

				?>

				<div class="margintop marginbottom col-md-9" >

					<p>
			   			<?php echo $cercle['description_cercle']; ?> <br>
			   			<br> 

			   			<div align="center">
			   				<img class= "center" src="<?php echo $cercle['logo_cercle'] ?> ">
			   			</div>

			  		</p>

				</div>

				<div class = "col-md-3">

					<ul> 
						<li>ici</li>
						<?php 

						$annee=selectPromo($bdd);
						$annee=181;
						echo $annee;
						$comite=selectComite($bdd,'Bar Polytech',$annee);

						foreach ($comite as list($poste,$firstname,$lastname)) {
							?> <li> <?php echo "ici" ?> </li> <?php
						}

						?>
					</ul>

				</div>	

				

				
		    </div>


		<?php include("../footer.php"); ?>

	</body>
</html>

