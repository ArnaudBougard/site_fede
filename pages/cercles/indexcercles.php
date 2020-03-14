<?php
session_start();
?>

<?php 
include("../../model/connexionDAO.php");
include("../../controller/getConnexionData.php");
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="./cercles.css" rel="stylesheet">

	</head>

	<body class="body">

		<?php 
		include("../network.php");
		include("../navbar.php"); 
		include("../sideBar.php");
		?>

		<div class="cardContainer" >

			<div class="row cardRow">

				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openMagellan"><img class="imgTileIndex" src="../../assets/img/tiles/magellan_tile" class="card-img-top" alt="Magellan"></a>

	    			</div>

				</div>

				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openScientifique"><img class="imgTileIndex " src="../../assets/img/tiles/scientifique_tile" class="card-img-top" alt="Scientifique"></a>

	    			</div>

				</div>

				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openRadio"><img class="imgTileIndex" src="../../assets/img/tiles/radio_tile" class="card-img-top" alt="Radio"></a>

	    			</div>

				</div>
			
				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openBar"><img class="imgTileIndex "src="../../assets/img/tiles/bar_tile" class="card-img-top" alt="Bar"></a>

	    			</div>

				</div>

			</div>

			<div class="row cardRow">

				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openPeyresq"><img class="imgTileIndex " src="../../assets/img/tuilePeyresq.PNG" class="card-img-top" alt="Peyresq"></a>

	    			</div>

				</div>

				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openMutu"><img class="imgTileIndex " src="../../assets/img/tiles/mutu_tile.png" class="card-img-top" alt="Mutu"></a>

	    			</div>

				</div>	
			
				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openCulture"><img class="imgTileIndex " src="../../assets/img/tuileQ.PNG" class="card-img-top" alt="Culturel"></a> 

	    			</div>

				</div>

				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openMm"><img class="imgTileIndex " src="../../assets/img/tuileMM.PNG" class="card-img-top" alt="MonsMines" ></a>

	    			</div>

				</div>

			</div>

			<div class="row cardRow">

				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openSdm"><img class="imgTileIndex " src="../../assets/img/tuileSDM.PNG" class="card-img-top" alt="SDM"></a>

	    			</div>

				</div>
			
				<div class="col-md-3">

	    			<div class="card">

						<a href="cercles.php?id=openSports"><img class="imgTileIndex " src="../../assets/img/tiles/sports_tile.png" class="card-img-top" alt="Sports"></a>

	    			</div>

				</div>

				<div class="col-md-3">

	    			<div class="card">
						<a href="cercles.php?id=openCpv"><img class="imgTileIndex " src="../../assets/img/tuileCPV.PNG" class="card-img-top" alt="CPV"></a>

	    			</div>

				</div>

				<div class="col-md-3">

	    			<div class="card">
						<a href="cercles.php?id=openCap"><img class="imgTileIndex " 	src="../../assets/img/tuileCAP.PNG" class="card-img-top" alt="CAP"></a>      				
	    			</div>

				</div>

			</div>

		</div>

	</body>

	<footer class="page-footer">

		<?php 
		include("../footer.php");
		include("../../scripts/toggle.php");
		?>
		
	</footer>

</html>
