<?php

function selectChants($bdd) {

		////////////////////////////////////////////////stock data into array
				// run query
				$req = $bdd -> prepare('SELECT * FROM chant ORDER BY nom_chant');
		        $req->execute(array());

				// set array
				$array = array();

				// look through query
				while($row = $req->fetch()){

				  // add each row returned into an array
				  $array[] = $row;
				 

				}
				return $array;
				$req->closeCursor(); // Termine le traitement de la requête
	}
?>