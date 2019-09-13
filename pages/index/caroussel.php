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
			
			<?php 

				$eventsCarArray=selectCarousselEvents($bdd);
				$count=0;
				if(!empty($eventsCarArray)) {
					
    				foreach ($eventsCarArray as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu)) {
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


	
</div>