<?php
session_start();
include("../../controller/getConnexionData.php");
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="cercles.css" rel="stylesheet">
	</head>

	<body class="bg1 full-width">
		
		<?php 
		include("../network.php");
		include("../navbar.php"); 
		include("../sideBar.php");
		?>

		<div class="row">

			<div class="tab col-sm-2 hidden-xs hidden-sm">

				<ul class="unstyled">
					<li><button class="tablinks" onclick="openCercle(event,'bar')" id="openBar">Bar Polytech</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'cap')" id="openCap">C.A.P</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'cpv')" id="openCpv">Cercle Photo-Vidéo</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'culture')" id="openCulture">Cercle Culturel</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'magellan')" id="openMagellan">Cercle Magellan</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'mm')" id="openMm">Mons-Mines</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'mutu')" id="openMutu">Mutuelle d'édition</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'radio')" id="openRadio">Radio Extra</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'sports')" id="openSports">Cercle des Sports</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'scientifique')" id="openScientifique">Cercle Scientifique</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'sdm')" id="openSdm">Cercle Sono-Danse-Musique</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'peyresq')" id="openPeyresq">Cercle Peyresq</button></li>
				</ul>

			</div>

			<div class="tab col-xs-12 hidden-md hidden-lg hidden-xl">

				<ul class="unstyled horizontal">
					<li class="tablinks" onclick="openCercle(event,'bar')" id="openBar">Bar Polytech</li>
					<li class="tablinks" onclick="openCercle(event,'cap')" id="openCap">C.A.P</li>
					<li class="tablinks" onclick="openCercle(event,'cpv')" id="openCpv">C.P.V</li>
					<li class="tablinks" onclick="openCercle(event,'culture')" id="openCulture">Cercle Culturel</li>
					<li class="tablinks" onclick="openCercle(event,'magellan')" id="openMagellan">Magellan</li>
					<li class="tablinks" onclick="openCercle(event,'mm')" id="openMm">Mons-Mines</li>
					<li class="tablinks" onclick="openCercle(event,'mutu')" id="openMutu">Mutuelle d'édition</li>
					<li class="tablinks" onclick="openCercle(event,'radio')" id="openRadio">Radio Extra</li>
					<li class="tablinks" onclick="openCercle(event,'sports')" id="openSports">Sports</li>
					<li class="tablinks" onclick="openCercle(event,'scientifique')" id="openScientifique">Scientifique</li>
					<li class="tablinks" onclick="openCercle(event,'sdm')" id="openSdm">Sono-Danse-Musique</li>
					<li class="tablinks" onclick="openCercle(event,'peyresq')" id="openPeyresq">Peyresq</li>
				</ul>

			</div>
			
			<?php $name='Bar'; ?>
			<div id="bar" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='CAP'; ?>
			<div id="cap" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='CPV'; ?>
			<div id="cpv" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='cercle Culturel'; ?>
			<div id="culture" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='Magellan'; ?>
			<div id="magellan" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='Mons-Mines'; ?>
			<div id="mm" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name="mutuelle d'édition"; ?>
			<div id="mutu" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='Radio Extra'; ?>
			<div id="radio" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='cercle des sports'; ?>
			<div id="sports" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='Scientifique'; ?>
			<div id="scientifique" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='cercle sono danse musique'; ?>
			<div id="sdm" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

			<?php $name='Peyresq'; ?>
			<div id="peyresq" class="tabcontent col-xs-12 col-md-10"><?php include("../../controller/cercleController.php"); ?></div>

		</div>

	</body>

	<footer class="page-footer">
		<?php 
		include("../../scripts/openCercle.php");
		include("../footer.php");
		?>
	</footer>

</html>