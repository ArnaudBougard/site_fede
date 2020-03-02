<?php session_start();

include("../../model/connexionDAO.php"); 
$req = $bdd -> prepare('DELETE FROM action WHERE id = :id ');
$req -> execute(array('id' => $_GET['id']));
$path=$_GET['path'];
echo $path;
if($path!="../../assets/img/actions/default.jpg")
{
	unlink($path);
}
include("../../model/redirect.php"); 
redirect("./actionManager.php");

?>