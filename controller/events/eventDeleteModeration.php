<?php 
session_start();
include("../../model/connexionDAO.php"); 
$req = $bdd -> prepare('DELETE FROM evenement WHERE id_evenement = :id ');
$req -> execute(array('id' => $_GET['id']));
$path=$_GET['path'];
unlink($path);
include("../../model/redirect.php"); 
redirect("./eventValidation.php");