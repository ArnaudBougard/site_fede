<!-- javascript pour le bouton connexion, faire apparaitre et disparaitre le div-->
<?php include ("../../controller/connexionPopup.php");?>

<div class="backgroundOverlay" style="display: none;" id="backgroundOverlay">

    <div class="popup" id="popup">

        <h2 class="popupconnexionh2">Connexion</h2>
        <br />

        <form class='popupconnexionformulaire' method='post' action=''>    

            <p>
                 <input class='popupconnexionchamp' type='text' id='pseudoco'  name='pseudoco' placeholder='Pseudo' maxlength='25' size='45' required />
            </p>
            <p>

                <input class='popupconnexionchamp' type='password' id='passco' name='passco' placeholder='Mot de passe' maxlength='25' size='45' required/>
            </p>
            <p>

                <br />
                <input type='submit' class = 'btn-form2' name='formco' value="Se connecter" />
                <br />
            </p>   

            <?php

            if(isset($erreur))
            {
                echo $erreur;
            }
            ?>
            <br />
            <br />
            <center>
                <a href='../users/inscription.php' id="lieninscri">Pas encore inscrit ? N'attendez plus !</a>
            </center>            
        </form>
    </div>

</div>