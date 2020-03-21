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
					<h2 class="title">Le Ski</h2> 
			  		<span class="title-line2"></span> 
				</div>

				<div class="col-md-12 acti-div">

					<p class="text">
						Les années universitaires sont fort chargées et intenses du début à la fin ! Dès lors, lorsque vient la fin de la session de janvier, de ces 4 ou 5 semaines de blocus acharnés, qui n’a pas envie de décompresser ?
					</p>
					
					<img class="img1" src="../../assets/img/ski1.jpg" alt="bleusaille">

				</div>

				<div class="col-md-7">

					<p class="text">
						Et c’est là qu’interviennent les Sports ! Quoi de mieux pour relâcher la pression qu’une semaine à chausser les skis sous l’air de la montagne ? Ces dernières années, c’est plus d’une centaine de personnes qui dévalent les pentes en notre compagnie. Et comme Sport rime avec Folklore, c’est tout un programme qui vous attend ! 
					</p>
					<p class="text">
						Le ski Polytech est un voyage unique, mêlant sensations fortes, émerveillement et amusement ! Vous mêlerez les descentes endiablées aux after-ski et soirées de folie ! Avec une diversité de stations et des prix plus qu’abordables, à savoir 400-450€ en moyenne, ce voyage au ski reste un des incontournables de la vie à la Fac ! Vous pouvez d’ailleurs compter chaque année sur un comité, plus que motivé, pour vous offrir le meilleur des voyages ! Alors n’hésitez pas et rejoignez-nous pendant la semaine Blanche !
					</p>

				</div>

				<div class="col-md-5 acti-div"> 
					<img class="img2" src="../../assets/img/ski2.jpg" alt="bleusaille">
				</div>

				<div class="col-md-12 acti-div"> 
					<img class="img2" src="../../assets/img/ski5.jpg" alt="bleusaille">
				</div>

			</div>

		</div>

		<?php include("../footer.php"); ?>

	</body>

</html>