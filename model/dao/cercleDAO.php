<?php

	function selectById($bdd,$id) {

		// On récupère tout le contenu de la table chant
		$reponse= $bdd->prepare('SELECT * from cercle where id_cercle=?');
		$reponse->execute(array($id));

		// On recupere la ligne
		return $reponse->fetch();

		$reponse->closeCursor(); // Termine le traitement de la requête

	}

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

	function selectComites($bdd,$nom_cercle) {

		////////////////////////////////////////////////stock data into array
				// run query
				$query = $bdd->prepare("SELECT * FROM comite where nom_cercle=? ORDER BY promotion_comite DESC");
				$query->execute(array($nom_cercle));

				// set array
				$array = array();

				// look through query
				while($row = $query->fetch()){

				  // add each row returned into an array
				  $array[] = $row;
				 

				}
				return $array;
	}

	function selectHisto($bdd,$nom_cercle,$annee) {

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

	function nbrcomite($bdd,$nom_cercle) {

		////////////////////////////////////////////////stock data into array
				// run query
				$query = $bdd->prepare("SELECT distinct tmp_annee from historique where tmp_cercle='Boraine' ORDER BY tmp_annee DESC");
				$query->execute(array($nom_cercle));

				// set array
				$array = array();

				// look through query
				while($row = $query->fetch()){

				  // add each row returned into an array
				  $array[] = $row;
				 

				}
				return $array;
	}

	function selectComitards($bdd,$id_comite) {

		////////////////////////////////////////////////stock data into array
				// run query
				$query = $bdd->prepare("SELECT `nom_poste`, `nom_utilisateur`, election.id_utilisateur  FROM `election` join utilisateur ON election.id_utilisateur=utilisateur.id_utilisateur WHERE id_comite=? ORDER BY responsabilite_election DESC");
				$query->execute(array($id_comite));

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