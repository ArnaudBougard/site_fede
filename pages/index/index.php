<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include("../head.php"); ?>

		<link href="./index.css" rel="stylesheet">

	</head>

	<body id="body">
		<?php include("../network.php"); ?>


		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<!-- HEADER -->

		<div class="header-container">
			<img src="../../assets/img/GD4.bmp" alt="img">
			
			
			<div class="header-text">
				
				<?php 

        	if(isset($_SESSION['id_utilisateur'])){ // On ferme l'accolade à la fin du code

            	?>  <div class="header-text" style="margin-top: 24rem;"> 
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


		<!--
		<div class="title-area">
			<h2 class="title">Événements à venir</h2> 
		  	<span class="title-line"></span> 
		</div>
		-->
		
		<div >
			<!-- CAROUSSEL-->		
			<div id="myCarousel" style=" margin:0rem;" class="carousel slide col-sm-12" data-ride="carousel">
			   <!-- Indicators -->
				<ol class="carousel-indicators">
			    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    	<li data-target="#myCarousel" data-slide-to="1"></li>
			     	<li data-target="#myCarousel" data-slide-to="2"></li>
			   </ol>

			    <!-- Wrapper for slides -->
				<div class="carousel-inner" >
					<?php include("./eventDAO.php"); ?>
					<?php 

						$eventsCarArray=selectCarousselEvents($bdd);
						$count=0;
						if(!empty($eventsCarArray)) {
							
	        				foreach ($eventsCarArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur)) {
	        					if ($count==0){
	        						$count=1;
	        						?> 
			        					<div class="item active ">
									    	<img class="CarImg" src=<?php echo "'".$img."'" ?> >
									    </div>
									<?php 
								}

								else {
									?> 
			        					<div class="item ">
									    	<img class="CarImg" src=<?php echo "'".$img."'" ?> >
									    </div>
									<?php 


								}
	        					
							}
						}
						else{echo "pas d'events à afficher";}

					?>

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

			<div class="col-sm-8" >
	           
	        </div>

			<div class="col-sm-4">
	            <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FBrussels&amp;src=ZmV0ZXMucG9seXRlY2hAZ21haWwuY29t&amp;src=ZW4uYmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=1" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
	        </div>
	    </div>


		<?php include("../footer.php"); ?>
	</body>


	

</html>

