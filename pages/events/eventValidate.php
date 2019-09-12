<?php
include("../../model/connexionDAO.php"); 

echo $_GET['id'];
$req = $bdd -> prepare("UPDATE evenement set statut_evenement=? where id_evenement=? ");
$req->execute(array(1,$_GET['id']));

if($req){$msg="Event validé";}

else{"L'event n'a pas pu être validé";}
echo $msg;

$req->closeCursor(); // Termine le traitement de la requête

include("../../model/redirect.php"); 
redirect("./eventValidation.php");
?>