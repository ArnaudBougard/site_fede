
	<div class="row">
		<?php
		$cercle=selectByName($bdd,$name);

		?>
		<div class="container">
			<div class=" col-xs-12" >

				<p>
					<?php echo $cercle['description_cercle']; ?> <br>
					<br/> 
				</p>

			</div>
		</div>
	</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 center">
				<img src="<?php echo $cercle['logo_cercle']; ?> ">

			</div>

			<div class="col-xs-12 col-md-6" >

				<ul class="unstyled center" >	

				<?php

					$annee= lastPromo($bdd);

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