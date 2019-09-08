<?php
session_start();
?>

<?php include("../../model/dao/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Site Fédé</title>

		 <!--ICONE FAV, A AJOUTER-->
		<link rel="shortcut icon" type="image/icon" href="#"/>

		<!-- MAIN STYLE -->
		<link href="../style.css" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script language="javascript" type="text/javascript" src="assets/js/functions.js"></script>

		<link rel="shortcut icon" type="image/png" href="../../assets/img/favicon/favico.png"/>


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
					<h2 >tout comitard peut créer un evenement mais celle ci doit etre validee par la com web (mail de confirmation, lien vers page de conffirmation etc))</h2>
					<h2 >attention img obligatoire de 300x200 minimmum et correcte. pas de montage/collage degueulasse sinon ce sera refusé </h2>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" name="formUploadFile" id="uploadForm" action="uploadimg.php">
							<div class="form-group">
								<label for="exampleInputFile">Selectionnez une image pour l evenement qui defilera sur l accuueil:</label>
								<input type="file" id="exampleInputFile" name="files[]" >
								<p class="help-block"><span class="label label-info">Note:</span> Please, select png jpg or jpeg files</p>

								<p> 
									<label>Nom de l'evenement</label><br>
									<input class='champ' type='text' id='pseuod_utilisateur' name='pseudo_utilisateur' placeholder='PSEUDO' maxlength='25' size='50'  required />
								</p>

								<p> 
									<label>Pseudo : </label><br>
									<input class='champ' type='text' id='pseudo_utilisateur' name='pseudo_utilisateur' placeholder='PSEUDO' maxlength='25' size='50'  required />
								</p>

								<p> 
									<label>Pseudo : </label><br>
									<input class='champ' type='text' id='pseudo_utilisateur' name='pseudo_utilisateur' placeholder='PSEUDO' maxlength='25' size='50'  required />
								</p>
							</div>	
	
							<button type="submit" class="btn btn-primary" name="btnSubmit" >Submit</button>
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
						
						$query = "SELECT * FROM evenement ORDER BY `nom_evenement` DESC";
						
						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_assoc($result))
							{
								
					?>
								<li> <img style="height:98%; width: 97%;" src=<?php echo "'".$row["img_evenement"]."'" ?>>  </li>
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

