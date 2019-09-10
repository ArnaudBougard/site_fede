<div class="header-container">
	<img src="../../assets/img/GD4.bmp" alt="img">
	
	
	<div class="header-text">
	
	</div>
	<div class="header-btn-area">

	<?php 

	if(isset($_SESSION['id_utilisateur'])){ // On ferme l'accolade à la fin du code

     }
                         
	else{

    	echo '<a class="header-btn" href="../users/connexion.php">Connexion</a>
    	<a class="header-btn" href="../users/inscription.php">Inscription</a>';
  	}

	?>

	</div>	
</div>	