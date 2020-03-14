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

        <?php include("../network.php"); ?>
        <?php include("../navbar.php");
        include("../sideBar.php"); ?>


        <?php
            $id=$_GET['id'];
            echo $id;
            $req = $bdd -> prepare('UPDATE utilisateur SET statut_utilisateur = ? WHERE id_utilisateur = ?' );
                                                            
            $pass=$req->execute(array(1,$id));
            $req->closeCursor(); // Termine le traitement de la requête

            if($pass){
                echo "GG, vous êtes inscrit!";
            }

       

        ?>

        <?php 
        include("../footer.php");
        include("../../scripts/toggle.php"); 
        ?>

    </body>

</html>