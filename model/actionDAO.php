<?php
function selectLastAction($bdd){
	$req = $bdd -> prepare("SELECT * FROM action where statut='1' ORDER BY `id` DESC LIMIT 1");
    $req->execute(array());
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}

function selectMyPendingactions($bdd,$auteur){
	$req = $bdd -> prepare("SELECT * FROM action where statut='0' ORDER BY `id` DESC");
    $req->execute(array($auteur));
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}

function selectAllActions($bdd){
	$req = $bdd -> prepare("SELECT * FROM action where statut='1' ORDER BY `date_action` DESC");
    $req->execute(array());
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}

function selectAllPendingActions($bdd){
	$req = $bdd -> prepare("SELECT * FROM action where statut='0' ORDER BY `date_action` DESC");
    $req->execute(array());
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}

function selectActionById($bdd,$id){
	$req = $bdd -> prepare("SELECT * FROM action where id=?");
    $req->execute(array($id));
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}