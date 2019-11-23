
	<div class="row">
		<?php
		$cercle=selectByName($bdd,$name);

		?>
		<div class="container">
			<div class=" col-md-12" >

				<p>
					<?php echo $cercle['description_cercle']; ?> <br>
					<br/> 
				</p>

			</div>
		</div>
	</div>

		<div class="row">
			<div class="col-md-7"></div>
			<div class="col-md-5">
				<div class="container">

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
		</div>