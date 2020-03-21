<?php
session_start();
include("../../controller/getConnexionData.php"); 

if(isset($_GET['id_utilisateur']) AND $_GET['id_utilisateur']>0){
    //On convertit en int ce que l'utilisateur pourrait rentrer dans l'adresse pour être sûr d'avoir qqch de la forme d'un id. 
    $getid = intval($_GET['id_utilisateur']);
    $requser = $bdd -> prepare('SELECT * FROM utilisateur WHERE id_utilisateur=?');
    $requser -> execute(array($getid));
    $userinfo = $requser -> fetch(); // On va chercher les infos pour pouvoir les afficher 
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
        <link href="./users.css" rel="stylesheet">
	</head>

	<body class="bg1">
		
		<?php 
        include("../network.php");
        include("../navbar.php"); 
        include("../sideBar.php");
        include ("../../controller/warningPopup.php");
        include ("./warningDeleteUser.php");
        ?>
        
        <div class="container" style="padding-top: 2rem; padding-bottom: 15rem;">

            <div class="row">

                <div class="col-md-7">

                    <div class="col-md-10 hidden-xs" style="padding-top: 6rem;">

                        <img class="logo" src='../../assets/img/logoFede.png' style="width:70%;display: block; margin: 0 auto;" alt='Logo du site'/>

                    </div>

                </div>

                <div class='col-md-5 inscription' style="float:left;">
                            
                    <h2>Profil de: <?= $userinfo['pseudo_utilisateur']?></h2> <br/> <br/>
                    <p>
                        Prénom : <?= $userinfo['prenom_utilisateur']; ?>
                        <br/><br/>
                        Nom : <?= $userinfo['nom_utilisateur']; ?>
                        <br/><br/>
                        Date de naissance : <?= $userinfo['date_naissance_utilisateur']; ?>
                        <br/><br/>
                        E-mail : <?= $userinfo['email_utilisateur']; ?>
                        <br/><br/>
                        Promotion : <?= $userinfo['promotion_utilisateur']; ?>
                        <br/><br/>
                        <!--Faudrait ajouter le nombre d'étoiles et le parcours à la fac ainsi que rajouter un isset pour ça et la promo pour ne les afficher que si l'utilisateur en a. #pas oublier les foss, rajouter une photo serait cool aussi -->

                        <?php
                        //Pour afficher un profil plus complet quand un utilisateur est en train de consulter son propre profil
                        if(isset($_SESSION['id_utilisateur']) AND $userinfo['id_utilisateur'] == $_SESSION['id_utilisateur'])
                        {

                        ?>

                        <ul style="list-style-type: none; padding-left: 0rem;">
                            <btn class="btn-form2" style="margin-right:5rem;"><a href="edition.php" class="gras btn btn-xl">Compléter</a></btn>
                            <btn class="btn-form2"><a href="#" onclick="showWarning('backgroundOverlay2','popup2')" id="openOverlay2" class="gras btn btn-xl">Supprimer</a></btn>
                        </ul>
                        <?php
                        }
                        ?>
                    
                    </p>

                </div>

            </div>

        </div>

    		<?php include("../footer.php"); ?>
                    
        </div>

	</body>

</html>

<?php
} 
?>