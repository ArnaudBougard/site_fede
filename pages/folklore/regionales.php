<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
		<link href="folklore.css" rel="stylesheet">

	</head>

	<body class="bg1" id="body">
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>

		<div class="content">
			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'Carolo')" id="defaultOpen">Carolo</button>
			  <button class="tablinks" onclick="openCity(event, 'Frontalière')">Frontalière</button>
			  <button class="tablinks" onclick="openCity(event, 'Centrale')">Centrale</button>
			  <button class="tablinks" onclick="openCity(event, 'Boraine')">Boraine</button>
			</div>

			<div id="Carolo" class="tabcontent">
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
		</div>

			<div id="Frontalière" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La Frontalière</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<!--<img class="img3" src="../../assets/img/Fronta.png" alt="bleusaille">
						TROUVER AUTRE IMAGE, CELLE-LA EST DEGUEU-->

					<p class="text">
						Bonjour à toi ex-rhétoricienne et ex-rhétoricien !
					</p>

					<p class="text">
						En effet, afin de faire connaissance avec d’autres étudiants de même année, ou bien, plus âgés, il t’est proposé de participer aux activités de début d’année. Ce faisant, tu seras orienté vers le cercle de la Frontalière si tu viens de la région d’Ath, Tournai, Mouscron ainsi que de Flandres ou de pays étrangers.
					</p>

					<p class="text">
						Pendant cette période, tu découvriras le folklore de notre si belle régionale. Cela te permettra également de nouer des liens forts avec les autres étudiants frontaliers. Tu pourras toujours leur solliciter de l’aide ou leur demander conseil.
					</p>	

					<p class="text">
						Durant l’année, plusieurs activités incontournables te seront proposées. Notre traditionnel souper réunit tout le monde autour d’un bon moules-frites dans la bonne humeur. Plus tard, lors de notre soirée dégustation, tu auras l’occasion de découvrir de nombreuses bières qui sont brassées dans le pays frontalier. En voici quelques unes pour te mettre l’eau à la bouche : la Bush 10 et 12, la Rodenbach, la Troll et pour les demoiselles, la Pêche Mel’Bush et la Frambush. Une séance de golf grandeur nature est également organisée le lendemain du Carnaval de Binche. Il s’agit du crossage à l’tonne qui se déroule dans les rues du village de Chièvres. À l’aide de ta crosse, envoies ta cholette le plus loin possible afin d’atteindre un tonneau en bois. Mais attention, tes adversaires frapperont en sens inverse pour t’éloigner du but.
					</p>

					<p class="text">
						Alors si toi aussi, tu as envie de t’amuser, de découvrir le folklore frontalier et de faire connaissance avec des étudiants venant de tout horizon, rejoins nous au plus vite !
					</p>	

				</div>
			</div>

			<div id="Centrale" class="tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La Centrale</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<p class="text">
						La Centrale est la plus jeune et la plus petite de nos quatre régionales, mais elle est sans conteste celle qui sait le plus se faire remarquer. En effet, forte d'un folklore unique, chacune de ses activités se passe au son des éternels tambours et trompettes. Nous avons la chance d'avoir notre propre orchestre de rondeaux constitué entièrement d'étudiants ou d'anciens.
					</p>

					<p class="text">
						Regroupant les jeunes originaires de la région de La Louvière et de Binche, mais aussi du Brabant et d'une partie du Hainaut occidental, nous sommes, avant toute chose, un groupe d'amis aux liens forts dans lequel tout le monde peut s'intégrer sans efforts. Chaque année se succèdent des comités, plus entreprenant les uns que les autres, dont la tâche est l'organisation des activités. Nous évoluons, bien sûr, suivant l'humeur de l'époque, mais nous restons toujours respectueux de notre riche passé. Ainsi, lors de nos magnifiques soupers, l'ambiance est telle qu'elle ferait rougir de jalousie les fêtes les plus connues. De plus, une fois l'an, une dégustation de bières typiques permettra aux étudiants des autres régionales et à la centaine de Centraux, comme on les appelle, de découvrir ou d'approfondir leur connaissance sur les monuments brassicoles que sont la Binchoise, la Saint-Feuillen, la Bonne-Espérance, la Barbâr, la Grisette, la Double Enghien...
					</p>

					<p class="text">
						Le jour de la Saint-Nicolas, patron des étudiants, personne ne refuse de venir prendre l'apéro chez nous. Le traditionnel Mouchon réchauffe le corps avant d'affronter le vent et, bien souvent, la pluie qui frappent le grand cortège estudiantin qui parcourt la Ville.
					</p>	

					<p class="text">
						Enfin, pour terminer l'année en apothéose, un car est affrété afin que chacun puisse assister au Carnaval de Binche, clou des festivités de la région, où nous louons un local pour permettre à tous nos membres de se retrouver autour d'un bon verre de bière.
					</p>

					<p class="text">
						Alors, si tu es du coin, que tu joues du tambour, de la clarinette ou du trombone, que tu aimes danser sur les airs de Gilles et que tu aimes t'amuser, la Centrale est faite pour toi. Rejoins-nous, nous t'attendons les bras ouverts.
					</p>	

				</div>
			</div>

			<div id="Boraine" class="tabcontent">
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

