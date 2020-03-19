<?php
session_start();
include("../../model/connexionDAO.php");
include("../../controller/getConnexionData.php"); 
?>

<!DOCTYPE html>
<html>

    <head>
        <?php include("../head.php"); ?>    
    </head>

    <body>

        <?php 
        include("../network.php");
        include("../navbar.php");
        include("../sideBar.php"); 
        ?>

        <?php
            $id=$_GET['id'];
            echo $id;
            $req = $bdd -> prepare('UPDATE utilisateur SET statut_utilisateur = ? WHERE id_utilisateur = ?' );
                                                            
            $pass=$req->execute(array(1,$id));
            $req->closeCursor();

            if($pass){
                echo "GG, vous êtes inscrit!";
            }
       
        include("../footer.php");
        ?>

    </body>

</html>