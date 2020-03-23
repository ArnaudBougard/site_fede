<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="./federale.css" rel="stylesheet">
	</head>

	<body>
		
		<?php 
		include("../network.php");
		include("../navbar.php"); 
		include("../sideBar.php"); 
		?>

		<div class="container">

			<div class="row">
				<div class="title-area col-xs-12">
					<h3 class="title2">La carte fédé, qu’est-ce que c’est ?</h3> 
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

				<div class="center col-xs-12 col-sm-4">
					<img src="../../assets/img/reduc.PNG">
				</div>

			</div>

			<h2>Avantages :</h2>
			
			<p class="text">
				<ul class="list">
					<li>Réduction de 10% sur les packs de syllabi</li>
					<li>Pack guido offert</li>
					<li>Réduction aux soirées de la fédération</li>
				</ul>
			</p>

			<div class="center adhesion-image"><img src="../../assets/img/reduc1.png"></div>
			<div class="center adhesion-image"><img src="../../assets/img/reduc2.png"></div>
			<div class="center adhesion-image"><img src="../../assets/img/reduc3.png"></div>

			<h2>Trop bien ! Combien ça coute ?</h2>

			<h2 class="text-center">10€ pour jusqu’à <span class="text-reduction">30€ de réductions.<span></h2>

			<p class="text">
				En vente à la Mutuelle d’édition FPMs ou auprès d’un membre de la Fédérale!
			</p>

	    </div>
	    
	</body>

	<footer>
		<?php include("../footer.php"); ?>
	</footer>

</html>