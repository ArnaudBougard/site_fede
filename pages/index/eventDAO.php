<?php

function selectMyEvents($bdd,$organisateur) {

		////////////////////////////////////////////////stock data into array
				// run query
				$req = $bdd -> prepare("SELECT * FROM evenement where organisateur=? ORDER BY `id_evenement` DESC");
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


function selectCarousselEvents($bdd) {

		////////////////////////////////////////////////stock data into array
				// run query
	
				$req = $bdd -> prepare("SELECT * FROM evenement ORDER BY `id_evenement` DESC LIMIT 3");
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

function selectFutureEvents($bdd) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM evenement where date_evenement >= CURDATE() ORDER BY `date_evenement` ASC");
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