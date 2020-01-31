<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<?php include("../../model/actionDAO.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
	</head>

	<body id="body">
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<!-- HEADER -->

		<?php include("../navbar.php"); ?>

		<?php 
			$actionArray=selectActionById($bdd,$_GET['id']);	
			
			if(!empty($actionArray)) 
			{
	        	foreach ($actionArray as list($id,$nom,$prix,$quantite,$date,$img,$description)) {
  					
		?>
		<div class="container">	
			<div class="page-header">
				<div class="title-area">
				<h3 class="title2"><?php echo $nom; ?></h3> 
		  		<span class="title-line2"></span> 
			</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					
					<div class="container" style="margin-bottom: 5rem;"> 

						<div class="col-sm-5" >
							 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
    					</div>
    					<div class="col-sm-7" >
							<p class="tile-text"><?php echo $nom; ?></p>
		                  	<p class="tile-text">Prix: <?php echo $prix; ?> €</p>
		                  	<p class="tile-text">Pour <?php echo $quantite; ?> cl</p>
		                    <p class="tile-text">A partir du <?php echo $date; ?></p>
		                    <p style="white-space: pre-line">
								<?php echo $description; ?>
	                        <br /> <br />

							</p>
						</div>

					</div>
					<?php

				}
			}
			else
			{
		?>
			<p>Oups, cet article joue à cache-cache!</p>
		<?php
			}
		?>					
	</div>
</div>
		</div>
	
		<?php include("../footer.php"); ?>


	</body>


	

</html>

