<?php session_start();
    include("../../model/connexionDAO.php"); 
    $req = $bdd -> prepare('DELETE FROM evenement WHERE id_evenement = :id ');
    $req -> execute(array('id' => $_GET['id']));
    include("../../model/redirect.php"); 
    redirect("./eventManager.php");

    ?>