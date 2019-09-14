
	<div class="container">
		<?php
		$cercle=selectByName($bdd,$name);

		?>

		<div class=" col-md-12" >

			<p>
				<?php echo $cercle['description_cercle']; ?> <br>
				<br/> 
			</p>

		</div>

		<div>

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