<?php
session_start();
include("../../controller/getConnexionData.php");
include("../../model/newsDAO.php");
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

		<div class="container news-manager-maincontainer">

			<div class="panel panel-default">

				<div class="panel-body">

					<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm">

						<div class="form-group">

							<label for="exampleInputFile">Couverture de la news *</label>
							<input type="file" id="exampleInputFile" name="files[]" accept="image/*">

							<p class="help-block"><span class="label label-info">Note:</span>Please, select png jpg or jpeg files</p>

							<p> 
								<label>Titre *</label><br> 
								<input class='champ' type='text' id='nom' name='nom' placeholder='Soirée Mousse' maxlength='25' size='30' required />
							</p>

							<!-- <p> 
								<label>Article *</label><br>
								<input class='champ' type='text' id='article' name='article' placeholder='Si nécessaire' maxlength='500' size='100' required />
							</p> -->

							<p>
								<textarea rows="10" cols="100" id='article' name='article' placeholder='Tapez ici votre article'></textarea>
							</p>
							
							<p>
                        		<span>* obligatoire</span>
                        	</p>

                        	<br/>

							<p>
								<input type='submit' class='btn-form2 news-manager-submit' name='eventform' value="Créer un événement" />
							</p>

						</div>	

					</form>

					<br/>
					
				</div>

			</div>
			
			<?php include("newsCreate.php"); ?>
		
			<div class="panel panel-default">

				<div class="panel-body">

					<div class="row"> 
						<h4 class="news-manager-row">En attente de validation</h4>
					</div>

					<?php 
					if(!empty($pendingEventsArray)){

						foreach ($pendingEventsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)){
							?>

							<div class="container news-manager-container"> 

								<div class="col-sm-4">
									 <img class="news-manager-image" src=<?= "'".$img."'" ?>> 
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
									<btn class="btn-form2"><a href="../../controller/news/newsDelete.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
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
		
			<div class="panel panel-default">

				<div class="panel-body">

					<div class="row"> 
						<h4 class="news-manager-row">News publiées</h4>
					</div>

					<?php 
					if(!empty($eventsArray)){

						foreach($eventsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)){
						?>

							<div class="container news-manager-container"> 

								<div class="col-sm-4">
									 <img class="news-manager-image" src=<?= "'".$img."'" ?>> 
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
									<btn class="btn-form2"><a href="../../controller/news/newsDelete.php?id= <?= $id; ?>&path=<?= $img; ?>" class="gras btn btn-xl">Supprimer</a></btn>
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

	</body>

	<footer>
		<?php include("../footer.php"); ?>
	</footer>

</html>