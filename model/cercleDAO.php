<?php
function selectByName($bdd,$name) {
	$reponse= $bdd->prepare('SELECT * from cercle where nom_cercle=?');
	$reponse->execute(array($name));
	return $reponse->fetch();
	$reponse->closeCursor();
}

function selectFirstId($bdd){
	$reponse = $bdd->prepare('SELECT MIN(id_cercle) AS id_min FROM cercle');
	$reponse->execute();
	return $reponse->fetch();
	$reponse->closeCursor();
}

function selectLastId($bdd){
	$reponse = $bdd->prepare('SELECT MAX(id_cercle) AS id_max FROM cercle');
	$reponse->execute();
	return $reponse->fetch();
	$reponse->closeCursor();
}

function selectPromo($bdd){
	$query = $bdd->prepare("SELECT max(tmp_annee) from historique");
	$query->execute(array());
	$array = array();
	while($row = $query->fetch()){
	  $array[] = $row;
	}
	return $array;
	$query->closeCursor();
}

function selectLastComite($bdd,$nom_cercle,$annee){
	$query = $bdd->prepare("SELECT tmp_poste, tmp_firstname, tmp_lastname FROM historique where tmp_cercle=? AND tmp_annee=?");
	$query->execute(array($nom_cercle, $annee));
	$array = array();
	while($row = $query->fetch()){
	  $array[] = $row;
	}
	return $array;
	$query->closeCursor();
}