<?php
function getPv($bdd){
	$req = $bdd -> prepare("SELECT * FROM pv ORDER BY `pv_name` DESC");
    $req->execute(array());
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}

function getStatuts($bdd){
	$req = $bdd -> prepare("SELECT * FROM statuts ORDER BY `statuts_name` DESC LIMIT 1");
    $req->execute(array());
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}

function getStatuts2($bdd){
	$req = $bdd -> prepare("SELECT * FROM statuts ORDER BY `statuts_name` DESC LIMIT 50 OFFSET 1");
    $req->execute(array());
	$array = array();
	while($row = $req->fetch()){
	  $array[] = $row;
	}
	return $array;
	$req->closeCursor();
}