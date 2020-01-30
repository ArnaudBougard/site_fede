<?php


function selectLastAction($bdd) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM action where statut='1' ORDER BY `id` DESC LIMIT 1");
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

function selectMyPendingactions($bdd,$auteur) {

		////////////////////////////////////////////////stock data into array
				// run query
				$req = $bdd -> prepare("SELECT * FROM action where statut='0' ORDER BY `id` DESC");
		        $req->execute(array($auteur));

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



function selectAllActions($bdd) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM action where statut='1' ORDER BY `date_action` DESC");
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


function selectAllPendingActions($bdd) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM action where statut='0' ORDER BY `date_action` DESC");
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

function selectActionById($bdd,$id) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM action where id=?");
	        $req->execute(array($id));

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