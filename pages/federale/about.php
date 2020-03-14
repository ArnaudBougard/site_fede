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

	<body>
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); 
		include("../sideBar.php");?>


		<div class="container"> 

	   		<?php

	   		include ("../../model/cercleDAO.php");
	   		$cercle=selectByName($bdd,'Fédérale');

			?>

			<div class="margintop marginbottom" >

				<p>
		   			<?php echo $cercle['description_cercle']; ?>
		   			<br/>
		   			<br/> 

			   		<div align="center">
			   			<img class= "center" src="<?php echo $cercle['logo_cercle'] ?> ">
			   		</div>

			   		<div class="center ">
						<img class=" imgArticle" src="../../assets/img/comiteFede.jpg" alt="comité du fédé 180" />
					</div>

		  		</p>

			</div>
			
	    </div>

		<?php 
		include("../footer.php");
		include("../../scripts/toggle.php"); 
		?>

	</body>
</html>

