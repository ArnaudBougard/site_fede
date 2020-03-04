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
		include("../sideBar.php");?>

		<div class="bg1">
			<div class="container" id="content"> 

				<div class="title-area">
					<h2 class="title">International  Student Week</h2> 
			  		<span class="title-line2"></span> 
				</div>

				<div class="col-md-12 gameDiv"> 
					<p class="text">
						Depuis 55 ans déjà, la Fédération des Etudiants de la Faculté polytechnique de Mons organise sa traditionnelle International Student Week, souvent abrégée ISW. Celle-ci a lieu le plus souvent durant le mois de février ou de mars. 
						<br>
						Des étudiants provenant des différents pays membres de l’« International Federation of Mining, Metallurgy, Petroleum and Geology Students » (IFMMS ) sont accueillis à la cité Houzeau durant une semaine pour découvrir le savoir-faire technologique ainsi que les us et coutumes de notre beau pays.<br>
						Appelés les « strangers » durant toute cette semaine, ces étudiants issus de l’Allemagne, les Pays-Bas, l’Angleterre, la Finlande, la Hongrie ou encore la Norvège sont pris en charge par la Fédé que ce soit pour le logement, la nourriture ou les visites. En effet, le principe de cette semaine internationale est de pouvoir faire découvrir la Belgique à tout étudiant, quel que soit sa situation financière. Grâce au sponsoring de différentes entreprises belges et aux subsides de l’UMONS ou encore de l’ORE, cette semaine riche en échange peut avoir lieu chaque année.<br> 
						La semaine débute avec un diner de bienvenue en présence des autorités académiques. 
					</p>
					
					<img class="img1 " src="../../assets/img/isw1.jpg" alt="bleusaille">
				</div>

				<div class="col-md-7 "> 
					<p class="text">
						Bien qu’organisée pour les Strangers, l’ISW s’adresse à tous les étudiants au travers de ses visites industrielles et de ses activités. En effet, chaque visite démarre de la Polytech et les étudiants désireux d’en découvrir plus sur notre savoir-faire minier ou encore métallurgique peuvent s’y inscrire. Cela permet de découvrir des industries qui ne sont pas toujours accessibles au grand public.

					<p class="text">
						En plus de ces visites industrielles, nous organisons également une visite de brasserie qui a toujours son petit succès. Ces dernières années, nous avons notamment visité les brasseries Goliat, Dupont et Duvel. Un autre événement à ne pas manquer durant cette semaine est la traditionnelle visite de Bruxelles où notre emblème national, le Manneken-Pis, est habillé aux couleurs de la Faculté Polytechnique de Mons. 
					</p>
					</p>
				</div>

				<div class="col-md-5 gameDiv"> 
					<img class="img2" src="../../assets/img/isw2.jpg" alt="bleusaille">
				</div>

				<div class="col-md-12 gameDiv"> 
					<img class="img3" src="../../assets/img/isw3.jpg" alt="bleusaille">
				</div>
				<div class="row">
					<div class="col-md-5 "> 
						<p class="text">
							Toutes ces activités occupent les strangers… en journée! Evidemment, ils ne peuvent pas venir en Belgique sans goûter nos différentes bières. Ainsi, le lundi soir une soirée à thème est organisée par différents cercles de la Fédé. Le mardi soir se tient la BBP, la Belgian Beer Party où plus de 10 bières spéciales sont proposées par le Bar Polytech. Cette soirée est particulièrement appréciée des Strangers. Le jeudi soir, le Crasino, renommé dans toute la communauté étudiante, a lieu. Il s’agit d’une une soirée ayant pour thèmes les casinos des années 1920. Au programme, des jeux tels que le poker, le blackjack et la roulette sont proposés, avec pour enjeux des tickets boissons. Un spectacle reprenant danses et chants est également organisé par les étudiants. La semaine se termine sur une note de partage avec la soirée « Thanskgiving » où les étudiants échangent les spécialités de leur pays. 
						</p>
					</div>


					<div class="col-md-7 gameDiv"> 
						<img class="img4" src="../../assets/img/isw4.jpg" alt="bleusaille">
					</div>
				</div>
				
				<div class="col-md-7 gameDiv"> 
					<p class="text">

					Durant ces 7 jours, les folklores des différents pays se mêlent. En effet, chaque stranger apporte les attributs représentatifs de sa faculté. Pour certains ce sont des bagues, des couvre-chefs, pour d’autres des sabots et un costume à queue de pie. Après quelques verres, les couvre-chefs s’échangent et les sabots en bois changent de propriétaire. Les différents chants de chaque université sont également lancés de nombreuses fois. Il est toujours plus ou moins facile de suivre les chants en anglais mais l’affaire se corse quand ils sont en Hongrois ou en Norvégien. En une semaine, un mélange de culture invraisemblable a lieu, un mélange qui rend chaque ISW unique tant pour les strangers que pour les organisateurs ou les participants. 
					</p>
				</div>
				
				<div class="col-md-5 gameDiv"> 
					<img class="img7" src="../../assets/img/isw7.jpg" alt="bleusaille">
				</div>
				<div class="col-md-12 gameDiv"> 
					<p class="text">
						Le samedi, les strangers retournent chacun dans leur pays d’origine, fatigués certes, mais avec des souvenirs plein la tête. 
					</p>
				</div>


			</div>

		</div>


		<?php include("../footer.php"); ?>
		<?php include("../../controller/toggle.php"); ?>

	</body>
</html>

