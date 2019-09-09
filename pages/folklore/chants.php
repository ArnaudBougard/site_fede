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

	<body id="body">
		
		<?php include("../network.php"); ?>

		<?php include("../navbar.php"); ?>

		<?php include("./chantDAO.php"); ?>

		<div class="container">
					<div class="title-area">
						<h3 class="title2">Chants</h3> 
				  		<span class="title-line2"></span> 
					</div>
			<ul style="list-style-type: none;">

				<?php 
					$chants = selectChants($bdd);
					if(!empty($chants)) {
        				foreach ($chants as list($id,$paroles,$description,$nom,$path)) {

							if(!empty($path))
							{
							echo '<div class=" chantdiv col-xs-4">';	
							echo '<li class="chant">';
							echo $nom;  
							
							
							
							echo '</li>';
							?> <audio src="<?php echo $path ?>" controls>Veuillez mettre à jour votre navigateur !</audio> <?php
							echo '<div class="content_chant">';
							echo $paroles;
							echo '</div>';
							echo '</div>';
							}
						}
					}
					else{
						?>
							<p>Il n'y a aucun chant </p>
						<?php

					}
				?>
			</ul>
		</div>


		<?php include("../footer.php"); ?>

		<script>
		var c = document.getElementsByClassName("chant");
		var i;

		for (i = 0; i < c.length; i++) {
		  c[i].addEventListener("click", function() {
		    this.classList.toggle("active2");
		    var content_chant = this.nextElementSibling;
		    if (content_chant.style.display === "block") {
		      content_chant.style.display = "none";
		    } else {
		      content_chant.style.display = "block";
		    }
		  });
		}
</script>


	</body>
</html>

