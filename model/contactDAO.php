<?php
function get_Contacts($bdd,$cercle,$promo) {
	
	$req = $bdd -> prepare("SELECT tmp_mail FROM historique where tmp_cercle=? and tmp_annee=?");
    $req->execute(array($cercle,$promo));
	$array = array();

	while($row = $req->fetch()){
	  $array[] = $row;
	}

	return $array;
	$req->closeCursor();
}