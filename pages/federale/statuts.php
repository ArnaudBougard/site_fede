<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="./federale.css" rel="stylesheet">
	</head>

	<body>
		
		<?php 
		include("../network.php");
		include("../navbar.php"); 
		include("../sideBar.php");
		?>

		<?php 
        if(isset($_SESSION['id_utilisateur'])){

			$statut=is_FEDE($bdd,$_SESSION['email_utilisateur']);
			
	        if($statut!= NULL){

		        ?>
				<div class="container">

					<div class="container">

						<div class="page-header">

							<h3>Upload Statuts</h3>
							<p>Seuls le comité fédé et la commission web voient l'outil d'upload</p>
							<p>RESPECTE LE FORMAT (S'il te plaît) : <strong class="text-reduction">AA_MM_JJ.pdf</strong> pour le nom du fichier , exemple <strong class="text-reduction">19_02_21.pdf</strong> afin d'éviter les <strong class="text-reduction">DOUBLONS</strong> et qu'ils soient dans <strong class="text-reduction">l'ORDRE</strong>!</p>

						</div>

						<div class="panel panel-default">

							<div class="panel-body">

								<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="uploadstatuts.php">

									<div class="form-group">
										<label for="exampleInputFile">Select file to upload :</label>
										<input type="file" id="exampleInputFile" name="files[]" >
										<p class="help-block"><span class="label label-info">Note :</span> Please, select a pdf file</p>
									</div>

									<button type="submit" class="btn-form2" name="btnSubmit">Upload</button>

								</form>

								<br/>
								
							</div>

						</div>

					</div>

				</div>

			<?php 
			}
		}
		?>

		<div class="container">	

			<div class="page-header">
				<h1>Statuts de la fédérale</h1>
			</div>

			<div class="panel panel-default">

				<div class="panel-body">

					<br/>

					<?php 
					if(mysqli_num_rows($result)>0){

						while($row = mysqli_fetch_assoc($result)){

							$url = $row["statuts_path"]."/".$row["statuts_name"];
							?>
							<li><a href="<?= $url; ?>" target="_blank"><?= $row["statuts_name"] ?></a></li>
						<?php
						}

					}
					else{
					?>
					<p>Il n'y a pas de statuts enregistrés</p>
					<?php
					}
					?>

				</div>

			</div>

		</div>

		<div class="container">

			<div class="page-header">
				<h1>Historique des statuts </h1>
			</div>

			<div class="panel panel-default">

				<div class="panel-body">

					<br/>

					<?php 
					if(mysqli_num_rows($result2)>0){

						while($row = mysqli_fetch_assoc($result2)){

							$url = $row["statuts_path"]."/".$row["statuts_name"];
							?>
							<li><a href="<?= $url; ?>" target="_blank"><?= $row["statuts_name"] ?></a></li>
						<?php
						}

					}
					else{
					?>
					<p>Il n'y a pas de statuts enregistrés</p>
					<?php
					}
					?>

				</div>

			</div>

		</div>

		<?php include("../footer.php"); ?>

	</body>
	
</html>