<?php
	session_start();
	include("../../model/connexionDAO.php"); 
	$req = $bdd -> prepare('DELETE FROM utilisateur WHERE id_utilisateur = :id ');
    $req -> execute(array('id' => $_SESSION['id_utilisateur']));
    include("./deconnexion.php"); 
    include("../../model/redirect.php"); 
    redirect("../index/index.php");