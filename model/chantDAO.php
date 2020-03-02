<?php
function selectChants($bdd) {

	$req = $bdd -> prepare('SELECT * FROM chant ORDER BY nom_chant');
    $req->execute(array());
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}
	
	return $array;
	$req->closeCursor();
}