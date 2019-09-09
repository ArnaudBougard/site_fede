<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>
	</head>

	<body>
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>

		<div class="container"> <!-- upload files -->
			<div class="container">			
				<div class="page-header">
					<h1>Upload PV de réunion </h1>
					<h2 >seul le comité fédé et la commission web voient l'outil d'upload</h2>
					<h2 >RESPECTE LE FORMAT (S'il te plaît) : <strong style="color:red;font-style: bold;">AA_MM_JJ</strong> pour le nom du fichier , exemple <strong style="color:red;font-style: bold;">19_02_21.pdf</strong> afin d'éviter les <strong style="color:red;font-style: bold;">DOUBLONS</strong> et qu'ils soient dans <strong style="color:red;font-style: bold;">l'ORDRE</strong>! </h2>
					<h2 >tu peux en upload plusieurs à la fois </h2>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="uploadpv.php">
							<div class="form-group">
								<label for="exampleInputFile">Select files to upload:</label>
								<input type="file" id="exampleInputFile" name="files[]" multiple="multiple">
								<p class="help-block"><span class="label label-info">Note:</span> Please, select pdf files</p>
							</div>			
							<button type="submit" class="btn btn-primary" name="btnSubmit" >Upload</button>
						</form>
						<br/>
						<label for="Progressbar">Progress:</label>
						<div class="progress" id="Progressbar">
							<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%" id="divProgressBar">
								<span class="sr-only">45% Complete</span>
							</div>						
						</div>
						<div id="status">
						</div>
					</div>
				</div>
			</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/jQuery.Form.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){			
				
				var divProgressBar=$("#divProgressBar");
				var status=$("#status");
				
				$("#uploadForm").ajaxForm({
					
					dataType:"json",
					
					beforeSend:function(){
						divProgressBar.css({});
						divProgressBar.width(0);
					},
					
					uploadProgress:function(event, position, total, percentComplete){
						var pVel=percentComplete+"%";
						divProgressBar.width(pVel);
					},
					
					complete:function(data){
						status.html(data.responseText);
					}
				});
			});
		</script>

		</div>

		<div class="container">			
			<div class="page-header">
				<h1>Procès verbaux </h1>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<br/>
					<?php 
						$conn = mysqli_connect("localhost","root","","bdd_site_fede");
						
						$query = "SELECT * FROM pv ORDER BY `pv_name` DESC";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								$url = $row["pv_path"]."/".$row["pv_name"];
					?>
								<li> <a href="<?php echo $url; ?>" target="_blank"> <?php echo $row["pv_name"]  ?> </a> </li>
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
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jQuery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>	


		<?php include("../footer.php"); ?>

	</body>
</html>

