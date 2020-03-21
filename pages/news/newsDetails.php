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
		if(!empty($newsData)){

        	foreach($newsData as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)){	
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
									<p style="white-space: pre-line"><?= $article; ?><br/><br/></p>
			                        <p>Publié par <?= $auteur; ?> le <?= $dateCreation; ?><br/><br/></p>
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
	
		<?php include("../footer.php");?>

	</body>

</html>