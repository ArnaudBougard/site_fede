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

		<div class="header-container">
			<img src="../../assets/img/houdain9.jpg" alt="img">
			<div class="header-text">
				<h1>Bienvenue sur le site Fédé</h1>

				<?php 

        	if(isset($_SESSION['id_utilisateur'])){ // On ferme l'accolade à la fin du code

            	?>  <div class="header-text" style="margin-top: 5rem;"> 
            		<h1> <?php echo $_SESSION["pseudo_utilisateur"]; ?> </h1>
					</div>';

				<?php
             }

             ?>
			</div>
			<div class="header-btn-area">



			<?php 

        	if(isset($_SESSION['id_utilisateur'])){ // On ferme l'accolade à la fin du code

             }
                                 
        	else{

            	echo '<a class="header-btn" href="../users/connexion.php">Connexion</a>
            	<a class="header-btn" href="../users/inscription.php">Inscription</a>';
          	}

        	?>
	
			</div>	
		</div>	

		<?php include("../navbar.php"); ?>

		
		<div class="title-area">
			<h2 class="title">Événements à venir</h2> 
		  	<span class="title-line"></span> 
		</div>
		
		<!-- CAROUSSEL-->		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		   <!-- Indicators -->
			<ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		     	<li data-target="#myCarousel" data-slide-to="2"></li>
		   </ol>

		    <!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="../../assets/img/event1.jpg" alt="Bal">
			    </div>

			    <div class="item">
			    	<img src="../../assets/img/event2.jpg" alt="Crasino">
			    </div>
			    
			    <div class="item">
			        <img src="../../assets/img/event3.jpg" alt="Houdain">
			    </div>
			</div>

			    <!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			</a>
		</div>


		<?php include("../footer.php"); ?>

		<script>
			$('#nav ul li a').click( function(){
			    if ( $(this).hasClass('active') ) {
			        $(this).removeClass('active');
			    } else {
			        $('li a.active').removeClass('active');
			        $(this).addClass('active');    
			    }
			});
		</script>

	</body>


	

</html>

