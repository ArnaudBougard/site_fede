
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
			<div class="col-md-3 col-md-offset-2">
				<img src="<?php echo $cercle['logo_cercle']; ?> ">

			</div>

			<div class="col-md-1"></div>
			<div class="col-md-3">
				<div class="container">

					<ul >	

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