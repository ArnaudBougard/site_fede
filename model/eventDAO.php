<?php
function selectMyEvents($bdd,$organisateur) {

	$req = $bdd -> prepare("SELECT * FROM evenement where organisateur=? and statut_evenement='1' ORDER BY `id_evenement` DESC");
    $req->execute(array($organisateur));
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectMyPendingEvents($bdd,$organisateur) {

	$req = $bdd -> prepare("SELECT * FROM evenement where organisateur=? and statut_evenement='0' ORDER BY `id_evenement` DESC");
	$req->execute(array($organisateur));
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectFutureEvents($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where date_evenement >= CURDATE() and statut_evenement='1' ORDER BY `date_evenement` ASC");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}


function selectPastEvents($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where date_evenement <= CURDATE() and statut_evenement='1' ORDER BY `date_evenement` DESC");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}
	
	return $array;
	$req->closeCursor();
}

function selectSomePastEvents3($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where date_evenement <= CURDATE() and statut_evenement='1' ORDER BY `date_evenement` DESC LIMIT 3");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectSomePastEvents2($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where date_evenement <= CURDATE() and statut_evenement='1' ORDER BY `date_evenement` DESC LIMIT 2");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectSomeFutureEvents3($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where date_evenement >= CURDATE() and statut_evenement='1' ORDER BY `date_evenement` ASC LIMIT 3");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectSomeFutureEvents2($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where date_evenement >= CURDATE() and statut_evenement='1' ORDER BY `date_evenement` ASC LIMIT 2");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectAllValidatedEvents($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where statut_evenement='1' ORDER BY `date_evenement` DESC");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}


function selectAllPendingEvents($bdd) {

	$req = $bdd -> prepare("SELECT * FROM evenement where statut_evenement='0' ORDER BY `date_evenement` DESC");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectEventById($bdd,$id) {

	$req = $bdd -> prepare("SELECT * FROM evenement where id_evenement=?");
    $req->execute(array($id));
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}