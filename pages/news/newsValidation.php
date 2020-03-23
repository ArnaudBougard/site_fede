<?php
session_start();
include("../../controller/getConnexionData.php");
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="./news.css" rel="stylesheet">
	</head>

	<body id="body">

		<?php 
		include("../network.php");
		include("../navbar.php");
		include("../sideBar.php"); 
		?>

		<div class="container">			
			
			<div class="container">

				<div class="page-header">
					<h1>News en attente de validation (ou pas)</h1>
				</div>

				<div class="panel panel-default">

					<div class="panel-body">
						<br/>

						<?php 
						if(!empty($pendingEventsArray)){

        				foreach ($pendingEventsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)){
    					?>

        					<div class="container news-validation-container"> 

        						<div class="col-sm-4">
									 <img class="news-validation-image" src=<?= "'".$img."'" ?>> 
	        					</div>
	        					<div class="col-sm-4">
									<p>
			                        Nom de l'événement : <?= $nom; ?>
			                        <br /> <br />
			                        Description : <?= $article; ?>
			                        <br /> <br />
			                        Publié le: <?= $dateCreation; ?>
			                        <br /> <br />
									</p>
								</div>

								<div class="col-sm-4">

									<div class="row news-validation-row">
										<btn class="btn-form2"><a href="../../controller/news/newsValidate.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Valider</a></btn>
									</div>

									<div class="row">
										<btn class="btn-form2"><a href="../../controller/news/newsDeleteModeration.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
									</div>

	        					</div>

        					</div>

    					<?php
        				}

        			}
					else
					{
					?>
					<p>Vous n'avez aucune news en attente de validation</p>
					<?php
					}
					?>

					</div>

				</div>

			</div>

			<div class="container">

				<div class="page-header">
					<h1>News validées</h1>
				</div>

				<div class="panel panel-default">

					<div class="panel-body">

						<br/>

						<?php 
						if(!empty($eventsArray)){

        					foreach ($eventsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)){
        					?> 

	        					<div class="container news-validation-container"> 

	        						<div class="col-sm-4">
										 <img class="news-validation-image" src=<?= "'".$img."'" ?>> 
		        					</div>

		        					<div class="col-sm-4">
										<p>
				                        Nom de l'événement : <?= $nom; ?>
				                        <br/><br/>
				                        Description : <?= $article; ?>
				                        <br/><br/>
				                        Publié le: <?= $dateCreation; ?>
				                        <br/><br/>
										</p>
									</div>

									<div class="col-sm-4">

										<div class="row">
											<btn class="btn-form2"><a href="../../controller/news/newsDeleteModeration.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
										</div>
										
		        					</div>

	        					</div>

	        					<?php

	        					}

	        				}
							else{
							?>
								<p>Vous n'avez aucune news en attente de validation</p>
							<?php
							}
						?>

					</div>

				</div>

			</div>

		</div>

	</body>

	<footer>
		<?php include("../footer.php"); ?>
	</footer>

</html>