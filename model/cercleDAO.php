<?php

	function selectByName($bdd,$name) {

		// On récupère tout le contenu de la table chant
		$reponse= $bdd->prepare('SELECT * from cercle where nom_cercle=?');
		$reponse->execute(array($name));

		// On recupere la ligne
		return $reponse->fetch();

		$reponse->closeCursor(); // Termine le traitement de la requête

	}

	function selectFirstId($bdd){

		$reponse = $bdd->prepare('SELECT MIN(id_cercle) AS id_min FROM cercle');
		$reponse->execute();
		
		return $reponse->fetch();

		$reponse->closeCursor(); // Termine le traitement de la requête

	}

	function selectLastId($bdd){

		$reponse = $bdd->prepare('SELECT MAX(id_cercle) AS id_max FROM cercle');
		$reponse->execute();
		
		return $reponse->fetch();

		$reponse->closeCursor(); // Termine le traitement de la requête
	}

	
	function selectPromo($bdd) {

		////////////////////////////////////////////////stock data into array
				// run query
				$query = $bdd->prepare("SELECT max(tmp_annee) from historique");
				$query->execute(array());
				
				// set array
				$array = array();

				// look through query
				while($row = $query->fetch()){

				  // add each row returned into an array
				  $array[] = $row;

				}
				return $array;

				$query->closeCursor(); // Termine le traitement de la requête
	}

	function selectLastComite($bdd,$nom_cercle,$annee) {

		////////////////////////////////////////////////stock data into array
				// run query
				$query = $bdd->prepare("SELECT tmp_poste, tmp_firstname, tmp_lastname FROM historique where tmp_cercle=? AND tmp_annee=?");
				$query->execute(array($nom_cercle, $annee));

				// set array
				$array = array();

				// look through query
				while($row = $query->fetch()){

				  // add each row returned into an array
				  $array[] = $row;
				 

				}
				return $array;
	}
?>