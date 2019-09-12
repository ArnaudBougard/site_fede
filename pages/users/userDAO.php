<?php 

function is_comitard($bdd,$mail_user) {

  ////////////////////////////////////////////////stock data into array
  // run query
  $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=?");
  $query->execute(array($mail_user));
  $exist = $query->rowCount();
  
  return $exist;

  $query->closeCursor(); // Termine le traitement de la requête
}

function is_admin($bdd,$mail_user) {

  ////////////////////////////////////////////////stock data into array
  // run query
  $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=? and tmp_cercle='WEB'");
  $query->execute(array($mail_user));
  $exist = $query->rowCount();
  
  return $exist;

  $query->closeCursor(); // Termine le traitement de la requête
}


?>