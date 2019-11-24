<?php session_start();
    include("../../model/connexionDAO.php"); 
    $req = $bdd -> prepare('DELETE FROM news WHERE id = :id ');
    $req -> execute(array('id' => $_GET['id']));
    $path=$_GET['path'];
    echo $path;
    if($path!="../../assets/img/news/default.jpg")
    {
    	unlink($path);
    }
    include("../../model/redirect.php"); 
    redirect("./newsManager.php");

    ?>