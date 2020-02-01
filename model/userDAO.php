<?php 
function lastPromo($bdd)
{ 
  $query = $bdd->query("SELECT max(tmp_annee) as max FROM historique ");
 
  $resultat = $query->fetch();
 
  $lastPromo=$resultat['max'];
  return $lastPromo;
  $query->closeCursor(); // Termine le traitement de la requête}

}

function lastID($bdd)
{ 
  $query = $bdd->query("SELECT max(id_utilisateur) as id FROM utilisateur ");
 
  $resultat = $query->fetch();
 
  $lastID=$resultat['id'];
  return $lastID;
  $query->closeCursor(); // Termine le traitement de la requête}

}

function is_comitard($bdd,$mail_user) {

  ////////////////////////////////////////////////stock data into array
  // run query
  $promo=lastPromo($bdd);
  $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=? and tmp_annee=? ");
  $query->execute(array($mail_user,$promo));
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

function is_mutu($bdd,$mail_user) {

  ////////////////////////////////////////////////stock data into array
  // run query
  $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=? and tmp_cercle='Mutuelle d'édition");
  $query->execute(array($mail_user));
  $exist = $query->rowCount();
  
  return $exist;

  $query->closeCursor(); // Termine le traitement de la requête
}

function is_MDC($bdd,$mail_user) {

  ////////////////////////////////////////////////stock data into array
  // run query
  $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=? and tmp_cercle='MDC'");
  $query->execute(array($mail_user));
  $exist = $query->rowCount();
  
  return $exist;

  $query->closeCursor(); // Termine le traitement de la requête
}

function is_barman($bdd,$mail_user) {

  ////////////////////////////////////////////////stock data into array
  // run query
  $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=? and tmp_cercle='Bar polytech'");
  $query->execute(array($mail_user));
  $exist = $query->rowCount();
  
  return $exist;

  $query->closeCursor(); // Termine le traitement de la requête
}

function is_FEDE($bdd,$mail_user) {
  ////////////////////////////////////////////////stock data into array
  // run query
  $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=? and tmp_cercle='Fédérale'");
  $query->execute(array($mail_user));
  $exist = $query->rowCount();
  
  return $exist;

  $query->closeCursor(); // Termine le traitement de la requête
}


?>