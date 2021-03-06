<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
		<link href="./mutu.css" rel="stylesheet">
	</head>

	<body id="body">

		<?php 
		include("../network.php");
		include("../navbar.php");
		include("../sideBar.php"); 
		?>

		<div class="container schedule-manager-container">
 
			<div class="panel panel-default">

				<div class="panel-body">

					<div class="col-sm-4">

						<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm">

							<div class="form-group">

								<p> 
									<label>Lundi</label>
									<input type="time" id="ld" name="ld"> 
									<input type="time" id="lf" name="lf">
								</p>

								<p> 
									<label>Mardi</label>
									<input type="time" id="mad" name="mad"> 
									<input type="time" id="maf" name="maf">
								</p>

								<p> 
									<label>Mercredi</label>
									<input type="time" id="med" name="med"> 
									<input type="time" id="mef" name="mef">
								</p>

								<p> 
									<label>Jeudi</label>
									<input type="time" id="jd" name="jd"> 
									<input type="time" id="jf" name="jf">
								</p>

								<p> 
									<label>Vendredi</label>
									<input type="time" id="vd" name="vd"> 
									<input type="time" id="vf" name="vf">
								</p>
								
								<p>
									<input type="submit" class="btn-form2 schedule-manager-submit" name="eventform" value="Update l'horaire" />
								</p>

							</div>	

						</form>

						<br/>
						
					</div>

					<div class="col-sm-8">
						<?php include("../../controller/mutu/displayScheduleController.php"); ?>
					</div>

				</div>

			</div>
			
			<?php include("../../controller/mutu/updateSchedule.php"); ?>
		
		</div>

	</body>

	<footer>
		<?php include("../footer.php"); ?>
	</footer>

</html>