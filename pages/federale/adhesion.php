<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
	</head>

	<body>
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); 
		include("../sideBar.php"); ?>


		<div class="container"> 
			<div class="row">
				<div class="title-area col-xs-12">
					<h3 class="title2">La carte fédé ? Qu’est-ce que c’est ? </h3> 
			  		<h3>Elle représente l’adhésion à la Fédération des Etudians de la FPMs en tant que membre.</h3> 
				</div>
			</div>
	   		

			<div class="row">
				
				<div class="col-xs-12 col-sm-8">
					<h2>Pour quoi faire ?</h2>
					<p class="text">
						<ul class="list">
							<li>Accès aux activités de la Fédération des Etudiants de la FPMs et aux locaux (ex : soirées, sorties culturelles, voyages, activités sportives,…)</li>
							<li>Droit de vote aux élections de la Fédération (Fédérale, cercle des Sports, cercle Culturel)</li>
							<li>Assurance lors des évènements organisés par la fédération</li>
						</ul>
					</p>
				</div>
				<div class="center col-xs-12 col-sm-4"><img class="" src="../../assets/img/reduc.png"> </div>

			</div>
			

			

			<h2>Avantages : </h2>
			<p class="text">
				<ul class="list">
					<li>Réduction de 10% sur les packs de syllabi</li>
					<li>Pack guido offert</li>
					<li>Réduction aux soirées de la fédération</li>
				</ul>
			</p>
			<div class="center"><img class="" style="max-width: 90vw" src="../../assets/img/reduc1.png"></div>
			<div class="center"><img class="" style="max-width: 90vw" src="../../assets/img/reduc2.png"></div>
			<div class="center"><img class="" style="max-width: 90vw" src="../../assets/img/reduc3.png"></div>

			<h2>Trop bien ! Combien ça coute ? </h2>

			<h2 style="text-align: center;">10€ pour jusqu’à <span style="font-weight: bold; color: red;">30€ de réductions <span></h2>

			<p class="text">
				En vente à la Mutuelle d’édition FPMs ou auprès d’un membre de la Fédérale!

			</p>

				
	    </div>


		<?php include("../footer.php"); ?>
		<?php include("../../controller/toggle.php"); ?>

	</body>
</html>

