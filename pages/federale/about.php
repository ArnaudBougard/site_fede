<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
	</head>

	<body>
		
		<?php 
		include("../network.php");
		include("../navbar.php"); 
		include("../sideBar.php");
		?>

		<div class="container"> 

			<div class="margintop marginbottom">

				<p>
		   			<?= $cercle['description_cercle']; ?>
		   			<br/>
		   			<br/> 

			   		<div align="center">
			   			<img class= "center" src="<?= $cercle['logo_cercle'] ?>">
			   		</div>

			   		<div class="center ">
						<img class="imgArticle" src="../../assets/img/comiteFede.jpg" alt="comité du fédé 180" />
					</div>

		  		</p>

			</div>
			
	    </div>

		<?php include("../footer.php"); ?>

	</body>

</html>