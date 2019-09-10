<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
		<link href="folklore.css" rel="stylesheet">

	</head>

	<body id="body">
		
		<?php include("../network.php"); ?>

		<?php include("../navbar.php"); ?>

		<?php include("./chantDAO.php"); ?>

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
							<label for="exampleInputFile">Selectionnez une image pour l'événement qui défilera sur la page d'accueil:</label>
							<input type="file" id="exampleInputFile" name="files[]" accept="audio/*">
							<p class="help-block"><span class="label label-info">Note:</span> Please, select WAV, WMA, MP3, m4a or MP4 files</p>

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

			<?php include("chantCreate.php"); ?>


			<ul style="list-style-type: none;">

				<?php 
					$chants = selectChants($bdd);
					if(!empty($chants)) {
        				foreach ($chants as list($id,$paroles,$description,$nom,$path)) {

							if(!empty($path))
							{
							echo '<div class=" chantdiv col-xs-4">';	
							echo '<li class="chant">';
							echo $nom;  
							
							
							
							echo '</li>';
							echo '<div class="content_chant">';
							?> <audio src="<?php echo $path ?>" controls>Veuillez mettre à jour votre navigateur !</audio> <?php
							echo $paroles;
							echo '</div>';
							echo '</div>';
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


		<?php include("../footer.php"); ?>

		<script>
		var c = document.getElementsByClassName("chant");
		var i;

		for (i = 0; i < c.length; i++) {
		  c[i].addEventListener("click", function() {
		    this.classList.toggle("active2");
		    var content_chant = this.nextElementSibling;
		    if (content_chant.style.display === "block") {
		      content_chant.style.display = "none";
		    } else {
		      content_chant.style.display = "block";
		    }
		  });
		}
</script>


	</body>
</html>

