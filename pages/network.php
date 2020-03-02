<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- javascript du popup + le popup -->
<?php include("../popupconnexion.php"); ?>

<?php include("../../model/userDAO.php"); ?>

<div  class="networkBar hidden-md hidden-sm hidden-xs" >
  
    <ul class="networkul">
      
        <li class="networkTitle">Polytech NETWORK</li>

        <li class="networkBarElement">
          <a class="networkBarAnchor"  target="_blank" href="https://cerclephotovideofpms.wordpress.com/">CPV</a>
        </li>

        <li class="networkBarElement">
          <a class="networkBarAnchor" target="_blank" href=" https://the-games.magellan.fpms.ac.be/">The-Games</a>
        </li>

        <li class="networkBarElement">
          <a class="networkBarAnchor" target="_blank" href="https://historiquefpms.wordpress.com">Commission Historique</a>
        </li>

        <li class="networkBarElement">
          <a class="networkBarAnchor" target="_blank" href="https://jde.polytech-mons-alumni.be/">JDE</a>
        </li>

        <li class="networkBarElement">
          <a class="networkBarAnchor" target="_blank" href="https://magellan.fpms.ac.be/">Magellan</a>
        </li>

        <li class="networkBarElement">
          <a class="networkBarAnchor" target="_blank" href="https://polytech-mons-alumni.be/accueil/">AIMs</a>
        </li>

        <li class="networkBarElement">
          <a class="networkBarAnchor" target="_blank" href="https://www.facebook.com/groups/12209585370/">Facebook</a>
        </li>

       
        <?php 


         if(isset($_SESSION['id_utilisateur'])){

              echo '<li class="networkBarElement rightElement" ><a class="networkBarAnchor" href="../users/deconnexion.php"> <span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>';
          
              ?>

              <li class="networkBarElement rightElement " >
                <div class="dropdown show ">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-user" ></span> <?php echo $_SESSION["pseudo_utilisateur"]; ?>
                  </a>

                  <div class="dropdown-menu networkDropdown" aria-labelledby="dropdownMenuLink" >
                    <ul class="list-unstyled">
                      <li><a class="dropdown-item" href= "../users/profil.php?id_utilisateur= <?php echo $_SESSION["id_utilisateur"]; ?> ">Mon Profil</a></li>


                      <?php
                        $comitard=is_comitard($bdd,$_SESSION['email_utilisateur']);

                        if($comitard!= NULL){ // On ferme l'accolade à la fin du code

                          ?>
                          <li class="" ><a class="networkBarAnchor dropdown-item" href= "../events/eventManager.php"> Mes événements</a></li>

                          <li class="" ><a class="networkBarAnchor dropdown-item" href= "../news/newsManager.php">Mes News</a></li>

                          
                          <?php
                          }
                        
                    
                      ?>

                    </ul>
                  </div>

                </div>
              </li>

              <?php

                $admin=is_admin($bdd,$_SESSION['email_utilisateur']);
                if($admin!= NULL){
                  ?>



                  <li class="networkBarElement rightElement " >
                    <div class="dropdown show">

                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-bookmark" ></span>Modération
                      </a>

                      <div class="dropdown-menu networkDropdown" aria-labelledby="dropdownMenuLink">
                        <ul class="list-unstyled">
                          <li class="" ><a class="networkBarAnchor dropdown-item" href= "../events/eventValidation.php">Events</a></li>
                          <li class="" ><a class="networkBarAnchor dropdown-item" href= "../news/newsValidation.php">News</a></li>
                          <!-- <li class="" ><a class="networkBarAnchor dropdown-item" href= "../action/actionValidation.php">  Actions</a></li> -->
                        </ul>
                      </div>

                    </div>
                  </li>
                  <?php 
                }

                $barman=is_barman($bdd,$_SESSION['email_utilisateur']);
                if($barman!= NULL){
                  ?>

                  <li class="networkBarElement rightElement " >
                    <div class="">

                      <a class="" href="../action/actionManager.php">
                        <span class="glyphicon glyphicon-bookmark" ></span> Action de la semaine
                      </a>
                    </div>
                  </li>
                  <?php 
                }

                $mutu=is_mutu($bdd,$_SESSION['email_utilisateur']);
                if($mutu!= NULL){
                  ?>
                  <li class="networkBarElement rightElement " >
                    <div class="">

                      <a class="" href="../mutu/horaireManager.php">
                        <span class="glyphicon glyphicon-bookmark" ></span>Horaire Mutu
                      </a>
                    </div>
                  </li>
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

