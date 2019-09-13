<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
		<link href="../folklore/folklore.css" rel="stylesheet">
	</head>

	<body class="bg1">
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>

		<div class="row">
			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'Web')" id="defaultOpen">Web</button>
			  <button class="tablinks" onclick="openCity(event, 'Historique')">Historique</button>
			  <button class="tablinks" onclick="openCity(event, 'PMD')">PMD</button>
			  <button class="tablinks" onclick="openCity(event, 'PIMs')">PIM's</button>
			  <button class="tablinks" onclick="openCity(event, 'FPMath')">FPMath</button>
			  <button class="tablinks" onclick="openCity(event, 'Bal')">Bal des Mines</button>
			</div>

			<div id="Web" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La commission WEB</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<img class="img3" src="../../assets/img/logoComWeb.PNG" alt="bleusaille">

					<p class="text">
						
						<br>
							En mai 2003, la Fédération des Etudiants a décidé de se doter d'un site internet aux objectifs multiples mais visant essentiellement à faire la promotion de ses cercles et de leurs activités. Au fur et à mesure du temps, les besoins du site ont été de plus en plus nombreux. Un exemple fut la gestion avancée des utilisateurs et des groupes d'utilisateurs.
						</br>

						<br>
							En 2006, la Commission Web a décidé de réécrire l'entièreté du site, pour une meilleure prise en charge de toutes les fonctionnalités. Cette réécriture fut l'occasion de remodeler le site graphiquement et de prendre en charge de nouveaux standards. Le site est désormais valide CSS 2.1 et XHTML 1.0. Ces améliorations permettront des changements ultérieurs plus faciles, ainsi qu'une gestion plus aisée. Le site est désormais ce que l'on peut appeler un "site Web 2.0". En effet, les dernières technologies du Web telles que AJAX ont été implémentées.
						</br>
						<br>
							En 2008, la Commission Web a souhaité faire profiter le site Fédé de l'expérience qu'elle a acquis durant ses deux mandats consécutifs. Si le changement de la charte graphique est l'élément le plus marquant avec une nouvelle disposition du contenu, l'ajout de bannières afin de dynamiser l'ensemble et la possibilité de choisir un thème de couleurs, l'essentiel du travail réalisé se cache derrière cette belle façade.
						</br>
						<br>
							En 2016, après une attaque informatique et par mesure de sécurité, le site à été mis en maintenance prolongée.  Il renait sous une nouvelle forme plus moderne en 2017 sous l'impulsion d'un projet mené par les étudiants de troisième bachelier en informatique et gestion.  Depuis, aussi bien l'aspect technique qu'estétique a évolué.
						</br>
						<br>
							Durant l'été 2019, une importante refonte graphique à été effectuée afin de rendre le site plus harmonieu vis-à-vis des couleurs de la faculté ainsi que de la fédérale. De plus, l'aspect général à été modernisé à l'aide des dernières mises à jour du framework Bootstrap.
						</br>

					</p>

					<p class="text">
						La commision web est composée d'au minimum deux personnes qui sont chargées par la fédérale du maintient et du dévellopement du site sur lequel vous vous trouvez actuellement.
					</p>

					
				</div>
			</div>
		

			<div id="Historique" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La commission historique</h3> 
					</div>

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

			<div id="PMD" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La commission PMD</h3> 
				  		<span class="title-line2">Polytech Mons Day</span> 
					</div>

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

			<div id="FPMath" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La Carolo</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<img class="img3" src="../../assets/img/charleroi-blason.gif" alt="bleusaille">

					<p class="text">
						Si tu habites Charleroi ou ses environs (de Lobbes à Namur, en passant par Chimay ou Arlon...), alors ces quelques lignes te concernent !
					</p>

					<p class="text">
						Un comité composé de 5 personnes motivées ainsi que de tous les gais lurons du pays noir sont là pour te faire vivre une tonne d'expériences uniques, le tout dans une ambiance folklorique, joyeuse et conviviale.
					</p>

					<p class="text">
						En voici un bref aperçu :
						<ul class="list">
							<li>Un souper destiné à accueillir les nouveaux baptisés Carolos, dont nous l'espérons, tu feras bientôt partie</li>
							<li>Un petit déjeuner suivi d'une dégustation où tu pourras goûter les spécialités de notre belle région</li>
							<li>Une excursion afin de supporter nos valeureux Zèbres ou nos brillants Spirous</li>
							<li>Un voyage d’une journée au Pays Noir afin de découvrir son folklore unique avec notamment l’illustre distillerie de Biercée ou les ruines de l’Abbaye D’Aulne</li>
							<li>Une soirée regroupant tous les étudiants Carolos des différentes Universités telles Mons, Namur, Louvain,…</li>
						</ul>
					</p>	

					<p class="text">
						Si ces quelques lignes te mettent l'eau à la bouche, si tu es prêt à perpétuer avec nous le folklore du pays de Charleroi, alors n'hésite plus et viens rejoindre cette grande famille que sera toujours la Carolo lors des activités de début d’année.
					</p>

					<h4 class="subtitle">Armoiries de Charleroi</h4>
					<p class="text">
						Le coq, emblème de la partie francophone belge et de la France. Sa dextre est posée en chef, en signe d'allégeance.
					</p>	

					<p class="text">
						Sur le blason (en partant du haut):
						<ul class="list">
							<li>La fleur de lys rappelle le développement donné par la France à la forteresse initiale</li>
							<li>Les 15 carrés représentent les 15 anciennes communes (Charleroi, Couillet, Dampremy, Gilly, Gosselies, Goutroux, Jumet, Lodelinsart, Marchienne, Marcinelle, Monceau/s/Sambre, Montignies/s/Sambre, Mont/s/Marchienne, Ransart, Roux), qui fusionnées forment l'actuelle ville de Charleroi</li>
							<li>Les 12 étoiles qui symbolisent le drapeau des Communes d'Europe</li>
							<li>(Au centre des étoiles) La forteresse de Vauban, berceau de la ville.</li>
						</ul>
					</p>		
				</div>
			</div>

			<div id="PIMs" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La Boraine</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<p class="text">
						Sorry, pas de folklore à la Boraine
					</p>	

				</div>
			</div>
			<div id="Bal" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">Le Bal des Mines</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<img class="img3" src="../../assets/img/logoBalDesMines.PNG" alt="bleusaille">

					<p class="text">
						
						<br>
							LA dernière organisation historique du Bal des Mines remonte à 2007.  Il rennait aujourd'hui de ses cendres					
						</br>

						
					
				</div>
			</div>

		</div>
		</div>
		

		<script>
		function openCity(evt, cityName) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		</script>


				<?php include("../footer.php"); ?>

	</body>
</html>

