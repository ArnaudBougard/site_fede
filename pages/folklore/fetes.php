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

	<body id="body">
		
		<?php 
		include("../network.php");
		include("../navbar.php");
		include("../sideBar.php"); 
		?>

		<div class="container">

			<div class="row">
			
					<div class="col-xs-12" >

						<p>
							<?= $cercle['description_cercle']; ?> 
							<b><a href="../../assets/files/charte2019.pdf" download>
						  		Charte de baptême de l'UMons 2019
							</a></b>
							<br>
							<br/> 
						</p>

					</div>
				
			</div>

			<div class="row ">
				<div class="col col-sm-3 col-sm-offset-2 center" style="padding-bottom: 20px;">
					<img src="<?= $cercle['logo_cercle']; ?> ">

				</div>

				<div class="col col-sm-3 col-sm-offset-1 center" >
					<ul class="horizontal">	

					<?php

						foreach ($comitardsArray as list($nom_poste,$firstname,$lastname)){
						?>
							<li>
								<?= " $nom_poste: $firstname $lastname";?>
								<br>
								
							</li>
						<?php
						} 
						?>
			    	</ul>
					
				</div>
				
			</div>
				
		</div>

		<?php include("../footer.php"); ?>

	</body>

</html>