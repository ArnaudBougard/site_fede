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

		<div class="container">
					<div class="title-area">
						<h3 class="title2">Chants</h3> 
				  		<span class="title-line2"></span> 
					</div>
			<ul>
				<?php 
					$query = $bdd -> query('SELECT * FROM chant ORDER BY nom_chant');
					while($chants = $query->fetch()){
						echo '<li class="chant">';
						echo $chants['nom_chant'];
						echo '</li>';
						echo '<div class="content_chant">';
						echo $chants['parole_chant'];
						echo '</div>';
						echo '<br/>';
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

