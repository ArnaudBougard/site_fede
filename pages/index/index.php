<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		 
    	<?php include("../head.php"); ?>
    	<link href="./index.css" rel="stylesheet">	

	</head>

	<body id="body">
		<?php include("../../model/eventDAO.php"); ?>
		<?php include("../../model/newsDAO.php"); ?>
		<?php include("../../model/actionDAO.php"); ?>
		
		<?php include("../network.php"); ?>

		<?php include("./header.php"); ?>

		<?php include("../navbar.php"); ?>

		<!--
		<div class="col-sm-4">
	        <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Europe%2FBrussels&amp;src=ZmV0ZXMucG9seXRlY2hAZ21haWwuY29t&amp;src=ZW4uYmUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;showDate=1" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
	    </div>
		-->

		<div class="row indexContent">

			<div class="row indexRow">
				<div class="title-div">
					<!-- <h2 class="h2index">Bientôt dans vos librairies</h2> -->
				</div>
				<div class="col-sm-9 tileRow"> 
					<div class="col-sm-1 vertical "> Events</div>
					<div class="col-sm-11 tileRow">
						<?php include("../events/futureEvents.php"); ?> 
						<!-- affiche 3 future events les plus proches dans le temps -->
					</div>
					

					

				</div>
			
				<div class="col-sm-3"> 
					<?php include("../action/displayAction.php"); ?> 
				</div>

			</div>

			<div class="row indexRow">
				<div class="title-div">
					<!-- <h2 class="h2index">Bientôt dans vos librairies</h2> -->
				</div>
				<div class="col-sm-9 tileRow"> 
					<div class="col-sm-1 vertical "> Actualités</div>
					<div class="col-sm-11 tileRow">
						
						<?php include("../news/recentNews.php"); ?>
						<!-- affiche 3 dernières news publiées -->
					</div>
					

					

				</div>
			
				<div class="col-sm-3"> 
					
		            <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="slide-front" data-cover="../../assets/img/print." >
		                	<div class="tileTitle">
					           <h2 style="text-align: center; font-size: 3.4vh;"> Horaire Mutu <h2>
					        </div>
		                </div>

		                <div class="slide-back" data-cover="../../assets/img/print.png"  style="background-color: #f8f5ef;">  
		                	<div class="tileContent">
			                  <div style="padding-top: 9vh">
			                    
			                   <ul>
				                   	<li> Lundi: 13h à 16h</li>
				                   	<li> Mardi: 13h à 16h</li>
				                   	<li> Mercredi: 13h à 16h</li>
				                   	<li> Jeudi: 13h à 16h</li>
				                   	<li> Vendredi: 13h à 16h</li>
				                   	<span style="font-size: 2vh;"> * Sous réserve de modification </span>

			                   </ul>
			                  </div>
			                  
			                </div>
		                </div>
		              
		            </div>  

		            

				</div>
			</div>

			<div class="row indexRow">
				<div class="title-div" style="padding:1vh;">
					
				</div>
			</div>

			<div class="row indexRow">

				

				<div class="col-sm-9 tileRow"> 
					<div class="col-sm-1 vertical "> Old Events</div>
					<div class="col-sm-11 tileRow">
						<?php include("../events/pastEvents.php"); ?>  
					<!-- affiche 4 derniers events passés-->
					</div>
				</div>
			
				<div class="col-sm-3"> 
					<div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="title-div"><h2 class="Tileh2"> Tous les événements!</h2></div>
		                <div class="slide-front" data-cover="../../assets/img/news.jfif" >
		                	<div class="tileTitle">
					           <h2 style="text-align: center; font-size: 3.4vh;"> Voir tous les événements<h2>
					        </div>
		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif"  style="background-color: #f8f5ef;" >  
		                	<div class="tileContent">
			                  <div style="padding-top: 16vh">
			                    
			                    <p class="tile-text">
			                      <btn class="btn-form2"> <a href="../events/eventArchive.php " class="gras btn btn-xl">Tous les événements!</a> </btn>
			                    </p>
			                  </div>
			                 
			                </div>
			              
			            </div>  
					</div>
				</div>
			</div>
			<div class="row indexRow">	
				<div class="col-sm-9 tileRow"> 
					
					<div class="col-sm-1 vertical "> Old News</div>
					<div class="col-sm-11 tileRow">
						<<?php include("../news/pastNews.php"); ?>  
					<!-- affiche 4 dernieres news suivantes-->
					</div>
				</div>
			
				<div class="col-sm-3"> 

					<div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
		               
		                <div class="title-div"><h2 class="Tileh2"> Toutes les news!</h2></div>
		                <div class="slide-front" data-cover="../../assets/img/news.jfif" >
		                	<div class="tileTitle">
					           <h2 style="text-align: center; font-size: 3.4vh;"> Voir toutes les news<h2>
					        </div>
		                </div>

		                <div class="slide-back" data-cover="../../assets/img/news.jfif"  style="background-color: #f8f5ef;">  
		                	<div class="tileContent">
			                  
			                  <div style="padding-top: 16vh">
			                    
			                    <p class="tile-text">
			                      <btn class="btn-form2"> <a href="../news/newsArchive.php " class="gras btn btn-xl">Toutes les news!</a> </btn>
			                    </p>
			                  </div>
			                </div>
		                </div>
		              
		            </div>  

				</div>
			</div>

		</div>

	   

		<?php include("../footer.php"); ?>


		<!-- jQuery first, then Metro UI JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
	</body>





	

</html>

