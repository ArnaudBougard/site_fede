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

		<?php 
		if(isset($_SESSION['id_utilisateur'])){

	        if(is_MDC($bdd,$_SESSION['email_utilisateur'])!= NULL){
		        ?>

				<div class="container">

					<div class="title-area">
						<h3 class="title2">Chants</h3> 
				  		<span class="title-line2"></span> 
					</div>

					<div class="page-header">
						<h1>Upload chant</h1>
						<h2 >Seuls les MDC peuvent upload un chant</h2>
					</div>

					<div class="panel panel-default">
						<div class="panel-body">
							<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm">
								<div class="form-group">
									<label for="exampleInputFile">Selectionnez une image pour l'événement qui défilera sur la page d'accueil :</label>
									<input type="file" id="exampleInputFile" name="files[]" accept="audio/*">
									<p class="help-block"><span class="label label-info">Note :</span> Please, select WAV, WMA, MP3, m4a or MP4 files</p>

									<p> 
										<label>Nom</label><br>
										<input class='champ' type='text' id='nom' name='nom' placeholder='80 Chasseurs' maxlength='35' size='40'  required />
									</p>

									<p> 
										<label>Paroles </label><br>
										<input class='champ' type='text' id='parole' name='parole' placeholder='Obligatoire' maxlength='2000' size='auto' required/>
									</p>

									<p> 
										<label>Description </label><br>
										<input class='champ' type='text' id='description' name='description' placeholder='si nécessaire' maxlength='50' size='60' />
									</p>


									<p>
										<input style="margin-left: 0rem;" type='submit' class='btn-form2' name='chantform' value="Submit" />
									</p>
								</div>	

							</form>
							<br/>
							
							
						</div>
					</div>
				</div>
			<?php 

			}
		}

		?>

		<?php include("../../controller/folklore/chantCreate.php"); ?>

		<div class="container">

				<input type="text" id="search" onkeyup="search_chant()" placeholder="Rechercher un chant..." size="50">

				<div class="row">

				<ul id="chants" style="list-style-type: none;">

					<?php 
					if(!empty($chants)){

        				foreach($chants as list($id,$paroles,$description,$nom,$path)){

							if(!empty($path)){
							?>
							
								<div class="chantdiv col-xs-12 col-sm-6 col-md-4 dropdown">

									<li class="chant"><span data-toggle="dropdown" class="dropdown-toggle"><?= $nom; ?></span></li>
									
									<div class="content_chant dropdown-menu">
									<audio src="<?= $path ?>" controls>Veuillez mettre à jour votre navigateur !</audio> 
									<?= $paroles; ?>
									</div>
										
								</div>
							
							<?php
							}
						}
					}
					else{
						?>
							<p>Il n'y a aucun chant </p>
						<?php

					}
					?>
				</ul>
			</div>
		</div>

		<?php 
		include("../../scripts/searchChant.php")
		include("../footer.php");
		?>

	</body>
	
</html>