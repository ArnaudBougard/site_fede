<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
	</head>

	<body id="body">

		<?php 
		include("../network.php");
		include("../navbar.php");
		include("../sideBar.php"); 
		?>

		<?php 
		if(!empty($actionArray)){

        	foreach($actionArray as list($id,$nom,$prix,$quantite,$date,$img,$description)){
			?>

				<div class="container">

					<div class="page-header">

						<div class="title-area">

							<h3 class="title2"><?= $nom; ?></h3> 
					  		<span class="title-line2"></span> 

						</div>

					</div>

					<div class="panel panel-default">

						<div class="panel-body">
							
							<div class="container action-details-container"> 

								<div class="col-sm-5">
									 <img style=" width: 80%;" src=<?= "'".$img."'" ?>> 
		    					</div>

		    					<div class="col-sm-7">
									<p class="tile-text"><?= $nom; ?></p>
				                  	<p class="tile-text">Prix: <?= $prix; ?> €</p>
				                  	<p class="tile-text">Pour <?= $quantite; ?> cl</p>
				                    <p class="tile-text">À partir du <?= $date; ?></p>
				                    <p class="action-description"><?= $description; ?><br/><br/></p>
								</div>

							</div>

						</div>

					</div>

				</div>

			<?php
			}

		}
		else{
		?>
			<p>Oups, cet article joue à cache-cache!</p>
		<?php
		}
		?>

		<?php include("../footer.php"); ?>

	</body>

</html>