<?php
include("../../model/connexionDAO.php"); 
echo $_GET['id'];
$req = $bdd -> prepare("UPDATE action set statut=? where id=? ");
$req->execute(array(1,$_GET['id']));
if($req){$msg="Action validée";}
else{"L'action n'a pas pu être validée";}
echo $msg;
$req->closeCursor();
include("../../model/redirect.php"); 
redirect("./actionValidation.php");