<?php
      // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
      $page = $_SERVER['REQUEST_URI'];
      $page = str_replace("/site_fede/pages/", "",$page);
      // ATTENTION : SI BUG AVEC CLASS ACTIVE, VERIFIER CHEMIN D'ACCES DANS LES IF ICI
?>

		<nav class="navbar navbar-default" id="nav">
			<ul>
				<li><a <?php if($page == "index/index.php" or $page == "index/"){echo 'class="active"';} ?> href="../index/index.php">Accueil</a></li>
				<li class="dropdown" href="">
					<a 
					<?php 
					if($page == "federale/apropos.php" or $page == "federale/adhesion.php" or $page == "federale/statuts.php" 
						or $page == "federale/pv.php" or $page == "federale/commissions.php"){
							echo 'class="active"';} ?> 
					href="../federale/apropos.php">
						La Fédérale
					</a>
					<ul class="dropdown-content">
						<li><a href="../federale/apropos.php">Qui sommes-nous ?</a></li>
						<li><a href="../federale/adhesion.php">Adhésion</a></li>
						<li><a href="../federale/statuts.php">Statuts</a></li>
						<li><a href="../federale/pv.php">PV réunions</a></li>
						<li><a href="../federale/commissions.php">Commissions</a></li>
					</ul>
				</li>
				<li class="dropdown" href="#">
					<a <?php if($page == "folklore/fetes.php" or $page == "folklore/regionales.php" or $page == "folklore/bleusaille.php"
					or $page == "folklore/chants.php" ){
						echo 'class="active"'
						;} ?> 
						href="../folklore/fetes.php">
							Folklore
					</a>
					<ul class="dropdown-content">
						<li><a href="../folklore/fetes.php">Les Fêtes</a></li>
						<li><a href="../folklore/regionales.php">Régionales</a></li>
						<li><a href="../folklore/bleusaille.php">Bleusaille</a></li>
						<li><a href="../folklore/chants.php">Chants</a></li>
					</ul>
				</li>
				<li class="dropdown" href="#">
					<a <?php if($page == "cercles/indexcercles.php" or $page == "cercles/bar.php" or $page == "cercles/cap.php" or $page == "cercles/cpv.php" or $page == "cercles/culture.php" or $page == "cercles/magellan.php" or $page == "cercles/mm.php" or $page == "cercles/mutu.php" or $page == "cercles/peyresq.php" or $page == "cercles/radio.php" or $page == "cercles/scientifique.php" or $page == "cercles/sdm.php" or $page == "cercles/sports.php" ){echo 'class="active"';} ?> href="../cercles/indexcercles.php">Cercles</a>
					<ul class="dropdown-content">
						<li><a href="../cercles/bar.php">Le Bar Polytech</a></li>
						<li><a href="../cercles/cap.php">La C.A.P.</a></li>
						<li><a href="../cercles/cpv.php">Le C.P.V.</a></li>
						<li><a href="../cercles/culture.php">Le Cercle Culturel</a></li>
						<li><a href="../cercles/magellan.php">Le Magellan</a></li>
						<li><a href="../cercles/mm.php">Le Mons-Mines</a></li>
						<li><a href="../cercles/mutu.php">La Mutu</a></li>
						<li><a href="../cercles/peyresq.php">Peyresq</a></li>
						<li><a href="../cercles/radio.php">Radio Extra</a></li>
						<li><a href="../cercles/scientifique.php">Le Scientifique</a></li>
						<li><a href="../cercles/sdm.php">Sono-Danse-Musique</a></li>
						<li><a href="../cercles/sports.php">Les Sports</a></li>
					</ul>
				</li>
				<!--<li class="dropdown" href="#">
					<a href="">Organismes</a>
					<ul class="dropdown-content">
						<li><a href="#">Commission Historique</a></li>
						<li><a href="#">Commission Web</a></li>
						<li><a href="#">FPMaths</a></li>
						<li><a href="#">J.D.E.</a></li>
						<li><a href="#">Polytech Mons Day</a></li>
						<li><a href="#">PIMs</a></li>
						<li><a href="#">Revue des Mines</a></li>
					</ul>
				</li>-->
				<li class="dropdown" >
					<a <?php if($page == "activites/game.php" or $page == "activites/voyageQ.php" or $page == "activites/ski.php" or $page == "activites/peyresq.php" or $page == "activites/isw.php"){echo 'class="active"';} ?> href="#">Événements majeurs</a>
					<ul class="dropdown-content">

						<li><a href="../activites/isw.php">International Student Week</a></li>
						<li><a href="../activites/game.php">Le Game: LAN Party</a></li>
						<li><a href="../activites/voyageQ.php">Voyage Q</a></li>
						<li><a href="../activites/ski.php">Séjour au Ski</a></li>
						<li><a href="../activites/peyresq.php">Peyresq</a></li>
					</ul>
				</li>
				<!-- <li class="dropdown" href="#">
					<a href="">Locaux</a>
					<ul class="dropdown-content">
						<li><a href="#">Bar</a></li>
						<li><a href="#">Bibliothèque</a></li>
						<li><a href="#">C.A.P</a></li>
						<li><a href="#">Local de projection</a></li>
						<li><a href="#">Magellan</a></li>
						<li><a href="#">Mutuelle d'édition</a></li>
						<li><a href="#">Radio</a></li>
						<li><a href="#">Salle de sport</a></li>
						<li><a href="#">Scientifique</a></li>
					</ul>
				</li>
				 -->
				<li><a <?php if($page == "contact/contact.php"){echo 'class="active"';} ?> href="../contact/contact.php">Contact</a></li>
			</ul>
			
			<!--<div class="search-area">
				<form action="">
					<input id="search" name="search" type="text" placeholder="Recherche...">
					<input id="search-submit" value="Rechercher" type="submit">
				</form>
			</div>-->
		</nav> 

		<script>

		</script>

