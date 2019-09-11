<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- javascript du popup + le popup -->
<?php include("../popupconnexion.php"); ?>


<div  class="networkBar hidden-xs" >
  
    <ul class="networkul">
      
        <li style="font-weight: bold; float: left;padding-right: 1.5vw; color:white; font-size: 1.1vw" >Polytech NETWORK  </li>

         <li class="networkBarElement" > <a class="networkBarAnchor"  target="_blank" href="https://cerclephotovideofpms.wordpress.com/"> CPV</a>  </li>

        <li class="networkBarElement" > <a class="networkBarAnchor" target="_blank" href="http://www.the-games.be/"> The-Games</a></li>

        <li class="networkBarElement" > <a class="networkBarAnchor" target="_blank" href="https://historiquefpms.wordpress.com"> Commission Historique</a></li>
        <li class="networkBarElement" > <a class="networkBarAnchor" target="_blank" href="http://jde.fede-fpms.be/"> JDE</a></li>

        <li class="networkBarElement" > <a class="networkBarAnchor" target="_blank" href="https://magellan.fpms.ac.be/"> Magellan</a></li>

        <li class="networkBarElement" > <a class="networkBarAnchor" target="_blank" href="https://polytech-mons-alumni.be/accueil/"> AIMs</a></li>

        <li class="networkBarElement" > <a class="networkBarAnchor" target="_blank" href="https://www.facebook.com/groups/12209585370/"> Facebook</a></li>

       
        <?php 

         if(isset($_SESSION['id_utilisateur'])){ // On ferme l'accolade à la fin du code

             echo '<li class="networkBarElement rightElement" ><a class="networkBarAnchor" href="../users/deconnexion.php"> <span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>';


                            
             ?><li class="networkBarElement rightElement" ><a class="networkBarAnchor" href= "../users/profil.php?id_utilisateur= <?php echo $_SESSION["id_utilisateur"]; ?> "> <span class="glyphicon glyphicon-user" ></span>  <?php echo $_SESSION["pseudo_utilisateur"]; ?></a></li>




            <?php 

            function selectstatut($bdd,$mail_user) {

              ////////////////////////////////////////////////stock data into array
              // run query
              $query = $bdd->prepare("SELECT * FROM historique where tmp_mail=?");
              $query->execute(array($mail_user));
              $statut = $query->rowCount();
              
              return $statut;

              $query->closeCursor(); // Termine le traitement de la requête
            }

            $comitard=selectstatut($bdd,$_SESSION['email_utilisateur']);

            if($comitard!= NULL){ // On ferme l'accolade à la fin du code

            ?>
             <li class="networkBarElement rightElement" ><a class="networkBarAnchor" href= "../index/eventManager.php"> <span class="glyphicon glyphicon-bookmark" ></span> Mes événements</a></li>

              <?php
            }
        }
                                 
        else{

            echo '<li class="networkBarElement rightElement" ><a class="networkBarAnchor" href="#"   id="openOverlay"> <span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>';

            echo '<li class="networkBarElement rightElement"><a class="networkBarAnchor" href="../users/inscription.php"><span class="glyphicon glyphicon-pencil" ></span> Inscription</a></li>';
          }

        ?>

    </ul>



</div>

