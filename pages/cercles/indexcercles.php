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
						<a href="magellan.php"><img class="imgTileIndex" src="../../assets/img/tuileMagellan.PNG" class="card-img-top" alt="Magellan" onmouseover="src='../../assets/img/MonsMines.PNG'" onmouseout="src='../../assets/img/tuileMagellan.PNG'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="scientifique.php"><img class="imgTileIndex " src="../../assets/img/tuileScientifique.PNG" class="card-img-top" alt="Scientifique" onmouseover="src='../../assets/img/Scientifique.PNG'" onmouseout="src='../../assets/img/tuileScientifique.PNG'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="radio.php"><img class="imgTileIndex " src="../../assets/img/tuileRadio.PNG" class="card-img-top" alt="Radio" onmouseover="src='../../assets/img/logo_radio.jpg'" onmouseout="src='../../assets/img/tuileRadio.PNG'"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="bar.php"><img class="imgTileIndex "src="../../assets/img/tuileBar.PNG" class="card-img-top" alt="Bar" onmouseover="src='../../assets/img/Capture'" onmouseout="src='../../assets/img/tuileBar.PNG'"></a>      				
	    			</div>
				</div>
			</div>
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="peyresq.php"><img class="imgTileIndex " src="../../assets/img/tuilePeyresq.PNG" class="card-img-top" alt="Peyresq" onmouseover="src='../../assets/img/Peyresq'" onmouseout="src='../../assets/img/tuilePeyresq.PNG'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="mutu.php"><img class="imgTileIndex " src="../../assets/img/tuileMutu.PNG" class="card-img-top" alt="Mutu" onmouseover="src='../../assets/img/Mutu'" onmouseout="src='../../assets/img/tuileMutu.PNG'"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="culture.php"><img class="imgTileIndex " src="../../assets/img/tuileQ.PNG" class="card-img-top" alt="Culturel" onmouseover="src='../../assets/img/Culturel'" onmouseout="src='../../assets/img/tuileQ.PNG'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="mm.php"><img class="imgTileIndex " src="../../assets/img/tuileMM.PNG" class="card-img-top" alt="MonsMines" onmouseover="src='../../assets/img/MonsMines'" onmouseout="src='../../assets/img/tuileMM.PNG'"></a>      				
	    			</div>
				</div>
			</div>
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="sdm.php"><img class="imgTileIndex " src="../../assets/img/tuileSDM.PNG" class="card-img-top" alt="SDM" onmouseover="src='../../assets/img/SonoDanceMusique'" onmouseout="src='../../assets/img/tuileSDM.PNG'"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="sports.php"><img class="imgTileIndex " src="../../assets/img/tuileSports.PNG" class="card-img-top" alt="Sports" onmouseover="src='../../assets/img/Sports'" onmouseout="src='../../assets/img/tuileSports.PNG'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="cpv.php"><img class="imgTileIndex " src="../../assets/img/tuileCPV.PNG" class="card-img-top" alt="CPV" onmouseover="src='../../assets/img/CPV'" onmouseout="src='../../assets/img/tuileCPV.PNG'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="cap.php"><img class="imgTileIndex " 	src="../../assets/img/tuileCAP.PNG" class="card-img-top" alt="CAP" onmouseover="src='../../assets/img/CAP'" onmouseout="src='../../assets/img/tuileCAP.PNG'"></a>      				
	    			</div>
				</div>
			</div>
		</div>

		<?php include("../footer.php"); ?>

	</body>
