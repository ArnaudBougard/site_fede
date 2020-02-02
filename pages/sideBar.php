    <div class="hidden-xl hidden-lg ">

        <div  class="smnetwork">
          <button type="button" id="sidebarCollapse" class="btn smtoggle" style="margin-left: 20px;">
              <span class="glyphicon glyphicon-list"></span>
              <span>Menu</span>
          </button> 
         </div>
        

        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <a style="text-decoration: none; color:white;" href="../index/index.php"><h3>Navigation</h3> </a>
            </div>

            <ul class="list-unstyled components">
                

            <?php 
                if(isset($_SESSION['id_utilisateur'])){

                    echo '<li class=" " ><a class="" href="../users/deconnexion.php">  Déconnexion</a></li>';
                    echo '<li><a href= "../users/profil.php?id_utilisateur='.$_SESSION["id_utilisateur"].'" >Profil</a></li>';

                    $comitard=is_comitard($bdd,$_SESSION['email_utilisateur']);
                    if($comitard!= NULL){ // On ferme l'accolade à la fin du code

                        ?>
                        <li class="" ><a class="" href= "../events/eventManager.php"> Mes événements</a></li>

                        <li class="" ><a class="" href= "../news/newsManager.php">Mes news</a></li>


                        <?php
                      }

                    $admin=is_admin($bdd,$_SESSION['email_utilisateur']);
                    if($admin!= NULL){
                      ?>
                        <li class="" ><a class=" " href= "../events/eventValidation.php"> Events Validation</a></li>
                        <li class="" ><a class=" " href= "../news/newsValidation.php">  News Validation</a></li>
                              
                      <?php 
                    }

                    $barman=is_barman($bdd,$_SESSION['email_utilisateur']);
                    if($barman!= NULL){
                      ?>
                      <li class=" " ><a class="" href="../action/actionManager.php">Action de la semaine</a></li>
                      <?php 
                    }

                    $mutu=is_mutu($bdd,$_SESSION['email_utilisateur']);
                    if($mutu!= NULL){
                      ?>
                      <li class="" > <a class="" href="../mutu/horaireManager.php"> Horaire Mutu</a> </li>
                      <?php 
                    }

                }

                else
                {
                    echo '<li class=" " ><a class="" href="../users/connexion.php" ">  Connexion</a></li>';

                    echo '<li class=" "><a class="" href="../users/inscription.php"> Inscription</a></li>';
                }

                 
              ?>

            </ul>



            <ul class="list-unstyled components">
                <li class="active"><a <?php if($page == "index/index.php" or $page == "index/"){echo 'class="active"';} ?> href="../index/index.php">Accueil</a></li>
                
                <li>

                    <a 
                    <?php 
                    if($page == "federale/apropos.php" or $page == "federale/adhesion.php" or $page == "federale/statuts.php" 
                        or $page == "federale/pv.php" or $page == "federale/commissions.php"){
                            echo 'class="active"';} ?> 
                    href="#fedeSubmenu" data-toggle="collapse" aria-expanded="false">
                        La Fédérale
                    </a>
                    <ul class="collapse list-unstyled submenu" id="fedeSubmenu">
                        <li class=""><a href="../federale/apropos.php">Qui sommes-nous ?</a></li>
                        <li  class=""><a href="../federale/adhesion.php">Adhésion</a></li>
                        <li class=""><a href="../federale/statuts.php">Statuts</a></li>
                        <li class=""><a href="../federale/pv.php">PV réunions</a></li>
                        <li class=""><a href="../federale/commissions.php">Commissions</a></li>
                    </ul>
                </li>
                <li >
                    <a <?php if($page == "folklore/fetes.php" or $page == "folklore/regionales.php" or $page == "folklore/bleusaille.php"
                    or $page == "folklore/chants.php" ){
                        echo 'class="active"'
                        ;} ?> 
                        href="#folkSubmenu" data-toggle="collapse" aria-expanded="false">
                            Folklore
                    </a>
                    <ul class="collapse list-unstyled submenu" id="folkSubmenu">
                        <li class=""><a href="../folklore/fetes.php">Les Fêtes</a></li>
                        <li class=""><a href="../folklore/regionales.php">Régionales</a></li>
                        <li class=""><a href="../folklore/bleusaille.php">Bleusaille</a></li>
                        <li class=""><a href="../folklore/chants.php">Chants</a></li>
                    </ul>
                </li>
                <li >
                    <a <?php if($page == "cercles/indexcercles.php" or $page == "cercles/cercles.php?id=openBar" or $page == "cercles/cercles.php?id=openCap" or $page == "cercles/cercles.php?id=openCpv" or $page == "cercles/cercles.php?id=openCulture" or $page == "cercles/cercles.php?id=openMagellan" or $page == "cercles/cercles.php?id=openMm" or $page == "cercles/cercles.php?id=openMutu" or $page == "cercles/cercles.php?id=openPeyresq" or $page == "cercles/cercles.php?id=openRadio" or $page == "cercles/cercles.php?id=openScientifique" or $page == "cercles/cercles.php?id=openSdm" or $page == "cercles/cercles.php?id=openSports" ){echo 'class="active"';} ?> href="#cercleSubmenu" data-toggle="collapse" aria-expanded="false">Cercles</a>
                    <ul class="collapse list-unstyled submenu" id="cercleSubmenu">
                        <li class=""><a href="../cercles/cercles.php?id=openBar">Le Bar Polytech</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openCap">La C.A.P.</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openCpv">Le C.P.V.</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openCulture">Le Cercle Culturel</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openMagellan">Le Magellan</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openMm">Le Mons-Mines</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openMutu">La Mutu</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openPeyresq">Peyresq</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openRadio">Radio Extra</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openScientifique">Le Scientifique</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openSdm">Sono-Danse-Musique</a></li>
                        <li class=""><a href="../cercles/cercles.php?id=openSports">Les Sports</a></li>
                    </ul>
                </li>
             
                <li >
                    <a <?php if($page == "activites/game.php" or $page == "activites/voyageQ.php" or $page == "activites/ski.php" or $page == "activites/peyresq.php" or $page == "activites/isw.php"){echo 'class="active"';} ?> href="#actiSubmenu" data-toggle="collapse" aria-expanded="false">Événements majeurs</a>
                    <ul class="collapse list-unstyled submenu" id="actiSubmenu">

                        <li class=""><a href="../activites/isw.php">International Student Week</a></li>
                        <li class=""><a href="../activites/game.php">Le Game: LAN Party</a></li>
                        <li class=""><a href="../activites/voyageQ.php">Voyage Q</a></li>
                        <li class=""><a href="../activites/ski.php">Séjour au Ski</a></li>
                        <li class=""><a href="../activites/peyresq.php">Peyresq</a></li>
                    </ul>
                </li>
                
                <li><a <?php if($page == "contact/contact.php"){echo 'class="active"';} ?> href="../contact/contact.php">Contact</a></li>
            </ul>



            <ul class="list-unstyled components">
                
                <li>
                    <a href="#lienSubmenu" data-toggle="collapse" aria-expanded="false">Polytech Network</a>
                        <ul class="collapse list-unstyled" id="lienSubmenu">
      
                            <li class="" > <a class=""  target="_blank" href="https://cerclephotovideofpms.wordpress.com/"> CPV</a>  </li>

                            <li class="" > <a class="" target="_blank" href=" https://the-games.magellan.fpms.ac.be/"> The-Games</a></li>

                            <li class="" > <a class="" target="_blank" href="https://historiquefpms.wordpress.com"> Commission Historique</a></li>
                            <li class="" > <a class="" target="_blank" href="https://jde.polytech-mons-alumni.be/"> JDE</a></li>

                            <li class="" > <a class="" target="_blank" href="https://magellan.fpms.ac.be/"> Magellan</a></li>

                            <li class="" > <a class="" target="_blank" href="https://polytech-mons-alumni.be/accueil/"> AIMs</a></li>

                            <li class="" > <a class="" target="_blank" href="https://www.facebook.com/groups/12209585370/"> Facebook</a></li>
                        </ul>
                      </div>

                    </div>

                   
                </li>
            </ul>
        </nav>
    </div>

    <div class ="overlay" id="overlay"></div>


    