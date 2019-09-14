<?php

function selectMyNews($bdd,$auteur) {

		////////////////////////////////////////////////stock data into array
				// run query
				$req = $bdd -> prepare("SELECT * FROM news where auteur=? and statut_news='1' ORDER BY `id_news` DESC");
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

function selectMyPendingNews($bdd,$auteur) {

		////////////////////////////////////////////////stock data into array
				// run query
				$req = $bdd -> prepare("SELECT * FROM news where auteur=? and statut_news='0' ORDER BY `id_news` DESC");
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


function selectSomeNews($bdd) {


	$req = $bdd -> prepare("SELECT * FROM news where statut_news='1' ORDER BY `date_creation` DESC LIMIT 5");
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

function selectAllNews($bdd) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM news where statut_news='1' ORDER BY `date_creation` DESC");
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


function selectAllPendingNews($bdd) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM news where statut_news='0' ORDER BY `date_creation` DESC");
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

function selectNewsById($bdd,$id) {

	////////////////////////////////////////////////stock data into array
			// run query

			$req = $bdd -> prepare("SELECT * FROM news where id_news=?");
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