<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="../folklore/folklore.css" rel="stylesheet">
	</head>

	<body class="bg1">
		
		<?php 
		include("../network.php");
		include("../navbar.php");
		include("../sideBar.php");
		?>

		<div class="row">

			<div class="tab col-sm-2 hidden-xs hidden-sm">

				<ul class="unstyled">
					<li><button class="tablinks" onclick="openCercle(event,'Web')" id="defaultOpen">Web</button></li>
					<li> <button class="tablinks" onclick="openCercle(event,'Historique')">Historique</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'PMD')">PMD</button></li>
					<!-- <li><button class="tablinks" onclick="openCercle(event,'PIMs')">PIM's</button></li> -->
					<li><button class="tablinks" onclick="openCercle(event,'FPMath')">FPMath's</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'Bal')">Bal des Mines</button></li>
				</ul>

			</div>

			<div class="tab col-xs-12 hidden-md hidden-lg hidden-xl">

				<ul class="unstyled horizontal">
					<li class="tablinks" onclick="openCercle(event,'Web')" id="defaultOpen">Web</li>
					<li class="tablinks" onclick="openCercle(event,'Historique')">Historique</li>
					<li class="tablinks" onclick="openCercle(event,'PMD')">PMD</li>
					<li class="tablinks" onclick="openCercle(event,'FPMath')">FPMath's</li>
					<li class="tablinks" onclick="openCercle(event,'Bal')">Bal des Mines</li>
				</ul>

			</div>

			<div id="Web" class="col-xs-12 col-md-9 tabcontent">

				<div class="title-area">
					<h3 class="title2">La commission WEB</h3> 
				</div>

				<div>

					<img class="img3" src="../../assets/img/logoComWeb.png">

					<p class="text">
						En mai 2003, la Fédération des Etudiants a décidé de se doter d'un site internet aux objectifs multiples mais visant essentiellement à faire la promotion de ses cercles et de leurs activités. Au fur et à mesure du temps, les besoins du site ont été de plus en plus nombreux. Un exemple fut la gestion avancée des utilisateurs et des groupes d'utilisateurs.
						<br/>
						<br/>
						En 2006, la Commission Web a décidé de réécrire l'entièreté du site, pour une meilleure prise en charge de toutes les fonctionnalités. Cette réécriture fut l'occasion de remodeler le site graphiquement et de prendre en charge de nouveaux standards. Le site est désormais valide CSS 2.1 et XHTML 1.0. Ces améliorations permettront des changements ultérieurs plus faciles, ainsi qu'une gestion plus aisée. Le site est désormais ce que l'on peut appeler un "site Web 2.0". En effet, les dernières technologies du Web telles que AJAX ont été implémentées.
						<br/>
						<br/>
						En 2008, la Commission Web a souhaité faire profiter le site Fédé de l'expérience qu'elle a acquis durant ses deux mandats consécutifs. Si le changement de la charte graphique est l'élément le plus marquant avec une nouvelle disposition du contenu, l'ajout de bannières afin de dynamiser l'ensemble et la possibilité de choisir un thème de couleurs, l'essentiel du travail réalisé se cache derrière cette belle façade.
						<br/>
						<br/>
						En 2016, après une attaque informatique et par mesure de sécurité, le site à été mis en maintenance prolongée.  Il renait sous une nouvelle forme plus moderne en 2017 sous l'impulsion d'un projet mené par les étudiants de troisième bachelier en informatique et gestion.  Depuis, aussi bien l'aspect technique qu'estétique a évolué.
						<br/>
						<br/>
						Durant l'été 2019, une importante refonte graphique à été effectuée afin de rendre le site plus harmonieu vis-à-vis des couleurs de la faculté ainsi que de la fédérale. De plus, l'aspect général à été modernisé à l'aide des dernières mises à jour du framework Bootstrap.
						<br/>
						<br/>
						La commision web est composée d'au minimum deux personnes qui sont chargées par la fédérale du maintient et du dévellopement du site sur lequel vous vous trouvez actuellement.
					</p>

				</div>

			</div>

			<div id="Historique" class="col-xs-12 col-md-9 tabcontent">
				
				<div class="title-area">
					<h3 class="title2">La commission historique</h3> 
				</div>

				<div>

					<img class="img3" src="../../assets/img/logoComHisto.png" alt="Commission Historique">

					<p class="text">
						Petite terre de défense du folklore estudiantin, la Commission est pour nous l’occasion de relater les diverses frasques et anecdotes qui jalonnent l’histoire estudiantine de Mons et principalement celles des étudiants de la Faculté Polytechnique. Pour ce faire, nous rassemblons divers témoignages écrits, oraux et matériels que nous publierons sur ce site internet.

						Toute contribution est donc la bienvenue ! Si vous êtes en possession de documents, objets, souvenirs ou tout simplement d’anecdotes que vous désirez partager, n’hésitez pas à prendre contact avec nous pour que nous puissions en discuter autour d’une excellente pils.
					</p>

					<p class="text">
						<a href="https://historiquefpms.wordpress.com/">Le site de la commission historique</a>
					</p>

				</div>

			</div>

			<div id="PMD" class="col-xs-12 col-md-9 tabcontent">

				<div class="title-area">
					<h3 class="title2">La commission PMD</h3> 
			  		<span class="subtitle">Polytech Mons Day</span>
				</div>

				<div>

					<p class="text">
						La Faculté Polytechnique de Mons, la Fédération des Etudiants et l’Association des Ingénieurs de Mons, souhaitant organiser un événement annuel marquant et prestigieux permettant de rassembler l’ensemble de la communauté Polytech Mons, ont créé en 2007 le « Polytech Mons Day ». Cet événement permet de fêter la nouvelle promotion, fraîchement diplômée. En effet, le Polytech Mons Day est né, avant tout, de la volonté de la F.P.Ms de s’impliquer davantage dans la symbolique de la remise de diplômes à ses nouveaux promus.
					</p>

					<p class="text">
						En fusionnant trois évènements clés, à savoir la remise des diplômes de la Faculté, le défunt Bal des Mines de la Fédération des Etudiants et la Cérémonie du Commencement de l’A.I.Ms, le Polytech Mons Day entend créer, et renforcer, les rencontres, les liens et les échanges au sein même de la communauté, toutes générations, orientations et situations professionnelles confondues. Dès lors, même si cette organisation a pour but premier de mettre à l’honneur les nouveaux diplômés, il est évident que tous les étudiants de la Faculté y sont conviés.
					</p>

					<p class="text">
						Après une première édition au Château de Seneffe, c’est le Château de Beloeil qui accueille depuis 2008 cette prestigieuse réception rassemblant près de 500 invités. En 2012, le Polytech Mons Day aura lieu le Samedi 8 septembre 2012. Nous fêterons la 169e promotion d'Ingénieurs Civils issus de notre honorable institution ! Tous les renseignements utiles seront donnés dès la rentrée et seront disponibles sur le site http://pmd.fede.fpms.ac.be.
					</p>	

					<p class="text">
						Pour vous donner l’eau à la bouche, sachez ceci : l’apéritif sera servi dans les magnifiques salons du Château, la soirée dansante et la petite restauration auront lieu dans l’Orangerie, un orchestre et un DJ seront chargés de vous faire danser durant une large partie de la nuit, et bien d’autres surprises qui ne manqueront pas de rendre cette soirée, votre soirée, mémorable… 
					</p>

					<p class="text">
						Le dernier PMD s'est déroulé en 2018 et est remplacé dès 2019 par le Bal des Mines.
					</p>

				</div>

			</div>

			<div id="FPMath" class="col-xs-12 col-md-9 tabcontent">
				
				<div class="title-area">
					<h3 class="title2">FPMath's</h3> 
			  		<span class="title-line2"></span> 
				</div>

			</div>

			<div id="PIMs" class="col-xs-12 col-md-9 tabcontent">
				
				<div class="title-area">
					<h3 class="title2">La Boraine</h3> 
			  		<span class="title-line2"></span> 
				</div>

				<div>
					<p class="text">
						Sorry, pas de folklore à la Boraine
					</p>
				</div>

			</div>

			<div id="Bal" class="col-xs-12 col-md-9 tabcontent">

				<div class="title-area">
					<h3 class="title2">Le Bal des Mines</h3> 
			  		<span class="title-line2"></span> 
				</div>

				<div>
					<img class="img3" src="../../assets/img/logoBalDesMines.PNG" alt="bleusaille">

					<p class="text">
						La dernière organisation historique du Bal des Mines remonte à 2007. Il renaît aujourd'hui de ses cendres.
					</p>

				</div>

			</div>

		</div>
		
	</body>

	<footer>
		<?php 
		include("../../scripts/openCercle.php");
		include("../footer.php");
		?>
	</footer>

</html>