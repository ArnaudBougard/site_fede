<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
		<link href="./cercles.css" rel="stylesheet">

	</head>
	<body class="bg1">
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>
		<div class="cardContainer" >
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="magellan.php"><img class="imgTileIndex" src="../../assets/img/tuileMagellan.PNG" class="card-img-top" alt="Magellan"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="scientifique.php"><img class="imgTileIndex " src="../../assets/img/tuileScientifique.PNG" class="card-img-top" alt="Scientifique"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="radio.php"><img class="imgTileIndex" src="../../assets/img/tuileRadio.PNG" class="card-img-top" alt="Radio"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="bar.php"><img class="imgTileIndex "src="../../assets/img/tuileBar.PNG" class="card-img-top" alt="Bar"></a>      				
	    			</div>
				</div>
			</div>
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="peyresq.php"><img class="imgTileIndex " src="../../assets/img/tuilePeyresq.PNG" class="card-img-top" alt="Peyresq"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="mutu.php"><img class="imgTileIndex " src="../../assets/img/tuileMutu.PNG" class="card-img-top" alt="Mutu"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="culture.php"><img class="imgTileIndex " src="../../assets/img/tuileQ.PNG" class="card-img-top" alt="Culturel"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="mm.php"><img class="imgTileIndex " src="../../assets/img/tuileMM.PNG" class="card-img-top" alt="MonsMines" ></a>      				
	    			</div>
				</div>
			</div>
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="sdm.php"><img class="imgTileIndex " src="../../assets/img/tuileSDM.PNG" class="card-img-top" alt="SDM"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="sports.php"><img class="imgTileIndex " src="../../assets/img/tuileSports.PNG" class="card-img-top" alt="Sports"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="cpv.php"><img class="imgTileIndex " src="../../assets/img/tuileCPV.PNG" class="card-img-top" alt="CPV"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="cap.php"><img class="imgTileIndex " 	src="../../assets/img/tuileCAP.PNG" class="card-img-top" alt="CAP"></a>      				
	    			</div>
				</div>
			</div>
		</div>

		<?php include("../footer.php"); ?>

	</body>
