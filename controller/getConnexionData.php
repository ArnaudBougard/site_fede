<?php 
if(isset($_POST['formco'])){

    $pseudoco = htmlspecialchars($_POST['pseudoco']);
    $passco = sha1($_POST['passco']);
    $error=0;

    if(!empty($pseudoco) AND !empty($passco)){

        $requser = $bdd -> prepare('SELECT * FROM utilisateur WHERE pseudo_utilisateur = ? AND password_utilisateur = ?');
        $requser -> execute(array($pseudoco, $passco));
        $userexist = $requser->rowCount();

        if($userexist==1){

            $userinfo = $requser ->fetch();

            if($userinfo['statut_utilisateur']==1){
                                
                //On enregistre les variables de session
                $_SESSION['id_utilisateur'] = $userinfo['id_utilisateur'];
                $_SESSION['pseudo_utilisateur'] = $userinfo['pseudo_utilisateur'];
                $_SESSION['nom_utilisateur'] = $userinfo['nom_utilisateur'];
                $_SESSION['prenom_utilisateur'] = $userinfo['prenom_utilisateur'];
                $_SESSION['bapteme_utilisateur'] = $userinfo['bapteme_utilisateur'];
                $_SESSION['date_naissance_utilisateur'] = $userinfo['date_naissance_utilisateur'];
                $_SESSION['email_utilisateur'] = $userinfo['email_utilisateur'];
                $_SESSION['spam_utilisateur'] = $userinfo['spam_utilisateur'];
                $_SESSION['promotion_utilisateur'] = $userinfo['promotion_utilisateur'];
                $_SESSION['sexe_utilisateur'] = $userinfo['sexe_utilisateur'];
                $_SESSION['photo_utilisateur'] = $userinfo['photo_utilisateur'];
                $_SESSION['statut_utilisateur'] = $userinfo['statut_utilisateur'];

                //On redirige l'utilisateur soit sur son profil, soit sur l'accueil
                $location="../users/profil.php?id_utilisateur=".$_SESSION['id_utilisateur'];
                include("../../model/redirect.php");
                redirect($location);
                // Sur son profil, on transite par l'id : 
                //header("Location: profil.php?id_utilisateur=".$_SESSION['id_utilisateur']);

            }
            else{
                $error=1;
                $message = "Vous n'avez pas validé votre adresse mail, vérifiez vos mails (ainsi que vos spams)";
            }
        }
        else{
            $error=1;
            $message = "Identifiant ou mot de passe incorrect!";
        }
    }
    else{
        $error=1;
        $message = "<p>Tous les champs doivent être remplis!</p>";
    }

}
