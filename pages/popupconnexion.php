<?php
include ("../../scripts/connexionPopup.php");
$error=0;
?>

<div class="backgroundOverlay" style="display: none;" id="backgroundOverlay">

    <div class="popup" id="popup">

        <h2 class="popupconnexionh2">Connexion</h2>
        <br/>

        <form class="popupconnexionformulaire" method="post">

            <p>
                <input class="popupconnexionchamp" type="text" id="pseudoco" name="pseudoco" placeholder="IDENTIFIANT" maxlength="25" size="45" required/>
            </p>

            <p>
                <input class="popupconnexionchamp" type="password" id="passco" name="passco" placeholder="MOT DE PASSE" maxlength="25" size="45" required/>
            </p>

            <p>
                <br/>
                <input type="submit" class="btn-form2" name="formco" id="formcobutton" value="SE CONNECTER"/>
                <br/>
            </p>

            <?php
            // Il faut trouver un moyen de se rendre compte que l'id et/ou le mdp sont incorrects
            if($error==0){
                include("../../model/redirect.php");
                //redirect(en absolu car le popup est sur des types de pages differents);
            }
            elseif($error==1){
                echo "<p>".$message."</p>";
            }
            ?>

            <center>
                <a href="../users/inscription.php" id="lieninscri">Pas encore inscrit?</a>
            </center>

        </form>

    </div>

</div>