<?php
session_start();
?>

<?php include("../../model/dao/connexionDAO.php"); ?>
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
		<link href="folklore.css" rel="stylesheet">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script language="javascript" type="text/javascript" src="assets/js/functions.js"></script>

	</head>
	<body class="bg1">
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>
		<div class="row">
			<div class="col-md-4">
    			<div class="card">
					<a href="magellan"><img src="../../assets/img/tuileMagellan" class="card-img-top" alt="Magellan" onmouseover="src='../../assets/img/MonsMines'" onmouseout="src='../../assets/img/tuileMagellan'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="scientifique"><img src="../../assets/img/tuileScientifique" class="card-img-top" alt="Scientifique" onmouseover="src='../../assets/img/Scientifique'" onmouseout="src='../../assets/img/tuileScientifique'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="radio"><img src="../../assets/img/tuileRadio" class="card-img-top" alt="Radio" onmouseover="src='../../assets/img/logo_radio'" onmouseout="src='../../assets/img/tuileRadio'"></a>      				
    			</div>
			</div>
		
		</div>
		<div class="row">
			<div class="col-md-4">
    			<div class="card">
					<a href="bar"><img src="../../assets/img/tuileBar" class="card-img-top" alt="Bar" onmouseover="src='../../assets/img/Capture'" onmouseout="src='../../assets/img/tuileBar'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="peyresq"><img src="../../assets/img/tuilePeyresq" class="card-img-top" alt="Peyresq" onmouseover="src='../../assets/img/Peyresq'" onmouseout="src='../../assets/img/tuilePeyresq'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="mutu"><img src="../../assets/img/tuileMutu" class="card-img-top" alt="Mutu" onmouseover="src='../../assets/img/Mutu'" onmouseout="src='../../assets/img/tuileMutu'"></a>      				
    			</div>
			</div>
		
		</div>
		<div class="row">
			<div class="col-md-4">
    			<div class="card">
					<a href="culture"><img src="../../assets/img/tuileQ" class="card-img-top" alt="Culturel" onmouseover="src='../../assets/img/Culturel'" onmouseout="src='../../assets/img/tuileQ'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="mm"><img src="../../assets/img/tuileMM" class="card-img-top" alt="MonsMines" onmouseover="src='../../assets/img/MonsMines'" onmouseout="src='../../assets/img/tuileMM'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="sdm"><img src="../../assets/img/tuileSDM" class="card-img-top" alt="SDM" onmouseover="src='../../assets/img/SonoDanceMusique'" onmouseout="src='../../assets/img/tuileSDM'"></a>      				
    			</div>
			</div>
		
		</div>
		<div class="row">
			<div class="col-md-4">
    			<div class="card">
					<a href="sports"><img src="../../assets/img/tuileSports" class="card-img-top" alt="Sports" onmouseover="src='../../assets/img/Sports'" onmouseout="src='../../assets/img/tuileSports'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="cpv"><img src="../../assets/img/tuileCPV" class="card-img-top" alt="CPV" onmouseover="src='../../assets/img/CPV'" onmouseout="src='../../assets/img/tuileCPV'"></a>      				
    			</div>
			</div>
			<div class="col-md-4">
    			<div class="card">
					<a href="cap"><img src="../../assets/img/tuileCAP" class="card-img-top" alt="CAP" onmouseover="src='../../assets/img/CAP'" onmouseout="src='../../assets/img/tuileCAP'"></a>      				
    			</div>
			</div>
		
		</div>

	</body>