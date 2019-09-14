<?php
include("../../model/connexionDAO.php"); 

echo $_GET['id'];
$req = $bdd -> prepare("UPDATE news set statut_news=? where id_news=? ");
$req->execute(array(1,$_GET['id']));

if($req){$msg="News validée";}

else{"La news n'a pas pu être validée";}
echo $msg;

$req->closeCursor(); // Termine le traitement de la requête

include("../../model/redirect.php"); 
redirect("./newsValidation.php");
?>