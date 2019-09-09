
	<div class="container">
		<?php
		$cercle=selectByName($bdd,$name);

		?>

		<div class=" col-md-9" >

			<p>
				<?php echo $cercle['description_cercle']; ?> <br>
				<br> 

				<div align="center">
					<img class= "center" src="<?php echo $cercle['logo_cercle'] ?> ">
				</div>

			</p>

		</div>

		<div class = "col-md-3" >

			<ul >	Comité actuel

			<?php

				$annee= 181;

				$comitardsArray=selectLastComite($bdd,$name,$annee);
				foreach ($comitardsArray as list($nom_poste,$firstname,$lastname)) {

					?> 
					<li >
						
						<?php echo " $nom_poste: $firstname $lastname";?>
						
					</li>

					<?php

				} ?>
	    	</ul>
		</div>	
	</div>	