<?php

function selectMyEvents($bdd,$organisateur) {

		////////////////////////////////////////////////stock data into array
				// run query
				$req = $bdd -> prepare("SELECT * FROM evenement where organisateur=? ORDER BY `nom_evenement` DESC");
		        $req->execute(array($organisateur));

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