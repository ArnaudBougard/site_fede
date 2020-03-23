<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="activites.css" rel="stylesheet">
	</head>

	<body id="body">
		
		<?php 
		include("../network.php"); 
		include("../navbar.php"); 
		include("../sideBar.php");
		?>

		<div class="bg1">

			<div class="container" id="content"> 

				<div class="title-area">
					<h2 class="title">Voyage Q</h2> 
			  		<span class="title-line2"></span> 
				</div>

				<div class="col-md-12 acti-div"> 

					<p class="text">
						Chaque année, le cercle Culturel organise un city-trip de deux à trois jours se déroulant lors d’un weekend du mois de novembre. Ces dernières années, les étudiants sont partis à Amsterdam, Prague, Salzbourg et Hambourg. Ce voyage offre la possibilité aux étudiants de découvrir des villes Européennes à un prix démocratique. Les trajets se font en car et les destinations sont donc à distance raisonnable de Mons. 
					</p>
					
					<img class="img1" src="../../assets/img/Q1.jpg" alt="bleusaille">

				</div>

				<div class="col-md-7">

					<p class="text">
						Sur place, le comité Culturel prévoit des activités telles que des visites de Palais, de musées ou de quartiers emblématiques de la ville. Du temps libre est également prévu pendant ce weekend pour pouvoir découvrir la ville par soi-même. 

					<p class="text">
						Durant le voyage, la culture n’est pas la seule chose mise à l’honneur : nous partageons tous ensemble un repas typique du pays offert par le comité organisateur. 
					</p>
					</p>
				</div>

				<div class="col-md-5 acti-div"> 
					<img class="img2" src="../../assets/img/Q2.jpg" alt="bleusaille">
				</div>

				<div class="col-md-12 acti-div"> 
					<img class="img2" src="../../assets/img/Q3.jpg" alt="bleusaille">
				</div>

				<div class="col-md-12">

					<p class="text">
						Le Voyage Culturel est donc une bonne façon pour un étudiant de découvrir une ville, une culture, tout en partageant ce moment avec d’autres étudiants. Si vous avez des questions, n’hésitez pas à contacter le cercle Culturel qui sera ravi de vous répondre. 
					</p>

				</div>

			</div>

		</div>

	</body>

	<footer>
		<?php include("../footer.php"); ?>
	</footer>
	
</html>