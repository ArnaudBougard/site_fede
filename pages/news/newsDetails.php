<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<?php include("../../model/eventDAO.php"); ?>

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
			$eventData=selectEventById($bdd,$_GET['id']);	
			
			if(!empty($eventData)) 
			{
	        	foreach ($eventData as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) 
	        	{
  					
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

						<div class="col-sm-8" >
							 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
    					</div>
    					<div class="col-sm-4" >
							<p>
	                        Nom de l'événement : <?php echo $nom; ?>
	                        <br /> <br />
	                        Description : <?php echo $description; ?>
	                        <br /> <br />
	                        Date : <?php echo $date; ?>
	                        <br /> <br />
	                        Lieu : <?php echo $lieu; ?>
	                        <br /> <br />
	                        <?php 
	                        	if(!empty($link)){
	                        		?>
			                        <a href="<?php echo $link; ?>" > Event Facebook </a>
			                        <br /> <br />
			                        <?php
			                    } ?>
	                        <?php if($ouverture==1){echo "ouvert à tous";}else{echo "Réservé aux baptisés";} ?>
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

