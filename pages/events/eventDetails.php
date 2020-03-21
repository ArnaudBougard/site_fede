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
		if(!empty($eventData)){

        	foreach ($eventData as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)){	
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
							
							<div class="container" style="margin-bottom: 5rem;"> 

								<div class="col-sm-4">
									 <img style=" width: 80%;" src=<?= "'".$img."'" ?>> 
		    					</div>

		    					<div class="col-sm-8">

			                        Date : <?= $date; ?>
			                        <br/>
			                        <br/>
			                        Lieu : <?= $lieu; ?>
			                        <br/>
			                        <br/>

			                        <?php 
		                        	if(!empty($link)){
		                        		?>
				                        <a href="<?= $link; ?>">Event Facebook</a>
				                        <br/>
				                        <br/>
				                        <?php
				                    } 
				                    ?>

			                        <?php if($ouverture==1){echo "ouvert à tous";}else{echo "Réservé aux baptisés";} ?>

			                        <br/>
			                        <br/>
									<p style="white-space: pre-line">
										<?= $description; ?>
									</p>
			                        <br/>
			                        <br/>

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