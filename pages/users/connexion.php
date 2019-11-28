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
                
            <h2 class="connexionh2">Connexion</h2>

            <p class="connexionp">Accédez à votre compte</p> <br />

            <form class='connexionformulaire' method='post' action=''>    

            <p>
                <label>Pseudo : </label><br>
                <input class='connexionchamp' type='text' id='pseudoco'  name='pseudoco' placeholder='Pseudo' maxlength='25' size='45' required />
            </p>

            <p>
                <label>Mot de passe : </label><br>
                <input class='connexionchamp' type='password' id='passco' name='passco' placeholder='Mot de passe' maxlength='25' size='45' required/>
            </p>

            <p>
                <br />
                <input type='submit' class = 'btn-form2' name='formco' value="Se connecter" /> 
                <btn class="btn-form2"> <a href="inscription.php " class="gras btn btn-xl"> S'inscrire</a> </btn>
                <br />
            </p>   

            <?php

            if(isset($erreur))
            {
                echo $erreur;
            }
            else{

            }
            
            ?>

            <br />
            <br />
            

        </form>

            </div>
        </div>
    </div>

    <?php include("../footer.php"); ?>

    
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>