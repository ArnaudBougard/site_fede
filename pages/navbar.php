

<?php

      // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
      $page = $_SERVER['REQUEST_URI'];
      $page = str_replace("/site_fede/pages/", "",$page);
      // ATTENTION : SI BUG AVEC CLASS ACTIVE, VERIFIER CHEMIN D'ACCES DANS LES IF ICI
?>
		
		<nav class="navbar navbar-default hidden-md hidden-sm hidden-xs" id="nav">
			<ul class="menuul">
				<li class="menuli"><a <?php if($page == "index/index.php" or $page == "index/"){echo 'class="active"';} ?> href="../index/index.php">Accueil</a></li>
				<li class="dropdown menuli" href="">
					<a 
					<?php 
					if($page == "federale/apropos.php" or $page == "federale/adhesion.php" or $page == "federale/statuts.php" 
						or $page == "federale/pv.php" or $page == "federale/commissions.php"){
							echo 'class="active"';} ?> 
					href="../federale/apropos.php">
						La Fédérale
					</a>
					<ul class="dropdown-content">
						<li class="dcli"><a href="../federale/apropos.php">Qui sommes-nous ?</a></li>
						<li  class="dcli"><a href="../federale/adhesion.php">Adhésion</a></li>
						<li class="dcli"><a href="../federale/statuts.php">Statuts</a></li>
						<li class="dcli"><a href="../federale/pv.php">PV réunions</a></li>
						<li class="dcli"><a href="../federale/commissions.php">Commissions</a></li>
					</ul>
				</li>
				<li class="dropdown menuli" href="#">
					<a <?php if($page == "folklore/fetes.php" or $page == "folklore/regionales.php" or $page == "folklore/bleusaille.php"
					or $page == "folklore/chants.php" ){
						echo 'class="active"'
						;} ?> 
						href="../folklore/fetes.php">
							Folklore
					</a>
					<ul class="dropdown-content">
						<li class="dcli"><a href="../folklore/fetes.php">Les Fêtes</a></li>
						<li class="dcli"><a href="../folklore/regionales.php">Régionales</a></li>
						<li class="dcli"><a href="../folklore/bleusaille.php">Bleusaille</a></li>
						<li class="dcli"><a href="../folklore/chants.php">Chants</a></li>
					</ul>
				</li>
				<li class="dropdown menuli" href="#">
					<a <?php if($page == "cercles/indexcercles.php" or $page == "cercles/cercles.php?id=openBar" or $page == "cercles/cercles.php?id=openCap" or $page == "cercles/cercles.php?id=openCpv" or $page == "cercles/cercles.php?id=openCulture" or $page == "cercles/cercles.php?id=openMagellan" or $page == "cercles/cercles.php?id=openMm" or $page == "cercles/cercles.php?id=openMutu" or $page == "cercles/cercles.php?id=openPeyresq" or $page == "cercles/cercles.php?id=openRadio" or $page == "cercles/cercles.php?id=openScientifique" or $page == "cercles/cercles.php?id=openSdm" or $page == "cercles/cercles.php?id=openSports" ){echo 'class="active"';} ?> href="../cercles/indexcercles.php">Cercles</a>
					<ul class="dropdown-content">
						<li class="dcli"><a href="../cercles/cercles.php?id=openBar">Le Bar Polytech</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openCap">La C.A.P.</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openCpv">Le C.P.V.</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openCulture">Le Cercle Culturel</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openMagellan">Le Magellan</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openMm">Le Mons-Mines</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openMutu">La Mutu</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openPeyresq">Peyresq</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openRadio">Radio Extra</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openScientifique">Le Scientifique</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openSdm">Sono-Danse-Musique</a></li>
						<li class="dcli"><a href="../cercles/cercles.php?id=openSports">Les Sports</a></li>
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
				<li class="dropdown menuli" >
					<a <?php if($page == "activites/game.php" or $page == "activites/voyageQ.php" or $page == "activites/ski.php" or $page == "activites/peyresq.php" or $page == "activites/isw.php"){echo 'class="active"';} ?> href="#">Événements majeurs</a>
					<ul class="dropdown-content">

						<li class="dcli"><a href="../activites/isw.php">International Student Week</a></li>
						<li class="dcli"><a href="../activites/game.php">Le Game: LAN Party</a></li>
						<li class="dcli"><a href="../activites/voyageQ.php">Voyage Q</a></li>
						<li class="dcli"><a href="../activites/ski.php">Séjour au Ski</a></li>
						<li class="dcli"><a href="../activites/peyresq.php">Peyresq</a></li>
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
				<li class="menuli"><a <?php if($page == "contact/contact.php"){echo 'class="active"';} ?> href="../contact/contact.php">Contact</a></li>
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

