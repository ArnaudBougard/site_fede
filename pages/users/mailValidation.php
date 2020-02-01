<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html>
<head>
<?php include("../head.php"); ?>
     
</head>
<body>

    <?php include("../network.php"); ?>
    <?php include("../navbar.php"); ?>


    <?php
        $id=$_GET['id'];
        echo $id;
        $req = $bdd -> prepare('UPDATE utilisateur SET statut_utilisateur = ? WHERE id_utilisateur = ?' );
                                                        
        $pass=$req->execute(array(1,$id));
        $req->closeCursor(); // Termine le traitement de la requête

        if($pass){
            echo "GG, vous êtes inscrit!";
            sleep(3);
            redirect("../index/index.php");
        }

   

    ?>

    <?php include("../footer.php"); ?>

    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>