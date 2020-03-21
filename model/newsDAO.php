<?php
function selectMyNews($bdd,$auteur){

	$req = $bdd -> prepare("SELECT * FROM news where auteur=? and statut='1' ORDER BY `id` DESC");
    $req->execute(array($auteur));
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectLastNews3($bdd){

	$req = $bdd -> prepare("SELECT * FROM news where statut='1' ORDER BY `date_creation` DESC LIMIT 3");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectLastNews2($bdd){

	$req = $bdd -> prepare("SELECT * FROM news where statut='1' ORDER BY `date_creation` DESC LIMIT 2");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectMyPendingNews($bdd,$auteur){

	$req = $bdd -> prepare("SELECT * FROM news where auteur=? and statut='0' ORDER BY `id` DESC");
    $req->execute(array($auteur));
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectSomeNews3($bdd){

	$req = $bdd -> prepare("SELECT * FROM news where statut='1' ORDER BY `date_creation` DESC LIMIT 3 OFFSET 3");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectSomeNews2($bdd){


	$req = $bdd -> prepare("SELECT * FROM news where statut='1' ORDER BY `date_creation` DESC LIMIT 2 OFFSET 2");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectAllNews($bdd) {

	$req = $bdd -> prepare("SELECT * FROM news where statut='1' ORDER BY `date_creation` DESC");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectAllPendingNews($bdd) {

	$req = $bdd -> prepare("SELECT * FROM news where statut='0' ORDER BY `date_creation` DESC");
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}

function selectNewsById($bdd,$id) {

	$req = $bdd -> prepare("SELECT * FROM news where id=?");
    $req->execute(array($id));
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}