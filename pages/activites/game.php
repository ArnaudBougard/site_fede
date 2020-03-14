<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>

		<link href="activites.css" rel="stylesheet">

	</head>

	<body id="body">
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); 
		include("../sideBar.php");
		?>



		<div class="bg1">
			<div class="container" id="content"> 

				<div class="title-area">
					<h2 class="title">Le Game</h2> 
			  		<span class="title-line2"></span> 
				</div>

				<div class="col-md-12 gameDiv"> 
					<p class="text">
						Le Game est un évènement organisé par le cercle Magellan dont la première édition a eu lieu il y a un peu plus de 20 ans. C’est une LAN-Party, donc un rassemblement de joueurs de jeux vidéo pour se mesurer les uns contre les autres en solo ou en équipe dans une ambiance festive et conviviale, moyennant la modique somme d’environ 20€.
					</p>
					
					<img class="img1 " src="../../assets/img/game1.jpg" alt="bleusaille">
				</div>

				<div class="col-md-7 "> 
					<p class="text">
						Cet évènement se tient généralement en fin février et début mars, pendant un week-end (vendredi fin d’après-midi au dimanche fin de matinée), il est mis en place par une équipe d’environ 40 etudiants. Ces personnes constituent ainsi le staff durant ce week-end festif. 

					<p class="text">
						Le Game peut rassembler jusqu’à 200 joueurs et plus de 500 visiteurs (hors staff) dans le Stiévenart pour jouer à des jeux tels que LoL, Trackmania, HearthStone, CS:GO, Trackmania, … Les meilleurs joueurs de chaque tournoi sont récompensés de leur participation et de leurs compétences, réflexes ou … chance avec des lots et cashprize. 
					</p>
					</p>
				</div>

				<div class="col-md-5 gameDiv"> 
					<img class="img2" src="../../assets/img/game2.jpg" alt="bleusaille">
				</div>

				<div class="col-md-12 gameDiv"> 
					<img class="img2" src="../../assets/img/game3.jpg" alt="bleusaille">
				</div>

				<div class="col-md-12 "> 
					<p class="text">
						Dans tous les cas, que l’on soit joueur ou simple visiteur, le coin console permet de se détendre dans une ambiance conviviale et le bar est ouvert 24h/24 afin de rassasier les affamés et les assoiffés. 
					</p>
				</div>

				<div class="col-md-12 gameDiv"> 
					<img class="img2" src="../../assets/img/game4.jpg" alt="bleusaille">
				</div>

				
				<div class="col-md-12 gameDiv"> 
					<p class="text">En quelques mots, le Game c’est : de l’amusement assuré et des souvenirs inoubliables! Intéressé? Visite <a href="http://www.the-games.be" target="_blank">The-Games.be</a>
					</p>
				</div>

			</div>

		</div>


		<?php include("../footer.php"); ?>
		<?php include("../../scripts/toggle.php"); ?>

	</body>
</html>

