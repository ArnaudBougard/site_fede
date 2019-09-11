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

    <div class = container style="padding-top: 3rem">
        <div class = row>
            <div class = "col-md-7">

                <div class="col-md-10 hidden-xs" style="padding-top: 6rem;">

                    <img class="logo" src='../../assets/img/logoFede.png' style="width:70%;display: block; margin: 0 auto;" alt='Logo du site !'/>

                </div>
                
            </div>

            <div class = 'col-md-5 inscription'>
                
            <h2 class="connexionh2">Validez votre inscription</h2>

            <p class="connexionp">Un mail de confirmation vous a été envoyé, veuillez cliquer sur le lien qu'il contient pour valider votre inscription!</p> <br />

            </div>
        </div>
    </div>

    <?php include("../footer.php"); ?>

    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>