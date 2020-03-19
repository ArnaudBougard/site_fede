<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
    	<?php include("../head.php"); ?>
    	<link href="./index.css" rel="stylesheet">
    	<link href="./metro4.css" rel="stylesheet">
	</head>

	<body id="body">

		<?php 
		include("../../model/eventDAO.php");
		include("../../model/newsDAO.php");
		include("../../model/actionDAO.php");
		include("../network.php");
		include("./header.php");
		include("../navbar.php"); 
		include("../sideBar.php");
		?>

		<div class="row index-content">

			<div class="row indexRow hidden-xs">

				<div class="col-xs-9 tileRow">

					<div class="col-xs-1 vertical">Evènements</div>

					<div class="col-xs-11 tileSubRow">
						<?php include("../events/futureEvents.php"); ?> 
					</div>
					
				</div>
			
				<div class="col-xs-3 tileRow"> 
					<?php include("../action/displayAction.php"); ?> 
				</div>

			</div>

			<div class="row indexRow hidden-sm hidden-md hidden-lg hidden-xl">

				<div class="col-xs-8 tileRow">

					<div class="col-xs-1 vertical">Evènements</div>
					
					<div class="col-xs-11 tileSubRow hidden-sm hidden-md hidden-lg hidden-xl">
						<?php include("../events/futureEvents2.php"); ?> 
					</div>
	
				</div>
			
				<div class="col-xs-4 tileRow"> 
					<?php include("../action/displayAction.php"); ?> 
				</div>

			</div>

			<div class="row indexRow hidden-xs ">
				
				<div class="col-xs-9 tileRow">

					<div class="col-xs-1 vertical">Actualités</div>

					<div class="col-xs-11 tileSubRow hidden-xs">
						
						<?php include("../news/recentNews.php"); ?>

					</div>

				</div>
			
				<div class="col-xs-3 tileRow"> 
		            <?php include("../mutu/displayHoraire.php"); ?>
				</div>

			</div>

			<div class="row indexRow hidden-sm hidden-md hidden-lg hidden-xl">

				<div class="col-xs-8 tileRow"> 

					<div class="col-xs-1 vertical">Actualités</div>
					
					<div class="col-xs-11 tileSubRow hidden-sm hidden-md hidden-lg hidden-xl">
						<?php include("../news/recentNews2.php"); ?>
					</div>
					
				</div>
			
				<div class="col-xs-4 tileRow"> 
		            <?php include("../mutu/displayHoraire.php"); ?>
				</div>

			</div>

			<div class="row indexRow">
				<div class="title-div">
					
				</div>
			</div>

			<div class="row indexRow hidden-xs">

				<div class="col-xs-9 tileRow">

					<div class="col-xs-1 vertical">Old Events</div>

					<div class="col-xs-11 tileSubRow hidden-xs">
						<?php include("../events/pastEvents.php"); ?>  
					</div>

				</div>
			
				<div class="col-xs-3 tileRow">

					<div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="title-div"><h2 class="Tileh2">Tous les évènements</h2></div>

		                <div class="slide-front" data-cover="../../assets/img/news.jfif" >

		                	<div class="tile-title">
					           <h2>Voir tous les évènements<h2>
					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tile-content">
			                    
			                    <p class="tile-text">
			                      <button class="btn-form2"><a href="../events/eventArchive.php" class="gras btn btn-xl">Tous les événements</a></button>
			                    </p>
			                 
			                </div>
			              
			            </div>

					</div>

				</div>

			</div>

			<div class="row indexRow hidden-sm hidden-md hidden-lg hidden-xl">

				<div class="col-xs-8 tileRow">

					<div class="col-xs-1 vertical">Old Events</div>
					
					<div class="col-xs-11 tileSubRow hidden-sm hidden-md hidden-lg hidden-xl">
						<?php include("../events/pastEvents2.php"); ?>  
					</div>

				</div>
			
				<div class="col-xs-4 tileRow"> 
					<div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="title-div"><h2 class="Tileh2">Tous les événements</h2></div>

		                <div class="slide-front" data-cover="../../assets/img/news.jfif">

		                	<div class="tile-title">
					           <h2>Voir tous les événements<h2>
					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tile-content">
		                  		
			                    <p class="tile-text">
			                      <button class="btn-form2"><a href="../events/eventArchive.php" class="gras btn btn-xl">Tous les événements</a></button>
			                    </p>
			                 
			                </div>
			              
			            </div>

					</div>

				</div>

			</div>

			<div class="row indexRow hidden-xs">

				<div class="col-xs-9 tileRow"> 
					
					<div class="col-xs-1 vertical">Old News</div> 

					<div class="col-xs-11 tileSubRow hidden-xs">
						<?php include("../news/pastnews.php"); ?>  
					</div>
					
				</div>
			
				<div class="col-xs-3 tileRow">

					<div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="title-div"><h2 class="Tileh2">Toutes les news</h2></div>

		                <div class="slide-front" data-cover="../../assets/img/news.jfif">

		                	<div class="tile-title">
					           <h2>Voir toutes les news<h2>
					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tile-content">

			                    <p class="tile-text">
			                      <button class="btn-form2"><a href="../news/newsArchive.php" class="gras btn btn-xl">Toutes les news</a></button>
			                    </p>

			                </div>

		                </div>
		              
		            </div>  

				</div>
			</div>

			<div class="row indexRow hidden-sm hidden-md hidden-lg hidden-xl">

				<div class="col-xs-8 tileRow"> 
					
					<div class="col-xs-1 vertical">Old News</div>
					
					<div class="col-xs-11 tileSubRow hidden-sm hidden-md hidden-lg hidden-xl">
						<?php include("../news/pastnews2.php"); ?>  
					</div>

				</div>
			
				<div class="col-xs-4 tileRow"> 

					<div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="title-div">
		                	<h2 class="Tileh2">Toutes les news</h2>
		                </div>

		                <div class="slide-front" data-cover="../../assets/img/news.jfif">

		                	<div class="tile-title">
					           <h2>Voir toutes les news<h2>
					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tile-content">
			                    
			                    <p class="tile-text">
			                      <button class="btn-form2"><a href="../news/newsArchive.php" class="gras btn btn-xl">Toutes les news</a></button>
			                    </p>

			                </div>

		                </div>
		              
		            </div>  

				</div>

			</div>

		</div>
	    
	</body>

	<footer class="page-footer">
		<?php include("../footer.php"); ?>
	</footer>

</html>

