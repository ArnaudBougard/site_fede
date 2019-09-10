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
		<div class="container" style="padding-top: 2rem;">
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="magellan"><img class="imgTileIndex" src="../../assets/img/tuileMagellan" class="card-img-top" alt="Magellan" onmouseover="src='../../assets/img/MonsMines'" onmouseout="src='../../assets/img/tuileMagellan'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="scientifique"><img class="imgTileIndex " src="../../assets/img/tuileScientifique" class="card-img-top" alt="Scientifique" onmouseover="src='../../assets/img/Scientifique'" onmouseout="src='../../assets/img/tuileScientifique'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="radio"><img class="imgTileIndex " src="../../assets/img/tuileRadio" class="card-img-top" alt="Radio" onmouseover="src='../../assets/img/logo_radio'" onmouseout="src='../../assets/img/tuileRadio'"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="bar"><img class="imgTileIndex "src="../../assets/img/tuileBar" class="card-img-top" alt="Bar" onmouseover="src='../../assets/img/Capture'" onmouseout="src='../../assets/img/tuileBar'"></a>      				
	    			</div>
				</div>
			</div>
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="peyresq"><img class="imgTileIndex " src="../../assets/img/tuilePeyresq" class="card-img-top" alt="Peyresq" onmouseover="src='../../assets/img/Peyresq'" onmouseout="src='../../assets/img/tuilePeyresq'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="mutu"><img class="imgTileIndex " src="../../assets/img/tuileMutu" class="card-img-top" alt="Mutu" onmouseover="src='../../assets/img/Mutu'" onmouseout="src='../../assets/img/tuileMutu'"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="culture"><img class="imgTileIndex " src="../../assets/img/tuileQ" class="card-img-top" alt="Culturel" onmouseover="src='../../assets/img/Culturel'" onmouseout="src='../../assets/img/tuileQ'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="mm"><img class="imgTileIndex " src="../../assets/img/tuileMM" class="card-img-top" alt="MonsMines" onmouseover="src='../../assets/img/MonsMines'" onmouseout="src='../../assets/img/tuileMM'"></a>      				
	    			</div>
				</div>
			</div>
			<div class="row cardRow">
				<div class="col-md-3">
	    			<div class="card">
						<a href="sdm"><img class="imgTileIndex " src="../../assets/img/tuileSDM" class="card-img-top" alt="SDM" onmouseover="src='../../assets/img/SonoDanceMusique'" onmouseout="src='../../assets/img/tuileSDM'"></a>      				
	    			</div>
				</div>
			
			
				<div class="col-md-3">
	    			<div class="card">
						<a href="sports"><img class="imgTileIndex " src="../../assets/img/tuileSports" class="card-img-top" alt="Sports" onmouseover="src='../../assets/img/Sports'" onmouseout="src='../../assets/img/tuileSports'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="cpv"><img class="imgTileIndex " src="../../assets/img/tuileCPV" class="card-img-top" alt="CPV" onmouseover="src='../../assets/img/CPV'" onmouseout="src='../../assets/img/tuileCPV'"></a>      				
	    			</div>
				</div>
				<div class="col-md-3">
	    			<div class="card">
						<a href="cap"><img class="imgTileIndex " 	src="../../assets/img/tuileCAP" class="card-img-top" alt="CAP" onmouseover="src='../../assets/img/CAP'" onmouseout="src='../../assets/img/tuileCAP'"></a>      				
	    			</div>
				</div>
			</div>
		</div>

	</body>
