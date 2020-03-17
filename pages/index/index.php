<?php
session_start();
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
    	<?php include("../head.php"); ?>
    	<link href="./index.css" rel="stylesheet">
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

		<!--
		<div class="col-sm-4">
	        <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FBrussels&amp;src=ZmV0ZXMucG9seXRlY2hAZ21haWwuY29t&amp;src=ZW4uYmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=1" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
	    </div>
		-->

		<div class="row indexContent">

			<div class="row indexRow hidden-xs">

				<div class="col-xs-9 tileRow">

					<div class="col-xs-1 vertical">Evènements</div>

					<div class="col-xs-11 tileSubRow">
						<?php include("../events/futureEvents.php"); ?> 
						<!-- affiche 3 future events les plus proches dans le temps -->
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
						<!-- affiche 3 future events les plus proches dans le temps -->
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
						<!-- affiche 3 future events les plus proches dans le temps -->
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
					<!-- affiche 4 derniers events passés-->
					</div>

				</div>
			
				<div class="col-xs-3 tileRow">

					<div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="title-div"><h2 class="Tileh2">Tous les évènements</h2></div>

		                <div class="slide-front" data-cover="../../assets/img/news.jfif" >

		                	<div class="tileTitle">

					           <h2>Voir tous les évènements<h2>

					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tileContent">
			                    
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

		                	<div class="tileTitle">
					           <h2>Voir tous les événements<h2>
					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tileContent">
		                  		
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

		                	<div class="tileTitle">
					           <h2>Voir toutes les news<h2>
					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tileContent">

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

		                	<div class="tileTitle">
					           <h2>Voir toutes les news<h2>
					        </div>

		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif">

		                	<div class="tileContent">
			                    
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

		<?php 
		include("../footer.php");
		include("../../scripts/toggle.php");
		?>
		
	</footer>

</html>

