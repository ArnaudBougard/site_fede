<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="./folklore.css" rel="stylesheet">
	</head>

	<body class="bg1" id="body">
		
		<?php 
		include("../network.php");
		include("../navbar.php"); 
		include("../sideBar.php");
		?>

		<div class="row" >

			<div class="tab col-sm-2 hidden-xs hidden-sm">
				<ul class="unstyled">
					<li><button class="tablinks" onclick="openCercle(event,'Carolo')" id="defaultOpen">Carolo</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'Frontalière')">Frontalière</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'Centrale')">Centrale</button></li>
					<li><button class="tablinks" onclick="openCercle(event,'Boraine')">Boraine</button></li>
				</ul>
			</div>
 
			<div class="tab col-xs-12 hidden-md hidden-lg hidden-xl">
				<ul class="unstyled horizontal">
					<li class="tablinks " onclick="openCercle(event,'Carolo')" id="defaultOpen">Carolo</li>
					<li class="tablinks " onclick="openCercle(event,'Frontalière')">Frontalière</li>
					<li class="tablinks " onclick="openCercle(event,'Centrale')">Centrale</li>
					<li class="tablinks " onclick="openCercle(event,'Boraine')">Boraine</li>
				</ul>
			</div>
			
			<div id="Carolo" class="col-xs-12 col-md-9 tabcontent">

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


			<div id="Frontalière" class="col-xs-12 col-md-9 tabcontent">
			
				<div class="title-area">
					<h3 class="title2">La Frontalière</h3> 
			  		<span class="title-line2"></span> 
				</div>

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

			<div id="Centrale" class="col-xs-12 col-md-9 tabcontent">

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

			<div id="Boraine" class="col-xs-12 col-md-9 tabcontent">
				<div class="container">
					<div class="title-area">
						<h3 class="title2">La Boraine</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<p class="text">
						Le cercle estudiantin de la F.P.Ms se compose de plusieurs cercles fédérés et de diverses régionales telles que la Carolo, la Frontalière, la Centrale et la Boraine. Chaque étudiant participant à la Bleusaille sera associé à l’une de ces régionales. Ainsi, si tu habites ou si tu es allé dans une école du Borinage, ou encore si tu te sens proche et fier de ce tte région, rejoins-nous ! Nous serons fiers de t’accueillir et de te faire découvrir le folklore borain où rassemblement, amusement et respect des traditions sont les maitres mots. Tu y apprendras en outre divers chants et évènements en l'honneur de cette belle ville qu'est la notre.
						<br/>
					</p>	
					<p class="text">	
						Photo Régionale Boraine
						Dès le début de l’année, ton comité borain (composé de cinq personnes) te sera présenté, et tu auras également l’occasion de rencontrer d’anciens membres. Si tu t’en montre digne, ceux-ci seront fiers de t’accueillir et te guideront tout au long de ta bleusaille et de ta vie estudiantine. Chacun d’eux pourra t’apprendre, te conseiller, ainsi que t’aider tout au long de l’année dans les bons moments comme dans les mauvais. En effet, quelques conseils lors de l’approche des examens sont toujours bons à prendre. Et oui, nous sommes une vraie petite famille prête à s’agrandir si tu nous fais confiance.
						<br/>
					</p>	
					<p class="text">	
						Durant l’année, nous organisons plusieurs événements, tels qu’un souper et une dégustation où tu seras amené à découvrir les bières et autres spécialités de la région. Tu pourras également profiter des quelques réductions que nous offrons lors du Doudou !
						<br/>
					</p>	
					<p class="text">	
						Photo Régionale Boraine
						Mis à part la découverte du folklore, le baptême t'offrira l'occasion de créer des liens avec de nombreuses personnes et celui-ci se révèlera pour toi riche en expériences. En effet, les liens que tu créeras lors de ta Bleusaille seront très forts et dureront encore bien des années après la vie facultaire ! La Bleusaille restera un souvenir imprimé dans ta mémoire que tu ne regretteras pas, et qui t’ouvrira les portes de nombreuses expériences.
						<br/>
					</p>	
					<p class="text">	
						Nous espérons qu’après ce petit aperçu, nous t’avons donné envie de venir nous rejoindre et de prendre une grande et belle décision pour ta vie d’étudiant. Les cartes sont désormais entre tes mains pour jongler entre étude mais aussi solidarité et amusement durant tes cinq années à la Faculté Polytechnique de Mons. Ne laisse pas passer cette chance à regarder les autres s’amuser pendant que tu glanderas sur Facebook et 9gag, on n’a qu’une seule vie universitaire !
						<br/>
					</p>	

				</div>
				
			</div>

		</div>

		<?php 
		include("../../scripts/openCercle.php");
		include("../footer.php");
		?>

	</body>

</html>