<div class="row">

	<div class="container">

		<div class="col-xs-12">

			<p>
				<?= $cercle['description_cercle']; ?>
				<br/>
				<br/>
			</p>

		</div>

	</div>

</div>

<div class="row">

	<div class="col-xs-12 col-sm-6 center">

		<img src="<?= $cercle['logo_cercle']; ?>">

	</div>

	<div class="col-xs-12 col-md-6">

		<ul class="unstyled center">	

			<?php
			foreach($comitardsArray as list($nom_poste,$firstname,$lastname)){
			?> 
				<li>
					<?= "$nom_poste: $firstname $lastname"; ?>
				</li>
			<?php
			} 
			?>

    	</ul>
			
	</div>

</div>