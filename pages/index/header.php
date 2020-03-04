<div class="header-container hidden-md hidden-sm hidden-xs">

	<img src="../../assets/img/houdain.jpg" alt="cour houdain">

	<div class="header-btn-area">

	<?php 

	if(!isset($_SESSION['id_utilisateur'])){
    	echo '<a class="header-btn" href="../users/connexion.php">Connexion</a>
    	<a class="header-btn" href="../users/inscription.php">Inscription</a>';
	}

	?>

	</div>

</div>	