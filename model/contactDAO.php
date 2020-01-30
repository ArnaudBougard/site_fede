<?php



function get_Contacts($bdd,$cercle,$promo) {

	////////////////////////////////////////////////stock data into array
			// run query
			$req = $bdd -> prepare("SELECT tmp_mail FROM historique where tmp_cercle=? and tmp_annee=?");
	        $req->execute(array($cercle,$promo));

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