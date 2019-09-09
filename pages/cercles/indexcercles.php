<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Site Fédé</title>

		 <!--ICONE FAV, A AJOUTER-->
		<link rel="shortcut icon" type="image/icon" href="#"/>

		<!-- MAIN STYLE -->
		<link href="../style.css" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script language="javascript" type="text/javascript" src="assets/js/functions.js"></script>

	</head>

	<body>
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>


		<div class="container"> 

		   		<?php

		   		include ("../../model/cercleDAO.php");
		   		$cercle=selectByName($bdd,'Fédérale');

				?>

				<div class="margintop marginbottom" >

							

					<p>
			   			<?php echo $cercle['description_cercle']; ?> <br>
			   			<br> 

			   		<div align="center">
			   			<img class= "center" src="<?php echo $cercle['logo_cercle'] ?> ">
			   		</div>

			  		</p>

				</div>

				
		    </div>


		<?php include("../footer.php"); ?>

	</body>
</html>

