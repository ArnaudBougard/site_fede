<?php
session_start();
?>

<?php include("../../model/dao/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

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

		<div class="container"> <!-- upload files -->
			<div class="container">			
				<div class="page-header">
					<h1>Créer un événement</h1>
					<h2 >Tout membre d'un comité peut créer un evenement mais celui-ci doit être validé par la com web (mail de confirmation, lien vers page de confirmation etc))</h2>
					<h2 >attention img obligatoire de 300x200 minimmum et de qualité correcte. Pas de montage/collage dégueulasse sinon ce sera refusé </h2>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm">
							<div class="form-group">
								<label for="exampleInputFile">Selectionnez une image pour l'événement qui défilera sur la page d'accueil:</label>
								<input type="file" id="exampleInputFile" name="files[]" >
								<p class="help-block"><span class="label label-info">Note:</span> Please, select png jpg or jpeg files</p>

								<p> 
									<label>Nom</label><br>
									<input class='champ' type='text' id='nom' name='nom' placeholder='Soirée Mousse' maxlength='25' size='30'  required />
								</p>

								<p> 
									<label>Description </label><br>
									<input class='champ' type='text' id='description' name='description' placeholder='si nécessaire' maxlength='50' size='60'  required />
								</p>

								<p>
		                            <label>Date </label> <br>
		                            <input class='champ' type='date' id='date' name='date' maxlength='25' size='45' required />
	                        	</p>
	                        	<p>
									<label>Evénement ouvert à tous?</label> <br>
									<input type="radio" id='ouverture' name='ouverture' value='1' id='oui' /><label for='1'> Oui </label>
									<input type="radio" id='ouverture' name='ouverture' value='0' id='non' /><label for='0'> Non </label>
							
									<span style="font-size: 1rem"> * oui par défaut</span>
								</p>
								<p>
									<input style="margin-left: 0rem;" type='submit' class='btn-form' name='eventform' value="Submit" />
								</p>
							</div>	
	
						</form>
						<br/>
						
						
					</div>
				</div>
			</div>

		</div>


		<?php include("uploadimg.php"); ?>


		<div class="container">			
			<div class="page-header">
				<h1>Tous les événements </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","bdd_site_fede");
						
						$query = "SELECT * FROM evenement ORDER BY `nom_evenement` DESC";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($event = mysqli_fetch_assoc($result))
							{
								
								?>	
								<div >
									<p>
			                        Nom : <?php echo $event["nom_evenement"]; ?>
			                        <br /> <br />
			                        Description : <?php echo $event["description_evenement"]; ?>
			                        <br /> <br />
			                        Date : <?php echo $event["date_evenement"]; ?>
			                        <br /> <br />
									 <img style="height:98%; width: 97%;" src=<?php echo "'".$event["img_evenement"]."'" ?>> 
									</p>
								</div>
								<?php
							}
						}
						else
						{
					?>
						<p>Il n'y a pas de PV enregistré</p>
					<?php
						}
					?>					
				</div>
			</div>
		</div>


		<?php include("../footer.php"); ?>


	</body>


	

</html>

