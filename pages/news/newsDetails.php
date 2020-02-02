<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<?php include("../../model/newsDAO.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
	</head>

	<body id="body">
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<!-- HEADER -->

		<?php include("../navbar.php"); 
		include("../sideBar.php");?>

		<?php 
			$newsData=selectNewsById($bdd,$_GET['id']);	
			
			if(!empty($newsData)) 
			{
	        	foreach ($newsData as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)) 
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

						<div class="col-sm-4" >
							 <img style=" width: 80%;" src=<?php echo "'".$img."'" ?>> 
    					</div>
    					<div class="col-sm-8" >
							<p style="white-space: pre-line">
								<?php echo $article; ?>
	                        <br /> <br />

							</p>
	                        
	                        Publié par <?php echo $auteur; ?> le <?php echo $dateCreation; ?>
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
		<?php include("../../controller/toggle.php"); ?>


	</body>


	

</html>

