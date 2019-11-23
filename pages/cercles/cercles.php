<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="cercles.css" rel="stylesheet">
	</head>

	<body class="bg1" style="width: 100%;">
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>
		<?php include ("../../model/cercleDAO.php"); ?>

		<div class="row">
			<div class="tab col-md-2">
			  <button class="tablinks" onclick="openCity(event,'bar')" id="openBar">Bar Polytech</button>
			  <button class="tablinks" onclick="openCity(event,'cap')" id="openCap">C.A.P.</button>
			  <button class="tablinks" onclick="openCity(event,'cpv')" id="openCpv">C.P.V.</button>
			  <button class="tablinks" onclick="openCity(event,'culture')" id="openCulture">Cercle Culturel</button>
			  <button class="tablinks" onclick="openCity(event,'magellan')" id="openMagellan">Magellan</button>
			  <button class="tablinks" onclick="openCity(event,'mutu')" id="openMutu">Mons-Mines</button>
			  <button class="tablinks" onclick="openCity(event,'mm')" id="openMm">Mutuelle d'édition</button>
			  <button class="tablinks" onclick="openCity(event,'peyresq')" id="openPeyresq">Peyresq</button>
			  <button class="tablinks" onclick="openCity(event,'radio')" id="openRadio">Radio Extra</button>
			  <button class="tablinks" onclick="openCity(event,'scientifique')" id="openScientifique">Cercle Scientifique</button>
			  <button class="tablinks" onclick="openCity(event,'sdm')" id="openSdm">Sono Danse Musique</button>
			  <button class="tablinks" onclick="openCity(event,'sports')" id="openSports">Cercle des Sports</button>
			</div>

			<?php $name='Bar Polytech'; ?>
			<div id="bar" class="tabcontent col-md-10"> <?php include ("./contenuCercle.php"); ?></div>


			<?php $name='CAP'; ?>
			<div id="cap" class="tabcontent col-md-10 "><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='CPV'; ?>
			<div id="cpv" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='cercle Culturel'; ?>
			<div id="culture" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='Magellan'; ?>
			<div id="magellan" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='Mons-Mines'; ?>
			<div id="mm" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name="mutuelle d'édition"; ?>
			<div id="mutu" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='Peyresq'; ?>
			<div id="peyresq" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='Radio Extra'; ?>
			<div id="radio" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='Scientifique'; ?>
			<div id="scientifique" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='cercle sono danse musique'; ?>
			<div id="sdm" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>

			<?php $name='cercle des sports'; ?>
			<div id="sports" class="tabcontent col-md-10"><?php include ("./contenuCercle.php"); ?></div>
		</div>

		<script>
			function openCity(evt, cercle) {
			  var i, tabcontent, tablinks;
			  tabcontent = document.getElementsByClassName("tabcontent");
			  for (i = 0; i < tabcontent.length; i++) {
			    tabcontent[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("tablinks");
			  for (i = 0; i < tablinks.length; i++) {
			    tablinks[i].className = tablinks[i].className.replace(" active", "");
			  }
			  document.getElementById(cercle).style.display = "block";
			  evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("<?php echo $_GET['id'] ?>").click();
		</script>


		<?php include("../footer.php"); ?>

	</body>
</html>